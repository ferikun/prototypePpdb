@extends('dashboard.layouts.main')
@section('container')
@php
    if (!auth()->user()->bio) {
        $daftar = "inline";
    }
    else {       
        $daftar = "none";
    }
@endphp
<div class="container" id="konten">
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="h-100 p-2 text-bg-primary rounded-3 text-center text-white">
                <h3><b>Selamat Datang {{ auth()->user()->username }} Di PPDB SMA Garuda Pancasila</b></h3>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="h-100 rounded-3">
                
                <div style="display:{{ $daftar }}">
                <div class="d-grid gap-2">
                    <a href="/dashboard/createbio" class="btn btn-primary fs-2 mb-2" style="border: 0; height: 70px">Daftar Sekarang <i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
            <img src="img/baner.jpg" alt="" class="img-fluid rounded mt-3">
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="h-100 p-4 text-bg-dark text-white rounded-3">
                <h2 class="mb-3 text-center">Visi & Misi Sekolah</h2>
                <div class="visi-misi">
                    <p>Mewujudkan pendidikan untuk menghasilkan prestasi dan lulusa berkwalitas tinggi yang peduli dengan lingkungan hidup.</p>
                    <p>Mewujudkan sumber daya manusia yang beriman, produktif, kreatif, inofatif dan efektif.</p>
                    <p>Mewujudkan pengembangan inovasi pembelajaran sesuai tuntutan.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="h-100 rounded-3">
                <img src="img/Kuning Sederhana Alur Proses Bagan.png" alt="" class="img-fluid rounded">
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="h-100 p-4 text-bg-dark text-white rounded-3">
                <h2 class="mb-3 text-center">#</h2>
                <div class="pendaftaran_berlangsung mb-5">
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

