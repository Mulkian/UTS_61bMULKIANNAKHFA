@extends('layouts.app')

@section('title', 'Tampilan Penyewa')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $penyewa->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $penyewa->alamat }}" readonly>
        </div>
    </div>
    <div class="col mb-3">
        <label class="form-label">Plat Nomer</label>
        <input type="text" name="plat_nomer" class="form-control" placeholder="Plat Nomer" value="{{ $penyewa->plat_nomer }}" readonly>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jenis Mobil</label>
            <input type="text" name="jenis_mobil" class="form-control" placeholder="Jenis Mobil" value="{{ $penyewa->jenis_mobil }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $penyewa->harga }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $penyewa->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $penyewa->updated_at }}" readonly>
        </div>
    </div>
@endsection
