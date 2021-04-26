@extends('layouts.auth')

@section('title', 'Daftar Akun')

@section('content')
@include('partials.app.swal2.success_register')
<div class="container registrasi pb-5 shadow-sm border">
    <div class="row pt-4 mb-3">
        <div class="col-md-3 judul"><h1>Daftar Akun</h1></div>
        <div class="col-md-3"><img src="{{ asset('app/img/logo.png') }}" width="180px" alt="logo hadesta" /></div>
    </div>
    <div class="row">
        <div class="col-md-5">
        <form action="{{ route('app.register_p') }}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="nama-lengkap" class="form-label">Nama Lengkap :</label>
                <input type="text" class="form-control" id="nama-lengkap" name="full_name" value="{{ old('full_name') }}">
                @error('full_name')<p class="text-danger">{{ $message }}</p>@enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username :</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
                @error('username')<p class="text-danger">{{ $message }}</p>@enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')<p class="text-danger">{{ $message }}</p>@enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password :</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')<p class="text-danger">{{ $message }}</p>@enderror
            </div>
            <div class="mb-3">
                <label for="konfirm" class="form-label">Konfirmasi Password :</label>
                <input type="password" class="form-control" id="konfirm" name="confirm_password">
                @error('confirm_password')<p class="text-danger">{{ $message }}</p>@enderror
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
        </div>
        <div class="col-md-7 motion"></div>
        </div>
    </div>
</div>
@endsection