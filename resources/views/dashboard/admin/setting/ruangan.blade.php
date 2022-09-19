@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3><i class="bi bi-door-open"></i><b>Ruangan PPDB</b></h3>
        </div>
        <div class="card-body">
            <div class="form-group col-7 text-center">
                <table class="table table-bordered">
                    <tr class="table-primary">
                        <th>No</th>
                        <th>Nama Ruangan</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                    @foreach ($ruangans as $ruangan)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$ruangan->nama_ruangan}}</td>
                        <td><button style="font-size: 12px;" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="edit({{$ruangan->id}},'{{$ruangan->nama_ruangan}}')"><i class="bi bi-pencil-square"></i></button></td>
                        <td><button style="font-size: 12px;" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="hapus({{$ruangan->id}})"><i class="bi bi-trash"></i></button></td>
                        {{-- <td><button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button></td> --}}
                        {{-- <td><button class="btn btn-danger"><i class="bi bi-trash"></i></button></td> --}}
                    </tr>                        
                    @endforeach
                </table>
            </div>

                <div class="form-group">
                    <button style="font-size: 12px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        <i class="bi bi-bookmark-plus">
                        Ruangan
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

{{-- modal tambah --}}

<!-- Modal -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Ruangan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form  action="/dashboard/ruangan" method="POST">
            @csrf
            <label for="nama" class="form-label"><i>Masukan Nama Ruangan Format sepert : R.TKJ 3</i></label>
            <input name="nama" class="form-control @error('nama') is-invalid @enderror" type="text" id="tahun" placeholder="Masukan Nama Ruangan" aria-label="default input example" autocomplete="off" required>
            @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div> 
            @enderror
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </div>
        </form>
    </div>
  </div>

{{-- Edit Modal --}}
<div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Ruangan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editmodal" action="" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="admin_id" value="{{auth()->user()->admin->id}}">
            <label for="nama" class="form-label"><i>Masukan Nama Ruangan Format sepert : R.TKJ 3</i></label>
            <input id="editValue" value="" name="nama" class="form-control @error('nama') is-invalid @enderror" type="text" id="nama" placeholder="Masukan Nama Ruangan" aria-label="default input example" autocomplete="off" required>
            @error('tahun')
            <div class="invalid-feedback">
                {{ $message }}
              </div> 
            @enderror

            <input type="hidden" name="admin_id" value="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Hapus -->
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Ruangan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apa Anda Yakin ingin menghapus data ini ?
      </div>
      <div class="modal-footer">
        <form id="hapusmodal" action="/dashboard/ruangan/" method="POST">
          @csrf
          @method('DELETE')
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>

  @section('javascript')
      <script type="text/javascript">
        function edit(id, nama_ruangan)
        {
          document.getElementById('editmodal').setAttribute('action','/dashboard/ruangan/'+id);
          document.getElementById('editValue').setAttribute('value', nama_ruangan);
        }

        function hapus(id)
        {
          document.getElementById('hapusmodal').setAttribute('action','/dashboard/ruangan/'+id);
        }
      </script>
  @endsection
@endsection