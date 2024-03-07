@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Tambah data buku</h4>
                    </div>
                    <div class="card-body px-2 pt-0 pb-2">
                        <form action="/buku/{{ $buku->id }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Kode</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Kode" name="kode"
                                            aria-label="Email" aria-describedby="email-addon" value="{{ $buku->kode }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Kategori</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Kategori" name="kategori"
                                            aria-label="Email" aria-describedby="email-addon" value="{{ $buku->kategori }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Nama Buku</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Nama Buku" name="nama_buku"
                                            aria-label="Email" aria-describedby="email-addon"
                                            value="{{ $buku->nama_buku }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Harga</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Harga" name="harga"
                                            aria-label="Email" aria-describedby="email-addon" value="{{ $buku->harga }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Stok</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Stok" name="stok"
                                            aria-label="Email" aria-describedby="email-addon" value="{{ $buku->stok }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Penerbit</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Penerbit" name="penerbit"
                                            aria-label="Email" aria-describedby="email-addon" value="{{ $buku->penerbit }}">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
