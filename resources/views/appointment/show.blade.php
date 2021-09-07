@extends('layouts.app')

@section('title')
<title>Buat Jadwal Temu</title>
@endsection

@section('header')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Create</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#"><i class="ni ni-tv-2"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Buat Jadwal Temu</a></li>
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
                <a href="{{route('janji.index')}}" class="btn btn-sm btn-danger">Batal</a>
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
                <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" value="{{$dokter->user_id}}" id="doctor" name="doctor">
                    <div class="form-group">
                        <label for="judul">Dokter</label>
                        <input type="text" name="judul" class="form-control" value="{{$dokter->user->name}} - Spesialis : {{$dokter->spesialis}}" id="judul" readonly placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                            <input class="form-control datepicker" name="date" id="date" placeholder="Select date" type="text"
                            value="{{date('Y-m-d')}}" data-date-format="yyyy-mm-dd" data-date-start-date="{{date('Y-m-d')}}"
                            data-date-end-date="+15d">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="foto">Jam</label> 
                        <div id="jam">

                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>
</div>
<script src="{{ asset('argon/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script>
    $('body').on('focus',".datepicker", function(){
    $(this).datepicker();
});
</script>

<script>
    let $doctor, $date, $jam;
    const TidakAdaJadwal = '<div class="alert alert-danger" role="alert">Tidak Ada Jadwal</div>';
    $(function (){
        $doctor = $('#doctor');
        $date = $('#date');
        $jam = $('#jam');
        $date.change(loadJam);
    });

    function loadJam(){
        const selectDate = $date.val();
        const doctorId = $doctor.val();
        const url ='/jam?date='+selectDate+'&dokter_id='+doctorId+'';
        $.getJSON(url, displayJam);
    }
    function displayJam(data){ 
        if(!data.pagi && !data.sore){
            $jam.html(TidakAdaJadwal);
            return;
        }
        let htmlJam = '';
        if(data.pagi){
            const pagi_interval = data.pagi;
            pagi_interval.forEach(interval => {
                htmlJam += getRadio(interval);
            });
        }
        if(data.sore){
            const sore_interval = data.sore;
            sore_interval.forEach(interval => {
                htmlJam += getRadio(interval);
            });
        }
        $jam.html(htmlJam);
    } 
    function getRadio(interval){
        const text = interval.start+' - '+interval.end;
        return '<div class="custom-radio custom-control custom-control-inline jk"><input type="radio" id="'+text+'" Value="'+text+'" name="interval" class="custom-control-input"><label class="custom-control-label"for="'+text+'">'+text+'</label></div>';
    }
</script>

@endsection