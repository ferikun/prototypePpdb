@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12v">
    <div class="card ms-3">
        <div class="card-header bg-warning">
            <p class="fs-5">Kategori : {{$post->kategori}}</p>
        </div>
        <div class="card-title d-flex justify-content-center fs-5">
          <b>Judul Pengumuman : {{$post->title}}</b>      
        </div>
        <div class=" container card-body border fs-5">
           <p class="fs6">{!!$post->konten!!}</p>
        </div>
        <div class="card-footer">
           <p class="fs-7">Di Post Oleh : <b>{{$post->author}}</b><br></p>
           <p class="fs-7">Di Update Pada : {{$post->updated_at}}</p>
        </div>
    </div>
</div>
<div class="ms-3 mt-3">
    <a href="/dashboard/setting/pengumuman" class="btn btn-outline-dark"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>
</div>
</div>
@endsection

@section('javascript')
    
@endsection