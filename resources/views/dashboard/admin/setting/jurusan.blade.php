@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12">
    <div class="card">
        @error('tahun_ajaran')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ "Failed! " . $message . " Enter data according to the instructions"}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @enderror
        @if (session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('berhasil')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        @endif
        <div class="card-header">
            <h3><b><i class="bi bi-file-code"></i> Jurursan</b></h3>
        </div>
        <div class="card-body">
            <div class="form-group col-6 text-center">
                <table class="table table-bordered">
                    <tr class="table-primary">
                        <td>No</td>
                        <td>Nama Jurusan</td>
                        <td colspan="2">Aksi</td>
                    </tr>
                    <?php $id = 0; ?>
                    @foreach ($jurusans as $jurusan)
                    <tr>
                        
                        <td>{{$loop->iteration}}</td>
                        <td>{{$jurusan->nama_jurusan}}</td>
                        <td>
                          <button onclick="editJurusan({{$jurusan->id}},'{{$jurusan->nama_jurusan}}')" style="font-size: 12px;" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editJurusan"><i class="bi bi-pencil-square"></i></button>
                        </td>

                        <td>
                              <!-- Button trigger modal -->
                          <button style="font-size: 12px;" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusJurusan" onclick="hapusJurusan({{$jurusan->id}})"><i class="bi bi-trash"></i></button>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>

                <div class="form-group">
                    <button style="font-size: 12px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahJurusan">
                        <i class="fa-solid fa-plus">
                         Jurusan
                        </i>
                    </button>
                    <div class="mt-3">
                      <a href="/dashboard/setting/ppdb" class="btn btn-outline-dark"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>
                  </div>
                </div>
        </div>
    </div>
</div>
</div>

<!-- Modal Tambah Jurusan -->
<div class="modal fade" id="tambahJurusan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Jurusan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/dashboard/jurusan" method="POST">
            @csrf
            <input type="hidden" name="admin_id" value="{{auth()->user()->admin->id}}">
            <label for="tahun" class="form-label"><i>Masukan Jurusan dengan Format sepert : Web Programming</i></label>
            <input name="nama_jurusan" class="form-control @error('nama_jurusan') is-invalid @enderror" type="text" id="tahun" placeholder="Masukan Tahun Ajaran Baru" aria-label="default input example" autocomplete="off" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  <!-- Modal Edit Jurusan -->
<div class="modal fade" id="editJurusan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Jurusan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="modalEditJurusan" action="" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="admin_id" value="{{auth()->user()->admin->id}}">
            <label for="jurusan" class="form-label"><i>Masukan Jurusan dengan Format sepert : Web Programming</i></label>
            <input id="jurusanValue" value="" name="nama_jurusan" class="form-control @error('nama_jurusan') is-invalid @enderror" type="text" id="jurusan" placeholder="Masukan Jurusan Baru" aria-label="default input example" autocomplete="off" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </form>
      </div>
    </div>
  </div>
{{-- Modal Hapus Jurusan --}}
  <div class="modal fade" id="hapusJurusan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Jurusan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda Yakin ingin Menghapus Data ini?
        </div>
        <div class="modal-footer">
          <form class="modalHapusJurusan" action="/dashboard/jurusan" method="POST">
            @method('DELETE')
            @csrf
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </div>
          </form>
      </div>
    </div>
  </div>

  @section('javascript')
      <script type="text/javascript" src="/js/modalScript.js"></script>
  @endsection
@endsection