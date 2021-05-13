<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller 
{
    /**
     * Show the form to create a new blog post.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate and store the blog post...
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'title' => 'required|unique:posts|max:3000',
        'body' => 'required',
        'url' => 'required', 
        $action = new StoreNewSites((object)$request->all()) ]) 

      // $validatedData = $request->validate([
        //    'title' => ['required', 'unique:posts', 'max:255'],
        //    'body' => ['required'],
        ;
        
        //return redirect('/CRUD/create'); 
        //->with(['/' => 'The Sites “'.$sites->$action->results->title,$sites->url, $sites->description,
        // $sites->body, $sites->sitemapxml,
        //' was added.']);
        // The blog post is valid... 
    

