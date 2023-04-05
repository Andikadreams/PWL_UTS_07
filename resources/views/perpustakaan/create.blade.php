@extends('perpustakaan.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Buku
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('perpustakaan.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="kode_buku">Kode Buku</label>
                        <input type="text" name="kode_buku" class="form-control" id="kode_buku" aria-describedby="kode_buku">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="judul" name="judul" class="form-control" id="judul" aria-describedby="judul">
                    </div>
                    <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                        <input type="pengarang" name="pengarang" class="form-control" id="pengarang" aria-describedby="password">
                    </div>
                    <div class="form-group">
                        <label for="jenis_buku">Jenis Buku</label>
                        <input type="jenis_buku" name="jenis_buku" class="form-control" id="jenis_buku" aria-describedby="jenis_buku">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="harga" name="harga" class="form-control" id="harga" aria-describedby="harga">
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="qty" name="qty" class="form-control" id="qty" aria-describedby="qty">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('perpustakaan.index') }}" class="btn btn-danger" role="button" aria-disabled="true" style="margin-left:5px">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
