@extends('dashboard.admin.layouts.main')
@section('konten')
                   <!-- Input Nilai -->

                   <div class="col-md-7">
                    <div class="card">
                        <div class="card-header text-white bg-primary">
                            <div class="cari">
                                <input class="form-control-md" type="text" name="cari" id="cari" placeholder="masukan kata kunci  . . .">
                                <button class="btn btn-success" type="submit" name="cari">Cari</button>
                            </div>
                        </div>
                        <div class="card-body tabel-input">

                            <table class="table-inputNilai table-bordered text-center">
                                <thead class="calon-head">
                                    <tr>
                                        <th>Nomor Pendaftaran</th>
                                        <th>Nama</th>
                                        <th>Asal Sekolah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="body-input">
                                    @foreach ($siswas as $siswa)
                                    <tr>
                                        <td>12345678</td>
                                        <td>{{ $siswa->name }}</td>
                                        <td>{{ $siswa->asalsekolah->nama_asal_sekolah }}</td>
                                        <td>
                                            <button class="btn btn-warning" name="edit">Pilih</button>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 form-inputNilai">
                    <div class="card">
                        <div class="card-header head-inputNilai">
                            <h3>Input Nilai</h3>
                        </div>
                        <div class="card-body body-input ms-3">
                            <form action="" id="inputNilai" class="">
                                <div class="form-group mt-3">
                                    <label for="no_pendaftaran">No. Ujian</label>
                                    <input type="text" class="form-control col-md-7" name="no_pendaftaran">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="nama">Nama Siswa</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                    <input type="text" class="form-control" name="asal_sekolah">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="nilai">Masukan Nilai</label>
                                    <input type="text" class="form-control" name="nilai">
                                </div>
                                <button type="submit" name="simpan" class="btn btn-simpanInput btn-success mt-3">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Akhir Input Nilai -->
@endsection