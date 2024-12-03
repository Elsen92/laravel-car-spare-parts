<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Oil;

class OilController extends Controller
{
    public function index()
    {
        $oils = Oil::all();
        return view('admin.oils.index', compact('oils'));
    }

    public  function create()
    {
        return view('admin.oils.create');
    }

    public function store(Request $request)
    {
        $validated  = $request->validate([
            'brand' => 'required|string|max:255',
            'volume' => 'required|numeric',
            'type' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'price'=> 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request -> hasFile('image')) {
            $imagePath = $request -> file('image') -> store('images','public');
            $validated['image'] = $imagePath;
        }

        Oil::create($validated);

        return redirect()->route('admin.oils.index')->with('success', 'Oil created successfully.');
    }

    public function destroy( Oil $Oil)
    {

        if ($Oil -> image) {
            $imagePath= storage_path('app/public/' . $Oil->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $Oil->delete();
        return redirect()->route('admin.oils.index')->with('success', 'Oil deleted successfully.');
    }

    public function search(Request $request)
    {
        $query = Oil::query();

        if ($request->has('brand')){
            $query->where('brand','like','%' . $request->get('brand') . '%');
        }

        if ($request->has('volume')){
            $query->where('volume',$request->volume);
        }

        if ($request->has('type')){
            $query->where('type','like', '%' .$request->type . '%');
        }

        if ($request->has('color')){
            $query->where('color', 'like', '%' . $request->color . '%');
        }

        $oils = $query->get();


        return view('front.search-results', compact('oils'));
    }

    public function show($id)
    {
        $oil = Oil::findOrFail($id);

        return view('front.oil-details', compact('oil'));
    }

}
