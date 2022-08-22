@extends('layouts.main')
@section('containers')
    <h1 class="text-center">Daftar Calon Siswa</h1>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <table class="table table-bordered text-center">
                <tr>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($siswa as $sw)
                <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $sw->iduser->fullName }}</td>
                     <td><a class="btn btn-primary" href="/admin/biosiswa/{{ $sw->iduser->id }}">Detail</a><a class="btn btn-danger"href="#">Hapus</a></td>
                </tr>
                @endforeach                
                

                
            </table>
        </div>
    </div>
@endsection