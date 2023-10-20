<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:100000',
            'image' => 'required|mimes:png',
        ]);

        $name = $validated['name'];
        $description = $validated['description'];
        $price = $validated['price'];
        $image = null;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $image = $filename;
        }

        return view('show', compact('name', 'description', 'price', 'image'));
    }
}
