@extends('layouts.main')
@section('containers')
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <h3>Silahkan Daftar</h3>
            <form action="">
                <div>
                    <label for="">Nama Lengkap</label>
                    <input name="nama" class="form-control" type="text" required>
                </div>
                <div>
                    <label for="">Username</label>
                    <input name="username" class="form-control" type="text" required>
                </div>
                <div>
                    <label for="">Email</label>
                    <input name="email" class="form-control" type="email" required>
                </div>
                <div>
                    <label for="">Password</label>
                    <input name="password" class="form-control" type="password" required>
                </div>
                <select name="sebagai" class="form-select form-select-lg mb-3 mt-3" aria-label=".form-select-lg example" required>
                    <option selected>Sebagai</option>
                    <option value="1">Wali Siswa</option>
                    <option value="2">Calon Siswa</option>
                  </select>
                <button type="submit" class="btn btn-primary mt-3">Daftar</button>
            </form>
        </div>
    </div>
@endsection