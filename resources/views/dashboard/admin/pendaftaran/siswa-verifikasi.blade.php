@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-md-12">
    <div class="card">
        <div class="card-header head-calonSiswa text-white bg-primary">
            <h2><b>Daftar Sudah Terverifikasi</b></h2>
            <div class="cari">
                <input class="form-control-md inputCari" type="text" name="cari" id="cari" autofocus placeholder="masukan kata kunci  . . .">
            </div>
        </div>
        <div class="card-body tabel-calon">
            <table class="table tabel_calonSiswa text-center" id="tabel_dataSiswa">
                <thead class="calon-head">
                    <tr>
                        <th>No.</th>
                        <th>Tanggal Daftar</th>
                        <th>Nomor Pendaftaran</th>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="calon-body" id="verif">
                    @php $count = 0 @endphp
                    @foreach ($siswas as $siswa)    
                    <tr>
                        @php $count += 1 @endphp
                        <td>{{$loop->iteration}}</td>
                        <td>2022-06-24</td>
                        <td>12345678</td>
                        <td>{{$siswa->name}}</td>
                        <td>{{$siswa->asalsekolah->nama_asal_sekolah}}</td>
                        <td>
                            <a href="/dashboard/siswa-profil/{{$siswa->id}}" class="btn btn-info me-2" title="Lihat Data"><i class="bi bi-eye-fill"></i> Detail</a>
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
@endsection

@section('javascript')
<script>
    $('.hapus').on('click', function() {
        var getLink = $(this).attr('href');
        Swal.fire({
            title: "Yakin hapus data?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonColor: '#3085d6',
            cancelButtonText: "Batal"

        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if (result.isConfirmed) {
                window.location.href = getLink
            }
        })
        return false;
    });
</script>

<!-- pencarian -->
<script>
    $(document).ready(function() {
        $("#cari").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#verif tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection