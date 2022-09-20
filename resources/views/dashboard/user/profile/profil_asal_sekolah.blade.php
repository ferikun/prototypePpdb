@extends('dashboard.user.layouts.main')
@section('container')
@if (session()->has('berhasil')) 
             <div class="alert alert-success alert-dismissible fade show fs-5 col-10" role="alert">
              {{ session('berhasil') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        @endif
@if (session()->has('gagal')) 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('gagal') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
   @endif

                <!-- ubah data sekolah -->
                <div class="col-10">
                    <div class="card">
                        <div class="card-header border-dark head_editsekolah">
                            <h3>Asal Sekolah</h3>
                            <button type="button" id="editBtn" class="btn" data-bs-toggle="modal" data-bs-target="#editSekolah"><i class="fa-solid fa-pen-to-square"></i></button>
                        </div>
                        <div class="card-body mb-5">
                            <form action="" class="row g-3">
                                <div class="row mt-5">
                                    <label for="" class="col-4">Nama Sekolah</label>
                                    <div class="col-8">
                                        <input name="nama_asalSekolah" id="asal_sekolah" class="form-control" type="text" disabled value="{{ $asek->name }}">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="alamat" class="col-4">Alamat</label>
                                    <div class="col-8">
                                        <textarea name="alamat" id="alamat_sekolah" class="form-control" value=""disabled>{{$address->alamat}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="provinsi" class="col-4">Provinsi</label>
                                    <div class="col-8">
                                        <input type="text" name="provinsi" id="provinsi_sekolah" class="form-control" disabled value="{{ $address->provinsi }}">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="kabupaten" class="col-4">Kabupaten/Kota</label>
                                    <div class="col-8">
                                        <input type="text" name="kabupaten" id="kabupaten_sekolah" class="form-control" disabled value="{{ $address->kabupaten }}">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="kecamatan" class="col-4">Kecamatan</label>
                                    <div class="col-8">
                                        <input type="text" name="kecamatan" id="kecamatan_sekolah" class="form-control" disabled value="{{ $address->kecamatan }}">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="kp" class="col-4">Kode Pos</label>
                                    <div class="col-8">
                                        <input type="text" name="kp" id="kp_sekolah" class="form-control" disabled value="{{ $address->kodepos }}">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="rapor" class="col-4">Nomor SKTB/Rapor</label>
                                    <div class="col-8">
                                        <input type="text" name="rapor" id="rapor" class="form-control" disabled value="{{ $asek->sktb }}">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- akhir ubah data sekolah -->
                <!-- akhir ubah data sekolah -->
            </div>

            <!-- Modal edit Sekolah -->
            <div class="modal fade" id="editSekolah" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="staticBackdropLabel">Edit Data Asal Sekolah</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/dashboard/profilasek/{profilasek}" class="row g-2" method="POST">
                                @method('put');
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama Sekolah</label>
                                    <input name="name" id="nama_asalSekolah" class="form-control @error('name')is-invalid @enderror" type="text" value="{{ $asek->name }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <input type="hidden" name="for" value="{{ $address->for }}">
                                <div class="form-group mt-2">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control @error('alamat')is-invalid @enderror" value="{{ $address->alamat }}">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control @error('provinsi')is-invalid @enderror" value="{{ $address->provinsi }}">
                                @error('provinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kabupaten">Kabupaten/Kota</label>
                                    <input type="text" name="kabupaten" class="form-control @error('kabupaten')is-invalid @enderror" value="{{ $address->kabupaten }}">
                                @error('kabupaten')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control @error('kecamatan')is-invalid @enderror" value="{{ $address->kecamatan }}">
                                @error('kecamatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kodepos">Kode Pos</label>
                                    <input type="number" name="kodepos" id="kode_pos" class="form-control @error('kodepos')is-invalid @enderror" value="{{ $address->kodepos }}">
                                @error('kodepos')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="form-group mt-2 mb-3">
                                    <label for="sktb">Nomor SKTB/Rapor</label>
                                    <input type="text" name="sktb" id="sktb" class="form-control @error('sktb')is-invalid @enderror" value="{{ $asek->sktb }}">
                                @error('sktb')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
