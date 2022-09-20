@extends('dashboard.user.layouts.main')
@section('container')
@if (session()->has('berhasilemail')) 
<div class="alert alert-success alert-dismissible fade show fs-5 col-8" role="alert">
    {{ session('berhasilemail') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->has('gagalemail')) 
<div class="alert alert-danger alert-dismissible fade show fs-5 col-8" role="alert">
    {{ session('gagalemail') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->has('berhasil')) 
     <div class="alert alert-success alert-dismissible fade show fs-5 col-8" role="alert">
      {{ session('berhasil') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif
        @if (session()->has('gagal')) 
             <div class="alert alert-success alert-dismissible fade show fs-5 col-8" role="alert">
              {{ session('gagal') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        @endif
        <!-- konten -->
        <div class="container" id="konten">
            <div class="row">
                <!-- Awal Ubah Email Dan Password -->
                <div class="col-8">
                    <div class="card">
                        <div class="card-header border-dark head_emailpw">
                            <h3>Ubah Email & Password</h3>
                        </div>
                        <div class="card-body edit-epw">
                            <form action="">
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label for=""><i class="fa-solid fa-envelope me-3"></i>Email</label>
                                        <button type="button" id="editBtn" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editemail">Ganti Email</button>
                                    </div>
                                    <input class="form-control mt-2" type="email" name="emailAwal" id="emailAwal" disabled value="{{ $user->email }}">
                                </div>
                                <div class="form-group mt-4 d-flex justify-content-between">
                                    <label for=""><i class="fa-solid fa-key me-3"></i>Password</label>
                                    <button type="button" id="editBtn" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editpw">Ganti Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Ubah email pw -->
            </div>
            <!-- Modal edit email -->
            <div class="modal fade" id="editemail" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Email</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/dashboard/email_password/editemail" method="post">
                            @csrf
                            @method('put')
                            <div class="modal-body">
                                    <div class="form-group mt-4">
                                        <label for="email_baru"><i class="fa-solid fa-envelope me-3"></i>Masukan Email baru</label>
                                        <input class="form-control mt-2" type="email" autocomplete="off" value ="" name="email" id="email" required>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="password"><i class="fa-solid fa-key me-3"></i>Masukan Password</label>
                                        <input class="form-control mt-2" type="password" name="password" id="password" required>
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
            <!-- Modal edit password -->
            <div class="modal fade" id="editpw" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/dashboard/email_password/editpw" method="post">
                            @csrf
                            @method('put')
                            <div class="modal-body">
                                    <div class="form-group mt-4 inputPw">
                                        <label for="current_password"><i class="fa-solid fa-key me-3"></i>Password Lama</label>
                                        <input class="form-control mt-2" type="password" name="current_password" id="current_password" required>
                                        @error('current_password')
                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>    
                                        @enderror
                                    </div>
                                    <div class="form-group mt-4 inputPw">
                                        <label for="password"><i class="fa-solid fa-key me-3"></i>Password Baru</label>
                                        <input class="form-control mt-2" type="password" name="password" required>
                                        @error('password')
                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>    
                                        @enderror
                                    </div>
                                    <div class="form-group mt-4 inputPw">
                                        <label for="password_confirmation"><i class="fa-solid fa-key me-3"></i>Konfirmasi Password Baru</label>
                                        <input class="form-control mt-2" type="password" name="password_confirmation" required>
                                        @error('password_confirmation')
                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>    
                                        @enderror
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
            </div>
        </div>
    @endsection
