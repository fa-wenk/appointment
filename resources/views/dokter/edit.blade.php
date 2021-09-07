@extends('layouts.app')

@section('title')
<title>Dokter</title>
@endsection

@section('header')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Update</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#"><i class="ni ni-tv-2"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Dokter</a></li>
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
                <a href="{{route('dokter.index')}}" class="btn btn-sm btn-danger">Batal</a>
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
                <form action="{{route('dokter.update', $dokter->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <input type="hidden" name="user" value="{{$dokter->user->id}}">
                    <div class="form-group">
                        <label for="id">nip</label>
                        <input type="text" name="id" id="id" value="{{old('id', $dokter->user_id)}}" class="form-control"  placeholder="id">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{old('name', $dokter->user->name)}}" id="name" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" id="email" value="{{old('email', $dokter->user->email)}}" class="form-control"  placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">phone_number</label>
                        <input type="text" name="phone_number" id="phone_number" value="{{old('phone_number', $dokter->user->phone_number)}}" class="form-control"  placeholder="phone_number">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{old('alamat', $dokter->alamat)}}" class="form-control"  placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label for="tempat">tempat</label>
                        <input type="text" name="tempat" id="tempat" value="{{old('tempat', $dokter->tempat)}}" class="form-control"  placeholder="tempat">
                    </div>
                    <div class="form-group">
                        <label for="ttl">ttl</label>
                        <input type="date" name="ttl" id="ttl" value="{{old('ttl', $dokter->ttl)}}" class="form-control"  placeholder="ttl">
                    </div>
                    <div class="form-group">
                        <label for="pend">pend</label>
                        <input type="text" name="pend" id="pend" value="{{old('pend', $dokter->pend)}}" class="form-control"  placeholder="pend">
                    </div>
                    <div class="form-group">
                        <label for="spesialis">spesialis</label>
                        <input type="text" name="spesialis" id="spesialis" value="{{old('spesialis', $dokter->spesialis)}}" class="form-control"  placeholder="spesialis">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>
</div>
@endsection