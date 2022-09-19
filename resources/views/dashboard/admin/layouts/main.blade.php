<!doctype html>
<html lang="en">

<head>
    <title>{{ $title ?? "Dashboard" }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="/css/style_admin.css">
    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    //menghilangkan icon upload
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="d-flex">
        <!-- Header -->
        <header>
            <div class="header-titled">
                <h3>Sekolah Jodi</h3>
            </div>
            <div id="nav_admin">
                <ul class="nav" id="head_menu">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle me-4 headMenu" data-bs-toggle="dropdown" role="button" aria-expanded="false">Admin <i class="fa fa-user" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard/admin"><i class="fa-solid fa-user-pen me-3"></i>Profil</a></li>
                            <form action="/logout" method="POST">
                                @csrf
                            <li><button type="submit" class="dropdown-item mt-4"><i class="fa-solid fa-right-from-bracket me-3"></i>Keluar</a></li>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>

        </header>
        <!-- Ahir Header -->

        <!-- Sidebar -->
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn" onclick="openNav()"></i>
            <i class="fas fa-times" id="cancel" onclick="closeNav()"></i>
        </label>
        <div class="sidebar" id="sideNavigation">
            <div class="header">Control Panel</div>
            <ul class="menu">
                <li><a href="/dashboard" class="sideMenu"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
                <li><a href="#" class="btn1 sideMenu"><i class="fa-solid fa-address-card"></i>Pendaftaran<span class="fa-solid fa-caret-down ms-4 satu"></span></a>
                    <ul class="show-satu">
                        <li><a href="/dashboard/pendaftaran/daftar-siswa" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Data Pendaftar</a></li>
                        <li><a href="/dashboard/pendaftaran/terverifikasi" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Data Terverifikasi</a></li>
                        <li><a href="/dashboard/pendaftaran/input-nilai" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Input Nilai</a></li>
                        <li><a href="/dashboard/pendaftaran/hasil-akhir" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Hasil Akhir</a></li>
                    </ul>
                </li>
                <li><a href="#" class="btn3 sideMenu"><i class="fa-solid fa-gear"></i>Settings<span class="fa-solid fa-caret-down ms-4 tiga"></></a>
                    <ul class="show-tiga">
                        <li><a href="/dashboard/setting/ppdb" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Pendaftaran</a></li>
                        <li><a href="/dashboard/setting/keuangan" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Keuangan</a></li>
                        <li><a href="/dashboard/setting/pengumuman" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Pengumuman</a></li>
                        <li><a href="/dashboard/sekolah" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Informasi Sekolah</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Akhir Sidebar -->
        <!-- konten -->
        <div class="container" id="konten">
            <div class="row">
            @yield('konten')

            </div>
        </div>

    </div>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
 <script src="/js/scripts.js"></script>

 <script>
     function openNav() {
         document.getElementById("sideNavigation").style.width = "250px";
         document.getElementById("konten").style.marginLeft = "250px";
     }

     function closeNav() {
         document.getElementById("sideNavigation").style.width = "0";
         document.getElementById("konten").style.marginLeft = "0";
     }
 </script>

 <script>
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