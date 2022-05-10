<?php

namespace App\Http\Controllers;
use App\Models\Lcf_catalog;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'nom_jeu' => 'required|max:50',
            'description' => 'required',
            'prix' => 'required|gt:0',
            'genre' => 'required',
            'stock' => 'required|gt:0',
        ]);
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs(
            'public/assets', $name
        );
        $validated['image']=$name;
        Lcf_catalog::create($validated);
        return redirect('catalogue');
    }
}
