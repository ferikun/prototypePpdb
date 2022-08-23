@extends('dashboard.layouts.main')
@section('container')
<div class="col-3">
    <div class="card mt-3 ms-2">
    {{-- Profil --> --}}
    <div class="card-header bg-white border-dark">
               <h4><i class="fa-solid fa-pen-to-square me-2"></i>Edit Profil</h4>
           </div>

    <div class="card-body edit-profil">
               <div class="profil mt-2"><a href="">Email & Password</a></div>
               <div class="profil mt-2"><a href="">Data Diri</a></div>
               <div class="profil mt-2"><a href="">Data Asal Sekolah</a></div>
               <div class="profil mt-2"><a href="">Data Orang Tua</a></div>
           </div>
   <!-- Ahir profil -->
@endsection