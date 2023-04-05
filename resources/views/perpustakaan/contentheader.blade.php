@extends('perpustakaan.layout')
@section('content_head')

<!-- Content Header (Page header) -->
                <div class="container-fluid">
                    <div class="row mb-1">
                        <div class="col-sm-12">
                            <h1 class="m-0" style="text-align: center;">Selamat Datang {{ Auth::user()->name }}</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Login User
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Email: </b>{{ auth()->user()->email }}</li>
                    <li class="list-group-item"><b>Name: </b>{{ auth()->user()->name }}</li>
                </ul>
            </div>
        </div>
    </div>
                </div><!-- /.container-fluid -->
            <!-- /.content-header -->
@endsection
