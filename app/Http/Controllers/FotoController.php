<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use Illuminate\Support\Str;

class FotoController extends Controller
{ 

    public function index()
    {
        $fotos = Foto::all();
        return view('admin.fotos.index', [
            'foto' => $fotos
        ]);
    }

    public function create()
    {
        return view('admin.fotos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'path_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('path_foto');
        $path = $file->store('fotos', 'public');

        Foto::create([
            'id_foto' => Str::uuid(),
            'path_foto' => $path,
        ]);

        return redirect()->route('fotos.index')->with('success', 'Foto berhasil diunggah!');
    }

}