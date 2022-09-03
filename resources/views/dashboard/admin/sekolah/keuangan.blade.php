@extends('dashboard.admin.layouts.main')
@section('konten')
    <div class="row">
        <div class="card">
            <div class="card-body">
            <h1>Ini adalah halaman keuangan</h1>
            <table class="table tabl-striped">
                <tr>
                    <th>Nama Tagihan</th>
                    <th>Nominal</th>
                </tr>
                <?php 
                    $total = 0;
                ?>
                @foreach ($dataKeuangan as $data)
                <tr>
                    <th>{{ $data->nama_tagihan }}</th>
                    <th>{{ $data->nominal }}</th>
                <?php $total= $total + $data->nominal ?>
                </tr>
                @endforeach
                <tr>
                    <th>Total Biaya</th>
                    <th>{{ $total }}</th>
                </tr>
            </table>
            </div>
            <div class="card-body">
                <h1>Tagihan edit</h1>
                <div class="row">
                    <div class="col-5">
                        <ul>
                            <li>Nama Tagihan</li>
                            <li>Nominal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection