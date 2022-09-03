@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-6">
    <div class="card">
        <div class="card-header head_infoSekolah">
            <h3>Informasi Sekolah</h3>
            <button onclick="edit1()" type="button" class="btn" id="btnEdit" data-bs-toggle="modal" data-bs-target="#infoSekolah"><i class="fa-solid fa-pen-to-square"></i></button>
        </div>
        <div class="card-body">
            @if (session()->has('informasi'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>  
            @endif

            <form method="" action="" class="row g-2">
                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input value="{{$sekolah->nama_sekolah}}" type="text" name="nama_sekolah" id="namaSekolah" class="form-control" value="SMP Taruna" disabled>
                </div>

                <div class="form-group">
                    <label for="alamat_lengkap">Alamat Lengkap</label>
                    <input value="{{$sekolah->alamat->alamat}}" type="text" name="alamat_lengkap" id="alamatSekolah" class="form-control" value="Jl. Jalan Jalan" disabled>
                </div>

                <div class="form-group col-6">
                    <label for="provinsi">Provinsi</label>
                    <input value="{{$sekolah->alamat->provinsi}}" type="text" name="provinsi" id="provinsi" class="form-control" disabled value="Jawa Tenggara">
                </div>
                <div class="form-group col-6">
                    <label for="kabupaten">Kabupaten/Kota</label>
                    <input value="{{$sekolah->alamat->kabupaten}}" type="text" name="kabupaten" id="kabupaten" class="form-control" disabled value="Jonggol">
                </div>

                <div class="form-group col-6">
                    <label for="kecamatan">Kecamatan</label>
                    <input value="{{$sekolah->alamat->kecamatan}}" type="text" name="kecamatan" id="kecamatan" class="form-control" disabled value="Madrid">
                </div>

                <div class="form-group col-6">
                    <label for="kode_pos">Kode Pos</label>
                    <input value="{{$sekolah->alamat->kode_pos}}" type="text" name="kode_pos" id="kode_pos" class="form-control" disabled value="23423">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir settings info Sekolah -->

<!-- settings kontak -->
<div class="col-6">
    <div class="card">
        <div class="card-header head_infoSekolah">
            <h3>Kontak Sekolah</h3>
            <button onclick="edit2()" type="button" class="btn" id="btnEdit2" data-bs-toggle="modal" data-bs-target="#kontak"><i class="fa-solid fa-pen-to-square"></i></button>
        </div>
        <div class="card-body">
            @if (session()->has('kontak'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('kontak') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>  
            @endif
            <form method="" action="" class="row g-2">
                <div class="form-group">
                    <label for="telp">Telepon</label>
                    <input value="{{$sekolah->kontak->telepon}}" type="text" name="telp" id="telp" class="form-control" value="021737123" disabled>
                </div>

                <div class="form-group">
                    <label for="wa">Whatsapp</label>
                    <input value="{{$sekolah->kontak->WaSekolah}}" type="text" name="wa" id="wa" class="form-control" value="0852371271382" disabled>
                </div>

                <div class="form-group">
                    <label for="wa_admin">WA Admin Pendaftaran</label>
                    <input value="{{$sekolah->kontak->WaAdmin}}" type="text" name="wa_admin" id="wa_admin" class="form-control" disabled value="085276736234">
                </div>
                <div class="form-group ">
                    <label for="wa_bp">WA BP</label>
                    <input value="{{$sekolah->kontak->WaBp}}" type="text" name="wa_bp" id="wa_bp" class="form-control" disabled value="082378238432">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir settings kontak -->

<!-- upload img -->
<div class="col-5 upload">
    <div class="card" id="card_upload">
        <div class="card-header head_logo">
            <h3>Logo Sekolah</h3>
            <div class="tombol">
                <button type="button" class="btn" id="btnUpload" data-bs-toggle="modal" data-bs-target="#upload"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="submit" name="hapus" class="btn" id="hapus_logo"><i class="fa-solid fa-trash"></i></button>
            </div>
        </div>
        <div class="card-body">
            <img src="{{ asset('storage').'/'. $sekolah->image }}" class="card-img-top" alt="Logo">
        </div>
    </div>
</div>
<!-- akhir upload img -->

</div>
<!-- modal edit info sekolah  -->
<div class="modal fade" id="infoSekolah" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="staticBackdropLabel">Edit Informasi Sekolah</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/dashboard/sekolah/{{$sekolah->id}}" method="POST" class="row g-2" >
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_asalSekolah">Nama Sekolah</label>
                    <input name="nama_sekolah" id="nama_sekolah" class="form-control" type="text">
                </div>
                <div class="form-group mt-2">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control">
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="provinsi">Provinsi</label>
                    <select name="provinsi" id="provinsi" na class="form-control">
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                    </select>
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="kabupaten">Kabupaten/Kota</label>
                    <select name="kabupaten" id="kabupaten" class="form-control">
                        <option value="Brebes">Brebes</option>
                        <option value="Tegal">Tegal</option>
                    </select>
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="kecamatan">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" class="form-control">
                        <option value="Bumiayu">Bumiayu</option>
                        <option value="Paguyangan">Paguyangan</option>
                        <option value="Bantarkawung">Bantarkawung</option>
                    </select>
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="kode_pos">Kode Pos</label>
                    <select name="kode_pos" id="kode_pos" class="form-control">
                        <option value="52271">52271</option>
                        <option value="52274">52274</option>
                        <option value="52234">52234</option>
                    </select>
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
<!-- modal edit kontak  -->
<div class="modal fade" id="kontak" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="staticBackdropLabel">Edit Kontak</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/dashboard/kontak-edit/{{$sekolah->id}}" method="POST" class="row g-2">
                @csrf
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" name="telepon" id="telepon" class="form-control">
                </div>

                <div class="form-group">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="text" name="whatsapp" id="whatsapp" class="form-control">
                </div>

                <div class="form-group">
                    <label for="waAdmin">WA Admin Pendaftaran</label>
                    <input type="text" name="WaAdmin" id="waAdmin" class="form-control">
                </div>
                <div class="form-group ">
                    <label for="waBP">WA BP</label>
                    <input type="text" name="WaBp" id="waBP" class="form-control">
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
<!-- modal Upload  -->
<div class="modal fade" id="upload" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="staticBackdropLabel">Edit Kontak</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/dashboard/upload-image/{{$sekolah->id}}" method="POST" class="row g-2" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="upload">Pilih Logo</label>
                    <input type="file" name="upload" id="upload" class="form-control">
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

<script>
    function edit1() {
        console.log('test');
        let nama_sekolah = document.getElementById("namaSekolah").value;
        document.getElementById("nama_sekolah").value = nama_sekolah;
        let alamat = document.getElementById("alamatSekolah").value;
        document.getElementById("alamat").value = alamat;
        let provinsi = document.getElementById("provinsi").value;
        document.getElementById("provinsi").value = provinsi;
        let kabupaten = document.getElementById("kabupaten").value;
        document.getElementById("kabupaten").value = kabupaten;
        let kecamatan = document.getElementById("kecamatan").value;
        document.getElementById("kecamatan").value = kecamatan;
        let kode_pos = document.getElementById("kode_pos").value;
        document.getElementById("kode_pos").value = kode_pos;
    }
</script>
<script>
    function edit2() {
        let telepon = document.getElementById("telp").value;
        document.getElementById("telepon").value = telepon;
        let whatsapp = document.getElementById("wa").value;
        document.getElementById("whatsapp").value = whatsapp;
        let waAdmin = document.getElementById("wa_admin").value;
        document.getElementById("waAdmin").value = waAdmin;
        let waBP = document.getElementById("wa_bp").value;
        document.getElementById("waBP").value = waBP;
    }
</script>

@endsection