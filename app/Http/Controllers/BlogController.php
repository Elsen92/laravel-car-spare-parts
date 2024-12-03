<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class BlogController extends Controller
{
    public function show($id) {
        $blog = Blog::findOrFail($id);
        return view('front.blog.show', compact('blog'));
    }
}
