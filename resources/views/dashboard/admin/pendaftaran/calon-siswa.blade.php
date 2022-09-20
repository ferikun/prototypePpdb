@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-md-12">
    <div class="card">
        <div class="card-header head-calonSiswa text-white bg-secondary">
            <h2><b>Pendaftar</b></h2>
            <div class="cari">
                <input class="form-control-md inputCari" type="text" name="cari" id="cari" autofocus placeholder="masukan kata kunci  . . .">
            </div>
        </div>
        <div class="card-body tabel-calon">
            <table class="table tabel_calonSiswa text-center" id="tabel_dataSiswa">
                <thead class="calon-head">
                    <tr>
                        <th>No.</th>
                        <th>Date / Time</th>
                        <th>Nomor Pendaftaran</th>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="calon-body" id="pendaftar">
                    <tr>
                        <td>1</td>
                        <td>2022-06-24 08:25:21</td>
                        <td>12345678</td>
                        <td>Muhammad Alucard</td>
                        <td>SMP Negeri Tenan</td>
                        <td>
                            <button class="btn btn-success me-2"><i class="fa-sharp fa-solid fa-check"></i></i></button>
                            <a class="btn btn-danger hapus" href=""><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2022-06-21 09:40:12</td>
                        <td>87654321</td>
                        <td>Julius Kristus</td>
                        <td>SMP Bina Nusa</td>
                        <td>
                            <button class="btn btn-success me-2"><i class="fa-sharp fa-solid fa-check"></i></i></button>
                            <a class="btn btn-danger hapus" href=""><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-white">
            <div class="cetak mt-2">
                <h6>Jumlah : </h6>
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
            $("#pendaftar tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection