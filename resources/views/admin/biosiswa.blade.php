
@extends('layouts.main')
@section('containers')
<h1 style="text-align:center">Biodata {{ $siswa->iduser->fullName }}</h1>
<br>
<table class="table table-bordered text-center container">
    <tr><th>NISN</th><td>{{ $siswa->nisn }}</tr>
    <tr><th>Nama Lengkap<td>{{ $siswa->iduser->fullName }}</td></th></tr>
    <tr><th>Jenis Kelamin</th><td>{{ $siswa->gender }}</td></tr>
    <tr><th>Tempat Lahir</th><td>{{ $siswa->placeBorn }}</td></tr>
    <tr><th>Tanggal Lahir</th><td>{{ $siswa->birth }}</td></tr>
    <tr><th>Agama</th><td>{{ $siswa->agama }}</td></tr>
    <tr><th>Status Anak</th><td>{{ $siswa->statusAnak }}</td></tr>
    <tr><th>Status Keluarga</th><td>{{ $siswa->statusKeluarga }}</td></tr>
    <tr><th>Bidang Favorit</th><td>{{ $siswa->bidangFav }}</td></tr>
    <tr><th>Olahraga</th><td>{{ $siswa->olahraga }}</td></tr>
    <tr><th>Cita - Cita</th><td>{{ $siswa->cita }}</td></tr>
    <tr><th>Alamat</th><td>{{ $siswa->alamat->alamat }}</td></tr>
    <tr><th>Asal Sekolah</th><td>{{ $siswa->asalsekolah->nama }}</td></tr>
    <tr><th>Ruangan</th><td></td></tr>
    <tr><th>Status</th><td></td></tr>
    <tr><th>No Peserta</th><td></td></tr>
    <tr><th></th></tr>
</table>

@endsection