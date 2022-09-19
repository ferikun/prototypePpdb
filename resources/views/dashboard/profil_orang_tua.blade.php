
@extends('dashboard.layouts.main')
@section('container')
@if (session()->has('berhasil')) 
             <div class="alert alert-success alert-dismissible fade show fs-5 col-12" role="alert">
              {{ session('berhasil') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        @endif
@if (session()->has('waliubah')) 
             <div class="alert alert-success alert-dismissible fade show fs-5 col-12" role="alert">
              {{ session('waliubah') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
@endif

<!-- awal ubah data orang tua wali -->
<div class="col-12">
    <div class="card mb-5">
        <div class="card-header border-dark head_dataOrangTua">
            <h3>Ubah Data Orang Tua</h3>
            <button type="button" id="editBtnParents" class="btn" data-bs-toggle="modal" data-bs-target="#editOrangTua"><i class="fa-solid fa-pen-to-square"></i></button>
        </div>
        <div class="card-body edit-epw">
            <form action="" class="row g-3">              
                <div class="row mt-5">
                    <label for="name" class="col-4">Nama Ayah *</label>
                    <div class="col-8">
                        <input type="text" name="name" id="nameAyah" class="form-control" disabled value="{{ $ayah->name }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="birthday" class="col-4">Tanggal Lahir</label>
                    <div class="col-8">
                        <input type="date" name="birthday" id="birthdayAyah" class="form-control" disabled value="{{ $ayah->birthday }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="profession" class="col-4">Pekerjaan</label>
                    <div class="col-8">
                        <input type="text" name="profession" id="professionAyah" class="form-control" disabled value="{{ $ayah->profession }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="religion" class="col-4">Agama</label>
                    <div class="col-8">
                        <input type="text" name="religion" id="religionAyah" class="form-control" disabled value="{{ $ayah->religion }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="alamat" class="col-4">Alamat</label>
                    <div class="col-8">
                        <textarea name="alamat" id="alamatAyah" class="form-control" disabled>{{ $alamatAyah->alamat }}</textarea>
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="provinsi" class="col-4">Provinsi</label>
                    <div class="col-8">
                        <input type="text" name="provinsi" id="provinsiAyah" class="form-control" disabled value="{{ $alamatAyah->provinsi }}" >
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kabupaten" class="col-4">Kabupaten/Kota</label>
                    <div class="col-8">
                        <input type="text" name="kabupaten" id="kabupatenAyah" class="form-control" value="{{ $alamatAyah->kabupaten }}" disabled >
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kecamatan" class="col-4">Kecamatan</label>
                    <div class="col-8">
                        <input type="text" name="kecamatan" id="kecamatanAyah" class="form-control" value="{{ $alamatAyah->kecamatan }}" disabled >
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kodepos" class="col-4">Kode Pos</label>
                    <div class="col-8">
                        <input type="text" name="kodepos" id="kodeposAyah" class="form-control" value="{{ $alamatAyah->kodepos }}" disabled >
                    </div>
                </div>
                <div class="row mt-4 mb-3">
                    <label for="phone" class="col-4">Nomor Handphone</label>
                    <div class="col-8">
                        <input type="text" name="phone" id="phoneAyah" class="form-control" disabled value="{{ $ayah->phone }}">
                    </div>
                </div>
                <hr>
                <div class="row mt-5">
                    <label for="name" class="col-4">Nama Ibu *</label>
                    <div class="col-8">
                        <input type="text" name="name" id="nameIbu" class="form-control" disabled value="{{ $ibu->name }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="birthday" class="col-4">Tanggal Lahir</label>
                    <div class="col-8">
                        <input type="date" name="birthday" id="birthdayIbu" class="form-control" disabled value="{{ $ibu->birthday }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="profession" class="col-4">Pekerjaan</label>
                    <div class="col-8">
                        <input type="text" name="profession" id="professionIbu" class="form-control" disabled value="{{ $ibu->profession }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="religion" class="col-4">Agama</label>
                    <div class="col-8">
                        <input type="text" name="religion" id="religionIbu" class="form-control" disabled value="{{ $ibu->religion }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="alamat" class="col-4">Alamat</label>
                    <div class="col-8">
                        <textarea name="alamat" id="alamatIbu" class="form-control" disabled>{{ $alamatIbu->alamat }}</textarea>
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="provinsi" class="col-4">Provinsi</label>
                    <div class="col-8">
                        <input type="text" name="provinsi" id="provinsiIbu" class="form-control" disabled value="{{ $alamatIbu->provinsi }}" >
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kabupaten" class="col-4">Kabupaten/Kota</label>
                    <div class="col-8">
                        <input type="text" name="kabupaten" id="kabupatenIbu" class="form-control" value="{{ $alamatIbu->kabupaten }}" disabled >
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kecamatan" class="col-4">Kecamatan</label>
                    <div class="col-8">
                        <input type="text" name="kecamatan" id="kecamatanIbu" class="form-control" value="{{ $alamatIbu->kecamatan }}" disabled >
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kodepos" class="col-4">Kode Pos</label>
                    <div class="col-8">
                        <input type="text" name="kodepos" id="kodeposIbu" class="form-control" value="{{ $alamatIbu->kodepos }}" disabled >
                    </div>
                </div>
                <div class="row mt-4 mb-3">
                    <label for="phone" class="col-4">Nomor Handphone</label>
                    <div class="col-8">
                        <input type="text" name="phone" id="phoneIbu" class="form-control" disabled value="{{ $ibu->phone }}">
                    </div>
                </div>
                <hr>
            </form>
        </div>
    </div>
</div>
<!-- ahir ubah data orang tua-->
<!-- data wali -->
<div class="col-12">
    <div class="card mb-5">
        <div class="card-header border-dark head_dataWali">
            <h3>Data Wali</h3>
            <button type="button" id="editBtnWali" class="btn" data-bs-toggle="modal" data-bs-target="#editWali"><i class="fa-solid fa-pen-to-square"></i></button>
        </div>
        <div class="card-body edit-epw">
            <form action="" class="row g-3">
                <div class="row mt-4">
                    <label for="roleWali" class="col-4">Status Dalam Keluarga</label>
                    <div class="col-8">
                        <input type="text" name="roleWali" id="roleWali" class="form-control" disabled value="{{ $wali->role }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="nikWali" class="col-4">NIK</label>
                    <div class="col-8">
                        <input type="text" name="nikWali" id="nikWali" class="form-control" disabled value="{{ $wali->nik }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="nameWali" class="col-4">Nama Lengkap</label>
                    <div class="col-8">
                        <input type="text" name="nameWali" id="nameWali" class="form-control" disabled value="{{ $wali->name }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="birthplaceWali" class="col-4">Tempat Lahir</label>
                    <div class="col-8">
                        <input type="text" name="birthplaceWali" id="birthplaceWali" class="form-control" disabled value="{{ $wali->birthplace }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="birthdayWali" class="col-4">Tanggal Lahir</label>
                    <div class="col-8">
                        <input type="date" name="birthdayWali" id="birthdayWali" class="form-control" disabled value="{{ $wali->birthday }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="religionWali" class="col-4">Agama</label>
                    <div class="col-8">
                        <input type="text" name="religionWali" id="religionWali" class="form-control" disabled value="{{ $wali->religion }}">
                    </div>
                </div>                
                <div class="row mt-4">
                    <label for="alamat" class="col-4">Alamat</label>
                    <div class="col-8">
                        <textarea name="alamat" id="alamatWali" class="form-control" disabled>{{ $alamatWali->alamat }}</textarea>
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="provinsiWali" class="col-4">Provinsi</label>
                    <div class="col-8">
                        <input type="text" name="provinsiWali" id="provinsiWali" class="form-control" disabled value="{{ $alamatWali->provinsi }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kabupatenWali" class="col-4">Kabupaten/Kota</label>
                    <div class="col-8">
                        <input type="text" name="kabpatenWali" id="kabupatenWali" class="form-control" disabled value="{{ $alamatWali->kabupaten }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kecamatanWali" class="col-4">Kecamatan</label>
                    <div class="col-8">
                        <input type="text" name="kecamatanWali" id="kecamatanWali" class="form-control" disabled value="{{ $alamatWali->kecamatan }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kodeposWali" class="col-4">Kode Pos</label>
                    <div class="col-8">
                        <input type="text" name="kodeposWali" id="kodeposWali" class="form-control" disabled value="{{ $alamatWali->kodepos }}">
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="phoneWali" class="col-4">Nomor Hadphone</label>
                    <div class="col-8">
                        <input type="text" name="phoneWali" id="phoneWali" class="form-control" disabled value="{{ $wali->phone }}">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ahir data wali -->
  <!-- Modal edit Orang Tua -->
  <div class="modal fade" id="editOrangTua" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Orang Tua</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action= "/dashboard/profilortu/editortu" method="POST" class="row g-2">
                @csrf
                @method('put')
                    <input type="hidden" name="role1" value="ayah">
                    <div class="form-group">
                        <label for="name1">Nama Ayah</label>
                        <input name="name1" id="modalnameAyah" class="form-control" type="text" value="" autocomplete="off"required>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="birthday1">Tanggal Lahir</label>
                        <input type="date" name="birthday1" id="modalbirthdayAyah" class="form-control" value="" autocomplete="off" required>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="profession1">Pekerjaan</label>
                        <select name="profession1" id="modalprofessionAyah" class="form-select form-control" required>
                            <option value="Karyawan" @if (old('profession',$ayah->profession) == "Karyawan") {{ "selected" }}@endif>Karyawan</option>
                            <option value="PNS" @if (old('profession',$ayah->profession) == "PNS") {{ "selected" }}@endif>PNS</option> 
                            <option value="Wiraswasta" @if (old('profession',$ayah->profession) == "Wiraswasta") {{ "selected" }}@endif>Wiraswasta</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="religion1">Agama</label>
                        <select name="religion1" id="modalreligionAyah" class="form-select form-control" required>
                            <option value="Islam" @if (old('religion',$ayah->religion) == "Islam") {{ "selected" }}@endif>Islam</option>
                            <option value="Protestan" @if (old('religion',$ayah->religion) == "Protestan") {{ "selected" }}@endif>Protestan</option>
                            <option value="Katholik" @if (old('religion',$ayah->religion) == "katholik") {{ "selected" }}@endif>Katholik</option>
                            <option value="Hindu"@if (old('religion',$ayah->religion) == "Hindu") {{ "selected" }}@endif >Hindu</option>
                            <option value="Budha"@if (old('religion',$ayah->religion) == "Budha") {{ "selected" }}@endif>Budha</option>
                            <option value="Konghucu"@if (old('religion',$ayah->religion) == "Konghucu") {{ "selected" }}@endif>Konghucu</option>
                        </select>
                    </div>
                    <input type="hidden" name="for1" value="ayah">
                    <div class="form-group mt-2">
                        <label for="alamat1">Alamat</label>
                        <textarea name="alamat1" id="modalalamatAyah" class="form-control" autocomplete="off" value="" ></textarea>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="provinsi1">Provinsi</label>
                        <input type="text" name="provinsi1" id="modalprovinsiAyah"  class="form-control">
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="kabupaten1">Kabupaten/Kota</label>
                        <input name="kabupaten1" id="modalkabupatenAyah" class="form-control" >
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="kecamatan1">Kecamatan</label>
                        <input name="kecamatan1" id="modalkecamatanAyah" class="form-control" >
                        
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="kodepos1">Kode Pos</label>
                        <input name="kodepos1" id="modalkodeposAyah" class="form-control">
                    </div>
                    <div class="form-group mt-2 mb-3">
                        <label for="phone1">Nomor Handphone</label>
                        <input type="number" name="phone1" id="modalphoneAyah" class="form-control" value=""autocomplete="off" required>
                    </div>
                    <hr>
                    <input type="hidden" name="role2" value="ibu">
                    <div class="form-group">
                        <label for="name2">Nama Ibu</label>
                        <input name="name2" id="modalnameIbu" class="form-control" type="text" value="" autocomplete="off"required>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="birthday2">Tanggal Lahir</label>
                        <input type="date" name="birthday2" id="modalbirthdayIbu" class="form-control" value="" autocomplete="off" required>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="profession2">Pekerjaan</label>
                        <select name="profession2" id="modalprofessionIbu" class="form-select form-control" required>
                            <option value="Karyawan" @if (old('profession',$ibu->profession) == "Karyawan") {{ "selected" }}@endif>Karyawan</option>
                            <option value="PNS" @if (old('profession',$ibu->profession) == "PNS") {{ "selected" }}@endif>PNS</option> 
                            <option value="Wiraswasta" @if (old('profession',$ibu->profession) == "Wiraswasta") {{ "selected" }}@endif>Wiraswasta</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="religion2">Agama</label>
                        <select name="religion2" id="modalreligionIbu" class="form-select form-control" required>
                            <option value="Islam" @if (old('religion',$ibu->religion) == "Islam") {{ "selected" }}@endif>Islam</option>
                            <option value="Protestan" @if (old('religion',$ibu->religion) == "Protestan") {{ "selected" }}@endif>Protestan</option>
                            <option value="Katholik" @if (old('religion',$ibu->religion) == "katholik") {{ "selected" }}@endif>Katholik</option>
                            <option value="Hindu"@if (old('religion',$ibu->religion) == "Hindu") {{ "selected" }}@endif >Hindu</option>
                            <option value="Budha"@if (old('religion',$ibu->religion) == "Budha") {{ "selected" }}@endif>Budha</option>
                            <option value="Konghucu"@if (old('religion',$ibu->religion) == "Konghucu") {{ "selected" }}@endif>Konghucu</option>
                        </select>
                    </div>
                    <input type="hidden" name="for2" value="ibu">
                    <div class="form-group mt-2">
                        <label for="alamat2">Alamat</label>
                        <textarea name="alamat2" id="modalalamatIbu" class="form-control" autocomplete="off" value="" ></textarea>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="provinsi2">Provinsi</label>
                        <input type="text" name="provinsi2" id="modalprovinsiIbu"  class="form-control">
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="kabupaten2">Kabupaten/Kota</label>
                        <input name="kabupaten2" id="modalkabupatenIbu" class="form-control" >
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="kecamatan2">Kecamatan</label>
                        <input name="kecamatan2" id="modalkecamatanIbu" class="form-control" >
                        
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="kodepos2">Kode Pos</label>
                        <input name="kodepos2" id="modalkodeposIbu" class="form-control">
                    </div>
                    <div class="form-group mt-2 mb-3">
                        <label for="phone2">Nomor Handphone</label>
                        <input type="number" name="phone2" id="modalphoneIbu" class="form-control" value=""autocomplete="off" required>
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

<!-- Modal edit Wali -->
<div class="modal fade" id="editWali" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Edit Data Wali</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/profilortu/editwali" class="row g-2" method="post" >
                    @csrf
                    @method('put')
                    <div class="form-group mt-2">
                        <label for="role3">Status Dalam Keluarga</label>
                        <select name="role3" id="modalroleWali" class="form-control">
                                <option selected disabled value="">-pilih-</option>
                                <option value="Paman">Paman</option>
                                <option value="Kakak">Kakak</option>
                                <option value="Kakek">Kakek</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nik3">NIK</label>
                        <input name="nik3" id="modalnikWali" class="form-control" type="text">
                    </div>
                    <div class="form-group mt-2">
                        <label for="name3">Nama Lengkap</label>
                        <input type="text" name="name3" id="modalnameWali" class="form-control">
                    </div>                    
                    <div class="col-sm-6 mt-2">
                        <label for="birthplace3">Tempat Lahir</label>
                        <input type="text" name="birthplace3" id="modalbirthplaceWali" class="form-control">
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="birthday">Tanggal Lahir</label>
                        <input type="date" name="birthday3" id="modalbirthdayWali" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="religion3">Agama</label>
                        <select name="religion3" id="modalreligionWali" class="form-control">
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Katholik</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div>
                    <input type="hidden" name="for3" value="wali" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="alamat3">Alamat</label>
                        <input type="text" name="alamat3" id="modalalamatWali" class="form-control">
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="provinsi3">Provinsi</label>
                        <input name="provinsi3" id="modalprovinsiWali" class="form-control">                        
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="kabupaten3">Kabupaten/Kota</label>
                        <input name="kabupaten3" id="modalkabupatenWali" class="form-control">
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="kecamatan3">Kecamatan</label>
                        <input name="kecamatan3" id="modalkecamatanWali" class="form-control">                        
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="kodepos3">Kode Pos</label>
                        <input name="kodepos3" id="modalkodeposWali" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="phone3">Nomor Hadphone</label>
                        <input type="number" name="phone3" id="modalphoneWali" class="form-control">
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