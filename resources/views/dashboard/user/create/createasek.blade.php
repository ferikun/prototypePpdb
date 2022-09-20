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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
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
                    <form action="/dashboard/profilasek" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body border-start border-end border-bottom border-top border-info">
                                <div class="header text-center bg-info text-white mt-4">
                                    <h4>Asal Sekolah</h4>
                                    <hr>
                                </div>
                                <div class="row g-2">
                                    <div class="form-outline form-white mb-4 mt-4">
                                        <label for="name" class="mb-2">Nama Asal Sekolah</label>
                                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required autofocus autocomplete="off" placeholder="Masukan Nama Asal Sekolah . . ." value="{{ old('name') }}" />
                                    </div>
                                    <div>
                                        <input type="hidden" name="for" value="asal sekolah" class="form-control @error('for') is-invalid @enderror">
                                    </div>
                                    <div class="form-outline form-white mb-4 mt-2">
                                        <label for="alamat" class="mb-2">Alamat Lengkap</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror " autocomplete="off" required placeholder="Masukan Alamat Sekolah Asal . . ." value="{{ old('alamat') }}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control" id="autocomplete" name="autocomplete" >
                                        <!-- <label for="" onclick="ubah()" class="form-control" id="kecamatan"></label> -->
                                        <input type="text" class="form-control @error('kecamatan')is-invalid @enderror" onfocus="this.value=''" id="kecamatan" name="kecamatan" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                                        <input type="text" class="form-control @error('kabupaten')is-invalid @enderror" id="kabupaten" name="kabupaten" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control @error('provinsi')is-invalid @enderror" id="provinsi" name="provinsi" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kp" class="form-label">Kode Pos</label>
                                        <input type="text" class="form-control" id="kp" name="kodepos" readonly>
                                    </div>
                                    <div class="form-outline form-white mb-4 mt-2">
                                        <label for="sktb" class="mb-2">Nomor SKTB / Rapor</label>
                                        <input type="text" name="sktb" id="sktb" class="form-control @error('sktb') is-invalid @enderror " autocomplete="off" placeholder="Masukan nomor raport . . ." value="{{ old('sktb') }}" />
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