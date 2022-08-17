@extends('layouts.main')
@section('containers')
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <h3>Silahkan Login</h3>
            <form action="">
                <div>
                    <label for="">Username</label>
                    <input class="form-control" type="text">
                </div>
                <div>
                    <label for="">Password</label>
                    <input class="form-control" type="password">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Login</button>
            </form>
        </div>
    </div>
@endsection