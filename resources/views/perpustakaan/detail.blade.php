@extends('perpustakaan.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Buku
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kode Buku: </b>{{$buku->kode_buku}}</li>
                    <li class="list-group-item"><b>Judul: </b>{{$buku->judul_buku}}</li>
                    <li class="list-group-item"><b>Pengarang: </b>{{$buku->pengarang}}</li>
                    <li class="list-group-item"><b>Jenis Buku: </b>{{$buku->jenis_buku}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$buku->harga}}</li>
                    <li class="list-group-item"><b>Qty: </b>{{$buku->qty}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('perpustakaan.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
