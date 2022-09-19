
@extends('dashboard.layouts.main')
@section('container')
@if (session()->has('berhasil')) 
             <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('berhasil') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
@elseif (session()->has('minatberhasil')) 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('minatberhasil') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
@endif


                <!-- Awal Edit Data Diri -->
                <div class="col-12">
                    <div class="card mb-5">
                        <div class="card-header border-dark head_dataDiri">
                            <h3>Data Diri</h3>
                            <button type="button" id="editBtnBio" class="btn" data-bs-toggle="modal" data-bs-target="#editdatadiri"><i class="fa-solid fa-pen-to-square"></i></button>
                        </div>
                        <div class="card-body edit-epw">
                            <form action="" class="row g-3">
                                <div class="row mt-4">
                                    <label for="jurusan" class="col-4">Jurusan</label>
                                    <div class="col-8">
                                        <input name="jurusan" id="jurusan_awal" class="form-control" type="text" value="{{ $biodata->jurusan }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="nisn" class="col-4 col-form-label">NISN</label>
                                    <div class="col-8">
                                        <input name="nisn" id="nisnAwal" class="form-control" type="text" value="{{ $biodata->nisn }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="namaLengkap" class="col-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-8">
                                        <input name="namaLengkap" id="namaLengkap" class="form-control" type="text" value="{{ $biodata->name }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="nama_panggilan" class="col-4 col-form-label">Nama Panggilan</label>
                                    <div class="col-8">
                                        <input name="nama_panggilan" id="namaPanggilan" class="form-control" type="text" value="{{ $biodata->nickname }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="gender" class="col-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-8">
                                        <input name="gender" id="gender_awal" class="form-control" type="text" value="{{ $biodata->gender }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="tempat_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                                    <div class="col-8">
                                        <input type="text" name="tempat_lahir" id="tempatLahir" class="form-control" value="{{ $biodata->birthplace }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="tanggal_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-8">
                                        <input type="date" name="tanggal_lahir" id="tanggalLahir" class="form-control" value="{{ $biodata->birthday }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="agama" class="col-4 col-form-label">Agama</label>
                                    <div class="col-8">
                                        <input type="text" name="agama" id="agamaAwal" class="form-control" value="{{ $biodata->religion }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="anak_ke" class="col-4">Anak Ke</label>
                                    <div class="col-8">
                                        <input type="text" name="anak_ke" id="anakKe_awal" class="form-control" value="{{ $biodata->anak_ke }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="status" class="col-4">Status Dalam Keluarga</label>
                                    <div class="col-8">
                                        <input name="status" id="statusAwal" class="form-control" type="text" value="{{ $biodata->status_keluarga }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="alamat" class="col-4">Alamat Lengkap</label>
                                    <div class="col-8">
                                        <textarea name="alamat" id="alamatAwal" class="form-control" disabled>{{ $address->alamat }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="provinsi" class="col-4">Provinsi</label>
                                    <div class="col-8">
                                        <input name="provinsi" id="provinsiAwal" class="form-control" type="text" value="{{ $address->provinsi }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="kabupaten" class="col-4">Kabupaten/Kota</label>
                                    <div class="col-8">
                                        <input name="kabupaten" id="kabupatenAwal" class="form-control" type="text" value="{{ $address->kabupaten }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="kecamatan" class="col-4">Kecamatan</label>
                                    <div class="col-8">
                                        <input name="kecamatan" id="kecamatanAwal" class="form-control" type="text" value="{{ $address->kecamatan }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="kp" class="col-4">Kode Pos</label>
                                    <div class="col-8">
                                        <input name="kp" id="kpAwal" class="form-control" type="text" value="{{ $address->kodepos }}" disabled>
                                    </div>
                                </div>
                                <input type="hidden" name="ppdb" id="ppdbAwal" value="{{ $biodata->ppdb_id }}">
                                
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mb-5 mt-2">
                        <div class="card-header border-dark head_minatBakat">
                            <h3>Minat dan Bakat</h3>
                            <button type="button" id="editBtnMinat" class="btn" data-bs-toggle="modal" data-bs-target="#editminat"><i class="fa-solid fa-pen-to-square"></i></button>
                        </div>
                        <div class="card-body edit-epw">
                            <form action="">
                                <div class="row mt-3">
                                    <label for="hobiAwal" class="col-4">Hobi</label>
                                    <div class="col-8">
                                        <input name="hobiAwal" id="hobiAwal" class="form-control" type="text" value="{{ $minat->hobi }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="bidangAwal" class="col-4">Bidang Yang Paling Digemari</label>
                                    <div class="col-8">
                                        <input name="bidangAwal" id="bidangAwal" class="form-control" type="text" value="{{ $minat->bidang_favorit }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="olahragaAwal" class="col-4">Olahraga Yang Paling Digemari</label>
                                    <div class="col-8">
                                        <input name="olahragaAwal" id="olahragaAwal" class="form-control" type="text" value="{{ $minat->olahraga }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="citaAwal" class="col-4">Cita-cita</label>
                                    <div class="col-8">
                                        <input type="text" name="citaAwal" id="citaAwal" class="form-control" value="{{ $minat->cita_cita }}" disabled>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- AKhir ubah data diri -->
            </div>

          
            <div class="modal fade" id="editdatadiri" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header head_ubahdatadiri">
                            <h4 class="modal-title">Ubah Data Diri</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="/dashboard/update_bio" method="post" class="row g-3">
                                @method('put')
                                @csrf
                                <div class="form-group mt-2">
                                    <label for="jurusan">Jurusan</label>
                                    <select name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror" type="text" autocomplete="off" >
                                    <option value="MIPA">MIPA</option>
                                    <option value="IPS">IPS</option>
                                    </select>
                                    @error('jurusan')
                                    <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input name="nisn" id="nisn" class="form-control @error('nisn') is-invalid @enderror" type="number" autocomplete="off">
                                    @error('nisn')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                    
                                <div class="form-group mt-2">
                                    <label for="name">Nama Lengkap</label>
                                    <input name="name" id="name" class="form-control @error('name') is-invalid @enderror" type="text" autocomplete="off">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nickname">Nama Panggilan</label>
                                    <input name="nickname" id="nickName" class="form-control @error('nickname') is-invalid @enderror" type="text" autocomplete="off">
                                    @error('nickname')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('gender')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="birthplace">Tempat Lahir</label>
                                    <input type="text" name="birthplace" id="tempat_lahir" class="form-control @error('birthplace') is-invalid @enderror"autocomplete="off" >
                                    @error('birthplace')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="birthday">Tanggal Lahir</label>
                                    <input type="date" name="birthday" id="tanggal_lahir" class="form-control @error('birthday') is-invalid @enderror" autocomplete="off">
                                    @error('birthday')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="religion">Agama</label>
                                    <select name="religion" id="agama" class="form-control @error('religion') is-invalid @enderror">
                                        <option selected disabled >-pilih-</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                    @error('religion')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="anak_ke">Anak Ke</label>
                                    <input type="number" name="anak_ke" id="anak_ke" class="form-control @error('anak_ke') is-invalid @enderror" autocomplete="off">
                                    @error('anak_ke')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="status_keluarga">Status Dalam Keluarga</label>
                                    <select name="status_keluarga" id="status_keluarga" class="form-control @error('status_keluarga') is-invalid @enderror">
                                        <option value="Anak Kandung">Anak Kandung</option>
                                        <option value="Anak Angkat">Anak Angkat</option>
                                    </select>
                                    @error('status_keluarga')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="alamat">Alamat Lengkap</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" autocomplete="off">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6 mt-2">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control @error('kecamatan')is-invalid @enderror" value='' id="kecamatan" name="kecamatan" autocomplete="off">
                                    @error('kecamatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="for"value="{{ $address->for }}" class="@error('for')is-invalid @enderror">
                                <div class="col-6 mt-2">
                                    <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                                    <input type="text" id="kabupaten" name="kabupaten" class="form-control @error('kabupaten')is-invalid @enderror" autocomplete="off">
                                    @error('kabupaten')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6 mt-2">
                                    <label for="provinsi" class="form-label">Provinsi</label>
                                    <input type="text" id="provinsi" name="provinsi" class="form-control  @error('provinsi')is-invalid @enderror" autocomplete="off">
                                    @error('provinsi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6 mt-2">
                                    <label for="kodepos">Kode Pos</label>
                                    <input type="number" name="kodepos" id="kode_pos" class="form-control @error('kodepos') is-invalid @enderror" autocomplete="off">
                                    @error('kodepos')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <input type="hidden" name="ppdb_id" id="ppdb" class="form-control @error('ppdb_id') is-invalid @enderror" value="{{ $biodata->ppdb_id }}">
                                    @error('nisn')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
              <!-- Modal edit minat bakat -->
              <div class="modal fade" id="editminat" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header headmodal_minat">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Data Minat Bakat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/dashboard/update_minat" method="POST">
                            @csrf
                            @method('put')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="hobi">Hobi</label>
                                    <input name="hobi" id="hobi" class="form-control" type="text" value="">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="bidang_favorit">Bidang Yang Paling Digemari</label>
                                    <select name="bidang_favorit" id="bidang_favorit" class="form-control">
                                        <option value="Sains">Sains</option>
                                        <option value="Musik">Musik</option>
                                        <option value="Sejarah">Sejarah</option>
                                        <option value="Olah Raga">Olah Raga</option>
                                        <option value="Seni">Seni</option>
                                        <option value="Masak">Masak</option>
                                        <option value="Matematika">Matematika</option>
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="olahraga">Olahraga Yang Paling Digemari</label>
                                    <select name="olahraga" id="olahraga" class="form-control">
                                        <option value="Sepak Bola">Sepak Bola</option>
                                        <option value="Futsal">Futsal</option>
                                        <option value="Bola Voli">Bola Voli</option>
                                        <option value="Basket">Basket</option>
                                        <option value="Renang">Renang</option>
                                        <option value="Catur">Catur</option>
                                        <option value="Bersepeda">Bersepeda</option>
                                        <option value="Tinju">Tinju</option>
                                        <option value="Badminton">Badminton</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="cita_cita">Cita-cita</label>
                                    <input type="text" name="cita_cita" id="cita_cita" class="form-control" value="">
                                </div>
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

            <!-- modal edit data diri -->
            
@endsection
    
