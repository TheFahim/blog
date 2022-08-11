<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogAll = Blog::orderBy('id', 'desc')->get();
        $blogs = Blog::latest()->paginate(6);
        return view('backend.blogs.index',compact('blogs'));
    }

    public function create()
    {
        return view('backend.blogs.create');
    }

    public function store(BlogRequest $request,Blog $blog)
    {
        if($file=$request->file('image')){
            $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
            $file->move(storage_path('app/public/donatebook'),$filename);
        }
        try{
            $blog = new Blog();
            $blog->title = $request->input('title');
            $blog->slug = $request->input('slug');
            $blog->description = $request->input('description');
            $blog->image = $request->input('image');
            $blog->save();
            return redirect()->route('blogs.index')->withMessage('Successfully Created');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function show($blogId)
    {  
     $blog=Blog::findOrFail($blogId);
     return view('backend.blogs.show',compact('blog'));  
    }
    public function edit($blogId) {
        $blog = Blog::findOrFail($blogId);
        return view('backend.blogs.edit', compact('blog'));
    }
    public function update(BlogRequest $request, $blogId) {
        if($file=$request->file('image')){
            $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
            $file->move(storage_path('app/public/donatebook'),$filename);
        }
        $blog = Blog::findOrFail($blogId);
        $blog->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'image' => $request->image,
        ]);
        return redirect()->route('blogs.index')->withMessage('Successfully Updated');
    }
    public function destroy($blogId) {
        $blog = Blog::findOrFail($blogId);
        $blog->delete();
        return redirect()->route('blogs.index')->withMessage('Successfully Deleted');
    }
    public function blogs(){
        $blogs = Blog::latest()->paginate(6);
        return view('frontend.more_page.blogs',compact('blogs'));
    }
}
