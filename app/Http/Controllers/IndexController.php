<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index(){

        //todo banner
        $banners = array('/tt/banner.jpg','/tt/banner2.jpg');

        //todo new
        $news = array(
            array('id'=>1,'title'=>'news1','description'=>'test'),
            array('id'=>2,'title'=>'news2','description'=>'test')
        );

        //todo blog
        $blogs = array(
            array('id'=>1,'title'=>'news1','description'=>'test'),
            array('id'=>2,'title'=>'news2','description'=>'test')
        );


        return view('index',compact('news','banners','blogs') );
    }


    public function indexAdmin()
    {
        return view('admin.index');
    }
}
