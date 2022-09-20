@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="container" id="konten">
    <div class="row">
        <div class="col-lg-3" style="margin-top: 80px; margin-bottom:10px;">
            <div class="h-100 p-4 text-bg-info rounded-3">
                <div class="d-flex justify-content-between">
                    <h2><b>50</b></h2>
                    <i class="bi bi-people-fill" style="font-size: 40px;"></i>
                </div>
                <h4 class="mb-5">Pendaftar</h4>
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-light" style="border: 0; opacity:50%;">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3" style="margin-top: 80px; margin-bottom:10px;">
            <div class="h-100 p-4 text-bg-warning rounded-3">
                <div class="d-flex justify-content-between">
                    <h2><b>50</b></h2>
                    <i class="bi bi-person-check-fill" style="font-size: 40px;"></i>
                </div>
                <h4 class="mb-5">Terverifikasi</h4>
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-light" style="border: 0; opacity:50%;">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3" style="margin-top: 80px; margin-bottom:10px;">
            <div class="h-100 p-4 text-bg-success rounded-3">
                <div class="d-flex justify-content-between">
                    <h2><b>50</b></h2>
                    <i class="bi bi-person-plus-fill" style="font-size: 40px;"></i>
                </div>
                <h4 class="mb-5">Diterima</h4>
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-light" style="border: 0; opacity:50%;">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3" style="margin-top: 80px; margin-bottom:10px;">
            <div class="h-100 p-4 text-bg-danger rounded-3">
                <div class="d-flex justify-content-between">
                    <h2><b>50</b></h2>
                    <i class="bi bi-person-x-fill" style="font-size: 40px;"></i>
                </div>
                <h4 class="mb-5">Gagal</h4>
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-light" style="border: 0; opacity:50%;">Lihat</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="h-100 p-4 text-bg-secondary text-light rounded-3">
                <h2 class="mb-3 text-center">5 NILAI TERTINGGI</h2>
                <div class="pendaftaran_berlangsung mb-5">
                    <table class="table text-dark text-center table-light table-bordered table-striped">
                        <thead>
                            <tr class="table-primary">
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>Nilai</th>
                            </tr>
                            <tbody>
                                <tr>
                                    <td>Julius Jodi</td>
                                    <td>SMP Tadika Mesra</td>
                                    <td>98</td>
                                </tr>
                                <tr>
                                    <td>Julius Jodi</td>
                                    <td>SMP Tadika Mesra</td>
                                    <td>98</td>
                                </tr>
                                <tr>
                                    <td>Julius Jodi</td>
                                    <td>SMP Tadika Mesra</td>
                                    <td>98</td>
                                </tr>
                                <tr>
                                    <td>Julius Jodi</td>
                                    <td>SMP Tadika Mesra</td>
                                    <td>98</td>
                                </tr>
                                <tr>
                                    <td>Julius Jodi</td>
                                    <td>SMP Tadika Mesra</td>
                                    <td>98</td>
                                </tr>
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection