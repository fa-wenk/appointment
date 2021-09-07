@extends('layouts.app')

@section('title')
<title>Berita dan Promosi</title>
@endsection

@section('header')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Berita Dan Promosi</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#"><i class="ni ni-tv-2"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Berita dan Promosi</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<div class="row">
    @foreach($berita as $row)
    <div class="col-md-4">
        <!-- Card header -->
        <div class="card">
            <div class="text-center">
                <img src="{{asset('storage/'.$row->foto)}}" width="40%" alt="Card image cap">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$row->judul}}</h5>
                <a href="{{route('berita.show', $row->id)}}" class="btn btn-sm btn-primary">Lihat</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection