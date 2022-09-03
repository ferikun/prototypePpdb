@extends('dashboard.admin.layouts.main')
@section('konten')
                <!-- calon siswa -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header head-calonSiswa text-white bg-primary">
                            <h3>Daftar Calon Siswa</h3>
                            <form action="/daftar-siswa">
                            <div class="cari">
                                <input class="form-control-md inputCari" type="text" name="keywoard" id="cari" autofocus placeholder="masukan kata kunci  . . ." value="{{request('keywoard')}}">
                                <button class="btn btn-success" type="submit">Cari</button>
                            </div>
                            </form>
                        </div>
                        <div class="card-body tabel-calon">
                            <table class="table tabel_calonSiswa table-bordered text-center" id="tabel_dataSiswa">
                                <thead class="calon-head">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor Pendaftaran</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Asal Sekolah</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="calon-body">
                                    <?php $jumlah = 0; ?>
                                    @foreach ($siswas as $siswa)
                                    <tr>
                                        <td style="display: none;">{{$siswa->id}}</td>
                                        <td>{{ $loop->iteration }}</td>
                                        <?php $jumlah += 1; ?>
                                        <td>{{$siswa->nomor}}</td>
                                        <td>{{ $siswa->name }}</td>
                                        <td>{{ $siswa->nama_jurusan }}</td>
                                        <td>{{ $siswa->nama_asal_sekolah }}</td>
                                        <td>{{ $siswa->nilai }}</td>
                                        
                                        <td>
                                            <button class="btn btn-warning" id="edit" type="button" name="edit" data-bs-toggle="modal" data-bs-target="#editSiswa">Edit</button>
                                            <a class=" btn btn-danger" onclick="return confirm('Apakah anda yakin?')" href="/dashboard">Hapus</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="cetak mt-2">
                                <h6>Jumlah : {{$jumlah}} Siswa</h6>
                                <a href="#" class="btn btn-primary">Print Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir calon siswa -->
            </div>

            <!-- modal -->
            <div class="modal fade" id="editSiswa" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="staticBackdropLabel">Edit Data Siswa</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" class="row g-2" id="siswaedit">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="idbio" id="idbio" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Siswa</label>
                                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" name="jurusan" id="jurusan" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nilai">Nilai</label>
                                    <input type="text" name="nilai" id="nilai" class="form-control">
                                </div>
                                <div class="modal-footer ">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-warning">Bersihkan</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection