<!doctype html>
<html lang="en">

<head>
    <title>Pendaftaran | Form Data Diri</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <!-- form Register -->
            <div class="col-10">
                <div class="card">
                    <div class="card-header text-center mb-4" id="headFormulir">
                        <h2>Formulir Pendaftaran</h2>
                    </div>
                    <form action="/dashboard/create_bio" method="post">
                        @csrf
                    <div class="row">
                        <div class="head-form text-center mb-4">
                                <h4>SMA SEMANGAT JUANG</h4>
                                <h5>Tahun Pelajaran 2022/2023</h5>

                                {{-- <div class="pilihJurusan ">
                                    <label for="jurusan">Pilih Jurusan: </label>
                                    <select name="jurusan" id="jurusan" class="jurusan @error('jurusan') is-invalid @enderror"  required autofocus>
                                        <option disabled selected value="">Pilih jurusan</option>
                                        <option value="MIPA">MIPA</option>     
                                        <option value="IPS">IPS</option> 
                                    </select>
                                </div> --}}

                                <div class="form-outline form-white mt-2 col-md-6 mx-auto " >
                                    <label for="jurusan" class="mb-2 fs-4">Jurusan</label>
                                    <select name="jurusan" id="jurusan" class="form-select @error('jurusan') is-invalid @enderror ">
                                        <option selected disabled >Pilih...</option>
                                        <option value="MIPA" @if (old('jurusan') == 'MIPA') {{ 'selected' }}@endif>MIPA</option>
                                        <option value="IPS" @if (old('jurusan')== 'IPS') {{ 'selected' }}@endif>IPS</option>
                                    </select>
                                    @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                        </div>
                        <div class="bodyForm">
                            <div class="card-body">
                                <div class="header text-center bg-info text-white mt-1 mb-4">
                                    <h3>Data Diri</h3>
                                    <hr>
                                </div>
                                <div class="mb-md-5 mt-md-2 pb-2">
                                        <div class="row g-2">
                                            <div class="form-outline form-white mb-4 mt-2">
                                                <label for="nisn" class="mb-2">NISN</label>
                                                <input type="number" name="nisn" id="nisn" class="form-control @error('nisn') is-invalid @enderror " autocomplete="off" placeholder="Masukan 10 Digit NISN " value="{{ old('nisn') }}" />
                                                @error('nisn')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-outline form-white mb-4 mt-2">
                                                <label for="name" class="mb-2">Nama Lengkap</label>
                                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror " autocomplete="off" placeholder="Masukan Nama lengkap anda . . ." value="{{ old('name') }}" required  />
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-outline form-white mb-4 mt-2">
                                                <label for="nickname" class="mb-2">Nama Panggilan</label>
                                                <input type="text" name="nickname" id="nickname" class="form-control @error('nickname') is-invalid @enderror " autocomplete="off" placeholder="Masukan Nama panggilan anda . . ." value="{{ old('nickname') }}" required />
                                                @error('nickname')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-outline form-white mb-4 mt-2 jk">
                                                <label for="gender" class="mb-2">Jenis Kelamin</label>
                                                <select name="gender" id="gender" class="form-select @error('gender') is-invalid @enderror ">
                                                    <option selected disabled value="">Pilih...</option>
                                                    <option value="Laki-laki" @if (old('gender') == 'Laki-laki') {{ 'selected' }}@endif>Laki-laki</option>
                                                    <option value="Perempuan" @if (old('gender')== 'Perempuan') {{ 'selected' }}@endif>Perempuan</option>
                                                </select>
                                                @error('gender')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-4 mt-2">
                                                <label for="birthplace" class="form-label">Tempat lahir</label>
                                                <input type="text" name="birthplace" id="birthplace" class="form-control @error('birthplace') is-invalid @enderror " placeholder="Tempat lahir" value="{{ old('birthplace') }}" required autocomplete="off">
                                                @error('birthplace')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="birthday" class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="birthday" id="birthday" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday') }}" required>
                                                @error('birthday')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-outline form-white mb-4 mt-2 ">
                                                <label for="religion" class="mb-2">Agama</label>
                                                <select name="religion" id="religion" class="form-select @error('religion') is-invalid @enderror " required>
                                                    <option selected disabled value="">Pilih...</option>
                                                    <option value="Islam" @if (old('religion') == 'Islam'){{ 'selected' }}@endif>Islam</option>
                                                    <option value="Protestan" @if (old('religion') == 'Protestan'){{ 'selected' }}@endif>Protestan</option>
                                                    <option value="Katolik" @if (old('religion') == 'Katolik'){{ 'selected' }}@endif>Katolik</option>
                                                    <option value="Hindu" @if (old('religion') == 'Hindu'){{ 'selected' }}@endif>Hindu</option>
                                                    <option value="Budha" @if (old('religion') == 'Budha'){{ 'selected' }}@endif>Budha</option>
                                                    <option value="Konghucu"  @if (old('religion') == 'Konghucu'){{ 'selected' }}@endif>Konghucu</option>
                                                </select>
                                                @error('religion')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="anak_ke" class="form-label">Anak Ke</label>
                                                <input type="number" name="anak_ke" id="anak_ke" class="form-control @error('anak_ke') is-invalid @enderror " placeholder="Anak Ke ..." value="{{ old('anak_ke') }}" required autocomplete="off">
                                                @error('anak_ke')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-4 status">
                                                <label for="status_keluarga" class="form-label">Status Dalam Keluarga</label>
                                                <select class="form-select @error('status_keluarga') is-invalid @enderror " name="status_keluarga" id="status_keluarga">
                                                    <option selected disabled value="">Pilih...</option>
                                                    <option value="Anak Kandung" @if (old('status_keluarga') == 'Anak Kandung'){{ 'selected' }}@endif>Anak Kandung</option>
                                                    <option value="Anak Angkat" @if (old('status_keluarga') == 'Anak Angkat'){{ 'selected' }}@endif>Anak Angkat</option>
                                                </select>
                                                @error('status_keluarga')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div>
                                                <input type="hidden" name="for" value="biodata" class="form-control @error('for') is-invalid @enderror">
                                            </div>
                                            <div class="form-outline form-white mb-4">
                                                <label for="alamat" class="mb-2">Alamat Lengkap</label>
                                                <input type="text" name="alamat" id="alamat" class="form-control " autocomplete="off" placeholder="Alamat langkap. . ." value="{{ old('alamat') }}" />
                                                @error('alamat')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                                <input type="text" class="form-control" id="autocomplete" name="autocomplete">
                                                <input type="text" class="form-control @error('kecamatan')is-invalid @enderror" onfocus="this.value=''" id="kecamatan" name="kecamatan">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                                                <input type="text" id="kabupaten" name="kabupaten" readonly class="form-control @error('kabupaten')is-invalid @enderror" >
                                            </div>
                                            <div class="col-md-6">
                                                <label for="provinsi" class="form-label">Provinsi</label>
                                                <input type="text" id="provinsi" name="provinsi" readonly class="form-control  @error('provinsi')is-invalid @enderror" >
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kp" class="form-label">Kode Pos</label>
                                                <input type="text" class="form-control" id="kp" name="kodepos" readonly>
                                            </div>
                                        </div>                                           
                                        <input type="hidden" name="ppdb_id" id="ppdb_id" class="@error('ppdb_id') is-invalid @enderror" value=1>
                                        <div class="d-grid gap-2 col-12 mx-auto mt-5">
                                            <button class="btn btn-primary btn-lg masuk" type="submit">Simpan</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    
        window.onload = function() {
            $("#kecamatan").hide();
        }
    
        $("#autocomplete").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "https://kodepos.vercel.app/search",
                    dataType: "json",
                    data: {
                        q: request.term
                    },
                    success: function({
                        data
                    }) {
                        if (!data) {
                            data = []
                        }
                        data = data.map(address => {
                            return Object.assign({}, address, {
                                label: `${address.urban}, ${address.subdistrict}, ${address.city}, ${address.province}, ${address.postalcode}`
                            })
                        });
                        response(data);
                    }
                });
            },
            minLength: 3,
            select: function(event, val) {
                $("#autocomplete").hide();
                $("#kecamatan").show();
                $("#provinsi").val(val.item.province);
                $("#kabupaten").val(val.item.city);
                $("#kecamatan").val(val.item.subdistrict);
                $("#kp").val(val.item.postalcode);
            }
        })
        
        $("#kecamatan").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "https://kodepos.vercel.app/search",
                    dataType: "json",
                    data: {
                        q: request.term
                    },
                    success: function({
                        data
                    }) {
                        if (!data) {
                            data = []
                        }
                        data = data.map(address => {
                            return Object.assign({}, address, {
                                label: `${address.urban}, ${address.subdistrict}, ${address.city}, ${address.province}, ${address.postalcode}`
                            })
                        });
                        response(data);
                    }
                });
            },
            minLength: 3,
            select: function(event, val) {
                $("#autocomplete").show();
                $("#kecamatan").hide();
                $("#provinsi").val(val.item.province);
                $("#kabupaten").val(val.item.city);
                $("#autocomplete").val(val.item.subdistrict);
                $("#kp").val(val.item.postalcode);
            }
        })
    </script>
</body>


</html>