<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\News;

class IndexController extends Controller
{
    public function index(){

        // news
        $news = News::limit(2)->get();


        // blog
        $blogs = Blog::limit(3)->get();

        return view('index',compact('news','blogs') );
    }


    public function indexAdmin()
    {
        return view('admin.dashboard');
    }
}
