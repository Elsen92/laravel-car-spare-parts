<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oil;


class OilController extends Controller
{
    public function index()
    {
        $oils = Oil::all();
        return view('front.oils.index', compact('oils'));
    }
}
