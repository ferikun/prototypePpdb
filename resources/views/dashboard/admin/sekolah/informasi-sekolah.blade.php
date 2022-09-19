
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
                {{ session('informasi') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>  
            @endif

            <form method="" action="" class="row g-2">
                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input value="{{$sekolah->nama_sekolah}}" type="text" name="nama_sekolah" id="namaSekolah" class="form-control" disabled >
                </div>

                <div class="form-group">
                    <label for="alamat_lengkap">Alamat Lengkap</label>
                    <input value="{{$sekolah->alamat->alamat}}" type="text" name="alamat_lengkap" id="alamatSekolah" class="form-control" disabled>
                </div>

                <div class="form-group col-6">
                    <label for="provinsi">Provinsi</label>
                    <input id="provOutput" value="{{$sekolah->alamat->provinsi}}" type="text" name="provinsi" id="provinsi" class="form-control" disabled>
                </div>
                <div class="form-group col-6">
                    <label for="kabupaten">Kabupaten/Kota</label>
                    <input id="kabOutput" value="{{$sekolah->alamat->kabupaten}}" type="text" name="kabupaten" id="kabupaten" class="form-control" disabled>
                </div>

                <div class="form-group col-6">
                    <label for="kecamatan">Kecamatan</label>
                    <input id="kecOutput" value="{{$sekolah->alamat->kecamatan}}" type="text" name="kecamatan" id="kecamatan" class="form-control" disabled>
                </div>

                <div class="form-group col-6">
                    <label for="kode_pos">Kode Pos</label>
                    <input value="{{$sekolah->alamat->kode_pos}}" type="text" name="kode_pos" id="zip" class="form-control" disabled value="23423">
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
        @error('upload')
        <div id="liveAlertPlaceholder"></div>
            <button type="button" class="btn btn-danger" id="liveAlertBtn"><strong>Failed! </strong>{{ $message }}!!!</button>
        @enderror
        <div class="card-body">

            @if ($sekolah->image)
                <img src="{{ asset('storage').'/'. $sekolah->image }}" class="card-img-top rounded-circle" alt="Logo">
            @else
                <img src="/img/default.jpg" class="card-img-top rounded-circle" alt="Logo">
            @endif
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
                    <input name="nama_sekolah" id="nama_sekolah" class="form-control @error('nama_sekolah') is-invalid @enderror" type="text" required>
                    @error('nama_sekolah')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" required>
                    @error('alamat')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="provinsi">Provinsi</label>
                    <select name="provinsi" class="form-select " id="provinsi-select">
                        <option  selected>Pilih Provinsi</option>
                    </select>
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="kabupaten">Kabupaten/Kota</label>
                    <select name="kabupaten" class="form-select " id="kabupaten-select">
                        <option selected><button>Pilih Kabupaten</button></option>
                    </select>
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="kecamatan">Kecamatan</label>
                    <select name="kecamatan" class="form-select" id="kecamatan-select">
                        <option selected><button>Pilih Kecamatan</button></option>
                    </select>
                </div>
                <div class="col-sm-6 mt-2">
                    <label for="kode_pos">Kode Pos</label>
                    <input type="text" class="form-control" id="kp" name="kode_pos">
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
                    <input type="text" name="telepon" id="telepon" class="form-control @error('telepon') is-invalid @enderror" required>
                    @error('telepon')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="text" name="whatsapp" id="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" required>
                    @error('whatsapp')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="waAdmin">WA Admin Pendaftaran</label>
                    <input type="text" name="WaAdmin" id="waAdmin" class="form-control @error('WaAdmin') is-invalid @enderror" required>
                    @error('WaAdmin')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="waBP">WA BP</label>
                    <input type="text" name="WaBp" id="waBP" class="form-control @error('WaBp') is-invalid @enderror" required>
                    @error('WaBp')
                    <div id="validationServer03Feedback" class="invalid-feedback">
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
        let nama_sekolah = document.getElementById("namaSekolah").value;
        document.getElementById("nama_sekolah").value = nama_sekolah;
        let alamat = document.getElementById("alamatSekolah").value;
        document.getElementById("alamat").value = alamat;
        let kode_pos = document.getElementById("zip").value;
        document.getElementById("kp").value = kode_pos;
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
@section('javascript')
{{-- mengambil data dari api --}}
<script src="/js/ApiAlamat.js"></script>
 
<script> //menampilkan data dari api ke output alamat dan kode pos
    //provinsi output

//function menampilkan data dari apo
function ajaxapi(param,id){
    $.ajax({
        url: 'http://dev.farizdotid.com/api/daerahindonesia'+param,
        type: 'get',
        dataType: 'json',


        success: function(data){
            $(id).val(data.nama);
        }
    })
}

const provinsi = document.getElementById('provOutput');
const kabupaten = document.getElementById('kabOutput');
const kecamatan = document.getElementById('kecOutput');

const data = [
    '/provinsi/'+provinsi.value,
    '/kota/'+kabupaten.value,
    '/kecamatan/'+kecamatan.value
];

const id = [
    '#provOutput',
    '#kabOutput',
    '#kecOutput'
]

for (let i = 0; i < data.length; i++) {
  ajaxapi(data[i],id[i]);
}

</script>
@endsection