@extends('dashboard.admin.layouts.main')
@section('konten')
@php
    $verify = [];
    $gagal = [];
    $lulus = []
@endphp


    @foreach ($siswas as $siswa)
    <!-- Seleksi Data Siswa yang Verifikasi -->
        @if($siswa->status_pembayaran == 1)
            @php $verify[] = $siswa->status_pembayaran @endphp
        @endif
    <!-- Seleksi untuk Siswa yang Lulus dan gagal -->
        @if($siswa->status_kelulusan == '1')
            @php $lulus[] = $siswa->status_kelulusan @endphp  <!-- Siswa Lulus -->          
        @else
            @php $gagal[] = $siswa->status_kelulusan @endphp <!-- Siswa Tidak Lulus -->
        @endif

    @endforeach

<div class="col-lg-3" style="margin-top: 80px; margin-bottom:10px;">
    <div class="h-100 p-4 text-bg-info rounded-3">
        <div class="d-flex justify-content-between">
            <h2><b>{{$total}}</b></h2>
            <i class="bi bi-people-fill" style="font-size: 40px;"></i>
        </div>
        <h4 class="mb-5">Pendaftar</h4>
    </div>
</div>
<div class="col-lg-3" style="margin-top: 80px; margin-bottom:10px;">
    <div class="h-100 p-4 text-bg-warning rounded-3">
        <div class="d-flex justify-content-between">
            <h2><b>{{count($verify)}}</b></h2>
            <i class="bi bi-person-check-fill" style="font-size: 40px;"></i>
        </div>
        <h4 class="mb-5">Terverifikasi</h4>
    </div>
</div>
<div class="col-lg-3" style="margin-top: 80px; margin-bottom:10px;">
    <div class="h-100 p-4 text-bg-success rounded-3">
        <div class="d-flex justify-content-between">
            <h2><b>{{count($lulus)}}</b></h2>
            <i class="bi bi-person-plus-fill" style="font-size: 40px;"></i>
        </div>
        <h4 class="mb-5">Diterima</h4>
    </div>
</div>
<div class="col-lg-3" style="margin-top: 80px; margin-bottom:10px;">
    <div class="h-100 p-4 text-bg-danger rounded-3">
        <div class="d-flex justify-content-between">
            <h2><b>{{count($gagal)}}</b></h2>
            <i class="bi bi-person-x-fill" style="font-size: 40px;"></i>
        </div>
        <h4 class="mb-5">Gagal</h4>
    </div>
</div>
</div>
<div class="row mb-4">
<div class="col-lg-12">
    <div class="h-100 p-4 text-bg-primary rounded-3">
        <h2 class="mb-3 text-center">5 Nilai Tertinggi</h2>
        <div class="pendaftaran_berlangsung mb-5">
            <table class="table table-light text-center table-striped table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Nilai</th>
                    </tr>
                    <tbody>
                        @foreach ($limabesars as $limabesar)
                        <tr>
                            <td>{{$limabesar->name}}</td>
                            <td>{{$limabesar->nama_asal_sekolah}}</td>
                           <td>{{$limabesar->nilai}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
@section('javascript')    
@endsection