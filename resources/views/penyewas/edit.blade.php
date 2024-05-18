@extends('layouts.app')

@section('title', 'Edit Penyewa')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <form action="{{route('penyewas.update',$penyewa->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $penyewa->nama }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $penyewa->alamat }}">
            </div>
        </div>
        <div class="col mb-3">
            <label class="form-label">Plat Nomer</label>
            <input type="text" name="plat_nomer" class="form-control" placeholder="Plat Nomer" value="{{ $penyewa->plat_nomer }}">
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jenis Mobil</label>
                <input type="text" name="jenis_mobil" class="form-control" placeholder="Jenis Mobil" value="{{ $penyewa->jenis_mobil }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $penyewa->harga }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
