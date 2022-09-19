@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12">
    <div class="card">
        @error('tahun')
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
            <h3><b><i class="bi bi-calendar-date"></i> Tahun Ajaran</b></h3>
        </div>
        <div class="card-body">
            <div class="form-group col-6 text-center">
                <table class="table table-bordered">
                    <tr class="table-primary">
                        <td>No</td>
                        <td>Tahun Ajaran</td>
                        <td colspan="2">Aksi</td>
                    </tr>
                    <?php $id = 0; ?>
                    @foreach ($tahuns as $tahun)
                    <tr>
                        
                        <td>{{$loop->iteration}}</td>
                        <td>{{$tahun->tahun}}</td>
                        <td>
                            <button style="font-size: 12px;" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="edit({{$tahun->id}},'{{$tahun->tahun}}')"><i class="bi bi-pencil-square"></i></button>
                        </td>

                        <td>
                              <!-- Button trigger modal -->
                          <button style="font-size: 12px;" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="hapus({{$tahun->id}})"><i class="bi bi-trash"></i></button>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>

                <div class="form-group">
                    <button style="font-size: 12px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        <i class="fa-solid fa-plus">
                        Tahun Ajaran
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
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Tahun</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form  action="/dashboard/tahun-ajaran" method="POST">
            @csrf
            <label for="tahun" class="form-label"><i>Masukan Tahun dengan Format sepert : 20XX/20xx</i></label>
            <input name="tahun" class="form-control @error('tahun') is-invalid @enderror" type="text" id="tahun" placeholder="Masukan Tahun Ajaran Baru" aria-label="default input example" autocomplete="off" required>
            @error('tahun')
            <div class="invalid-feedback">
              {{ $message }}
            </div> 
            @enderror
            <input type="hidden" name="admin_id" value="{{auth()->user()->admin->id}}">
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
        <div class="modal-header bg-success">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Tahun Ajaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="editmodal" action="/dashboard/tahun-ajaran" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="admin_id" value="{{auth()->user()->admin->id}}">
            <label for="tahun" class="form-label"><i>Masukan Tahun dengan Format sepert : 20XX</i></label>
            <input id="editValue" value="" name="tahun" class="form-control @error('tahun') is-invalid @enderror" type="text" id="tahun" placeholder="Masukan Tahun Ajaran Baru" aria-label="default input example" autocomplete="off" required>
            @error('tahun')
            <div class="invalid-feedback">
                {{ $message }}
              </div> 
            @enderror

            <input type="hidden" name="admin_id" value="{{auth()->user()->admin->id}}">
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
        <h5 class="modal-title" id="exampleModalLabel">Hapus Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apa Anda Yakin ingin menghapus data ini ?
      </div>
      <div class="modal-footer">
        <form class="hapusmodal" action="/dashboard/tahun-ajaran" method="POST">
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
      <script type="text/javascript" src="/js/modalScript.js"></script>
  @endsection
@endsection