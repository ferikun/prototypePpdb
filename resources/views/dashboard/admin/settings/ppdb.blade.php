@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12">
    <div class="card">
        <div class="card-header head-calonSiswa text-dark bg-white">
            <h2><b>Setting Pendaftaran</b></h2>
            <a href="#" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="card-body tabel-calon">
            <table class="table tabel_calonSiswa text-center table-striped" id="tabel_dataSiswa">
                <thead class="headerppdb">
                    <tr>
                        <th>Tahun Ajaran</th>
                        <th>Gelombang</th>
                        <th>Pendaftar</th>
                        <th>Ujian</th>
                        <th>Pembayaran</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th width="200px">Status</th>
                    </tr>
                </thead>
                <tbody id="tabelBody">
                    <tr>
                        <td>2022/2023</td>
                        <td>2</td>
                        <td>0 siswa/i</td>
                        <td>Ya</td>
                        <td>Rp.100.000</td>
                        <td>21-06-2022</td>
                        <td>16-08-2022</td>
                        <td id="statusppdb"></td>
                    </tr>
                    <tr>
                        <td colspan="8" id="tombolOpsi">
                            <button class="btn btn-primary" id="buka" onclick="buka()" type="button">Buka Pendaftaran</button>
                            <button class="btn btn-warning" id="edit"><i class="fa-solid fa-pen me-2"></i>Edit</button>
                            <button class="btn btn-danger" id="tutup" onclick="tutup()" type="button"><i class="fa-solid fa-xmark me-2"></i>Tutup Pendaftaran</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table tabel_calonSiswa text-center table-striped" id="tabel_dataSiswa">
                <thead class="headerppdb">
                    <tr>
                        <th>Tahun Ajaran</th>
                        <th>Gelombang</th>
                        <th>Pendaftar</th>
                        <th>Ujian</th>
                        <th>Pembayaran</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th width="200px">Status</th>
                    </tr>
                </thead>
                <tbody id="tabelBody">
                    <tr>
                        <td>2022/2023</td>
                        <td>2</td>
                        <td>0 siswa/i</td>
                        <td>Ya</td>
                        <td>Rp.100.000</td>
                        <td>21-06-2022</td>
                        <td>16-08-2022</td>
                        <td id="statusppdb"></td>
                    </tr>
                    <tr>
                        <td colspan="8" id="tombolOpsi">
                            <button class="btn btn-primary" id="buka" onclick="buka()" type="button">Buka Pendaftaran</button>
                            <button class="btn btn-warning" id="edit"><i class="fa-solid fa-pen me-2"></i>Edit</button>
                            <button class="btn btn-danger" id="tutup" onclick="tutup()" type="button"><i class="fa-solid fa-xmark me-2"></i>Tutup Pendaftaran</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table tabel_calonSiswa text-center table-striped" id="tabel_dataSiswa">
                <thead class="headerppdb">
                    <tr>
                        <th>Tahun Ajaran</th>
                        <th>Gelombang</th>
                        <th>Pendaftar</th>
                        <th>Ujian</th>
                        <th>Pembayaran</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th width="200px">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2022/2023</td>
                        <td>1</td>
                        <td>123 siswa/i</td>
                        <td>Ya</td>
                        <td>Rp.100.000</td>
                        <td>11-05-2022</td>
                        <td>26-07-2022</td>
                        <td>Berlangsung</td>
                    </tr>
                    <tr>
                        <td colspan="8">
                            <button class="btn btn-warning"><i class="fa-solid fa-pen me-2"></i>Edit</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-xmark me-2"></i>Tutup Pendaftaran</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table tabel_calonSiswa text-center table-striped mt-4" id="tabel_dataSiswa">
                <thead class="headerppdb">
                    <tr>
                        <th>Tahun Ajaran</th>
                        <th>Gelombang</th>
                        <th>Pendaftar</th>
                        <th>Ujian</th>
                        <th>Pembayaran</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th width="200px">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2021/2022</td>
                        <td>3</td>
                        <td>243 siswa/i</td>
                        <td>Ya</td>
                        <td>Rp.100.000</td>
                        <td>23-05-2021</td>
                        <td>10-07-2021</td>
                        <td>Selesai</td>
                    </tr>
                    <tr>
                        <td colspan="8">
                            <button class="btn btn-primary"><i class="fa-solid fa-eye me-2"></i>Lihat Pendaftaran</button>
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
</div>
@endsection
@section('javascript')
<script>
    window.onload = function() {
        $('#tutup').css("display", "none");
        $('#edit').css("display", "none");
    }
</script>
<script>
    function buka() {
        $('#statusppdb').html('Berlangsung');
        $('#statusppdb').css({
            "background-color": "green",
            "color": "white",
        });
        $('#buka').css("display", "none");
        $('#tutup').css("display", "block");
        $('#edit').css("display", "block");
    }
</script>
@endsection