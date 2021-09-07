@extends('layouts.app')

@section('title')
<title>Berita dan Promosi</title>
@endsection

@section('header')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Create</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#"><i class="ni ni-tv-2"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Berita dan Promosi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
        <!-- Card header -->
            <div class="card-header border-0">
                <a href="{{route('berita.index')}}" class="btn btn-sm btn-danger">Kembali</a>
            </div>
            <div class="card-body">
                
                <div class="card-header text-center">
                    <strong>{{$berita->judul}}</strong>
                </div>
                <h5 class="card-title" style="text-align:right;">Diposting {{$berita->created_at}}</h5>
                <div class="text-center"><img src="{{asset('storage/'.$berita->foto)}}" width="20%" alt="Card image cap"></div>
                <div class="card-body">
                    <p class="card-text">
                        {!! $berita->konten !!}
                    </p>
                </div>
                </div>
</div>
@endsection