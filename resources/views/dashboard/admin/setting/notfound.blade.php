@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12v">
    <div class="card ms-3">
        <div class="card-header bg-danger text-light text-center"><h4><i class="bi bi-cone-striped"></i> PPDB Sedang Tidak Berjalan <i class="bi bi-cone-striped"></i></h4></div>
        <div class="card-body">
            <p class="fs-5 fw-bold"><i> Sistem PPDB sedang berhenti, silahkan cek untuk memeriksa Sistem nya sudah berjalan atau belum!</i></p><br>
            <p class="fs-5">Caranya: </p>
            <ul>
                <li>
                    
                    <p class="fs-5"><i class="bi bi-1-square-fill"></i> " Dashboard => Settings  => Pendaftaran ". </p><br>
                </li>
                <li>
                    <p class="fs-5"><i class="bi bi-2-square-fill"></i> Nyalakan Sistem PPDB nya <i class="bi bi-broadcast"></i></p><br> 
                </li>
            </ul>
            <p class="fs-7"><i>Jika masih ada kendala silahkan hubungi Pihak Programmer!!</i></p>
        </div>
    </div>
</div>
</div>
@endsection

@section('javascript')
    
@endsection