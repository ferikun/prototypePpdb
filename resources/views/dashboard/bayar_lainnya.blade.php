@extends('dashboard.layouts.main')
@section('container')
                <!-- biaya lainya -->
                <div class="col-10">
                    <div class="card">
                        <div class="card-header border-dark bayar">
                            <h3>Biaya Pendaftaran</h3>
                        </div>
                        <div class="card-body">
                            <div class="pembayaran_lainya">
                                <h5>Uang Pangkal Gedung</h5>
                                <p>3.000.000</p>
                            </div>
                            <div class="pembayaran_lainya">
                                <h5>Uang Seragam</h5>
                                <p>1.000.000</p>
                            </div>
                            <div class="pembayaran_lainya">
                                <h5>SPP (bulan pertama)</h5>
                                <p>150.000</p>
                            </div>
                            <hr>
                            <div class="pembayaran_lainya">
                                <p>Total:</p>
                                <p>Rp.4.150.000</p>
                            </div>
                        </div>
                        <div class="text-end me-2 mb-3">
                            <a class="btn btn-bayar btn-lg masuk" href="#">Bayar</a>
                        </div>
                    </div>
                </div>
                <!-- ahir biaya lainya -->
@endsection