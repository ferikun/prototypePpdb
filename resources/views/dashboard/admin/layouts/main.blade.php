<!doctype html>
<html lang="en">

<head>
    <title>ADMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="/css/style_admin.css">

</head>

<body>
    <div class="d-flex">
        <!-- Header -->
        <header>
            <div class="header-titled" >
                <img src="/img/Logo/tutwuri.png" alt="" style="width: 45px;">
            </div>
            <div id="nav_admin">
                <ul class="nav" id="head_menu">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle me-4 headMenu" data-bs-toggle="dropdown" role="button" aria-expanded="false">ADMIN <i class="fa fa-user" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile/admin"><i class="fa-solid fa-user-pen me-3"></i>Profil</a></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item mt-4" href="#"><i class="fa-solid fa-right-from-bracket me-3"></i>Keluar</button></li>
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
                        <li><a href="/dashboard/daftar-siswa" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Pendaftar</a></li>
                        <li><a href="/dashboard/verified-siswa" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Siswa Terverifikasi</a></li>
                        <li><a href="/dashboard/nilai" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Input Nilai</a></li>
                        <li><a href="/dashboard/hasil-akhir" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Hasil Akhir</a></li>
                    </ul>
                </li>
                <li><a href="#" class="btn3 sideMenu"><i class="fa-solid fa-gear"></i>Settings<span class="fa-solid fa-caret-down ms-4 tiga"></></a>
                    <ul class="show-tiga">
                        <li><a href="/dashboard/settings/info-sekolah" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Info Sekolah</a></li>
                        <li><a href="" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>PPDB</a></li>
                        <li><a href="" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Pengumman</a></li>
                        <li><a href="" class="ms-3 subMenu"><i class="fa-solid fa-right-from-bracket"></i>Administrasi</a></li>
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

    <!-- JavaScript Libraries -->
    <script src="/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
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

</body>

</html>