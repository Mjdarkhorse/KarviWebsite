<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $blog_details = DB::table('blogdetails')->where('status', 1)->get();
        $packages_tour = DB::table('package_details')->where('status', 1)->get();
        $city = DB::table('package_city')->get();
        //dd($city);

        return view('index', compact('blog_details', 'packages_tour', 'city'));
    }
    public function blogs()
    {
        $blog = DB::table('blogdetails')->where('status', 1)->get();
        return view('blogs', compact('blog'));
    }
    public function blog_details($slug_name)
    {
        $blog_details = DB::table('blogdetails')->where('slug_name', $slug_name)->first();
        $latest_blogs = DB::table('blogdetails')->orderBy('publish_date', 'desc')->limit(3)->get();
        return view('blog-details', compact('blog_details', 'latest_blogs'));
    }
    public function about_us()
    {
        return view('about');
    }
    public function destination_tour()
    {
        return view('tour');
    }
    public function packages_tour()
    {
        $packages_tour = DB::table('package_details')->where('status', 1)->get();


        return view('package', compact('packages_tour'));
    }
    public function packages_tour_details($slug_name, $id)
    {
        //dd($slug_name, $id);
        $packages_tour = DB::table('package_details')->where('status', 1)->get();
        $packages = DB::table('package_details')
            ->where('slug_name', $slug_name)
            ->where('package_details_id', $id)
            ->first();
        //dd($packages);
        $packages_content = DB::table('package_details_content')->where('package_details_id', $id)->get();
        return view('dooars-tour', compact('packages_tour', 'packages', 'packages_content'));
    }

    public function contact()
    {
        return view('contact');
    }
    public function city(Request $req, $id)
    {
        //dd($req->all());
        $decryptedId = decrypt($id);
        $cityName = DB::table('package_city')->where('package_city_id', $decryptedId)->value('city_name');

        // Fetch the packages for the selected city
        $packages_tour = DB::table('package_details')
            ->where('status', 1)
            ->where('package_city_id', $decryptedId)
            ->get();

        return view('bhutan', compact('packages_tour', 'cityName'));
    }
}
