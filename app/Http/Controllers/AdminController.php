<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Models\Common;

class AdminController extends Controller
{
    // For View Login Page
    public function login()
    {
        return view('admin/login');
    }

    // For Getting Data from Login Page
    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('admin.login')->with('error', 'Invalid email or password.');
    }

    // For Display Dashboard
    public function dashboard()
    {
        return view("admin/dashboard");
    }

    // For Logout
    public function signout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login');
    }
    public function update_status(Request $request)
    {
        //dd($request->all());
        // exit;
        $id_value = $request->input('id_value');
        $tableName = $request->input('tableName');
        $status_value = $request->input('status_value');

        if ($status_value == 1) {
            $data_update = array(
                'status'     => 0,
                'updated_at' => date('Y-m-d H:i:s')
            );
        } else {
            $data_update = array(
                'status' => 1,
            );
        }
        $commonModel = new Common();
        $update = $commonModel->update_status($tableName, $id_value, $data_update);
        if ($update) {
            $response = array('status' => 'success');
            echo json_encode($response);
        }
    }

    // For Textarea Editor File Upload
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME) . '_' . time() . '.' . $request->file('upload')->getClientOriginalExtension();
            $request->file('upload')->move(public_path('image'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('image/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        } else {
            echo "<script>alert('File upload failed');</script>";
        }
    }

    // For Blog Details View
    public function blogdetails(Request $request)
    {
        $blogdetails = DB::table('blogdetails')->get();
        return view("admin/blogdetails", compact('blogdetails'));
    }

    // For Saving Blog Details
    public function blogdetailssave(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'title'            => 'required',
            'date'             => 'required',
            'keywords'         => 'required',
            'contentdata1'     => 'required',
            'image'            => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'slug_name'        => 'required',
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('Blogdetails'), $imageName);
            $validatedData['image'] = $imageName;
        }


        DB::table('blogdetails')->insert([
            'blog_title'         => $validatedData['title'],
            'publish_date'       => $validatedData['date'],
            'keywords'           => $validatedData['keywords'],
            'slug_name'          => $validatedData['slug_name'],
            'description'        => $validatedData['contentdata1'],
            'image'              => $validatedData['image'],
        ]);

        return redirect()->route('blogdetails')->with('success', 'Blog Details created successfully');
    }
    public function blog_details_edit($id)
    {
        $decryptedId = Crypt::decrypt($id);
        //dd($decryptedId);
        $data = DB::table('blogdetails', $decryptedId)->first();
        //dd($data);
        return view('admin/edit_blog_details', compact('data'));
    }

    public function blogdetailupdate(Request $request)

    {
        //dd($request->all());
        $id = $request->input('blogdetails_id');

        // Fetch the existing record directly from the database
        $data = DB::table('blogdetails')->where('blogdetails_id', $id)->first();

        if (!$data) {
            abort(404, 'Blog details not found.');
        }

        // Prepare the data for updating
        $updatedData = [
            'blog_title'   => $request->input('blog_title'),
            'publish_date' => $request->input('date'),
            'keywords'     => $request->input('keywords'),
            'description'  => $request->input('content'), // Use 'content' instead of 'contentdata1'
        ];

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('Blogdetails'), $imageName);
            $updatedData['image'] = $imageName;
        }

        // Update the record in the database
        DB::table('blogdetails')->where('blogdetails_id', $id)->update($updatedData);


        return redirect()->route('blogdetails')->with('update', 'Blog Details update successfully');
    }
    public function packageDetails(Request $request)
    {
        $package_city = DB::table('package_city')->get();
        $packdetails = DB::table('package_details')->get();
        $packdetailsContents = DB::table('package_details_content')
            ->get();
        return view("admin/packageDetail", compact('package_city', 'packdetails', 'packdetailsContents'));
    }
    public function packageDetailsave(Request $request)
    {
        //dd($request->all());
        // Validate the request data
        $validatedData = $request->validate([
            'city_id' => 'required',
            'title'       => 'required',
            'location'    => 'required',
            'pac_duration' => 'required|numeric|min:1',
            'content'     => 'required|array',
            'content.*'   => 'required',
            'image1'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image2'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image3'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image4'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image5'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'slug_name' => 'required',
        ]);

        $imagePaths = [];

        // Handle image uploads
        for ($i = 1; $i <= 5; $i++) {
            $imageKey = "image" . $i;
            if ($request->hasFile($imageKey)) {
                $image = $request->file($imageKey);
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('PackageImage'), $imageName);
                $imagePaths[$imageKey] =  $imageName;
            } else {
                $imagePaths[$imageKey] =  null;
            }
        }

        $package_duration = $validatedData['pac_duration'];

        // Insert data and get the insert ID
        $packageDetailsId = DB::table('package_details')->insertGetId([
            'package_city_id'         => $validatedData['city_id'],
            'title'         => $validatedData['title'],
            'location'           => $validatedData['location'],
            'days'   => $package_duration,
            'slug_name'          => $validatedData['slug_name'],
            'image1'             => $imagePaths['image1'],
            'image2'             => $imagePaths['image2'],
            'image3'             => $imagePaths['image3'],
            'image4'             => $imagePaths['image4'],
            'image5'             => $imagePaths['image5'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Insert content into the package_details_content table
        foreach ($validatedData['content'] as $content) {
            DB::table('package_details_content')->insert([
                'package_details_id' => $packageDetailsId,
                'contents'            => $content,
                'created_at'         => now(),
                'updated_at'         => now(),
            ]);
        }


        return redirect()->route('packageDetails')->with('success', 'Package Details added successfully');
    }

    public function package_details_edit(Request $req, $id)
    {
        $decryptedId = Crypt::decrypt($id);
        //dd($decryptedId);
        $package_city = DB::table('package_city', $decryptedId)->get();
        $packdetails = DB::table('package_details', $decryptedId)->first();
        $packdetailsContents = DB::table('package_details_content')
            ->where('package_details_id', $decryptedId)
            ->get();
        //dd($packdetailsContents);
        return view('admin/edit_package_details', compact('package_city', 'packdetails', 'packdetailsContents'));
    }
    public function packageDetailsupdate(Request $request)
    {
        //dd($request->all());
        // Validate the request data
        $validatedData = $request->validate([
            'package_details_id' => 'required|exists:package_details',
            'city_id'              => 'required',
            'title'              => 'required',
            'slug_name'          => 'required',
            'location'           => 'required',
            'pac_duration'       => 'required|numeric|min:1',
            'content'            => 'required|array',
            'content.*'          => 'required',
            'image1'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image2'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image3'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image4'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image5'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $packageId = $validatedData['package_details_id'];

        $imagePaths = [];

        // Handle image updates
        for ($i = 1; $i <= 5; $i++) {
            $imageKey = "image" . $i;
            $oldImageKey = "old_image" . $i;

            if ($request->hasFile($imageKey)) {
                $image = $request->file($imageKey);
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('PackageImage'), $imageName);

                // Store new image path
                $imagePaths[$imageKey] = $imageName;

                // Delete old image if it exists
                if (!empty($request->$oldImageKey) && file_exists(public_path('PackageImage/' . $request->$oldImageKey))) {
                    unlink(public_path('PackageImage/' . $request->$oldImageKey));
                }
            } else {
                // Keep the old image if no new image is uploaded
                $imagePaths[$imageKey] = $request->$oldImageKey;
            }
        }

        // Update package details in the database
        DB::table('package_details')
            ->where('package_details_id', $packageId)
            ->update([
                'package_city_id'         => $validatedData['city_id'],
                'title'         => $validatedData['title'],
                'location'      => $validatedData['location'],
                'days'          => $validatedData['pac_duration'],
                'slug_name'     => $validatedData['slug_name'],
                'image1'        => $imagePaths['image1'],
                'image2'        => $imagePaths['image2'],
                'image3'        => $imagePaths['image3'],
                'image4'        => $imagePaths['image4'],
                'image5'        => $imagePaths['image5'],
                'updated_at'    => now(),
            ]);

        // Update package content
        DB::table('package_details_content')
            ->where('package_details_id', $packageId)
            ->delete();

        foreach ($validatedData['content'] as $content) {
            DB::table('package_details_content')->insert([
                'package_details_id' => $packageId,
                'contents'           => $content,
                'created_at'         => now(),
                'updated_at'         => now(),
            ]);
        }

        return redirect()->route('packageDetails')->with('success', 'Package Details updated successfully');
    }
}
