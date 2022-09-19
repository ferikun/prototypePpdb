<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
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
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse topbar" id="navbarSupportedContent">
                    <ul class="navbar-nav link-light me-auto mb-2 mb-lg-0">
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
                        <a class="btn btn-outline-primary mx-3 " href="/login">Sign In</a>
                        <a class="btn btn-primary " href="/register">Register</a>
                    </div>
                </div>
        </nav>
        </div>

        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-between align-items-center h-100">
                <div class="col-12 col-md-8 col-xl-6 col-xl-5">
                    <img src="img/vector_register_login.jpg" alt="" width="500px">
                </div>

                <!-- form Register -->
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-dark" style="border-radius: 1rem;">
                        <div class="card-body px-5 p-5 text-center">

                            <div class="mb-md-5 mt-md-2 pb-2">
                                <form action="/register/create" method="post">
                                    @csrf
                                    <input type="hidden" name="role" value="siswa">
                                    <div>
                                        <i class="fa-solid fa-user-plus"></i>
                                    </div>


                                    <div class="form-outline form-white mb-3 mt-2">
                                        <input type="text" name="username" id="username" class="form-control form-control-lg @error('username') is-invalid @enderror" autocomplete="off" placeholder="Username" value="{{ old('username') }}" required>
                                        @error('username')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" autocomplete="off" placeholder="Email Aktif" value="{{ old('email') }}" required>
                                        @error('email')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" autocomplete="off" placeholder="Password" required>
                                        @error('password')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                    </div>
                                    
                                    <hr>
                                    <div class="d-grid gap-2 col-12 mx-auto mt-5">
                                        <button class="btn btn-primary btn-lg masuk" type="submit">Daftar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        {{-- <script type="text/javascript">
            function validasi() {
                var username = document.getElementById("nama").value;
                var password = document.getElementById("nisn").value;
                var password = document.getElementById("email").value;
                if (username != "" && password != "" && email != "") {
                    return true;
                } else {
                    alert('Input tidak boleh kosong !');
                    return false;
                }
            }
        </script> --}}

</body>

</html>