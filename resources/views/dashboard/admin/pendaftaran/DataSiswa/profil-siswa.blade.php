@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-lg-12">
    <div class="card mb-5">
        <form action="" id="dataDiri">
            <div class="card-header headfull_dataSiswa d-flex justify-content-between">
                <h4>Data Siswa</h4>
                <div>
                    <button class="btn btn-warning me-2 btn-edit1" type="button" onclick="editDataDiri(event)" title="edit data"><i class="fa-solid fa-pen-to-square"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group mt-3 profile-pic-div rounded-circle mx-auto">
                    <img id="photo" class="img-thumnail" src="../loginregisform/img/samsudin.jpg" alt="">
                    <input type="file" id="file" disabled>
                    <label for="file" id="uploadBtn">Choose Photo</label>
                </div>
                <div class="form-group row mt-3">
                    <label for="nisn" class="col-4 col-form-label">NISN</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="nisn" value="{{$siswa->nisn}}" disabled>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="{{$siswa->name}}" disabled>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="gender" class="col-4 col-form-label">Jenis kelamin</label>
                    <div class="col-8">
                        {{-- @if($siswa->gender == 'laki-laki')
                            @php $gender = 'Laki-laki' @endphp
                        @endif --}}
                        @php $siswa->gender == 'laki-laki' ? $gender = "Laki-laki" : $gender = "Perempuan" @endphp
                        <select name="gender" id="gender" class="form-control" disabled>
                            <option disabled selected value="{{$siswa->gender}}">{{$gender}}</option>
                            @if($gender == 'Laki-laki')
                            <option value="perempuan">Perempuan</option>
                            @else
                            <option value="laki-laki">Laki-laki</option>
                            @endif
                            
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="tempat_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="tempat_lahir" value="{{$siswa->tempat_lahir}}" disabled>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="tanggal_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-8">
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal_lahir" value="{{$siswa->tgl_lahir}}" disabled>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="agama" class="col-4 col-form-label">Agama</label>
                    <div class="col-8">
                        <input type="text" name="agama" id="agama" class="form-control" value="{{$siswa->agama}}" disabled>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="anak_ke" class="col-4 col-form-label">Anak Ke</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="anak_ke" name="anak_ke" placeholder="anak_ke" value="{{$siswa->anak_ke}}" disabled>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="status_keluarga" class="col-4 col-form-label">Status</label>
                    <div class="col-8">
                        @php $siswa->status_keluarga @endphp
                        <input type="text" name="status_keluarga" id="status_keluarga" class="form-control" value="{{$siswa->status_keluarga}}" disabled>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="alamat" class="col-4 col-form-label">Alamat Lengkap</label>
                    <div class="col-8">
                        <textarea name="alamat" id="alamat" class="form-control" disabled></textarea>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="provinsi" class="col-4 col-form-label">Provinsi</label>
                    <div class="col-8">
                        <select name="provinsi" id="provinsi" class="form-control" disabled>
                            <option disabled selected value="">-pilih provinsi-</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="kabupaten" class="col-4 col-form-label">Kabupaten/Kota</label>
                    <div class="col-8">
                        <select name="kabupaten" id="kabupaten" class="form-control" disabled>
                            <option disabled selected value="">-pilih kabupaten-</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="kecamatan" class="col-4 col-form-label">Kecamatan</label>
                    <div class="col-8">
                        <select name="kecamatan" id="kecamatan" class="form-control" disabled>
                            <option disabled selected value="">-pilih kecamatan-</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="kode_pos" class="col-4 col-form-label">Kode Pos</label>
                    <div class="col-8">
                        <select name="kode_pos" id="kode_pos" class="form-control" disabled>
                            <option disabled selected value="">-pilih kode pos-</option>
                        </select>
                    </div>
                </div>
                <div class="judul mt-5 mb-5">
                    <h5><b># Data Orang Tua</b></h5>
                </div>
                <div class="row mt-4">
                    <label for="" class="col-4 col-form-label">Nama Ayah *</label>
                    <div class="col-8">
                        <input name="nama_ayah" class="form-control" type="text" value="{{$ayah->nama}}" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="tanggal_ayah" class="col-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-8">
                        <input type="date" name="tangggal_ayah" id="tanggal_ayah" class="form-control" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="pekerjaan_ayah" class="col-4 col-form-label">Pekerjaan</label>
                    <div class="col-8">
                        <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" value="{{$ayah->pekerjaan}}" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="agama_ayah" class="col-4 col-form-label">Agama</label>
                    <div class="col-8">
                        <input type="text" name="agama_ayah" id="agama_ayah" class="form-control" value="{{$ayah->agama}}" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="alamat" class="col-4 col-form-label">Alamat</label>
                    <div class="col-8">
                        <textarea name="alamat" id="alamat" class="form-control" disabled></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="provinsi" class="col-4 col-form-label">Provinsi</label>
                    <div class="col-8">
                        <select name="provinsi_ayah" id="provinsi" class="form-control" disabled>
                                <option selected disabled value="">-pilih-</option>
                                <option value=""></option>
                            </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="kabupaten" class="col-4 col-form-label">Kabupaten/Kota</label>
                    <div class="col-8">
                        <select name="kabupaten_ayah" id="kabupaten" class="form-control" disabled>
                                <option selected disabled value="">-pilih-</option>
                                <option value=""></option>
                            </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="kecamatan" class="col-4 col-form-label">Kecamatan</label>
                    <div class="col-8">
                        <select name="kecamatan_ayah" id="kecamatan" class="form-control" disabled>
                                <option selected disabled value="">-pilih-</option>
                                <option value=""></option>
                            </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="kp" class="col-4 col-form-label">Kode Pos</label>
                    <div class="col-8">
                        <select name="kp_ayah" id="kp" class="form-control" disabled>
                                <option selected disabled value="">-pilih-</option>
                                <option value=""></option>
                            </select>
                    </div>
                </div>
                <div class="row mt-3 mb-4">
                    <label for="no_hp" class="col-4 col-form-group">Nomor Handphone</label>
                    <div class="col-8">
                        <input type="text" name="nohp_ayah" id="no_hp" class="form-control" value="{{$ayah->telepon}}" disabled>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <label for="nama_ibu" class="col-4 col-form-label">Nama Ibu *</label>
                    <div class="col-8">
                        <input name="nama_ibu" class="form-control form-control" type="text" value="{{$ibu->nama}}" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="tanggal_ibu" class="col-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-8">
                        <input type="date" name="tangggal_ibu" id="tanggal_ibu" class="form-control" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="pekerjaan_ibu" class="col-4 col-form-label">Pekerjaan</label>
                    <div class="col-8">
                        <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" value="{{$ibu->pekerjaan}}" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="agama_ibu" class="col-4 col-form-label">Agama</label>
                    <div class="col-8">
                        <input type="text" name="agama_ibu" id="agama_ibu" class="form-control" value="{{$ibu->agama}}" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="alamat_ibu" class="col-4 col-form-label">Alamat</label>
                    <div class="col-8">
                        <textarea name="alamat_ibu" id="alamat_ibu" class="form-control" disabled></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="provinsi_ibu" class="col-4 col-form-label">Provinsi</label>
                    <div class="col-8">
                        <select name="provinsi_ibu" id="provinsi_ibu" class="form-control" disabled>
                                <option selected disabled value="">-pilih-</option>
                                <option value=""></option>
                            </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="kab_ibu" class="col-4 col-form-label">Kabupaten/Kota</label>
                    <div class="col-8">
                        <select name="kab_ibu" id="kab_ibu" class="form-control" disabled>
                                <option selected disabled value="">-pilih-</option>
                                <option value=""></option>
                            </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="kec_ibu" class="col-4 col-form-label">Kecamatan</label>
                    <div class="col-8">
                        <select name="kec_ibu" id="kec_ibu" class="form-control" disabled>
                                <option selected disabled value="">-pilih-</option>
                                <option value=""></option>
                            </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="kp_ibu" class="col-4 col-form-label">Kode Pos</label>
                    <div class="col-8">
                        <select name="kp_ibu" id="kp_ibu" class="form-control" disabled>
                                <option selected disabled value="">-pilih-</option>
                                <option value=""></option>
                            </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="nohp_ibu" class="col-4 col-form-label">Nomor Handphone</label>
                    <div class="col-8">
                        <input type="text" name="nohp_ibu" id="nohp_ibu" class="form-control" value="{{$ibu->telepon}}" disabled>
                    </div>
                </div>
                <div class="judul mt-5 mb-5">
                    <h5><b># Asal Sekoalah</b></h5>
                </div>
                <div class="row mt-4">
                    <label for="nama_sekolah" class="col-4 col-form-label">Nama Sekolah</label>
                    <div class="col-8">
                        <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control " autofocus autocomplete="off" placeholder="Masukan nama sekolah . . ." value="{{$siswa->asalsekolah->nama_asal_sekolah}}" disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="alamat_sekolah" class="col-4 col-form-label">Alamat Lengkap</label>
                    <div class="col-8">
                        <input type="text" name="alamat_sekolah" id="alamat_sekolah" class="form-control" autocomplete="off" placeholder="Masukan Alamat Sekolah Asal . . ." disabled/>
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="provinsi_sekolah" class="col-4 col-form-label">Provinsi</label>
                    <div class="col-8">
                        <select name="provinsi_sekolah" id="provinsi_sekolah" class="form-control" disabled>
                            <option selected disabled value="">-Pilih-</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kabupaten_sekolah" class="col-4 col-form-label">Kabupaten/Kota</label>
                    <div class="col-8">
                        <select name="kabupaten_sekolah" id="kabupaten_sekolah" class="form-control" disabled>
                            <option selected disabled value="">-Pilih-</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kecamatan_sekolah" class="col-4 col-form-label">Kecamatan</label>
                    <div class="col-8">
                        <select name="kecamatan_sekolah" id="kecamatan_sekolah" class="form-control" disabled>
                            <option selected disabled value="">-Pilih-</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="kp_sekolah" class="col-4 col-form-label">Kode Pos</label>
                    <div class="col-8">
                        <select name="kp_sekolah" id="kp_sekolah" class="form-control" disabled>
                            <option selected disabled value="">-Pilih-</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <label for="nomor_sktb" class="col-4 col-form-label">Nomor SKTB / Rapor</label>
                    <div class="col-8">
                        <input type="text" name="nomor_sktb" id="nomor_sktb" class="form-control " autocomplete="off" placeholder="Masukan nomor raport . . ." value="{{$siswa->asalsekolah->sktb}}" disabled />
                    </div>
                </div>
                <div class="d-grid gap-2 col-12 mx-auto mt-5">
                    <button class="btn btn-success btn-simpan1" title="simpan data" id="btnSimpanDataDiri">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>   
@endsection
@section('javascript')
<script>
    window.onload = function() {
        document.getElementById("btnSimpanDataDiri").style.opacity = 0;
    }

    function editDataDiri(evt) {
        evt.preventDefault()
        $("#dataDiri input:text, input:file, select, textarea").prop("disabled", false);
        $("#btnSimpanDataDiri").css("opacity", "100%");
        $(".btn-edit1").prop("disabled", true);
    };
</script>
@endsection
