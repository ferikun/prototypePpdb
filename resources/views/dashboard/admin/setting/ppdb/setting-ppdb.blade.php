@extends('dashboard.admin.layouts.main')
@section('konten')
@php
 $icon = 0; 
 $status = 'Selesai';
 $table = 'bg-secondary';
 $statusppdb = 'Selesai';
 $tes = null;
@endphp
<div class="col-12">
    <div class="card">
        @error('nama_jurusan')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ "Failed! " . $message . " Enter data according to the instructions"}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @enderror

        <div class="card-header head-calonSiswa text-dark bg-white">
            <h2><b>Setting Pendaftaran</b></h2>
            <div>
                <a href="/setting/ppdb/add/" style="font-size: 11px;" class="btn btn-success"><i class="bi bi-file-earmark-plus"> PPDB</i></a>
                <a href="/dashboard/tahun-ajaran" style="font-size: 11px;"class="btn btn-primary"><i class="bi bi-file-earmark-plus"> Tahun Ajaran</i></a>
                <a href="/dashboard/jurusan" style="font-size: 11px;"class="btn btn-secondary"><i class="bi bi-file-earmark-plus"> Jurusan</i></a>
                <a href="/dashboard/ruangan" style="font-size: 11px;"class="btn btn-info"><i class="bi bi-file-earmark-plus"> Ruangan</i></a>
            </div>
            
        </div>
        <div class="card-body tabel-calon">
            <?php $jumlahppdb = 0; ?>

            <table class="table text-center " id="tabel_dataSiswa">
                <thead class="table-dark">
                    <tr class="mb-3 ">
                        <th>Tahun Ajaran</th>
                        <th>Gelombang</th>
                        <th>Pendaftar</th>
                        <th>Ujian</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        <th colspan="2">Aksi Lanjutan</th>
                    </tr>
                </thead>
                <tbody id="tabelBody">
                    @foreach ($ppdbs as $ppdb)
                    @if ($ppdb->status == 1)
                        <?php
                            $icon = 'btn-danger';
                            $status = 'notactive';
                            $table = 'bg-info';
                            $statusppdb = 'Aktif';
                            $tes = 'Iya'
                        ?>
                    @else
                        <?php
                            $icon = 'btn-success';
                            $status = 'active';
                            $table = 'table-secondary';
                            $statusppdb = 'Tidak Aktif';
                        ?>
                    @endif
                    <tr class="{{$table}}">
                        <?php $jumlahppdb += 1; ?>
                        <td>{{ $ppdb->TahunAjaran->tahun }}</td>
                        <td>{{ $ppdb->gelombang->gelombang }}</td>
                        <td>0 siswa/{{$ppdb->kuota}}</td>
                        <td>{{ $ppdb->tes == '1' ? 'Iya' : 'Tidak' }}</td>
                        <td>{{$ppdb->tgl_mulai}}</td>
                        <td>{{$ppdb->tgl_selesai}}</td>
                        <td>{{$statusppdb}}</td>

                        <td class="fs-7">
                            <a href="/ppdb/{{$status}}/{{$ppdb->id}}" class="btn {{$icon}}"><i class="bi bi-broadcast"></i></a>
                        </td>

                        <td>
                            <a href="/ppdb/edit/{{$ppdb->id}}"  class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusPPDB" onclick="hapus({{$ppdb->id}})"><i class="bi bi-trash"></i></button>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-white">
            <div class="cetak mt-2">
                <h6>Jumlah : <?= $jumlahppdb ?> PPDB</h6>
            </div>
        </div>
    </div>
</div>
</div>

  <!-- Modal Hapus PPDB -->
<div class="modal fade" id="modalHapusPPDB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title" id="staticBackdropLabel">Hapus PPDB</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Apakah Anda yakin ingin menghapus PPDB ini?
        </div>
        <div class="modal-footer">
        <form id="hapusppdb" action="/ppdb/delete/" method="POST">
            @csrf
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="sumbit" class="btn btn-danger">Hapus</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('javascript')
<script>

    function tutup(id)
    {
        document.getElementById('tutupPpdb').setAttribute('action','/ppdb/notactive/'+id);
    }

    function hapus(id)
    {
        console.log(id);
        document.getElementById('hapusppdb').setAttribute('action','/ppdb/delete/'+id);
    }

</script>
@endsection