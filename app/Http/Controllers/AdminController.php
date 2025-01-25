<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

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
        $packdetails = DB::table('package_details')->get();
        return view("admin/packageDetail", compact('packdetails'));
    }
    public function packageDetailsave(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'title'       => 'required',
            'location'    => 'required',
            'pac_duration' => 'required|numeric|min:1',
            'content'     => 'required|array', // Ensure 'content' is an array
            'content.*'   => 'required', // Validate each content item is required
            'image1'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image2'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image3'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image4'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image5'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'slug_name' => 'required',
        ]);


        $imagePaths = [];

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
        $description_string = '';

        if (!empty($validatedData['content'])) {
            foreach ($validatedData['content'] as $description) {
                $description_string .= $description . '<br/>';
            }
        }


        DB::table('package_details')->insert([
            'title'         => $validatedData['title'],
            'location'           => $validatedData['location'],
            'days'   => $package_duration,
            'slug_name'          => $validatedData['slug_name'],
            'content'        => $description_string,
            'image1'             => $imagePaths['image1'],
            'image2'             => $imagePaths['image2'],
            'image3'             => $imagePaths['image3'],
            'image4'             => $imagePaths['image4'],
            'image5'             => $imagePaths['image5'],
            'created_at' => now(),
            'updated_at' => now(),

        ]);


        return redirect()->route('packageDetail')->with('success', 'Package Details added successfully');
    }
}
