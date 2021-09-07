@extends('layouts.app')

@section('title')
<title>Dashboard</title>
@endsection

@section('header')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                <h3 class="mb-0">Light table</h3>
            </div>
            <!-- Light table -->
            <div class="card-body">
                Hello World !
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
            </div>
        </div>
    </div>
</div>
@endsection