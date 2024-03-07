<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::orderBy('id', 'desc')->get();
        return view('buku.index', [
            'buku' => $buku
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'kode' => 'required|unique:buku',
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'penerbit' => 'required',
        ];

        $message = [
            'required' => ':attribute harus diisi',
        ];

        $validatedData = $request->validate($rules, $message);

        Buku::create($validatedData);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('buku.edit', [
            'buku' => $buku
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $rules = [
            'kode' => 'required',
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'penerbit' => 'required',
        ];

        $message = [
            'required' => ':attribute harus diisi',
        ];

        $validatedData = $request->validate($rules, $message);

        $buku->update($validatedData);
        Alert::success('Success', 'Data berhasil di edit');
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        Alert::success('Success', 'Data berhasil di hapus');
        return redirect('/buku');
    }
}
