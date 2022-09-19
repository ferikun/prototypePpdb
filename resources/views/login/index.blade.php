<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>
    <div class="container-lg">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse topbar" id="navbarSupportedContent">
                    <ul class="navbar-nav link-dark me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex mx-3">
                        <a class="btn btn-primary mx-3 " href="/login">Sign In</a>
                        <a class="btn btn-outline-primary " href="/register">Register</a>
                    </div>
                </div>
        </nav>
        </div>

        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-between align-items-center h-100">
                <div class="col-12 col-md-8 col-xl-6 col-xl-5">
                    <img src="img/login_vector.jpg" alt="" width="600px">
                </div>
                <!-- form login -->
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-dark" style="border-radius: 1rem;">
                        <div class="card-body px-5 p-5 text-center">
                            @if (session()->has('berhasil'))
                            <div class="alert alert-success" role="alert">
                                {{ session('berhasil') }}
                              </div>
                              @endif

                              @if (session()->has('GagalLogin'))
                              <div class="alert alert-danger" role="alert">
                                {{ session('GagalLogin') }}
                              </div>
                              @endif
                               
                            <div class="mb-md-5 mt-md-2 pb-2">
                                <form action="/login" method="post">
                                    @csrf

                                    <div>
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                    <div class="form-outline form-white mb-4 mt-2 inputUsername">
                                        <input type="username" name="username" id="username" class="form-control form-control-lg" autocomplete="off" value="{{ old('username') }}" placeholder="Username" autofocus />
                                        <!-- <i class="fa-solid fa-user"></i> -->
                                    </div>

                                    <div class="form-outline form-white mb-5 inputPw">
                                        <input type="password" name="password" id="password" class="form-control form-control-lg" autocomplete="off" placeholder="Password" />
                                        <span class="eye" onclick="myFunction()">
                                            <i id="show" class="bi bi-eye-fill eye"></i>
                                            <i id="slash" class="bi bi-eye-slash-fill eye"></i>
                                        </span>
                                    </div>
                                    <!-- <div class="form-outline form-white mb-4">
                                        <input type="checkbox" class="form-check-input ms-1" id="show-password">
                                    </div> -->
                                    <hr>
                                    <div class="d-grid gap-2 col-12 mx-auto mt-5">
                                        <button class="btn btn-primary btn-lg masuk" type="submit">Masuk</button>
                                    </div>
                                </form>

                            </div>

                            <div class="d-flex justify-content-around ling mb-5">
                                <a href="#" class="text-primary-50 fw-bold">Bantuan</a>
                                <a href="#" class="text-primary-50 fw-bold">Lupa Password?</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script> -->
        <!-- <script>
            $(document).ready(function() {
                $('#show-password').click(function() {
                    if ($(this).is(':checked')) {
                        $('#password').attr('type', 'text');
                    } else {
                        $('#password').attr('type', 'password');
                    }
                });
            });
        </script> -->
        {{-- <script type="text/javascript">
            function validasi() {
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                if (username != "" && password != "") {
                    return true;
                } else {
                    alert('Username dan Password harus di isi !');
                    return false;
                }
            }
        </script> --}}

        <script>
            function myFunction() {
                let a = document.getElementById("password");
                let b = document.getElementById("show");
                let c = document.getElementById("slash");

                if (a.type === 'password') {
                    a.type = "text";
                    b.style.display = "block";
                    c.style.display = "none";
                } else {
                    a.type = "password";
                    b.style.display = "none";
                    c.style.display = "block";
                }
            }
        </script>
</body>

</html>