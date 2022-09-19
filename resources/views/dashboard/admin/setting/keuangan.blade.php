@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-md-10">
    <div class="card set-keuangan">
        <div class="card-header set-headKeuangan">
            <div>
                <h3>Keuangan</h3>
            </div>
            <div>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addKeuangan"><i class="fa-solid fa-plus"></i></button>
            </div>

        </div>
        <div class="card-body body-setKeuangan">
            <div>
                <table class="table table-bordered text-center">
                    <tr class="table-dark">
                        <td>No</td>
                        <td>Nama Tagihan</td>
                        <td>Nominal Rp.</td>
                        <td colspan="2">Aksi</td>
                    </tr>
                    @foreach ($keuangans as $keuangan)
                    <tr>
                        <td hidden>{{$keuangan->id}}</td>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$keuangan->nama_tagihan}}</td>
                        <td>{{$keuangan->nominal}}</td>
                        <td><button type="button" class="btn btn-primary" id="edit" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editKeuangan({{$keuangan->id}},'{{$keuangan->nama_tagihan}}',{{$keuangan->nominal}})">Edit</button></td>
                        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="hapusKeuangan({{$keuangan->id}})">Hapus</button></td>
                    </tr>
                    @endforeach                        
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal add keungan -->
<div class="modal fade" id="addKeuangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah keuangan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/dashboard/setting/keuangan" method="POST">
                @csrf
                <input type="hidden" name="ppdb_id" value="{{$keuangan->ppdb_id}}">
                <div class="form-group">
                    <label for="category_kuangan">Pilih Ketegori</label>
                    <select name="nama_tagihan" id="category_keuangan" class="form-control">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="SPP">SPP</option>
                        <option value="Uang Gedung">Uang Gedung</option>
                        <option value="Uang Praktik">Uang Pendaftaran</option>
                        <option value="Uang Seragam">Uang Seragam</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal</label>
                    <input type="text" name="nominal" class="form-control" autocomplete="off">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>


<!-- Modal edit keungan -->

<div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="modalEditKeuangan" action="" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <input type="hidden" id="test" value="">
                    <label for="category_kuangan">Ketegori</label>
                    <input id="editNamaTagihan" type="text" name="nama_tagihan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal</label>
                    <input id="editNominal" type="text" name="nominal" class="form-control" autocomplete="off">
                </div>
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
            </form>
      </div>
    </div>
  </div>

  <!-- Modal Hapus -->
<div class="modal fade" id="modalHapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title" id="staticBackdropLabel">Hapus Data!!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda Yakin ingin Menghapus Data ini?
        </div>
        <div class="modal-footer">
            <form id="modalHapusKeuangan" action="/dashboard/setting/keuangan/" method="POST">
                @method('DELETE')
                @csrf
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('javascript')
<script src="/js/modalKeuangan.js"></script>
@endsection