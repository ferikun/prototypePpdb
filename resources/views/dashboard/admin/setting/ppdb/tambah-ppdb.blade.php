@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3><b>Buat PPDB Baru</b></h3>
        </div>
        <div class="card-body">
            <form action="/setting/ppdb/store" method="POST" class="row g-2" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <select name="tahun_ajaran" class="form-select" aria-label="Default select example">
                        <option disabled selected>Pilih Tahun Ajaran</option>
                        @foreach ($tahun_ajaran as $tahun)
                        <option value="{{$tahun->id}}">{{ $tahun->tahun }}</option>  
                        @endforeach
                      </select>
                </div>
                <div class="form-group col-6">
                    <label for="gelombang">Gelombang Pendaftaran</label>
                    <select name="gelombang" id="gelombang" class="form-control">
                        <option disabled selected value="">pilih</option>
                        <option value="1">Gelombang 1</option>
                        <option value="2">Gelombang 2</option>
                        <option value="3">Gelombang 3</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="kuota">Kuota Penerimaan</label>
                    <input name="kuota_peserta" type="text" id="kuota" class="form-control @error('kuota_peserta') is-invalid @enderror" autocomplete="off" required>
                    @error('kuota_peserta')
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="jenis_seleksi">Tes</label>
                    <select name="tes" id="tes" class="form-control">
                        <option disabled selected >pilih</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="biaya">Uang Pendaftaran</label>
                    <input type="hidden" name="nama_tagihan" value="Pendaftaran">
                    <input type="text" id="biaya" name="nominal" class="form-control @error('biaya') is-invalid @enderror" autocomplete="off" required>
                    @error('nominal')
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                </div>  
                <div class="form-group col-6 mt-3">
                    <label for="tgl_mulai">Tanggal Mulai</label>
                    <input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control" required>
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="tgl_selesai">Tanggal Selesai</label>
                    <input type="date" id="tgl_selesai" name="tgl_selesai" class="form-control" required>
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="waktu_ujian">Waktu Ujian</label>
                    <input type="date" id="tgl_ujian" name="tgl_ujian" class="form-control" required>
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="waktu_ujian">Total Waktu Ujian</label>
                    <input type="text" id="waktu_ujian" name="waktu_ujian" class="form-control @error('waktu_ujian') is-invalid @enderror" placeholder="Dalam Menit" autocomplete="off" required>
                    @error('waktu_ujian')
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror  
                </div>
                <div class="form-group">
                    <label for="baner">Upload Baner</label>
                    <input type="file" name="baner" id="baner" class="form-control" required>
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