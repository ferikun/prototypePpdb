@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12">
    <div class="card">
        <div class="card-header head_jurusan">
            <h3>Daftar Jurusan</h3>
            <button type="button" class="btn tambah_jurusan" data-bs-toggle="modal" data-bs-target="#jurusan"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div class="card-body tabel-jurusan">

            <table class="table table-tambahJurusan text-center" id="table-tambahJurusan">
                <thead class="jurusan-head">
                    <tr>
                        <th>No.</th>
                        <th>Nama Jurusan</th>
                        <th>Nama Singkat</th>
                        <th>Masukan Ke Pendaftaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="tbody" class="body-jurusan">
                    <tr>
                        <td>1</td>
                        <td>Ilmu Pengetahuan Sosial</td>
                        <td>IPS</td>
                        <td>
                            <input type="checkbox" name="" id="">
                        </td>
                        <td>
                            <button id="hapusJurusan" class="btn hapusJurusan" name="edit"><i class="fa-solid fa-trash"></i></button></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Ilmu Pengetahuan Sosial</td>
                        <td>IPS</td>
                        <td>
                            <input type="checkbox" name="" id="">
                        </td>
                        <td>
                            <button id="hapusJurusan" class="btn hapusJurusan" name="edit"><i class="fa-solid fa-trash"></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex justify-content-end footer_tambahJurusan">
            <button class="btn btn-success me-4">Simpan</button>
            <button class="btn btn-primary">Upload</button>
        </div>
    </div>
</div>
</div>
<!-- modal -->
<div class="modal fade" id="jurusan" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="staticBackdropLabel">Tambah Jurusan</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" class="row g-2">
                <div class="form-group">
                    <label for="jurusan">Nama Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nick_jurusan">Nama Singkat</label>
                    <input type="text" name="nick_jurusan" id="nick_jurusan" class="form-control">
                </div>
                <div class="modal-footer">
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