<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Oil;
use App\Models\SparePart;





class FrontController extends Controller
{
    public  function index()
    {
        $oils = Oil::latest()->take(4)->get();
        $spareParts = SparePart::latest()->take(4)->get();
        $blogs = Blog::latest()->take(4)->get();

        return view('front.index',compact('oils','spareParts','blogs'));
    }

    public  function blog()
    {
        $blogs = Blog::all();
        return view('front.blog.blog',compact('blogs'));
    }

    public function ehtiyyatHisseleri()
    {
        $spareParts= SparePart::all();

        return view('front.ehtiyyat_hisseleri.index',compact('spareParts'));
    }

    public function oils()
    {
        $oils = Oil::all();
        return view('front.oils.index',compact('oils'));
    }

    public function about()
    {
        return view('front.about.index');
    }

    public function faq()
    {
        return view('front.faq.index');
    }
}
