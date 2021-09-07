@extends('layouts.app')

@section('title')
<title>Dokter Kami</title>
@endsection

@section('header')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Dokter Kami</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#"><i class="ni ni-tv-2"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Dokter Kami</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<div class="row">
    @foreach($dokter as $row)
    <div class="col-md-4">
        <!-- Card header -->
        <div class="card card-stats">
            <div class="card-body"> 
            <div class="row">
                <div class="col-auto">
                    <div class="icon">
                    <img src="{{asset('storage/user.png')}}" width="100%" alt="">
                    </div>
                </div>
                <div class="col">
                    <span class="h4 font-weight-bold mb-0">{{$row->user->name}}</span>
                    <h6 class="card-title text-uppercase text-muted mb-0">Spesialis {{$row->spesialis}}</h6>
                </div>
            </div>
                <h6 class="mt-3 mb-0">
                    @foreach($row->jadwal as $jadwal)
                        @if($jadwal->hari == 0)
                        <li><span  class="text-nowrap" >Senin</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>
                        @elseif($jadwal->hari == 1)
                        <li><span  class="text-nowrap" >Selasa</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>
                        @elseif($jadwal->hari == 2)
                        <li><span  class="text-nowrap" >Rabu</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>
                        @elseif($jadwal->hari == 3)
                        <li><span  class="text-nowrap" >Kamis</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li> 
                            @elseif($jadwal->hari == 4)
                        <li><span  class="text-nowrap" >Jumat</span> : 
                        @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>
                        @elseif($jadwal->hari == 5)
                        <li><span  class="text-nowrap" >Sabtu</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>
                        @elseif($jadwal->hari == 6)
                        <li><span  class="text-nowrap" >Minggu</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>   
                        @else
                        <li><span >Tidak Ada Jadwal</span></li>
                        @endif
                    @endforeach
                </h6>
                <div class="mt-2" style="text-align:right;">
                <a href="{{route('janji.show', $row->id)}}" class="btn btn-sm btn-success">Jadwal Temu</a>
        <a href="{{route('janji.show', $row->id)}}" class="btn btn-sm btn-primary">Jadwal Tele Komunikasi</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PRofil Dokter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('storage/user.png')}}" width="100%" alt="">
            </div>
            <div class="col-md-8">
                <span class="h3 font-weight-bold mb-0">{{$row->user->name}}</span>
                <h5 class="card-title text-uppercase text-muted mb-0">Spesialis : {{$row->spesialis}}</h5>
                <h5 class="card-title text-uppercase text-muted mb-0">Pendidikan : {{$row->pend}}</h5>
                <h5 class="card-title text-muted mb-0">e-Mail : {{$row->user->email}}</h5>
                <h5 class="mt-3 mb-0 card-title text-uppercase text-muted mb-0">Jadwal Praktek</h5>
                <h5 class="">
                    @foreach($row->jadwal as $jadwal)
                        @if($jadwal->hari == 0)
                        <li><span  class="text-nowrap" >Senin</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>
                        @elseif($jadwal->hari == 1)
                        <li><span  class="text-nowrap" >Selasa</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>
                        @elseif($jadwal->hari == 2)
                        <li><span  class="text-nowrap" >Rabu</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>
                        @elseif($jadwal->hari == 3)
                        <li><span  class="text-nowrap" >Kamis</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li> 
                            @elseif($jadwal->hari == 4)
                        <li><span  class="text-nowrap" >Jumat</span> : 
                        @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>
                        @elseif($jadwal->hari == 5)
                        <li><span  class="text-nowrap" >Sabtu</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>
                        @elseif($jadwal->hari == 6)
                        <li><span  class="text-nowrap" >Minggu</span> : 
                            @if($jadwal->pagi_mulai != "00:00:00")
                            Pagi, {{date('H:i', strtotime($jadwal->pagi_mulai))}} - {{date('H:i', strtotime($jadwal->pagi_selesai))}}; 
                            @endif
                            @if($jadwal->sore_mulai != "00:00:00")
                            Sore, {{date('H:i', strtotime($jadwal->sore_mulai))}} - {{date('H:i', strtotime($jadwal->sore_selesai))}}
                            @endif</li>   
                        @else
                        <li><span >Tidak Ada Jadwal</span></li>
                        @endif
                    @endforeach
                </h5>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
@endsection