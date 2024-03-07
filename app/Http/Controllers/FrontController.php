<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $buku = Buku::where('nama_buku', 'LIKE', '%' . $request->search . '%')->get();
            return view('dashboard', [
                'buku' => $buku
            ]);
        } else {
            $buku = Buku::all();
            return view('dashboard', [
                'buku' => $buku
            ]);
        }
    }

    public function kebutuhan()
    {
        $buku = Buku::orderBy('stok', 'asc')->limit(1)->get();
        return view('kebutuhan', [
            'buku' => $buku
        ]);
    }
}
