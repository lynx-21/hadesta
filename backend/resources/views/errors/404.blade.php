@extends('layouts.app')

@section('title', '404 Not Found')

@section('content')    
<div class="container-fluid mt-5 p-0">
    <div class="col-md-12">
        <div class="error p-5">
            <div class="kotak-error posisi-404">
                <h1 class=" text-center m-0 p-0">404</h1>
            </div>
            <div class="kotak-error">
                <h3 class="text-center m-0 p-0">Not Found</h3>
            </div> 
        </div>
        <img src="{{ asset('app/img/bg-error.png') }}" width="100%" alt="">
    </div>
</div>
@endsection