@extends('perpustakaan.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>SISTEM INFORMASI PERPUSTAKAAN-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div>
            <form class="form-left my-2" method="get" action="{{ route('search') }}">
            <div class="form-group w-80 mb-3">
                        <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Nama">
                        <button type="submit" class="btn btn-primary mb-1">Find a Book</button>
                        <a class="btn btn-success right" href="{{ route('perpustakaan.index') }}" style="margin-left:165px"> Show All Books</a>
                        <a class="btn btn-success right" href="{{ route('perpustakaan.create') }}" style="margin-left:10px"> Add a Book</a>
                    </div>
            </form>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Kode Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Jenis Buku</th>
        <th>Harga</th>
        <th>Qty</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($buku as $bukus)
    <tr>
        <td>{{ $bukus->kode_buku }}</td>
        <td>{{ $bukus->judul }}</td>
        <td>{{ $bukus->pengarang }}</td>
        <td>{{ $bukus->jenis_buku }}</td>
        <td>{{ $bukus->harga }}</td>
        <td>{{ $bukus->qty }}</td>
        <td>
            <form action="{{ route('perpustakaan.destroy',$bukus->kode_buku) }}" method="POST">

                <a class="btn btn-info" href="{{ route('perpustakaan.show',$bukus->kode_buku) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('perpustakaan.edit',$bukus->kode_buku) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="my-2">
{{$buku->links()}}
</div>
@endsection
