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
                    <div class="card-header text-center mb-3" id="headFormulir">
                        <h2>Formulir Pendaftaran</h2>
                    </div>
                    <form action="/dashboard/create_ortu" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                          <div class="card-body border-start border-end border-bottom border-top border-info">
                                <div class="header text-center bg-info text-white mt-2">
                                  <h3>Data Ayah</h3>
                                  <hr />
                                </div>
                                {{-- BIODATA AYAH --}}
                                <div class="row g-2">
                                    <input type="hidden" name="biodata_id1" id="biodata_id" class="form-control " required value="{{ auth()->user()->bio->id }}"autocomplete="off" />
                                  <div class="form-group mb-3 mt-4">
                                    <label for="name" class="mb-2">Nama Ayah</label>
                                    <input  type="text" name="name1" id="name" class="form-control " required value="{{ old('name') }}"  autocomplete="off"/>
                                    </div>
                                  <input type="hidden" name="role1" value="Ayah">
                                  <div class="col-12 mb-3 mt-2">
                                    <label for="birthday" class="mb-2">Tanggal Lahir</label>
                                    <input type="date" name="birthday1" id="birthday" class="form-control " required value="{{ old('birthday') }}" />
                                  </div>
                                  <div class="col-md-6">
                                    <label for="religion">Agama</label>
                                    <select name="religion1" id="religion" class="form-control " required value="{{ old('religion') }}">
                                      <option selected disabled value="">-pilih-</option>
                                      <option value="Islam" @if (old('religion1' == 'Islam')) {{ 'selected' }} @endif>Islam</option>
                                      <option value="Protestan" @if (old('religion1' == 'Protestan')) {{ 'selected' }} @endif>Protestan</option>
                                      <option value="Katolik" @if (old('religion1' == 'Katolik')) {{ 'selected' }} @endif>Katolik</option>
                                      <option value="Hindu" @if (old('religion1' == 'Hindu')) {{ 'selected' }} @endif>Hindu</option>
                                      <option value="Budha" @if (old('religion1' == 'Budha')) {{ 'selected' }} @endif>Budha</option>
                                      <option value="Konghucu" @if (old('religion1' == 'Konghucu')) {{ 'selected' }} @endif>Konghucu</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="profession">Pekerjaan</label>
                                    <select name="profession1" id="profession" class="form-control " required>
                                      <option selected disabled value="">-pilih-</option>
                                      <option value="Karyawan" @if (old('profession1')== 'Karyawan'){{ 'selected' }}@endif>Karyawan</option>
                                      <option value="PNS" @if (old('profession1')== 'PNS'){{ 'selected' }}@endif >PNS</option>
                                      <option value="Wiraswasta" @if (old('profession1')== 'Wiraswasta'){{ 'selected' }}@endif>Wiraswasta</option>
                                      <option value="Dokter" @if (old('profession1')== 'Dokter'){{ 'selected' }}@endif>Dokter</option>
                                      <option value="Guru" @if (old('profession1')== 'Guru'){{ 'selected' }}@endif>Guru</option>
                                      <option value="Pilot" @if (old('profession1')== 'Pilot'){{ 'selected' }}@endif>Pilot</option>
                                      <option value="Petani" @if (old('profession1')== 'Petani'){{ 'selected' }}@endif>Petani</option>
                                      <option value="Polisi" @if (old('profession1')== 'Polisi'){{ 'selected' }}@endif>Polisi</option>
                                      <option value="Lainnya" @if (old('profession1')== 'Lainnya'){{ 'selected' }}@endif>Lainnya</option>
                                    </select>
                                  </div>
                                  <div>
                                    <input type="hidden" name="for1" value="ayah" class="form-control">
                                  </div>
                                  <div class="form-group mb-3 mt-2">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat1" class="form-control " required value="{{ old('alamat') }}" autocomplete="off"/>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" id="autocomplete1" name="autocomplete">
                                    <input type="text" class="form-control @error('kecamatan')is-invalid @enderror" onfocus="this.value=''" id="kecamatan1" name="kecamatan1">
                                </div>
                                <div class="col-md-6">
                                    <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                                    <input type="text" class="form-control @error('kabupaten')is-invalid @enderror" id="kabupaten1" name="kabupaten1" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="provinsi" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control @error('provinsi')is-invalid @enderror" id="provinsi1" name="provinsi1" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="kp" class="form-label">Kode Pos</label>
                                    <input type="text" class="form-control" id="kp1" name="kodepos1" readonly>
                                </div>
                                  <div class="form-group mt-2 mb-3">
                                    <label for="phone">Nomor Handphone</label>
                                    <input type="text" name="phone1" id="phone" class="form-control " required value="{{ old('phone') }}" />
                                  </div>

                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="ayahwali" onchange="valueChanged()">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Ayah Sebagai Wali
                                    </label>
                                  </div>
                                  {{-- BIODATA IBU --}}
                                  <div class="header text-center bg-info text-white mt-5">
                                    <h2>Data Ibu</h2>
                                    <hr />
                                  </div>
                                  <div class="row g-2">
                                    <input type="hidden" name="biodata_id2" id="biodata_id" class="form-control " required value="{{ auth()->user()->bio->id }}"autocomplete="off" />
                                    <div class="form-group mb-3 mt-4">
                                    <label for="name" class="mb-2">Nama Ibu</label>
                                    <input  type="text" name="name2" id="name" class="form-control " required value="{{ old('name') }}"  autocomplete="off"/>
                                    </div>
                                  <input type="hidden" name="role2" value="Ibu">
                                  <div class="col-12 mb-3 mt-2">
                                    <label for="birthday" class="mb-2">Tanggal Lahir</label>
                                    <input type="date" name="birthday2" id="birthday" class="form-control " required value="{{ old('birthday') }}" />
                                  </div>
                                  <div class="col-md-6">
                                    <label for="religion">Agama</label>
                                    <select name="religion2" id="religion" class="form-control " required value="{{ old('religion') }}">
                                      <option selected disabled value="">-pilih-</option>
                                      <option value="Islam" @if (old('religion2' == 'Islam')) {{ 'selected' }} @endif>Islam</option>
                                      <option value="Protestan" @if (old('religion2' == 'Protestan')) {{ 'selected' }} @endif>Protestan</option>
                                      <option value="Katolik" @if (old('religion2' == 'Katolik')) {{ 'selected' }} @endif>Katolik</option>
                                      <option value="Hindu" @if (old('religion2' == 'Hindu')) {{ 'selected' }} @endif>Hindu</option>
                                      <option value="Budha" @if (old('religion2' == 'Budha')) {{ 'selected' }} @endif>Budha</option>
                                      <option value="Konghucu" @if (old('religion2' == 'Konghucu')) {{ 'selected' }} @endif>Konghucu</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="profession" >Pekerjaan</label>
                                    <select name="profession2" id="profession" class="form-control " required>
                                      <option selected disabled value="">-pilih-</option>
                                      <option value="Karyawan" @if (old('profession2')== 'Karyawan'){{ 'selected' }}@endif>Karyawan</option>
                                      <option value="PNS" @if (old('profession2')== 'PNS'){{ 'selected' }}@endif >PNS</option>
                                      <option value="Wiraswasta" @if (old('profession2')== 'Wiraswasta'){{ 'selected' }}@endif>Wiraswasta</option>
                                      <option value="Dokter" @if (old('profession2')== 'Dokter'){{ 'selected' }}@endif>Dokter</option>
                                      <option value="Guru" @if (old('profession2')== 'Guru'){{ 'selected' }}@endif>Guru</option>
                                      <option value="Pilot" @if (old('profession2')== 'Pilot'){{ 'selected' }}@endif>Pilot</option>
                                      <option value="Petani" @if (old('profession2')== 'Petani'){{ 'selected' }}@endif>Petani</option>
                                      <option value="Polisi" @if (old('profession2')== 'Polisi'){{ 'selected' }}@endif>Polisi</option>
                                      <option value="Lainnya" @if (old('profession2')== 'Lainnya'){{ 'selected' }}@endif>Lainnya</option>
                                    </select>
                                  </div>
                                  <div>
                                    <input type="hidden" name="for2" value="ibu" class="form-control">
                                  </div>
                                  <div class="form-group mb-3 mt-2">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat2" class="form-control " required value="{{ old('alamat') }}" autocomplete="off"/>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" id="autocomplete2" name="autocomplete">
                                    <input type="text" class="form-control @error('kecamatan')is-invalid @enderror" onfocus="this.value=''" id="kecamatan2" name="kecamatan2">
                                </div>
                                <div class="col-md-6">
                                    <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                                    <input type="text" class="form-control @error('kabupaten')is-invalid @enderror" id="kabupaten2" name="kabupaten2" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="provinsi" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control @error('provinsi')is-invalid @enderror" id="provinsi2" name="provinsi2" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="kp" class="form-label">Kode Pos</label>
                                    <input type="text" class="form-control" id="kp2" name="kodepos2" readonly>
                                </div>
                                  <div class="form-group mt-2 mb-3">
                                    <label for="phone">Nomor Handphone</label>
                                    <input type="text" name="phone2" id="phone" class="form-control " required value="{{ old('phone') }}" />
                                  </div>

                                  {{-- DATA WALI --}}
                                  <div id="as" >
                                   <div class="row">
                                  <div class="header text-center bg-info text-white mt-2">
                                    <h3>Data Wali</h3>
                                    <hr/>
                                  </div>
                                  
                                  <div class="form-group mb-3 mt-4">
                                    <label for="role3" class="mb-2">Status Keluarga</label>
                                    <select name="role3" id="role" class="form-control">
                                      <option selected disabled value="">-pilih-</option>
                                      <option value="Paman">Paman</option>
                                      <option value="Kakak">Kakak</option>
                                      <option value="Kakek">Kakek</option>
                                    </select>
                                  </div>
                                  <div class="form-group mb-3 mt-4">
                                    <label for="nik3" class="mb-2">NIK </label>
                                    <input  type="text" name="nik3" id="nik" class="form-control" value="{{ old('nik') }}"  />
                                  </div>
                                  <div class="form-group mb-3 mt-4">
                                    <label for="name3" class="mb-2">Nama Wali </label>
                                    <input  type="text" name="name3" id="name" class="form-control" value="{{ old('name') }}"  />
                                  </div>
                                  <div class="col-md-6 mt-3">
                                      <label for="birthplace3" class="mb-2">Tempat Lahir </label>
                                      <input  type="text" name="birthplace3" id="birthplace" class="form-control" value="{{ old('birthplace') }}"  />
                                    </div>
                                    <div class="col-md-6 mt-3">
                                    <label for="birthday3" class="mb-2">Tanggal Lahir</label>
                                    <input type="date" name="birthday3" id="birthday" class="form-control " value="{{ old('birthday') }}" />
                                  </div>
                                  <div class="col-md-6 mt-3" >
                                    <label for="religion3">Agama</label>
                                    <select name="religion3" id="religion" class="form-control" value="{{ old('religion') }}">
                                      <option selected disabled value="">-pilih-</option>
                                      <option value="Islam" @if (old('religion3' == 'Islam')) {{ 'selected' }} @endif>Islam</option>
                                      <option value="Protestan" @if (old('religion3' == 'Protestan')) {{ 'selected' }} @endif>Protestan</option>
                                      <option value="Katolik" @if (old('religion3' == 'Katolik')) {{ 'selected' }} @endif>Katolik</option>
                                      <option value="Hindu" @if (old('religion3' == 'Hindu')) {{ 'selected' }} @endif>Hindu</option>
                                      <option value="Budha" @if (old('religion3' == 'Budha')) {{ 'selected' }} @endif>Budha</option>
                                      <option value="Konghucu" @if (old('religion3' == 'Konghucu')) {{ 'selected' }} @endif>Konghucu</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6 mt-3">
                                    <label for="profession3" class="mb-2">Pekerjaan</label>
                                    <select name="profession3" id="profession" class="form-control">
                                      <option selected disabled value="">-pilih-</option>
                                      <option value="Karyawan" @if (old('profession3')== 'Karyawan'){{ 'selected' }}@endif>Karyawan</option>
                                      <option value="PNS" @if (old('profession3')== 'PNS'){{ 'selected' }}@endif >PNS</option>
                                      <option value="Wiraswasta" @if (old('profession3')== 'Wiraswasta'){{ 'selected' }}@endif>Wiraswasta</option>
                                      <option value="Dokter" @if (old('profession3')== 'Dokter'){{ 'selected' }}@endif>Dokter</option>
                                      <option value="Guru" @if (old('profession3')== 'Guru'){{ 'selected' }}@endif>Guru</option>
                                      <option value="Pilot" @if (old('profession3')== 'Pilot'){{ 'selected' }}@endif>Pilot</option>
                                      <option value="Petani" @if (old('profession3')== 'Petani'){{ 'selected' }}@endif>Petani</option>
                                      <option value="Polisi" @if (old('profession3')== 'Polisi'){{ 'selected' }}@endif>Polisi</option>
                                      <option value="Lainnya" @if (old('profession3')== 'Lainnya'){{ 'selected' }}@endif>Lainnya</option>
                                    </select>
                                  </div>
                                  <div>
                                    <input type="hidden" name="for3" value="wali" class="form-control">
                                  </div>
                                  <div class="form-group mb-3 mt-2">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat3" class="form-control "  value="{{ old('alamat') }}" autocomplete="off"/>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" id="autocomplete3" name="autocomplete">
                                    <input type="text" class="form-control @error('kecamatan')is-invalid @enderror" onfocus="this.value=''" id="kecamatan3" name="kecamatan3">
                                </div>
                                <div class="col-md-6">
                                    <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                                    <input type="text" class="form-control @error('kabupaten')is-invalid @enderror" id="kabupaten3" name="kabupaten3" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="provinsi" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control @error('provinsi')is-invalid @enderror" id="provinsi3" name="provinsi3" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="kp" class="form-label">Kode Pos</label>
                                    <input type="text" class="form-control" id="kp3" name="kodepos3" readonly>
                                </div>
                                  <div class="form-group mt-2 mb-3">
                                    <label for="phone3">Nomor Handphone</label>
                                    <input type="text" name="phone3" id="phone" class="form-control " value="{{ old('phone3') }}" />
                                  </div>
                                    </div>                           
                                </div>
                           </div>
                          </div>
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

    <script>
      function valueChanged(){
        let checkBox = document.getElementById("ayahwali");
        let as = document.getElementById("as");
        if (checkBox.checked == true){
          as.style.display = "none";            
          } else {
            as.style.display = "inline";  
          }
        }
        window.onload = function() {
            $("#kecamatan1").hide();
            $("#kecamatan2").hide();
            $("#kecamatan3").hide();
        }
    
    </script>



    <script>
        $("#autocomplete1").autocomplete({
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
                $("#autocomplete1").hide();
                $("#kecamatan1").show();
                $("#provinsi1").val(val.item.province);
                $("#kabupaten1").val(val.item.city);
                $("#kecamatan1").val(val.item.subdistrict);
                $("#kp1").val(val.item.postalcode);
            }
        })
              
    
        $("#autocomplete2").autocomplete({
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
                $("#autocomplete2").hide();
                $("#kecamatan2").show();
                $("#provinsi2").val(val.item.province);
                $("#kabupaten2").val(val.item.city);
                $("#kecamatan2").val(val.item.subdistrict);
                $("#kp2").val(val.item.postalcode);
            }
        })
              

          $("#autocomplete3").autocomplete({
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
                $("#autocomplete3").hide();
                $("#kecamatan3").show();
                $("#provinsi3").val(val.item.province);
                $("#kabupaten3").val(val.item.city);
                $("#kecamatan3").val(val.item.subdistrict);
                $("#kp3").val(val.item.postalcode);
            }
        })
        
      
    </script>
    
</body>
</html>