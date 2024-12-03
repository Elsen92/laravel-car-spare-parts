<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('admin.blogs.index',compact('blogs'));
    }

    public function create(){
        return view('admin.blogs.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|required|max:2048',
        ]);

        $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('images','public');
        }

        Blog::create([
            'title'=>$request->title,
            'content'=>$request->input('content'),
            'slug' => Str::slug($request->title) . '-' . uniqid(),
            'image'=>$imagePath,
        ]);
        return redirect()->route('admin.blogs.index')->with('success','Blog created successfully');
    }

    public function show(Blog $blog){


        return view('front.blog.show',compact('blog'));
    }

    public function edit(Blog $blog){
        return view('admin.blogs.edit',compact('blog'));
    }

    public function update(Request $request, Blog $blog){
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
        ]);

        $imagePath = $blog->image;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('images','public');
        }

        $blog->update([
            'title'=>$request->title,
            'content'=>$request->input('content'),
            'slug' => Str::slug($request->title) . '-' . uniqid(),
            'image'=>$imagePath,
        ]);

        return redirect()->route('admin.blogs.index')->with('success','Blog updated successfully');
    }

    public function destroy(Blog $blog){
        if ($blog->image){
            \Storage::delete('public/' . $blog->image);
        }
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success','Blog deleted successfully');
    }

}
