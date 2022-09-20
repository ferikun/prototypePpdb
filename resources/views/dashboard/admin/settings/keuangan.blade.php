@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-md-10">
    <div class="card set-keuangan">
        <div class="card-header set-headKeuangan">
            <div>
                <h3>Keuangan</h3>
            </div>
            <div>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addKeuangan"><i class="fa-solid fa-plus"></i></button>
            </div>

        </div>
        <div class="card-body body-setKeuangan">
            <div class="d-flex justify-content-between">
                <h5 id="category">Biaya Pendaftaran</h5>
                <p id="nominal">100000<button class="btn btn-warning ms-2" id="edit" data-bs-toggle="modal" data-bs-target="#editKeuangan"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn btn-danger" name="hapus_keuangan" type="submit"><i class="fa-solid fa-trash"></i></button></p>
            </div>
            <div class="d-flex justify-content-between">
                <h5 id="category">SPP</h5>
                <p id="nominal">250000<button class="btn btn-warning ms-2" id="edit" data-bs-toggle="modal" data-bs-target="#editKeuangan"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn btn-danger" name="hapus_keuangan" type="submit"><i class="fa-solid fa-trash"></i></button></p>
            </div>


        </div>
        <div class="card-footer footer-setKeuangan">
            <button class="btn btn-uploadKeuangan">Upload</button>
        </div>
    </div>
</div>
</div>
<!-- Modal add keungan -->
<div class="modal fade" id="addKeuangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah keuangan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="form-group">
                    <label for="category_kuangan">Pilih Ketegori</label>
                    <select name="category_keuangan" id="category_keuangan" class="form-control">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="spp">SPP</option>
                        <option value="uang_gedung">Uang Gedung</option>
                        <option value="uang_pendaftaran">Uang Pendaftaran</option>
                        <option value="uang_seragam">Uang Seragam</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal</label>
                    <input type="text" name="nominal" class="form-control">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary" name="add_simpan">Simpan</button>
        </div>
    </div>
</div>
</div>
<!-- Modal edit keungan -->
<div class="modal fade" id="editKeuangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Keuangan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="form-group">
                    <label for="category_kuangan">Ketegori</label>
                    <input type="text" name="category" id="editCategory" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal</label>
                    <input type="text" name="nominal" id="editNominal" class="form-control">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary" name="add_simpan">Simpan</button>
        </div>
    </div>
</div>
</div>
@endsection
@section('javascript')
<script>
    $('#edit').click(function() {
        var nominal = document.getElementById("nominal").textContent;
        document.getElementById("editNominal").value = nominal;
    })
    $('#edit').click(function() {
        var category = document.getElementById("category").textContent;
        document.getElementById("editCategory").value = category;
    })
@endsection