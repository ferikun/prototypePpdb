@extends('dashboard.layouts.main')
@section('container')
<div class="col-5 d-flex justify-content-center">
    <h1 class="text-center">SELAMAT DATANG {{ auth()->user()->name }}</h1>
</div>
@endsection