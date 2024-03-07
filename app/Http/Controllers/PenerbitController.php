<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penerbit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerbit = Penerbit::orderBy('id', 'desc')->get();
        return view('penerbit.index', [
            'penerbit' => $penerbit
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'kode' => 'required|unique:penerbit',
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'telepon' => 'required'
        ];

        $message = [
            'required' => ':attribute harus diisi',
        ];

        $validatedData = $request->validate($rules, $message);

        Penerbit::create($validatedData);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect('/penerbit');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerbit $penerbit)
    {
        return view('penerbit.edit', [
            'penerbit' => $penerbit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerbit $penerbit)
    {
        $rules = [
            'kode' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'telepon' => 'required'
        ];

        $message = [
            'required' => ':attribute harus diisi',
        ];

        $validatedData = $request->validate($rules, $message);

        $penerbit->update($validatedData);
        Alert::success('Success', 'Data berhasil di edit');
        return redirect('/penerbit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerbit $penerbit)
    {
        $penerbit->delete();
        Alert::success('Success', 'Data berhasil di hapus');
        return redirect('/penerbit');
    }
}
