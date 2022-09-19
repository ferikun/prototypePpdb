{{-- @dd($siswas[0]->asalsekolah->nama_asal_sekolah) --}}
@extends('dashboard.admin.layouts.main')
@section('konten')
<!-- calon siswa -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header head-calonSiswa text-white bg-secondary">
            <h2><b>Pendaftar</b></h2>
                <div class="cari">
                <input class="form-control-md inputCari" type="text" name="cari" id="cari" autofocus placeholder="masukan kata kunci  . . .">
                </div>
            </div>
            <div class="card-body tabel-calon">
            @if(session()->has('berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('berhasil')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif
            @if(session()->has('verifikasi'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('verifikasi')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
                <table class="table tabel_calonSiswa text-center table-bordered" id="tabel_dataSiswa">
                <thead class="calon-head">
                    <tr>
                        <th>No.</th>
                        <th>Nomor Pendaftaran</th>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="calon-body" id="pendaftar">
                    @php
                        $count = 0
                        @endphp
                    @foreach ($siswas as $swa)
                    <tr>
                        @php $count += 1 @endphp
                        <td>{{$loop->iteration}}</td>
                        <td>12345678</td>
                        <td>{{$swa->name}}</td>
                        <td>{{$swa->AsalSekolah->nama_asal_sekolah}}</td>
                        @if ($swa->status_pembayaran == '1')
                        <td><i class="bi bi-person-check-fill"></i></i></i></td>
                        @else
                        <td>
                            <a href="/dashboard/verify/{{$swa->id}}" class="btn btn-success me-2"><i class="bi bi-send-check"></i></i></a>
                        </td>
                        @endif
                        <td>
                            <button type="button" class="btn btn-danger hapus" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="hapus({{$swa->id}})" ><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <div class="card-footer bg-white">
                <div class="cetak mt-2">
                     <h6>Jumlah : {{$count}} Siswa</h6>
                 </div>
            </div>
        </div>
    </div>

<!-- Modal Hapus -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="fs-5">Apakah Anda yakin ingin Menghapus Data ini?</p>
          <p class="fs-8 fst-italic text-danger">* Jika data ini di hapus, maka Data yang bersangkutan dengan siswa ini juga akan di hapus. seperti data : orang tua, alamat, dokumen dll</p>
        </div>
        <div  class="modal-footer">
            <form id="modalhapus" action="" method="POST">
                @csrf
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('javascript')
    <script>
        // pencarian

        $(document).ready(function() {
            $("#cari").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#pendaftar tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        const data = document.get

        //Hapus
        function hapus(id)
        {
            document.getElementById('modalhapus').setAttribute('action','/dashboard/siswa/hapus/'+id);

        }
    </script>
@endsection