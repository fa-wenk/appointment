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
    <div class="col">
        <div class="card">
        <!-- Card header -->
            <div class="card-header border-0">
                <a href="{{route('berita.create')}}" class="btn btn-sm btn-success">Create</a>
            </div>
            @if (session('sukses'))
            <div class="card-body">
              <div class="alert alert-success" role="alert">
                  <strong>Sukses ! </strong> {{session('sukses')}}
              </div>
            </div>
            @endif
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">Judul</th>
                        <th scope="col" class="sort" data-sort="budget">Kategori</th>
                        <th scope="col" class="sort" data-sort="status">Diposting</th>
                        <th scope="col" class="sort" data-sort="completion">Aksi</th>
                    </tr>
                </thead>
                <tbody class="list">

                    @foreach($berita as $row)
                    <tr>
                        <td>{{$row->judul}}</td>
                        <td>{{$row->kategori}}</td>
                        <td>{{$row->created_at}}</td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="{{route('berita.edit', $row->id)}}">Edit</a>
                                <a class="dropdown-item" href="{{route('berita.show', $row->id)}}">Detail</a>
                                <a class="dropdown-item" href="{{route('berita.destroy', $row->id)}}"  onclick="event.preventDefault(); document.getElementById('delete-item').submit();">Hapus</a>
                                    <form id="delete-item" action="{{ route('berita.destroy', $row->id) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
            <nav aria-label="...">
                <ul class="pagination">
                    {{$berita->links()}}
                </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection