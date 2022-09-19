@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12v">
    <div class="card">
        <div class="card-header headPengumuman">
            <h3>Pengumuman</h3>
            <a class="btn btn-success" href="/dashboard/setting/pengumuman/create"><i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="card-body">
            <div class="judul">
                <h4>Daftar Pengumuman</h4>
            </div>
            <div class="daftarPengumuman">
                <table class="table text-center" id="tabelPengumuman">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kategori</th>
                            <th>Judul Pengumuman</th>
                            <th>Pemberi Pengumuman</th>
                            <th>Tanggal Dibuat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$post->kategori}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->author}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                <a href="/dashboard/setting/pengumuman/{{$post->id}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                <a  href="/dashboard/setting/pengumuman/{{$post->id}}/edit" class="btn btn-warning text-white"><i class="fa-solid fa-pen"></i></a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusPost" onclick="hapusPost({{$post->id}})"><i class="fa-solid fa-trash-can"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
{{-- modal add pengumuman --}}
<div class="modal fade" id="Pengumuman" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header" id="headConfirm">
            <h4 class="modal-title" id="staticBackdropLabel">Pengumuman</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/dashboard/setting/pengumuman/" class="row g-2" method="POST">
                @csrf
                <div>
                <input type="hidden" name="ppdb_id" value="{{$ppdb->id}}">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori Pengumuman</label>
                    <select name="kategori" id="kategori" class="form-control">
                        <option disabled selected value="">pilih ketegori</option>
                        <option value="Keuangan">Keuangan</option>
                        <option value="Pendaftaran">Pendaftaran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="judul">Judul Pengumuman</label>
                    <input type="text" name="title" id="judul" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="kntn">Konten</label>
                    <textarea name="konten" id="kntn" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="pemeberi_pengumuman">Pemberi Pengumuman</label>
                    <input type="text" name="author" id="pemeberi_pengumuman" class="form-control">
                </div>
                <div class="modal-footer ">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

{{-- modal hapus post --}}
<div class="modal fade" id="modalHapusPost" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title" id="staticBackdropLabel">Hapus Post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah anda yakin ingin menghapus postingan ini?
        </div>
        <div class="modal-footer">
            <form id="hapusPost" action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('javascript')
<script>
    let input = document.getElementById("tabelPengumuman");
    for (let i = 1; i < input.rows.length; i++) {
        input.rows[i].onclick = function() {
            document.getElementById("kategori").value = this.cells[1].innerHTML;
            document.getElementById("judul").value = this.cells[2].innerHTML;
            document.getElementById("kntn").value = this.cells[3].innerHTML
        };
    };


    function hapusPost(id)
    {
        document.getElementById('hapusPost').setAttribute('action', '/dashboard/setting/pengumuman/'+id);
    }
</script>
@endsection