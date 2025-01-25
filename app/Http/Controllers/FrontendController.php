<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $blog_details = DB::table('blogdetails')->where('status', 1)->get();
        //dd($blog_details);

        return view('index', compact('blog_details'));
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
        return view('package');
    }
    public function contact()
    {
        return view('contact');
    }
}
