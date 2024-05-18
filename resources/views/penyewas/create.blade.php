@extends('layouts.app')

@section('title', 'Tambah Penyewa')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="col">
                <input type="text" name="tanggal" class="form-control" placeholder="Tanggal">
            </div>
            <div class="col">
                <input type="text" name="plat_nomer" class="form-control" placeholder="Plat Nomer">
            </div>
            <div class="col">
                <input type="text" name="jenis_mobil" class="form-control" placeholder="Jenis Mobil">
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>

            <th>



            <style>
                .btn-small {
                    padding: 8px 8px; /* Anda dapat menyesuaikan padding sesuai kebutuhan */
                    font-size: 14px; /* Ukuran font juga dapat disesuaikan */
                }
            </style>

            <div class="row">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-small">Daftarkan</button>
                </div>
            </th>
            </div>

        </div>
    </form>
@endsection
