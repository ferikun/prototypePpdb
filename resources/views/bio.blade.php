@extends('layouts.main')
@section('containers')
    <h1>ini halaman bio</h1>
    <ul>
        <li>
            Nisn : {{$bioUser->nisn}}
        </li>
        <li>
            Jenis Kelamin : {{$bioUser->gender}}
        </li>
        <li>
            Tempat Lahir : {{$bioUser->placeBorn}}
        </li>
        <li>
            Nisn : {{$bioUser->nisn}}
        </li>
        <li>
            Tanggal : {{$bioUser->birth}}
        </li>
        <li>
            Agama : {{$bioUser->agama}}
        </li>
        <li>
            Status Anak : {{$bioUser->statusAnak}}
        </li>
        <li>
            Status Keluarga : {{$bioUser->statusKeluarga}}
        </li>
        <li>
            Bidang Favorit : {{$bioUser->bidangFav}}
        </li>
        <li>
            Bidang Olahraga Favorit : {{$bioUser->olahraga}}
        </li>
        <li>
            Cita-cita : {{$bioUser->cita}}
        </li>
    </ul>
@endsection