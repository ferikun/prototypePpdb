@extends('layouts.main')

@section('containers')
<h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
<div class="row">
  <div class="col-md-3">
      <main class="form-signin w-100 m-auto">
    <form>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" id="username" placeholder="masukan username">
        <label for="username">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
  </div>
  </main>
@endsection