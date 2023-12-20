<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.products.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = 'uploads';
    
        // Check if a file is uploaded
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);
            $gambarPath = $path . '/' . $fileName;
        } else {
            // Jika tidak ada file yang diunggah, atur $gambarPath menjadi null atau sesuai kebutuhan
            $gambarPath = null;
        }
    
        product::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath, // Gunakan $gambarPath yang sudah diatur
        ]);
    
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $data = Product::where('id', $id)->first();
        return view('admin.products.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $path = 'uploads';
    
        // Check if a file is uploaded
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);
            $gambarPath = $path . '/' . $fileName;
        } else {
            // Jika tidak ada file yang diunggah, atur $gambarPath menjadi null atau sesuai kebutuhan
            $gambarPath = null;
        }
    
        $data = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
        ];
    
        // Hanya atur 'gambar' jika file diunggah
        if ($gambarPath !== null) {
            $data['gambar'] = $gambarPath;
        }
    
        Product::where('id', $id)->update($data);
    
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('products.index');
    }
    
}
