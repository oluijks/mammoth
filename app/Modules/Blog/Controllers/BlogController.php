<?php

/**
 * Blog Controller
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Modules\Blog\Controllers;

use Illuminate\Http\Request;

use Mammoth\Modules\Blog\Models\Blog;
use Mammoth\Http\Requests;
use Mammoth\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('Blog::index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Blog::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        return view('Blog::show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('Blog::edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}