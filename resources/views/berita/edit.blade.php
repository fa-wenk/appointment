@extends('layouts.app')

@section('title')
<title>Berita dan Promosi</title>
@endsection

@section('header')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Edit</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#"><i class="ni ni-tv-2"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Berita dan Promosi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                <a href="{{route('berita.index')}}" class="btn btn-sm btn-danger">Batal</a>
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
                <form action="{{route('berita.update', $berita->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{old('judul', $berita->judul)}}" id="judul" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" name="kategori" id="kategori">
                            <option value="1" {{ $berita->kategori == 1 ? 'selected':'' }}>1</option>
                            <option value="2" {{ $berita->kategori == 2 ? 'selected':'' }}>2</option>
                            <option value="3" {{ $berita->kategori == 3 ? 'selected':'' }}>3</option>
                            <option value="4" {{ $berita->kategori == 4 ? 'selected':'' }}>4</option>
                            <option value="5" {{ $berita->kategori == 5 ? 'selected':'' }}>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="konten">Konten</label>
                        <textarea id="mytextarea" value="{{old('konten')}}" class="form-control" style="height:300px" name="konten" placeholder="Content">{{$berita->konten}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>
</div>
@endsection