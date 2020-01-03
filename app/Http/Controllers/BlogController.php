<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('blogs.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Blog $blog)
    {
        $input = $request->all();

//        meta stuff

        $input['slug'] = str_slug($request->title);
        $input['meta_title']=str_limit($request->title,55);
        $input['meta_description']=str_limit($request->body,155);

        if ($file=$request->file('featured_image')) {
            $name = uniqid() . $file->getClientOriginalName();
            $file->move('images/featured_images/',$name);
            $input['featured_image'] = $name;
        }

        $blogs=$blog->create($input);
        if ($blogs) {
            if ($request->category_id) {
                $blogs->category()->sync($request->category_id);
        }
            return redirect('/blog');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        $blog = Blog::FindOrFail($blog);
        return view('blogs.show',compact('blog'));
           

    }

    /**
     * Show the form for editing the specified resource.
     *\
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($blog)
    {
        $categories = Category::latest()->get();

        $blog = Blog::FindOrFail($blog);

        $bc = array();
        foreach ($blog->category as $c) {
            $bc[]=$c->id-1;
        }

        $filtered = array_except($categories, $bc);
        return view('blogs.edit', compact('blog','categories','filtered'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$blog)
    {
        $input = $request->all();
        $blog = Blog::FindOrFail($blog);
        $blog->update($input);
        if ($request->category_id) {
            $blog->category()->sync($request->category_id);
        }
        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog)
    {
        $blog = Blog::FindOrFail($blog);

        if ($blog->delete()) {
            return redirect('/blog');
        }
    }

    public function trash()
    {
        $trashedBlogs = Blog::onlyTrashed()->get();
        return view('blogs.trash',compact('trashedBlogs'));

    }

    public function restore($id)
    {
        $restoredBlogs=Blog::onlyTrashed()->findOrFail($id);
        $restoredBlogs->restore($restoredBlogs);
        return redirect('blog');
    }

    public function permanentDelete($id)
    {
        $permanentDeleteBlog=Blog::onlyTrashed()->findOrFail($id);
        $permanentDeleteBlog->forceDelete($permanentDeleteBlog);
        return back();


       }
}
