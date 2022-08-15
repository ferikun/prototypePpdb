@extends('layouts.main')
@section('containers')
    <h1>Siswa Yang sudah Mendaftar</h1>

    @foreach ($siswa as $s)
        <ul>
            <li>
                {{$s->fullName}} <a href="/bio/{{$s->id}}" class="btn btn-primary">Bio</a>
            </li>
        </ul>
    @endforeach
@endsection