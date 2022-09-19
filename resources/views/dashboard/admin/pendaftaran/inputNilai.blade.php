@extends('dashboard.admin.layouts.main')
@section('konten')
<!-- Input Nilai -->
    <div class="col-12">
        <div class="card">
            <div class="card-header text-white bg-primary d-flex justify-content-between">
                <h3><b>Input Nilai</b></h3>
                <div class="cari">
                    <input class="form-control-md inputCari" type="text" name="cari" id="cari" autofocus placeholder="masukan kata kunci  . . .">
                </div>
            </div>
            <div class="card-body tabel-inputNilai">
                <table class="table table-inputNilai table-bordered text-center" id="tabelInputNilai">
                    <thead class="input-head">
                        <tr>
                            <th style="display:none;">id</th>
                            <th>No.</th>
                            <th>Nomor Pendaftaran</th>
                            <th>Nama</th>
                            <th>Asal Sekolah</th>
                            <th>Nilai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tbody" class="body-input">
                        @foreach ($siswas as $siswa)
                         <tr>
                            <td style="display: none;">{{$siswa->id}}</td>
                            <td style="display: none;">{{$siswa->ppdb_id}}</td>
                            <td>{{$loop->iteration}}</td>
                            <td id="noUjian">12345678</td>
                            <td id="nama">{{$siswa->name}}</td>
                            <td id="asalSekolah">{{$siswa->asalsekolah->nama_asal_sekolah}}</td>
                            <td id="inputNilai">{{$siswa->nilai->nilai}}</td>
                            <td>
                                <button id="inputNilai" class="btn btn-warning" name="edit" data-bs-toggle="modal" data-bs-target="#input_nilai">Pilih</button>
                                <button id="delete" class="btn btn-danger" id="btnHapus" data-bs-toggle="modal" data-bs-target="#hapus">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="input_nilai" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Input Siswa</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="NP">Nomor Pendaftaran</label>
                            <input type="text" name="NP" id="NP" class="form-control" disabled>
                                        </div>
                    <div class="form-group">
                        <label for="name">Nama Siswa</label>
                            <input type="text" name="name" id="name" class="form-control" autocomplete="off" disabled>
                    </div>
                    <div class="form-group">
                        <label for="sekolah_asal">Asal Sekolah</label>
                            <input type="text" name="sekolah_asal" id="sekolah_asal" class="form-control" disabled>
                    </div>
                    <form action="/dashboard/input-nilai" method="POST">
                    @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="ppdb_id" id="ppdb_id">
                            <label for="nilaiInput">Nilai</label>
                                <input type="text" name="nilai" id="nilaiInput" class="form-control" autofocus autocomplete="off">
                        </div>
                        <div class="modal-footer ">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

                    {{-- Modal Hapus --}}
    <div class="modal fade" id="hapus" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" id="headConfirm">
                <h4 class="modal-title" id="staticBackdropLabel">Anda Yakin Akan Menghapus Data Ini?</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="row g-2">
                        <div>
                            <input type="hidden" name="id" id="di" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nopen">Nomor Pendaftaran</label>
                            <input type="text" name="nopen" id="nopen" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nm">Nama Siswa</label>
                                <input type="text" name="nm" id="nm" class="form-control" autocomplete="off" disabled>
                        </div>
                        <div class="form-group">
                            <label for="sekolah">Asal Sekolah</label>
                                <input type="text" name="sekolah" id="sekolah" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nilai">Nilai</label>
                                <input type="text" name="nilai" id="nilai" class="form-control" disabled>
                        </div>
                        <div class="modal-footer ">
                            <button type="submit" class="btn btn-success">Ya</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
<script>
    let input = document.getElementById("tabelInputNilai");
    for (let i = 1; i < input.rows.length; i++) {
        input.rows[i].onclick = function() {
            document.getElementById("id").value = this.cells[0].innerHTML;
            document.getElementById("ppdb_id").value = this.cells[1].innerHTML;
            document.getElementById("NP").value = this.cells[3].innerHTML;
            document.getElementById("name").value = this.cells[4].innerHTML;
            document.getElementById("sekolah_asal").value = this.cells[5].innerHTML;
            document.getElementById('nilaiInput').value = this.cells[6].innerHTML;
        };
    };
</script>

<!-- pencarian -->
<script>
    $(document).ready(function() {
        $("#cari").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection