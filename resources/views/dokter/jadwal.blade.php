@extends('layouts.app')

@section('title')
<title>Jadwal Kerja</title>
@endsection

@section('header')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Jadwal Kerja</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#"><i class="ni ni-tv-2"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Jadwal Kerja</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<form action="{{route('jadwal.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col">
            <div class="card">
            <!-- Card header -->
                <div class="card-header border-0">
                    <input type="hidden" name="user_id" value="{{$dokter->user_id}}">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                </div>
                @if (session('sukses'))
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <strong>Sukses ! </strong> {{session('sukses')}}
                    </div>
                </div>
                @endif
                @if (session('errors'))
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach(session('errors') as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Hari</th>
                            <th scope="col" class="sort" data-sort="budget">Aktif</th>
                            <th scope="col" class="sort" data-sort="status">Jam Pagi</th>
                            <th scope="col" class="sort" data-sort="completion">Jam Sore</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach($jadwal as $key => $jadwal_kerja)
                        <tr>
                            <td>{{$days[$key]}}</td>
                            <td>
                                <label class="custom-toggle">
                                    <input type="checkbox" value="{{$key}}" @if($jadwal_kerja->aktif) checked @endif name="aktif[]">
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="Tidak" data-label-on="Aktif"></span>
                                </label>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control form-control-sm" name="pagi_mulai[]">
                                        <option value="00:00"> 00 : 00 </option>
                                            @for($i = 5; $i < 12; $i++)
                                                <option value="{{$i}}:00" 
                                                @if($i.':00' == $jadwal_kerja->pagi_mulai) selected @endif>{{$i}} : 00 </option>
                                                <option value="{{$i}}:30"
                                                @if($i.':30' == $jadwal_kerja->pagi_mulai) selected @endif>{{$i}} : 30 </option>
                                            @endfor
                                        </select>
                                    </div>
                                    -
                                    <div class="col">
                                        <select class="form-control form-control-sm" name="pagi_selesai[]">
                                        <option value="00:00"> 00 : 00 </option>
                                            @for($i = 5; $i < 12; $i++)
                                                <option value="{{$i}}:00"
                                                @if($i.':00' == $jadwal_kerja->pagi_selesai) selected @endif>{{$i}} : 00 </option>
                                                <option value="{{$i}}:30"
                                                @if($i.':30' == $jadwal_kerja->pagi_selesai) selected @endif>{{$i}} : 30 </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control form-control-sm" name="sore_mulai[]">
                                        <option value="00:00"> 00 : 00 </option>
                                            @for($i = 12; $i < 24;$i++)
                                                <option value="{{$i}}:00"
                                                @if($i.':00' == $jadwal_kerja->sore_mulai) selected @endif>{{$i}} : 00 </option>
                                                <option value="{{$i}}:30"
                                                @if($i.':30' == $jadwal_kerja->sore_mulai) selected @endif>{{$i}} : 30 </option>
                                            @endfor
                                        </select>
                                    </div>
                                    -
                                    <div class="col">
                                        <select class="form-control form-control-sm" name="sore_selesai[]">
                                        <option value="00:00"> 00 : 00 </option>
                                        @for($i = 12; $i < 24;$i++)
                                                <option value="{{$i}}:00"
                                                @if($i.':00' == $jadwal_kerja->sore_selesai) selected @endif>{{$i}} : 00 </option>
                                                <option value="{{$i}}:30"
                                                @if($i.':30' == $jadwal_kerja->sore_selesai) selected @endif>{{$i}} : 30 </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection