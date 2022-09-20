@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-4">
    <div class="card">
        <h3 class="card-title mx-auto mt-4">Profil</h3>
        <img src="img/profil.jpg" style="border-radius: 50%; width: 230px;" class="card-img-top mx-auto mt-4" alt="">
        <div class="card-body">
            <form action="">
                <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <button class="btn btn-success" type="button" id="inputGroupFileAddon04"><i class="fa-solid fa-floppy-disk"></i></button>
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
        <div class="card-body mt-4">
            <form action="" method="">
                <div class="form-group row">
                    <label for="username" class="col-4 col-form-label">Username</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="username" name="username" placeholder="username" value="" disabled>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="" disabled>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="email" id="email" placeholder="email" value="" disabled>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="no_hp" class="col-4 col-form-label">No. Handphone</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="nomor handphone" value="" disabled>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="password" class="col-4 col-form-label">Password</label>
                    <div class="col-8">
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" value="" disabled>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-warning me-3" onclick="edit(event)" name="editProfil">Edit</button>
                    <button class="btn brn-primary" id="btnSimpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('javascript')
<script>
window.onload = function() {
    document.getElementById("btnSimpan").style.display = 'none';

}

function edit(evt) {
    evt.preventDefault()
    document.getElementById("username").disabled = false;
    document.getElementById("nama").disabled = false;
    document.getElementById("email").disabled = false;
    document.getElementById("no_hp").disabled = false;
    document.getElementById("password").disabled = false;
    document.getElementById("btnSimpan").style.display = 'block';
}
</script>
@endsection