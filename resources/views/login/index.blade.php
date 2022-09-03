@extends('layouts.main')
@section('containers')

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
                            <div class="mb-md-5 mt-md-2 pb-2">
                                <form action="/login" method="post">
                                    @csrf
                                    <div>
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                    @if (session())
                                    {{-- <div class="alert alert-success">
                                        {{ session('failed') }}
                                    </div> --}}
                                    @include("sweetalert::alert")
                                    @endif
                                    <div class="form-outline form-white mb-4 mt-2 inputUsername">
                                        <input type="username" name="username" id="username" class="form-control form-control-lg" autocomplete="off" value="{{ old('username') }}" placeholder="Username" />
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

@endsection