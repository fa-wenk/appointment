@extends('layouts.app')

@section('title')
    <title>Dokter</title>
@endsection

@section('header')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Profil RS</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#"><i class="ni ni-ambulance"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil RS</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header border-0">
                <a href="{{route('profil-rs.create')}}" class="btn btn-sm btn-success">Update profil</a>
            </div>
            @if (session('sukses'))
            <div class="card-body">
              <div class="alert alert-success" role="alert">
                  <strong>Sukses ! </strong> {{session('sukses')}}
              </div>
            </div>
            @endif
            <div class="card-body">
                <div class="tab-content">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="main-card mb-3 card">
                                <div class="card-body text-center"><h5 class="card-title mb-4">Logo Rumah Sakit</h5>
                                    @if($rs->logo == NULL)
                                    <img width="60%" src="{{asset('storage/user.png')}}" alt="First slide">
                                    @else
                                    <img width="60%" src="{{asset('storage/'. $rs->logo)}}" alt="First slide">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title text-center mb-4">Detail Rumah Sakit</h5>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td width="25%">Rumah Sakit</td>
                                                    <td width="2%">:</td>
                                                    <td width="60%">{{ $rs->nama }}</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>:</td>
                                                    <td>{{ $rs->alamat }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Latitude</td>
                                                    <td>:</td>
                                                    <td>{{ $rs->lat }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Longitude</td>
                                                    <td>:</td>
                                                    <td>{{ $rs->long }}</td>
                                                </tr>
                                            </tbody>        
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title text-center mb-4">Lokasi Rumah Sakit</h5>
                                <div id="googleMap" style="width:100%;height:200px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div> 
        </div>
    </div>
</div>   
@endsection