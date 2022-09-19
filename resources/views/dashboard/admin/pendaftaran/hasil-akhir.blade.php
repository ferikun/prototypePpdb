@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12">
    <div class="card">
        <div class="card-header head-calonSiswa text-white bg-primary">
            <h2><b>Data Hasil Seleksi</b></h2>
            <div class="cari">
                <input class="form-control-md inputCari" type="text" name="cari" id="cari" autofocus placeholder="masukan kata kunci  . . .">
            </div>
        </div>
        <div class="card-body tabel-calon">
            <table class="table tabel_calonSiswa text-center" id="tabel_dataSiswa">
                <thead class="calon-head">
                    <tr>
                        <th>No.</th>
                        <th>Nomor Pendaftaran</th>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="calon-body" id="hasilSeleksi">
                    @php $count = 0 @endphp
                    @foreach ($daftars as $daftar)
                    <tr>
                        @php $count++ @endphp
                        <td>{{$loop->iteration}}</td>
                        <td>12345678</td>
                        <td>{{$daftar->name}}</td>
                        <td>{{$daftar->asalsekolah->nama_asal_sekolah}}</td>
                        @php $daftar->status_kelulusan == '1' ? $status = 'Lulus' : $status = 'Tidak Lulus' @endphp
                        <td>{{$status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-white">
            <div class="cetak mt-2">
                <h6>Jumlah : {{$count}} Siswa </h6>
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
            $("#hasilSeleksi tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection