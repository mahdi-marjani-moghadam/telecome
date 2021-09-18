<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }












    public function indexAdmin()
    {

        //        $blog = Blog::all(); // elequent orm

        $blog = Blog::orderBy('created_at', 'desc')->paginate();
        //        dd($blog);
        //        dd($blog);

        return view('admin.blog.index', compact('blog'));
    }

    // create form
    public function createAdmin()
    {

        return view('admin.blog.createOrUpdate');
    }


    // insert into database
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'rate' => 'required',
            'name' => 'required',
            'comment' => 'required'
        ]);

        $data = $request->all();


        Blog::create($data);

        return redirect()->back()->with('success', __('messages.comment-send-success'));

    }

    //show edit form
    public function editAdmin(Blog $blog)
    {

        return view('admin.comment.edit', compact('blog'));
    }

    // update
    public function updateAdmin(Request $request, Blog $blog)
    {

        $blog->update($request->all());

        return redirect()->route('comment.index')->with('success', 'ok');
    }

    //delete
    public function destroyAdmin(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('comment.index')->with('success', Lang::get('messages.deleted'));
    }

}
