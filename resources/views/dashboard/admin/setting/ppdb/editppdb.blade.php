@extends('dashboard.admin.layouts.main')
@section('konten')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3><b>Edit PPDB</b></h3>
        </div>
        <div class="card-body">
            <form action="/ppdb/{{$ppdb->id}}/update/{{$ppdb->TahunAjaran->id}}" method="POST" class="row g-2" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <select name="tahun_ajaran" class="form-select" aria-label="Default select example">
                        <option value="{{$ppdb->TahunAjaran->id}}" selected>{{$ppdb->TahunAjaran->tahun}}</option>
                        @foreach ($tahun_ajaran as $tahun)
                        @if($ppdb->TahunAjaran->id != $tahun->id)
                            <option value="{{$tahun->id}}">{{ $tahun->tahun }}</option>
                        @endif  
                        @endforeach
                      </select>
                </div>
                <div class="form-group col-6">
                    <label for="gelombang">Gelombang Pendaftaran</label>
                    <select name="gelombang" id="gelombang" class="form-control">
                        <option selected value="{{$ppdb->gelombang->id}}">{{$ppdb->gelombang->gelombang}}</option>
                        @foreach ($gelombangs as $gelombang)
                        @if( $ppdb->gelombang->id != $gelombang->id )
                            <option value="{{$gelombang->id}}">{{$gelombang->gelombang}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="kuota">Kuota Penerimaan</label>
                    <input value="{{$ppdb->kuota}}" name="kuota_peserta" type="text" id="kuota" class="form-control @error('kuota_peserta') is-invalid @enderror" autocomplete="off" required>
                    @error('kuota_peserta')
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="jenis_seleksi">Tes</label>
                    <select name="tes" id="tes" class="form-control">
                        <?php 
                        $jenisTes = '';

                        if($ppdb->tes == '1')
                        {
                            $jenisTes = 'Iya';
                        }
                        else {
                            $jenisTes = 'Tidak';
                        }
                        ?>
                        <option selected value="{{$ppdb->tes}}" >{{$jenisTes}}</option>
                        @if($ppdb->tes != '1')
                            <option value="1">Iya</option>
                        @else
                            <option value="0">Tidak</option>
                        @endif
                    </select>
                </div>
                <div class="form-group col-6">
                    <div class="card-body border bg-warning">
                        <label for="biaya"><i>Edit Data Keuangan, ada di Dashboard->Settings->Keuangan</i></label>
                    </div>

                </div>  
                <div class="form-group col-6 mt-3">
                    <label for="tgl_mulai">Tanggal Mulai</label>
                    <input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control" value="{{$ppdb->tgl_mulai}}" required>
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="tgl_selesai">Tanggal Selesai</label>
                    <input type="date" id="tgl_selesai" name="tgl_selesai" class="form-control" value="{{$ppdb->tgl_selesai}}" required>
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="waktu_ujian">Waktu Ujian</label>
                    <input type="date" id="tgl_ujian" name="tgl_ujian" class="form-control" value="{{$ppdb->tgl_ujian}}" required>
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="waktu_ujian">Total Waktu Ujian</label>
                    <input type="text" id="waktu_ujian" name="waktu_ujian" class="form-control @error('waktu_ujian') is-invalid @enderror" placeholder="Dalam Menit" value="{{$ppdb->waktu_ujian}}" autocomplete="off" required>
                    @error('waktu_ujian')
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror  
                </div>
                <div class="form-group">
                    <label for="baner">Upload Baner</label>
                    <input type="file" name="baner" id="baner" class="form-control" required>
                </div>
                <div class="d-grid btn-lg gap-2 mt-3">
                    <button class="btn btn-success" type="submit">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection