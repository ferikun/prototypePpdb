<!doctype html>
<html lang="en">

<head>
    <title>Pendaftaran | Form Data Diri</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bio_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <!-- form Register -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center" id="headFormulir">
                        <h2>Formulir Pendaftaran</h2>
                    </div>
                    <form action="/createbio" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-4">
                                <div class="card-body border-end border-start border-bottom border-info">
                                    <div class="header text-center bg-info text-white mt-4 mb-4">
                                        <h3>Data Diri</h3>
                                        <hr>
                                    </div>
                                    <div class="mb-md-5 mt-md-2 pb-2">
                                        <div class="row g-2">
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <div class="form-outline form-white mb-4 mt-2">
                                                <label for="nik" class="mb-2">NISN</label>
                                                <input type="text" name="nisn" id="nik" class="form-control " autocomplete="off" placeholder="Masukan NIK . . ." />
                                            </div>
                                            <div class="form-outline form-white mb-4 mt-2">
                                                <label for="nama" class="mb-2">Nama Lengkap</label>
                                                <input type="text" name="name" id="nama" class="form-control " autocomplete="off" placeholder="Masukan Nama lengkap anda . . ." />
                                            </div>
                                            <div class="form-outline form-white mb-4 mt-2">
                                                <label for="nick" class="mb-2">Nama Panggilan</label>
                                                <input type="text" name="nickname" id="nick" class="form-control " autocomplete="off" placeholder="Masukan Nama panggilan anda . . ." />
                                            </div>
                                            <div class="form-outline form-white mb-4 mt-2 jk">
                                                <label for="jenis_kelamin" class="mb-2">Jenis Kelamin</label>
                                                <select name="gender" id="jenis_kelamin" class="form-control ">
                                                    <option selected disabled value="">Pilih...</option>
                                                    <option value="laki-laki">Laki-laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-4 mt-2">
                                                <label for="tempat_lahir" class="form-label">Tempat lahir</label>
                                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control " placeholder="tempat lahir">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control ">
                                            </div>
                                            <div class="form-outline form-white mb-4 mt-2 agama">
                                                <label for="agama" class="mb-2">Agama</label>
                                                <select name="agama" id="agama" class="form-control ">
                                                    <option selected disabled value="">Pilih...</option>
                                                    <option value="laki-laki">Islam</option>
                                                    <option value="perempuan">Katholik</option>
                                                    <option value="perempuan">Protestan</option>
                                                    <option value="perempuan">Hindu</option>
                                                    <option value="perempuan">Budha</option>
                                                    <option value="perempuan">Konghucu</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="anak_ke" class="form-label">Anak Ke</label>
                                                <input type="text" name="anak_ke" id="anak_ke" class="form-control " placeholder="anak ke">
                                            </div>
                                            <div class="col-md-6 mb-4 status">
                                                <label for="status" class="form-label">Status</label>
                                                <select class="form-control " name="status_keluarga" id="status" required>
                                                    <option selected disabled value="">Pilih...</option>
                                                    <option>Anak Kandung</option>
                                                    <option>Anak Angkat</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="bio_id" value="">
                                            <div class="form-outline form-white mb-4">
                                                <label for="alamat" class="mb-2">Alamat Lengkap</label>
                                                <input type="text" name="alamat" id="alamat" class="form-control " autocomplete="off" placeholder="Alamat langkap. . ." />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="provinsi" class="form-label">Provinsi</label>
                                                <input type="text" name="provinsi" c>
                                                {{-- <select name="provinsi" id="provinsi" class="form-control ">
                                                    <option selected disabled value="">-Pilih-</option>
                                                    <option value=""></option>
                                                </select> --}}
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                                                <select name="kabupaten" id="kabupaten" class="form-control ">
                                                    <option selected disabled value="">-Pilih-</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                                <select name="kecamatan" id="kecamatan" class="form-control ">
                                                    <option selected disabled value="">-Pilih-</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kp" class="form-label">Kode Pos</label>
                                                <select name="kp" id="kode_pos" class="form-control ">
                                                    <option selected disabled value="">-Pilih-</option>
                                                </select>
                                            </div>
                                            <div class=" mt-4">
                                                <label class="" for="inputGroupFile01">Pilih Foto Profil</label>
                                                <input type="file" name="foto_profil" class="form-control" id="inputGroupFile01">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-4">
                                <div class="card-body border-start border-end border-bottom border-info">
                                    <div class="header text-center bg-info text-white mt-4">
                                        <h4>Asal Sekolah</h4>
                                        <hr>
                                    </div>
                                    <div class="row g-2">
                                        <div class="form-outline form-white mb-4 mt-4">
                                            <label for="nama_sekolah" class="mb-2">Nama Sekolah</label>
                                            <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control " autocomplete="off" placeholder="Masukan nama sekolah . . ." />
                                        </div>
                                        <div class="form-outline form-white mb-4 mt-2">
                                            <label for="alamat_sekolah" class="mb-2">Alamat Lengkap</label>
                                            <input type="text" name="alamat_asal_sekolah" id="alamat_sekolah" class="form-control " autocomplete="off" placeholder="Masukan NIK . . ." />
                                        </div>
                                        <div class="col-md-6 mb-4 mt-2">
                                            <label for="provinsi_sekolah" class="form-label">Provinsi</label>
                                            <select name="provinsi_sekolah" id="provinsi_sekolah" class="form-control ">
                                            <option selected disabled value="">-Pilih-</option>
                                            <option value=""></option>
                                        </select>
                                        </div>
                                        <div class="col-md-6 mb-4 mt-2">
                                            <label for="kabupaten_sekolah" class="form-label">Kabupaten/Kota</label>
                                            <select name="kabupaten_sekolah" id="kabupaten_sekolah" class="form-control ">
                                        <option selected disabled value="">-Pilih-</option>
                                    </select>
                                        </div>
                                        <div class="col-md-6 mb-4 mt-2">
                                            <label for="kecamatan_sekolah" class="form-label">Kecamatan</label>
                                            <select name="kecamatan_sekolah" id="kecamatan_sekolah" class="form-control ">
                                                <option selected disabled value="">-Pilih-</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-4 mt-2">
                                            <label for="kp_sekolah" class="form-label">Kode Pos</label>
                                            <select name="kp_sekolah" id="kp_sekolah" class="form-control">
                                            <option selected disabled value="">-Pilih-</option>
                                        </select>
                                        </div>
                                        <div class="form-outline form-white mb-4 mt-2">
                                            <label for="nomor_sktb" class="mb-2">Nomor SKTB / Rapor</label>
                                            <input type="text" name="nomor_sktb" id="nomor_sktb" class="form-control " autocomplete="off" placeholder="Masukan nama sekolah . . ." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card-body border-start border-end border-bottom border-info">
                                    <div class="header text-center bg-info text-white mt-4">
                                        <h4>Data Orang Tua</h4>
                                        <hr>
                                    </div>
                                    <div class="row g-2">
                                        <div class="form-group mb-4 mt-4">
                                            <label for="" class="mb-2">Nama Ayah *</label>
                                            <input name="nama_ayah" class="form-control form-control" type="text">
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="tanggal_ayah" class="mb-2">Tanggal Lahir</label>
                                            <input type="date" name="tangggal_ayah" id="tanggal_ayah" class="form-control form-control">
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="pekerjaan_ayah" class="mb-2">Pekerjaan</label>
                                            <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value="karyawan">Karyawan</option>
                                                <option value="pns">PNS</option>
                                                <option value="wiraswasta">Wiraswasta</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4 mt-2">
                                            <label for="agama_ayah">Agama</label>
                                            <select name="agama_ayah" id="agama_ayah" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value="islam">Islam</option>
                                                <option value="protestan">Protestan</option>
                                                <option value="katholik">Katholik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="budha">Budha</option>
                                                <option value="konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4 mt-2">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat_ayah" class="form-control form-control">
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="provinsi">Provinsi</label>
                                            <select name="provinsi_ayah" id="provinsi" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="kabupaten">Kabupaten/Kota</label>
                                            <select name="kabupaten_ayah" id="kabupaten" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="kecamatan">Kecamatan</label>
                                            <select name="kecamatan_ayah" id="kecamatan" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="kp">Kode Pos</label>
                                            <select name="kp_ayah" id="kp" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-2 mb-3">
                                            <label for="no_hp">Nomor Handphone</label>
                                            <input type="text" name="nohp_ayah" id="no_hp" class="form-control form-control">
                                        </div>
                                        <div class="form-group mb-4 mt-2">
                                            <label for="">Nama Ibu *</label>
                                            <input name="nama_ibu" class="form-control form-control" type="text">
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="tanggal_ibu">Tanggal Lahir</label>
                                            <input type="date" name="tangggal_ibu" id="tanggal_ibu" class="form-control form-control">
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="pekerjaan_ibu">Pekerjaan</label>
                                            <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value="karyawan">Karyawan</option>
                                                <option value="pns">PNS</option>
                                                <option value="wiraswasta">Wiraswasta</option>
                                                <option value="ibu rumah tangga">Ibu Rumah Tangga</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4 mt-2">
                                            <label for="agama_ibu">Agama</label>
                                            <select name="agama_ibu" id="agama_ibu" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value="islam">Islam</option>
                                                <option value="protestan">Protestan</option>
                                                <option value="katholik">Katholik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="budha">Budha</option>
                                                <option value="konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4 mt-2">
                                            <label for="alamat_ibu">Alamat</label>
                                            <input type="text" name="alamat_ibu" class="form-control form-control">
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="provinsi_ibu">Provinsi</label>
                                            <select name="provinsi_ibu" id="provinsi_ibu" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="kab_ibu">Kabupaten/Kota</label>
                                            <select name="kab_ibu" id="kab_ibu" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="kec_ibu">Kecamatan</label>
                                            <select name="kec_ibu" id="kec_ibu" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-6 mb-4 mt-2">
                                            <label for="kp_ibu">Kode Pos</label>
                                            <select name="kp_ibu" id="kp_ibu" class="form-control form-control">
                                                <option selected disabled value="">-pilih-</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4 mt-2">
                                            <label for="nohp_ibu">Nomor Handphone</label>
                                            <input type="text" name="nohp_ibu" id="nohp_ibu" class="form-control form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="d-grid gap-2 col-12 mx-auto mt-5">
                            <button class="btn btn-primary btn-lg masuk" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>