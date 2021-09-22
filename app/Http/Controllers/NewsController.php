<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id', 'desc')->paginate(10);

        return view('newsIndex', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {

        return view('newsShow', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }



    public function indexAdmin()
    {
        $news = News::orderBy('created_at', 'desc')->paginate();
        return view('admin.news.index', compact('news'));
    }

    // create form
    public function createAdmin()
    {
        return view('admin.news.createOrUpdate');
    }


    // insert into database
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image      = $request->file('image')->store('public');
            $data['image'] = $image;

        }

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', __('messages.comment-send-success'));
    }

    //show edit form
    public function editAdmin(News $news)
    {
        return view('admin.news.createOrUpdate', compact('news'));
    }

    // update
    public function updateAdmin(Request $request, Blog $blog)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $image      = $request->file('image')->store('public');
            $data['image'] = $image;
        }


        $news->update($data);

        return redirect()->route('admin.news.index')->with('success', 'ok');
    }

    //delete
    public function destroyAdmin(News $news)
    {
        $news->delete();

        return redirect()->route('admin.news.index')->with('success', Lang::get('messages.deleted'));
    }
}
