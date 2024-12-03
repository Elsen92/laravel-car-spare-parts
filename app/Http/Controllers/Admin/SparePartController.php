<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use App\Models\SparePart;
use Illuminate\Http\Request;

class SparePartController extends Controller
{
    public function index()
    {
        $spareParts = SparePart::all();
        return view('admin.spare_parts.index', compact('spareParts'));
    }

    public function create()
    {
        return view('admin.spare_parts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'car_model' => 'required|string|max:255',
            'product_code' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('storage/', 'public');

        SparePart::create([
            'name' => $request->name,
            'car_model' => $request->car_model,
            'product_code' => $request->product_code,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.spare_parts.index')->with('success', 'Ehtiyat hissəsi uğurla əlavə olundu');
    }

    public function edit(SparePart $sparePart)
    {
        return view('admin.spare_parts.edit', compact('sparePart'));
    }

    public function update(Request $request, SparePart $sparePart)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'car_model' => 'required|string|max:255',
            'product_code' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('spare_parts', 'public');
            $sparePart->update([
                'name' => $request->name,
                'car_model' => $request->car_model,
                'product_code' => $request->product_code,
                'price' => $request->price,
                'image' => $imagePath,
            ]);
        } else {
            $sparePart->update([
                'name' => $request->name,
                'car_model' => $request->car_model,
                'product_code' => $request->product_code,
                'price' => $request->price,
            ]);
        }

        return redirect()->route('admin.spare_parts.index')->with('success', 'Ehtiyat hissəsi uğurla yeniləndi');
    }

    public function destroy(SparePart $sparePart)
    {
        $sparePart->delete();
        return redirect()->route('admin.spare_parts.index')->with('success', 'Ehtiyat hissəsi uğurla silindi');
    }
}

