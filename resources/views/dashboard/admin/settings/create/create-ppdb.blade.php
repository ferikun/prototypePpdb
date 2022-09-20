@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3><b>Buat PPDB Baru</b></h3>
        </div>
        <div class="card-body">
            <form action="" class="row g-2">
                <div class="form-group">
                    <label for="ta">Tahun Ajaran</label>
                    <input type="text" name="ta" id="ta" class="form-control">
                </div>
                <div class="form-group col-6">
                    <label for="gelombang">Gelombang Pendaftaran</label>
                    <select name="gelombang" id="gelombang" class="form-control">
                        <option disabled selected value="">pilih</option>
                        <option value="Gelombang 1">Gelombang 1</option>
                        <option value="Gelombang 2">Gelombang 2</option>
                        <option value="Gelombang 3">Gelombang 3</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="kuota">Kuota Penerimaan</label>
                    <input type="text" name="kuota" id="kuota" class="form-control">
                </div>
                <div class="form-group col-6">
                    <label for="jenis_seleksi">Jalur</label>
                    <select name="jenis_seleksi" id="jenis_seleksi" class="form-control">
                        <option disabled selected value="">pilih</option>
                        <option value="Prestasi">Prestasi</option>
                        <option value="Tes">Tes</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="biaya">Uang Pendaftaran</label>
                    <select name="biaya" id="biaya" class="form-control">
                        <option disabled selected value="">pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="jurusan">Pilihan Jurusan</label>
                    <div class="jurusan">
                        <span class="me-4">
                            <input type="checkbox" name="mipa" id="mipa">
                            <label for="mipa">MIPA</label>
                        </span>
                        <span class="me-4">
                            <input type="checkbox" name="ips" id="ips">
                            <label for="ips">IPS</label>
                        </span>
                        <span class="me-4">
                            <input type="checkbox" name="agama" id="agama">
                            <label for="agama">Agama</label>
                        </span>
                    </div>
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="tgl_mulai">Tanggal Mulai</label>
                    <input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control">
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="tgl_selesai">Tanggal Selesai</label>
                    <input type="date" id="tgl_selesai" name="tgl_selesai" class="form-control">
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="waktu_ujian">Waktu Ujian</label>
                    <input type="datetime-local" id="waktu_ujian" name="waktu_ujian" class="form-control">
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="waktu_selesai">Total Waktu Ujian</label>
                    <input type="text" id="waktu_selesai" name="waktu_selesai" class="form-control">
                </div>
                <div class="form-group">
                    <label for="baner">Upload Baner</label>
                    <input type="file" name="baner" id="baner" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                </div>
                <div class="d-grid btn-lg gap-2 mt-3">
                    <button class="btn btn-success" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('javascript')
    
@endsection