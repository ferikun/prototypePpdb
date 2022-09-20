@extends('dashboard.user.layouts.main')
@section('container')
                <!-- pembayaran pendaftaran -->
                <div class="col-10">
                    <div class="card">
                        <div class="card-header bayar border-dark">
                            <h3>Biaya Pendaftaran</h3>
                        </div>
                        <div class="card-body">
                            <div class="bayar_daftar">
                                <h6>Pendaftaran</h6>
                                <p>100.000</p>
                            </div>
                            <hr>
                            <div class="bayar_daftar">
                                <p>Total:</p>
                                <p>Rp.100.000</p>
                            </div>
                        </div>
                        <div class="text-end me-2 mb-3">
                            <a href="#" class="btn btn-lg btn-bayar text-white">Bayar</a>
                        </div>
                    </div>
                </div>
                <!-- ahir pembayaran pendaftaran -->
@endsection