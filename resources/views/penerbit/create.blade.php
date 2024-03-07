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
                        <form action="/penerbit" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Kode</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Kode" name="kode"
                                            aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Nama</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Nama" name="nama"
                                            aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Alamat</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Alamat" name="alamat"
                                            aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Kota</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Kota" name="kota"
                                            aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Telepon</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Telepon" name="telepon"
                                            aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
