
@extends('dashboard.admin.layouts.main')
@section('konten')
<?php $gagal = false;?>
                <div class="col-4">
                    <div class="card">
                        @error('image')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Failed !</strong> {{$message}}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @enderror
                        <h3 class="card-title mx-auto mt-4">Profil</h3>
                        @if ($data['image'])
                            <img src="{{ asset('storage'). '/' .$data['image'] }}" class="card-img-top mx-auto mt-4 rounded-circle" style="max-height: 500px; max-width: 200px;">
                         @else
                         <img src="/img/default.jpg" class="card-img-top mx-auto mt-4 rounded-circle" alt="">
                         @endif   
                        <div class="card-body">
                            <form action="/dashboard/edit/foto/{{$data['id']}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group">
                                    <input name="image" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    <button class="btn btn-success" type="submit" id="inputGroupFileAddon04"><i class="fa-solid fa-floppy-disk"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h3 class="textAdmin">Profil Admin</h3>
                        </div>
                        @error('PasswordLama')
                            <?php $gagal = true;?>
                        @enderror
                        @error('PasswordBaru')
                            <?php $gagal = true;?>
                        @enderror
                        @error('KonfirmasiPassword')
                            <?php $gagal = true;?>
                        @enderror

                        @if ($gagal)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal Ubah Password</strong> Pastikan kamu memasukan Password Lama/Baru dengan Benar
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif
                        @if (session()->has('notifberhasil'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('notifberhasil') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @elseif (session()->has('notifgagal'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('notifgagal') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif

                        <div class="card-body mt-4">

                            <form action="/dashboard/admin" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="username" class="col-4 col-form-label">Username</label>
                                    <div class="col-8">
                                        <input required type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="username" value="{{ $data['username'] }}" disabled>
                                        @error('username')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-8">
                                        <input required type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ $data['nama'] }}" disabled>
                                        @error('nama')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <input required type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email" value="{{ $data['email'] }}" disabled>
                                        @error('email')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="no_hp" class="col-4 col-form-label">No. Handphone</label>
                                    <div class="col-8">
                                        <input required type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" id="no_hp" placeholder="nomor handphone" value="{{ $data['telepon'] }}" disabled>
                                        @error('telepon')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-4">
                                    <button class="btn btn-warning me-3" onclick="edit(event)" name="editProfil">Edit</button>
                                    <button class="btn brn-primary me-3" id="btnSimpan">Simpan</button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Ganti Password
                                      </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ubah Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/dashboard/admin/reset-password/{{ auth()->user()->id }}" method="POST">
        <div class="modal-body">
            @csrf
            <div class="mb-3">
                <label for="PasswordLama" class="form-label">Password Lama</label>
                <input name="PasswordLama" type="password" class="form-control @error('PasswordLama') is-invalid @enderror" id="PasswordLama">
                @error('PasswordLama')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="PasswordBaru" class="form-label">Password Baru</label>
                <input name="PasswordBaru" type="password" class="form-control @error('PasswordBaru') is-invalid @enderror" id="PasswordBaru">
                @error('PasswordBaru')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="KonfirmasiPassword" class="form-label">Konfirmasi Password Baru</label>
                <input name="KonfirmasiPassword" type="password" class="form-control @error('KonfirmasiPassword') is-invalid @enderror" id="KonfirmasiPassword">
                @error('KonfirmasiPassword')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection
@section('javascript')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
</script>

<script>
    function myFunction() {
         var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    window.onload = function() {
        $("#kecamatan").hide();
    }
</script>
<script>
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
</script>
<script>
    window.onload = function() {
        document.getElementById("btnSimpan").style.display='none';

    }
</script>
<script>
    function edit(evt) {
        evt.preventDefault()
        document.getElementById("username").disabled = false;
        document.getElementById("nama").disabled = false;
        document.getElementById("email").disabled = false;
        document.getElementById("no_hp").disabled = false;
        document.getElementById("btnSimpan").style.display = 'block';
    }
</script>
@endsection

