@extends('layouts.app')

@section('title', 'Beranda')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Penyewa</h1>
        <a href="" class="btn btn-primary">Tambah Penyewa</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th>Plat Nomor</th>
                <th>Jenis Mobil</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>

    </table>
@endsection
