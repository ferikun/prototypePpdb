@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12v">
    <div class="card">
        <div class="card-header headPengumuman">
            <h3>Pengumuman</h3>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Pengumuman"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div class="card-body">
            <div class="judul">
                <h4>Daftar Pengumuman</h4>
            </div>
            <div class="daftarPengumuman">
                <table class="table text-center" id="tabelPengumuman">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kategori</th>
                            <th>Judul Pengumuman</th>
                            <th>Konten</th>
                            <th>Pemberi Pengumuman</th>
                            <th>Tanggal Dibuat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Keuangan</td>
                            <td>Pengumuman Pendaftaran</td>
                            <td>Harap Bayar Tepat Waktu</td>
                            <td>Julius</td>
                            <td>19-08-2022</td>
                            <td>
                                <button class="btn btn-primary"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-success"><i class="fa-solid fa-paper-plane"></i></button>
                                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#Pengumuman"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="Pengumuman" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header" id="headConfirm">
            <h4 class="modal-title" id="staticBackdropLabel">Pengumuman</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" class="row g-2">
                <div>
                    <input type="hidden" name="id" id="di" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori Pengumuman</label>
                    <select name="kategori" id="kategori" class="form-control">
                        <option disabled selected value="">pilih ketegori</option>
                        <option value="Keuangan">Keuangan</option>
                        <option value="Pendaftaran">Pendaftaran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="judul">Judul Pengumuman</label>
                    <input type="text" name="judul" id="judul" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="kntn">Konten</label>
                    <textarea name="kntn" id="kntn" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="pemeberi_pengumuman">Pemberi Pengumuman</label>
                    <input type="text" name="pemeberi_pengumuman" id="pemeberi_pengumuman" class="form-control" disabled value="">
                </div>
                <div class="modal-footer ">
                    <button type="submit" class="btn btn-success" onclick="simpan()">Simpan</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('javascript')
<script>
    let input = document.getElementById("tabelPengumuman");
    for (let i = 1; i < input.rows.length; i++) {
        input.rows[i].onclick = function() {
            document.getElementById("kategori").value = this.cells[1].innerHTML;
            document.getElementById("judul").value = this.cells[2].innerHTML;
            document.getElementById("kntn").value = this.cells[3].innerHTML
        };
    };
</script>
@endsection