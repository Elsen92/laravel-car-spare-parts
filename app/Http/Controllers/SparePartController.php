<?php

namespace App\Http\Controllers;

use App\Models\SparePart;
use Illuminate\Http\Request;

class SparePartController extends Controller
{
    public function index()
    {
        $spareParts= SparePart::all();
        return view('front.ehtiyyat_hisseleri.index', compact('spareParts'));
    }
}
