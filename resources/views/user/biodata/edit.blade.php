@extends('layouts.main')
@section('containers')
<h1>Ubah Biodata</h1>
<form class="table table-bordered text-center container" method="POST">
        <div class="mb-3">
          <label for="nisn" class="form-label">NISN</label>
          <input type="text" class="form-control" id="nisn" name="nisn">
        </div>
        <div class="mb-3">
          <label for="namalengkap" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="namalengkap" name="namalengkap">
        </div>
        <div class="mb-3">
          <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
          <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin">
        </div>
        <div class="mb-3">
          <label for="tempatlahir" class="form-label">Tempat Lahir</label>
          <input type="text" class="form-control" id="tempatlahir" name="tempatlahir">
        </div>
        <div class="mb-3">
          <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
          <input type="text" class="form-control" id="tanggallahir" name="tanggallahir">
        </div>
        <div class="mb-3">
          <label for="agama" class="form-label">Agama</label>
          <input type="text" class="form-control" id="agama" name="agama">
        </div>
        <div class="mb-3">
          <label for="statusanak" class="form-label">Status Anak</label>
          <input type="text" class="form-control" id="statusanak" name="statusanak">
        </div>
        <div class="mb-3">
          <label for="statuskeluarga" class="form-label">Status Keluarga</label>
          <input type="text" class="form-control" id="statuskeluarga" name="statuskeluarga">
        </div>
        <div class="mb-3">
          <label for="bidangfavorit" class="form-label">Bidang Favorit</label>
          <input type="text" class="form-control" id="bidangfavorit" name="bidangfavorit">
        </div>
        <div class="mb-3">
          <label for="olahraga" class="form-label">Olahraga</label>
          <input type="text" class="form-control" id="olahraga" name="olahraga">
        </div>
        <div class="mb-3">
          <label for="citacita" class="form-label">Cita - Cita</label>
          <input type="text" class="form-control" id="citacita" name="cita-cita">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
          <label for="asalsekolah" class="form-label">Asal Sekolah</label>
          <input type="text" class="form-control" id="asalsekolah" name="asalsekolah">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Biodata</button>
</form>
@endsection