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
      $title ="Dashboard";
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
                    </div>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                        <button type="submit" class="dropdown-item" onclick="keluarAkun()">
                            <i class="bi bi-box-arrow-left"></i> Keluar
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
</script>
@yield('javascript')
</body>
</html>
