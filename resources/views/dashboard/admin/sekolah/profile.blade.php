@extends('dashboard.admin.layouts.main')
@section('konten')
    <div class="col-md-12">
        <div class="card"></div>
            <div class="card-body">
                <h1 class="text-center">Edit Profil sekolah</h1>
                <form action="/dashboard/sekolah" method="POST">
                    <div class="mb-3">
                        <label for="nama">Nama Sekolah</label>
                        <input value="{{ $profil->nama_sekolah }}" type="text" name="nama" class="form-control" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <input  type="text" name="alamat" class="form-control" value="{{ $profil->alamat->alamat }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Kecamatan</label>
                        <input  type="text" name="alamat" class="form-control" value="{{ $profil->alamat->kecamatan }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Kabupaten</label>
                        <input  type="text" name="alamat" class="form-control" value="{{ $profil->alamat->kabupaten }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Provinsi</label>
                        <input  type="text" name="alamat" class="form-control" value="{{ $profil->alamat->provinsi }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat">No WA</label>
                        <div>Sekolah</div>
                        <input  type="text" name="alamat" class="form-control" value="{{ $profil->kontak->WaSekolah }}">
                        <div>Admin</div>
                        <input  type="text" name="alamat" class="form-control" value="{{ $profil->kontak->WaAdmin }}">
                        <div>BP</div>
                        <input  type="text" name="alamat" class="form-control" value="{{ $profil->kontak->WaBp }}">
                    </div>
                    </form>
            </div>
        </div>
    </div>
@endsection