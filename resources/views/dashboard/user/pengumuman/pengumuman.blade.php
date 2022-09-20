@extends('dashboard.user.layouts.main')
@section('container')
                <!-- menu Pengumuman -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h4><i class="bi bi-megaphone-fill me-3"></i>Pengumuman</h4>
                        </div>
                        <div class="card-body pengumuman">
                            <table class="table table-bordered table-striped table-inverse table-responsive text-center">
                                <thead>
                                    <tr>
                                        <th width="150">No. Pendaftaran</th>
                                        <th>Nama Lengkap</th>
                                        <th>NISN</th>
                                        <th>Jurusan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01112313</td>
                                        <td>Muhammad Toni</td>
                                        <td>89792347</td>
                                        <td>MIPA</td>
                                        <td style="background-color: yellow;">Lolos</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-grid gap-2 col-12 d-flex justify-content-end">
                                <a href="" class="btn btn-info btn-lg text-white cetak">Cetak</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ahir menu Pengumuman -->
@endsection