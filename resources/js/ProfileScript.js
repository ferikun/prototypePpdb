$('#editBtnBio').click(function() {
    let nisn = document.getElementById("nisnAwal").value;
    document.getElementById("nisn").value = nisn;

    let fullName = document.getElementById("namaLengkap").value;
    document.getElementById("name").value = fullName;

    let nickName = document.getElementById("namaPanggilan").value;
    document.getElementById("nickName").value = nickName;

    let gender = document.getElementById("gender_awal").value;
    document.getElementById("gender").value = gender;

    let tempat_lahir = document.getElementById("tempatLahir").value;
    document.getElementById("tempat_lahir").value = tempat_lahir;

    let tanggal_lahir = document.getElementById("tanggalLahir").value;
    document.getElementById("tanggal_lahir").value = tanggal_lahir;

    let agama = document.getElementById("agamaAwal").value;
    document.getElementById("agama").value = agama;

    let anak_ke = document.getElementById("anakKe_awal").value;
    document.getElementById("anak_ke").value = anak_ke;

    let status = document.getElementById("statusAwal").value;
    document.getElementById("status_keluarga").value = status;

    let alamat = document.getElementById("alamatAwal").value;
    document.getElementById("alamat").value = alamat;

    let no_hp = document.getElementById("jurusan_awal").value;
    document.getElementById("jurusan").value = no_hp;

    let provinsi = document.getElementById("provinsiAwal").value;
    document.getElementById("provinsi").value = provinsi;
    let kabupaten = document.getElementById("kabupatenAwal").value;
    document.getElementById("kabupaten").value = kabupaten;
    let kecamatan = document.getElementById("kecamatanAwal").value;
    document.getElementById("kecamatan").value = kecamatan;
    let kode_pos = document.getElementById("kpAwal").value;
    document.getElementById("kode_pos").value = kode_pos;
    let ppdb = document.getElementById("ppdbAwal").value;
    document.getElementById("ppdb").value = ppdb;
})

$('#editBtnMinat').click(function() {
    let hobi = document.getElementById("hobiAwal").value;
    document.getElementById("hobi").value = hobi;
    let bidang_favorit = document.getElementById("bidangAwal").value;
    document.getElementById("bidang_favorit").value = bidang_favorit;
    let olahraga = document.getElementById("olahragaAwal").value;
    document.getElementById("olahraga").value = olahraga;
    let cita_cita = document.getElementById("citaAwal").value;
    document.getElementById("cita_cita").value = cita_cita;
})