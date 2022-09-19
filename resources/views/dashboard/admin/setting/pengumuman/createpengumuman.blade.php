@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12v">
    <div class="card">
        <div class="card-header headPengumuman">
            <h2>Buat Pengumuman Baru</h2>
        </div>
        <div class="card-body">
            <div>
                <form action="/dashboard/setting/pengumuman" method="POST">
                    @csrf
                <div class="form-group mb-4">
                    <input type="hidden" name="ppdb_id" value="{{$ppdb_id}}">
                    <label for="author">Pemberi Pengumuman</label>
                    <input type="text" name="author" id="author" class="form-control" placeholder="Penulis" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <label for="kategori">Kategori Pengumuman</label>
                    <input type="text" name="kategori" class="form-control" placeholder="Kategori Postingan Pengumuman" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <label for="title">Judul Pengumuman</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Judul Pengumuman" autocomplete="off">
                </div>
                <div class=" form-group mb-4">
                    <input id="isi" type="hidden" name="konten">
                    <trix-editor input="isi"></trix-editor>
                </div>
                <div class="form-group mb-4">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <div class="mt-3">
                        <a href="/dashboard/setting/pengumuman" class="btn btn-outline-dark"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>
@endsection