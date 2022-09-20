@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-md-12">
    <div class="card">
        <div class="card-header head-calonSiswa text-white bg-primary">
            <h3>Daftar Calon Siswa</h3>
            <div class="cari">
                <input class="form-control-md inputCari" type="text" name="cari" id="cari" autofocus placeholder="masukan kata kunci  . . .">
                <button class="btn btn-success" type="submit" name="cari">Cari</button>
            </div>
        </div>
        <div class="card-body tabel-calon">
            <table class="table tabel_calonSiswa table-bordered text-center" id="tabelInputNilai">
                <thead class="calon-head">
                    <tr>
                        <th>No.</th>
                        <th>Nomor Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Asal Sekolah</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="calon-body">
                    <tr>
                        <td>1</td>
                        <td>12345678</td>
                        <td>Muhammad Alucard</td>
                        <td>MIPA</td>
                        <td>SMP Negeri Tenan</td>
                        <td>85</td>
                        <td>
                            <button class="btn btn-warning" id="edit" type="button" name="edit" data-bs-toggle="modal" data-bs-target="#editSiswa">Edit</button>
                            <button class=" btn btn-danger " name="hapus ">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>87654321</td>
                        <td>Raden Zilong</td>
                        <td>IPS</td>
                        <td>SMP Wano Kuni</td>
                        <td>79</td>
                        <td>
                            <button class="btn btn-warning" id="edit" type="button" name="edit" data-bs-toggle="modal" data-bs-target="#editSiswa">Edit</button>
                            <button class=" btn btn-danger " name="hapus ">Hapus</button>
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
<!-- akhir calon siswa -->
</div>

<!-- modal -->
<div class="modal fade" id="editSiswa" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="staticBackdropLabel">Edit Data Siswa</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" class="row g-2">
                <div class="form-group">
                    <label for="nama">Nama Siswa</label>
                    <input type="text" name="nama" id="name" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai</label>
                    <input type="text" name="nilai" id="nilai" class="form-control">
                </div>
                <div class="modal-footer ">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Bersihkan</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('javascript')
    <script>
        let input = document.getElementById("tabelInputNilai");
        for (let i = 1; i < input.rows.length; i++) {
            input.rows[i].onclick = function() {
                document.getElementById("id").value = this.cells[0].innerHTML;
                document.getElementById("name").value = this.cells[2].innerHTML;
                document.getElementById("jurusan").value = this.cells[3].innerHTML;
                document.getElementById("asal_sekolah").value = this.cells[4].innerHTML;
            };
        };
    </script>    
@endsection