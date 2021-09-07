@extends('layouts.app')

@section('title')
<title>Profil RS</title>
@endsection

@section('header')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Update</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#"><i class="ni ni-tv-2"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Profil RS</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update</li>
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
                <a href="{{route('profil-rs.index')}}" class="btn btn-sm btn-danger">Batal</a>
            </div>
            <div class="card-body">
            @if ($errors->any())
              <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $errors)
                    <li>{{$errors}}</li>
                    @endforeach
                </ul>
              </div>
            @endif
                <form action="{{route('profil-rs.update', $rs->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama Rumah Sakit</label>
                        <input type="text" name="nama" class="form-control" value="{{old('nama', $rs->nama)}}" id="nama" placeholder="Masukan Nama Rumah Sakit">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{old('alamat', $rs->alamat)}}" class="form-control"  placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label for="lat">Latitude</label>
                        <input type="text" name="lat" id="lat" value="{{old('lat', $rs->lat)}}" class="form-control"  placeholder="lat">
                    </div>
                    <div class="form-group">
                        <label for="long">Longitude</label>
                        <input type="text" name="long" id="long" value="{{old('long', $rs->long)}}" class="form-control"  placeholder="long">
                    </div>
                    <div class="form-group">
                        <label for="logo">logo</label>
                        <input type="file" name="logo" class="form-control" id="logo" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>
</div>
@endsection