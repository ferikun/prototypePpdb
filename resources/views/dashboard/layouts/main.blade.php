<!doctype html>
<html lang="en">

<head>
    <title>Dashboard Rervisi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="/css/style_user.css">

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Header -->
        <header>
            <div class="header-title">
                <h3>SMA Garuda Pancasila</h3>
            </div>
        </header>
        <!-- Ahir Header -->

        <!-- Sidebar -->
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn" onclick="openNav()"></i>
            <i class="fas fa-times" id="cancel" onclick="closeNav()"></i>
        </label>
        <div class="sidebar" id="sideNavigation">
            <div class="header">{{ auth()->user()->name }}</div>
            <ul>
                <li><a href="/dashboard"><i class="fa-solid fa-house-user"></i>Home</a></li>
                <li><a href="/dashboard/profil"><i class="fa-solid fa-user me-3"></i>Profile</a></li>
                <li><a href="/dashboard/pembayaran"><i class="bi bi-coin me-3"></i>Pembayaran</a></li>
                <li><a href="/dashboard/dokumen"><i class="fa-solid fa-cloud-arrow-up me-3"></i>Upload Dokumen</a></li>
                <li><a href="/dashboard/pengumuman"><i class="fa-solid fa-bullhorn me-3"></i>Pengumuman</a></li>
                <li><a href="#"><i class="far fa-question-circle"></i>Tentang Sekolah</a></li>
                <form method="POST" action="/logout">
                    @csrf
                <li><button class="btn border-0 text-white" type="submit" style="text-decoration: none"><i class="bi bi-box-arrow-left me-3"></i>Keluar</button></li>
                </form>
            </ul>
        </div>
        <!-- Akhir Sidebar -->

        <!-- Page Content -->
        <div class="container" id="konten">
            <div class="row">
            @yield('container')

                <!-- menu pembayaran -->
                <!-- <div class="card-header bg-white border-dark">
                            <h4><i class="fa-regular fa-file-lines me-3"></i>Pembayaran</h4>
                        </div>
                        <div class="card-body edit-profil">
                            <div class="profil mt-2"><a href="">Pendaftaran</a></div>
                            <div class="profil mt-2"><a href="">Biaya Lainya</a></div>
                        </div> -->
                <!-- ahir menu pembayaran -->

                <!-- </div> -->
                <!-- </div> -->

                <!-- menu Upload Dokumen -->
                <!-- <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h4><i class="fa-regular fa-file-lines me-3"></i>Upload Dokumen Pelengkap</h4>
                        </div>
                        <div class="card-body upload">
                            <form action="">
                                <div class="mb-4">
                                    <label for="akte">Foto Copy Akte Kelahiran<i class="fa-solid fa-upload ms-4"></i></label>
                                    <input type="file" name="akte" id="akte" class="ms-4 input" onchange="getImage(this.value);">
                                    <p id="display-image"></p>
                                </div>
                                <div class="mb-4">
                                    <label for="kk">Foto Copy Kartu Keluarga<i class="fa-solid fa-upload ms-4"></i></label>
                                    <input type="file" name="kk" id="kk" class="ms-4 input" onchange="getImage2(this.value);">
                                    <p id="display-image2"></p>
                                </div>
                                <div class="d-grid gap-2 col-2">
                                    <a href="" class="btn btn-info btn-lg text-white">Kirim</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
                <!-- ahir menu Upload Dokumen -->

                {{-- <!-- menu Upload Dokumen -->
                <div class="col-10">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h4><i class="bi bi-megaphone-fill me-3"></i>Pengumuman</h4>
                        </div>
                        <div class="card-body pengumuman">
                            <table class="table table-bordered table-striped table-inverse table-responsive text-center">
                                <thead>
                                    <tr>
                                        <th width="150">No. Pendaftaran</th>
                                        <th>Nama Lengkap</th>
                                        <th>NISN</th>
                                        <th>Jurusan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01112313</td>
                                        <td>{{ auth()->user()->name }}</td>
                                        <td>89792347</td>
                                        <td>MIPA</td>
                                        <td style="background-color: yellow;">Lolos</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-grid gap-2 col-12 d-flex justify-content-end">
                                <a href="" class="btn btn-info btn-lg text-white cetak">Cetak</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- ahir menu Upload Dokumen -->

                <!-- Awal Ubah Email Dan Password -->
                <!-- <div class="col-4">
                    <div class="card mt-3 ms-2">
                        <div class="card-header bg-white border-dark">
                            <h5>Ubah Email & Password</h5>
                        </div>
                        <div class="card-body edit-epw">
                            <form action="">
                                <div class="form-group">
                                    <label for=""><i class="fa-solid fa-envelope me-3"></i>Email</label>
                                    <input class="form-control form-control-sm mt-2" type="email">
                                </div>
                                <div class="form-group mt-4">
                                    <label for=""><i class="fa-solid fa-key me-3"></i>Password</label>
                                    <input class="form-control form-control-sm mt-2" type="password">
                                </div>
                                <div class="d-grid gap-2 col-12 mx-auto">
                                    <button class="btn btn-primary btn-md masuk mt-3" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
                <!-- Akhir Ubah email pw -->

                <!-- Awal Edit Data Diri -->
                <!-- <div class="col-sm-4">
                    <div class="card mt-3 ms-2">
                        <div class="card-header bg-white border-dark">
                            <h5>Ubah Data Diri</h5>
                        </div>
                        <div class="card-body edit-epw">
                            <form action="" class="row g-3">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input name="nik" id="nik" class="form-control form-control-sm" type="email">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input name="nama_lengkap" id="nama_lengkap" class="form-control form-control-sm" type="text">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nama_panggilan">Nama Panggilan</label>
                                    <input name="nama_panggilan" id="nama_panggilan" class="form-control form-control-sm" type="text">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control form-control-sm">
                                        <option selected disabled value=""></option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="agama">Agama</label>
                                    <select name="agama" id="agama" class="form-control form-control-sm">
                                        <option selected disabled value=""></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="anak_ke">Anak Ke</label>
                                    <input type="text" name="anak_ke" id="anak_ke" class="form-control form-control-sm">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nama_panggilan">Status Dalam Keluarga</label>
                                    <select name="status" id="status" class="form-control form-control-sm">
                                        <option selected disabled value=""></option>
                                        <option value="Anak Kandung">Anak Kandung</option>
                                        <option value="Anak Angkat">Anak Angkat</option>
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="alamat">Alamat Lengkap</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="provinsi">Provinsi</label>
                                    <select name="provinsi" id="provinsi" class="form-control form-control-sm">
                                        <option selected disabled value="">-pilih-</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kabupaten">Kabupaten/Kota</label>
                                    <select name="kabupaten" id="kabupaten" class="form-control form-control-sm">
                                        <option selected disabled value="">-pilih-</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kecamatan">Kecamatan</label>
                                    <select name="kecamatan" id="kecamatan" class="form-control form-control-sm">
                                        <option selected disabled value="">-pilih-</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kp">Kode Pos</label>
                                    <select name="kp" id="kp" class="form-control form-control-sm">
                                        <option selected disabled value="">-pilih-</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <hr>
                                <div class="d-grid gap-2 col-12 mx-auto">
                                    <button class="btn btn-primary btn-md masuk" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card mt-3 ms-2">
                        <div class="card-header bg-white border-dark">
                            <h5>Ubah Minat dan Bakat</h5>
                        </div>
                        <div class="card-body edit-epw">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Hobi</label>
                                    <input name="hobi" class="form-control form-control-sm" type="text">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="">Bidang Yang Paling Digemari</label>
                                    <select name="bidang" id="bidang" class="form-control form-control-sm">
                                        <option selected disabled value=""></option>
                                        <option value="mipa">MIPA</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="">Olahraga Yang Paling Digemari</label>
                                    <select name="olahraga" id="olahraga" class="form-control form-control-sm">
                                        <option selected disabled value=""></option>
                                        <option value="sepak bola">Sepak Bola</option>
                                        <option value="futsal">Futsal</option>
                                        <option value="renang">Renang</option>
                                        <option value="voli">Voli</option>
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="cita">Cita-cita</label>
                                    <input type="text" name="cita" id="cita" class="form-control form-control-sm">
                                </div>
                                <hr>
                                <div class="d-grid gap-2 col-12 mx-auto">
                                    <button class="btn btn-primary btn-md simpan" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
                <!-- AKhir ubah data diri -->

                <!-- ubah data sekolah -->
                <!-- <div class="col-sm-4">
                    <div class="card mt-3 ms-2">
                        <div class="card-header bg-white border-dark">
                            <h5>Asal Sekolah</h5>
                        </div>
                        <div class="card-body edit-epw">
                            <form action="" class="row g-3">
                                <div class="form-group">
                                    <label for="">Nama Sekolah</label>
                                    <input name="nama_sekolah" class="form-control form-control-sm" type="text">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="provinsi">Provinsi</label>
                                    <select name="provinsi" id="provinsi" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kabupaten">Kabupaten/Kota</label>
                                    <select name="kabupaten" id="kabupaten" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kecamatan">Kecamatan</label>
                                    <select name="kecamatan" id="kecamatan" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kp">Kode Pos</label>
                                    <select name="kp" id="kp" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="form-group mt-2 mb-3">
                                    <label for="rapor">Nomor SKTB/Rapor</label>
                                    <input type="text" name="rapor" id="rapor" class="form-control form-control-sm">
                                </div>
                                <hr>
                                <div class="d-grid gap-2 col-12 mx-auto">
                                    <button class="btn btn-primary btn-md simpan" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
                <!-- akhir ubah data sekolah -->

                <!-- awal ubah data orang tua wali -->
                <!-- <div class="col-sm-4">
                    <div class="card mt-3 ms-2">
                        <div class="card-header bg-white border-dark">
                            <h5>Ubah Data Orang Tua</h5>
                        </div>
                        <div class="card-body edit-epw">
                            <form action="" class="row g-3">
                                <div class="form-group">
                                    <label for="">Nama Ayah *</label>
                                    <input name="nama_ayah" class="form-control form-control-sm" type="text">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="tanggal_ayah">Tanggal Lahir</label>
                                    <input type="date" name="tangggal_ayah" id="tanggal_ayah" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="pekerjaan_ayah">Pekerjaan</label>
                                    <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value="karyawan">Karyawan</option>
                                            <option value="pns">PNS</option>
                                            <option value="wiraswasta">Wiraswasta</option>
                                        </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="agama_ayah">Agama</label>
                                    <select name="agama_ayah" id="agama_ayah" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value="islam">Islam</option>
                                            <option value="protestan">Protestan</option>
                                            <option value="katholik">Katholik</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                            <option value="konghucu">Konghucu</option>
                                        </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="provinsi">Provinsi</label>
                                    <select name="provinsi" id="provinsi" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kabupaten">Kabupaten/Kota</label>
                                    <select name="kabupaten" id="kabupaten" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kecamatan">Kecamatan</label>
                                    <select name="kecamatan" id="kecamatan" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kp">Kode Pos</label>
                                    <select name="kp" id="kp" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="form-group mt-2 mb-3">
                                    <label for="no_hp">Nomor Handphone</label>
                                    <input type="text" name="no_hp" id="no_hp" class="form-control form-control-sm">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Ibu *</label>
                                    <input name="nama_ibu" class="form-control form-control-sm" type="text">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="tanggal_ibu">Tanggal Lahir</label>
                                    <input type="date" name="tangggal_ibu" id="tanggal_ibu" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="pekerjaan_ibu">Pekerjaan</label>
                                    <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value="karyawan">Karyawan</option>
                                            <option value="pns">PNS</option>
                                            <option value="wiraswasta">Wiraswasta</option>
                                            <option value="ibu rumah tangga">Ibu Rumah Tangga</option>
                                        </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="agama_ibu">Agama</label>
                                    <select name="agama_ibu" id="agama_ibu" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value="islam">Islam</option>
                                            <option value="protestan">Protestan</option>
                                            <option value="katholik">Katholik</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                            <option value="konghucu">Konghucu</option>
                                        </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="alamat_ibu">Alamat</label>
                                    <input type="text" name="alamat_ibu" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="provinsi_ibu">Provinsi</label>
                                    <select name="provinsi_ibu" id="provinsi_ibu" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kab_ibu">Kabupaten/Kota</label>
                                    <select name="kab_ibu" id="kab_ibu" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kec_ibu">Kecamatan</label>
                                    <select name="kec_ibu" id="kec_ibu" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kp_ibu">Kode Pos</label>
                                    <select name="kp_ibu" id="kp_ibu" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="form-group mt-2 mb-3">
                                    <label for="nohp_ibu">Nomor Handphone</label>
                                    <input type="text" name="nohp_ibu" id="nohp_ibu" class="form-control form-control-sm">
                                </div>
                                <hr>
                                <div class="d-grid gap-2 col-12 mx-auto">
                                    <button class="btn btn-primary btn-md simpan" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
                <!-- ahir ubah data orang tua-->

                <!-- data wali -->
                <!-- <div class="col-sm-4">
                    <div class="card mt-3 ms-2">
                        <div class="card-header bg-white border-dark">
                            <h5>Data Wali</h5>
                        </div>
                        <div class="card-body edit-epw">
                            <form action="" class="row g-3">
                                <div class="form-group">
                                    <label for="nik_wali">NIK</label>
                                    <input name="nik_wali" class="form-control form-control-sm" type="text">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nama_wali">Nama Lengkap</label>
                                    <input type="text" name="nama_wali" class="form-control form-control-sm">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="jk_wali">Jenis Kelamin</label>
                                    <select name="jk_wali" id="jk_wali" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="tempatlahir_wali">Tempat Lahir</label>
                                    <input type="text" name="tempatlahir_wali" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="tgllahir_wali">Tanggal Lahir</label>
                                    <input type="date" name="tgllahir_wali" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="agama_wali">Agama</label>
                                    <select name="agama_wali" id="agama_wali" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                            <option value="Islam">Islam</option>
                                            <option value="Katholik">Katholik</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Katholik</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="status_wali">Status Dalam Keluarga</label>
                                    <select name="status_wali" id="status_wali" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value="Ayah Kandung">Ayah Kandung</option>
                                            <option value="Ibu Kandung">Ibu Kandung</option>
                                            <option value="Lainya">Lainya</option>
                                        </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="alamat_wali">Alamat</label>
                                    <input type="text" name="alamat_wali" id="alamat_wali" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="prov_wali">Provinsi</label>
                                    <select name="prov_wali" id="prov_wali" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kab_wali">Kabupaten/Kota</label>
                                    <select name="kab_wali" id="kab_wali" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kec_wali">Kecamatan</label>
                                    <select name="kec_wali" id="kec_wali" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <label for="kp_wali">Kode Pos</label>
                                    <select name="kp_wali" id="kp_wali" class="form-control form-control-sm">
                                            <option selected disabled value="">-pilih-</option>
                                            <option value=""></option>
                                        </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nohp_wali">Nomor Hadphone</label>
                                    <input type="text" name="nohp_wali" id="nohp_wali" class="form-control form-control-sm">
                                </div>
                                <hr>
                                <div class="d-grid gap-2 col-12 mx-auto">
                                    <button class="btn btn-primary btn-md simpan" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
                <!-- ahir data wali -->

                <!-- pembayaran pendaftaran -->
                <!-- <div class="col-8">
                    <div class="card mt-3 ms-2">
                        <div class="card-header bg-white border-dark">
                            <h5>Biaya Pendaftaran</h5>
                        </div>
                        <div class="card-body">
                            <div class="pembayaran1">
                                <h6>Pendaftaran</h6>
                                <p>100.000</p>
                            </div>
                            <hr>
                            <div class="pembayaran1">
                                <p>Total:</p>
                                <p>Rp.100.000</p>
                            </div>
                        </div>
                        <div class="text-end me-2 mb-3">
                            <a href="#" class="btn btn-lg btn-info text-white">Bayar</a>
                        </div>
                    </div>
                </div> -->
                <!-- ahir pembayaran pendaftaran -->

                <!-- biaya lainya -->
                <!-- <div class="col-8">
                    <div class="card mt-3 ms-2">
                        <div class="card-header bg-white border-dark">
                            <h5>Biaya Pendaftaran</h5>
                        </div>
                        <div class="card-body">
                            <div class="pembayaran1">
                                <h6>Uang Pangkal Gedung</h6>
                                <p>3.000.000</p>
                            </div>
                            <div class="pembayaran1">
                                <h6>Uang Seragam</h6>
                                <p>1.000.000</p>
                            </div>
                            <div class="pembayaran1">
                                <h6>SPP (bulan pertama)</h6>
                                <p>150.000</p>
                            </div>
                            <hr>
                            <div class="pembayaran1">
                                <p>Total:</p>
                                <p>Rp.4.150.000</p>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-3 btn-bayar">
                            <a class="btn btn-success btn-lg masuk" href="#">Bayar</a>
                        </div>
                    </div>
                </div> -->
                <!-- ahir biaya lainya -->


            </div>
        </div>
        <!-- Akhir Page Content -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script>
        function openNav() {
            document.getElementById("sideNavigation").style.width = "250px";
            document.getElementById("konten").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("sideNavigation").style.width = "0";
            document.getElementById("konten").style.marginLeft = "0";
        }
    </script>
</body>

</html>