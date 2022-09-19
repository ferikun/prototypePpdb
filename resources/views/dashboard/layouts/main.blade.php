@php
    if (!auth()->user()->bio) {
        $display = "none";
        
    }
    else {
        $display = "inline";
        
    }
@endphp
<!DOCTYPE html>
<html lang="en">
<?php 
    if(!isset($title)){
      $title ="";
}
    ?>
    <head>
        <title>Dashboard {{ $title }}</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&display=swap"rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
        <link rel="stylesheet" href="/css/style_sidebar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

    <body>
        <div class="d-flex">
            <!-- Header -->
            <header>
                <div class="header-title">
                    <h3>SMA GARUDA PANCASILA</h3>
              </div>
            </header>
            <!-- Ahir Header -->

            <!-- Sidebar -->
            <input type="checkbox" id="check" />
            <label for="check">
                <i class="fas fa-bars" id="btn" onclick="openNav()"></i>
                <i class="fas fa-times" id="cancel" onclick="closeNav()"></i>
            </label>
            <div class="sidebar" id="sideNavigation">
                <div class="header">{{ Auth()->user()->username }}</div>
                <ul class="menu">
                    <div style="display: {{ $display }}">
                    <li>
                        <a href="/dashboard"
                            ><i class="fa-solid fa-house-user me-3"></i>Home</a
                        >
                    </li>
                    <li>
                        <a href="#" class="btn1"
                            ><i class="fa-solid fa-user me-3"></i>Profile<span
                                class="fa-solid fa-caret-down ms-4 satu"
                            ></span></a>
                        <ul class="show-satu">
                            <li>
                                <a href="/dashboard/email_password" class="ms-3"
                                    >Email & Password</a>
                            </li>
                            <li>
                                <a href="/dashboard/profil_siswa" class="ms-3"
                                    >Data Diri</a>
                            </li>
                            <li>
                                <a href="/dashboard/profilasek/{profilasek}/edit"  class="ms-3"
                                    >Data Asal Sekolah</a>
                            </li>
                            <li>
                                <a href="/dashboard/profilortu" class="ms-3"
                                    >Data Orang Tua & Wali</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="btn2"
                            ><i class="bi bi-coin me-3"></i>Pembayaran<span
                                class="fa-solid fa-caret-down ms-4 dua"
                            ></span
                        ></a>
                        <ul class="show-dua">
                            <li><a href="/dashboard/bayar_pendaftaran" class="ms-3">Pendaftaran</a></li>
                            <li><a href="/dashboard/bayar_lainnya" class="ms-3">Lainya</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/dashboard/dokumen">
                            <i class="fa-solid fa-cloud-arrow-up me-3"></i
                            >Upload Dokumen</a
                        >
                    </li>
                    <li>
                        <a href="/dashboard/pengumuman">
                            <i class="fa-solid fa-bullhorn me-3"></i>Pengumuman</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-question-circle me-3"></i>Tentang Sekolah</a>
                    </li>
                    </div>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                        <button type="submit" class="dropdown-item" onclick="keluarAkun()">
                            <i class="bi bi-box-arrow-left"></i>Keluar
                        </button>
                    </form>
                    </li>
                </ul>
            </div>
            <!-- Akhir Sidebar -->

            <!-- konten -->

            <div class="container" id="konten">
                <div class="row">
                    @yield('container')
                </div>
                
            </div>

        </div>

        <!-- JavaScript Libraries -->
 <!-- JavaScript Libraries -->
 <script src="/js/scripts.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

 <script>
    // sidebar
     function openNav() {
         document.getElementById("sideNavigation").style.width = "250px";
         document.getElementById("konten").style.marginLeft = "250px";
     }

     function closeNav() {
         document.getElementById("sideNavigation").style.width = "0";
         document.getElementById("konten").style.marginLeft = "0";
     }
 
 
     $('.btn1').click(function() {
         $('.sidebar ul .show-satu').toggleClass("show");
         $('.sidebar ul .satu').toggleClass("rotate");
     })
     $('.btn2').click(function() {
         $('.sidebar ul .show-dua').toggleClass("show");
         $('.sidebar ul .dua').toggleClass("rotate");
     })
     $('.btn3').click(function() {
         $('.sidebar ul .show-tiga').toggleClass("show");
         $('.sidebar ul .tiga').toggleClass("rotate");
     })
    //  end sidebar

     //profil siswa
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
        //end profil siswa

        //minat dan bakat
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
    //end minat bakat

    // orang tua
     $('#editBtnParents').click(function() {
         let nameAyah = document.getElementById("nameAyah").value;
         document.getElementById("modalnameAyah").value = nameAyah;

         let birthdayAyah = document.getElementById("birthdayAyah").value;
         document.getElementById("modalbirthdayAyah").value = birthdayAyah;

         let professionAyah = document.getElementById("professionAyah").value;
         document.getElementById("modalprofessionAyah").value = professionAyah;

         let religionAyah = document.getElementById("religionAyah").value;
         document.getElementById("modalreligionAyah").value = religionAyah;

         let alamatAyah = document.getElementById("alamatAyah").value;
         document.getElementById("modalalamatAyah").value = alamatAyah;

         let provinsiAyah = document.getElementById("provinsiAyah").value;
         document.getElementById("modalprovinsiAyah").value = provinsiAyah;

         let kabupatenAyah = document.getElementById("kabupatenAyah").value;
         document.getElementById("modalkabupatenAyah").value = kabupatenAyah;

         let kecamatanAyah = document.getElementById("kecamatanAyah").value;
         document.getElementById("modalkecamatanAyah").value = kecamatanAyah;

         let kodeposAyah = document.getElementById("kodeposAyah").value;
         document.getElementById("modalkodeposAyah").value = kodeposAyah;

         let no_hpAyah = document.getElementById("phoneAyah").value;
         document.getElementById("modalphoneAyah").value = no_hpAyah;
// =========================================================================
        
        let nameIbu = document.getElementById("nameIbu").value;
         document.getElementById("modalnameIbu").value = nameIbu;

         let birthdayIbu = document.getElementById("birthdayIbu").value;
         document.getElementById("modalbirthdayIbu").value = birthdayIbu;

         let professionIbu = document.getElementById("professionIbu").value;
         document.getElementById("modalprofessionIbu").value = professionIbu;

         let religionIbu = document.getElementById("religionIbu").value;
         document.getElementById("modalreligionIbu").value = religionIbu;

         let alamatIbu = document.getElementById("alamatIbu").value;
         document.getElementById("modalalamatIbu").value = alamatIbu;

         let provinsiIbu = document.getElementById("provinsiIbu").value;
         document.getElementById("modalprovinsiIbu").value = provinsiIbu;

         let kabupatenIbu = document.getElementById("kabupatenIbu").value;
         document.getElementById("modalkabupatenIbu").value = kabupatenIbu;

         let kecamatanIbu = document.getElementById("kecamatanIbu").value;
         document.getElementById("modalkecamatanIbu").value = kecamatanIbu;

         let kodeposIbu = document.getElementById("kodeposIbu").value;
         document.getElementById("modalkodeposIbu").value = kodeposIbu;

         let no_hpIbu = document.getElementById("phoneIbu").value;
         document.getElementById("modalphoneIbu").value = no_hpIbu;
     })
   //end orang tua

   //wali
     $('#editBtnWali').click(function() {
         let nik_wali = document.getElementById("nikWali").value;
         document.getElementById("modalnikWali").value = nik_wali;

         let name_wali = document.getElementById("nameWali").value;
         document.getElementById("modalnameWali").value = name_wali;

         let birthplace_wali = document.getElementById("birthplaceWali").value;
         document.getElementById("modalbirthplaceWali").value = birthplace_wali;

         let birthday_wali = document.getElementById("birthdayWali").value;
         document.getElementById("modalbirthdayWali").value = birthday_wali;

         let religion_wali = document.getElementById("religionWali").value;
         document.getElementById("modalreligionWali").value = religion_wali;

         let role_wali = document.getElementById("roleWali").value;
         document.getElementById("modalroleWali").value = role_wali;

         let alamat_wali = document.getElementById("alamatWali").value;
         document.getElementById("modalalamatWali").value = alamat_wali;

         let provinsi_wali = document.getElementById("provinsiWali").value;
         document.getElementById("modalprovinsiWali").value = provinsi_wali;

         let kabupaten_wali = document.getElementById("kabupatenWali").value;
         document.getElementById("modalkabupatenWali").value = kabupaten_wali;

         let kecamatan_wali = document.getElementById("kecamatanWali").value;
         document.getElementById("modalkecamatanWali").value = kecamatan_wali;

         let kodepos_wali = document.getElementById("kodeposWali").value;
         document.getElementById("modalkodeposWali").value = kodepos_wali;

         let phone_wali = document.getElementById("phoneWali").value;
         document.getElementById("modalphoneWali").value = phone_wali;
     })
     //end wali

    // upload file
    function getImage(imagename) {
        var newimg = imagename.replace(/^.*\\/, "");
        $('#display-image').html(newimg);
    }

    function getImage2(imagename) {
        var newimg = imagename.replace(/^.*\\/, "");
        $('#display-image2').html(newimg);
    }
    function getImage3(imagename) {
        var newimg = imagename.replace(/^.*\\/, "");
        $('#display-image3').html(newimg);
    }
    function getImage4(imagename) {
        var newimg = imagename.replace(/^.*\\/, "");
        $('#display-image4').html(newimg);
    }
    function getImage5(imagename) {
        var newimg = imagename.replace(/^.*\\/, "");
        $('#display-image5').html(newimg);
    }
    //end upload file
</script>
</body>
</html>
