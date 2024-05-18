@extends('layouts.app')

@section('title', 'Beranda')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Penyewa</h1>
        <a href="{{ route('penyewas.create')}}" class="btn btn-primary">Tambah Penyewa</a>
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
        <tbody>+
            @if($penyewa->count() > 0)
                @foreach($penyewa as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->alamat}}</td>
                        <td class="align-middle">{{ $rs->tanggal }}</td>
                        <td class="align-middle">{{ $rs->plat_nomer }}</td>
                        <td class="align-middle">{{ $rs->jenis_mobil }}</td>
                        <td class="align-middle">{{ $rs->harga }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">

                            <a href="{{ route('penyewas.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('penyewas.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                

                                    <button class="btn btn-danger m-0">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>

    </table>
@endsection
