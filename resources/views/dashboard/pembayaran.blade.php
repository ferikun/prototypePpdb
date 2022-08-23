@extends('dashboard.layouts.main')
@section('container')
{{-- menu pembayaran --}}
<div class="col-3">
    <div class="card mt-3 ms-2">
        <div class="card-header bg-white border-dark">
            <h4><i class="fa-regular fa-file-lines me-3"></i>Pembayaran</h4>
        </div>
        <div class="card-body edit-profil">
            <div class="profil mt-2"><a href="">Pendaftaran</a></div>
            <div class="profil mt-2"><a href="">Biaya Lainya</a></div>
        </div>
    </div>
</div>
       
        {{-- ahir menu pembayaran --> --}}

        <!-- pembayaran pendaftaran -->
                 {{-- <div class="col-8">
                    <div class="card mt-3 ms-2">
                        <div class="card-header bg-white border-dark">
                            <h5>Biaya Pendaftaran</h5>
                        </div>
                        <div class="card-body">
                            <div class="pembayaran1">
                                <h6>Pendaftaran</h6>
                                <p>100.000</p>
                            </div>
                            <hr>
                            <div class="pembayaran1">
                                <p>Total:</p>
                                <p>Rp.100.000</p>
                            </div>
                        </div>
                        <div class="text-end me-2 mb-3">
                            <a href="#" class="btn btn-lg btn-info text-white">Bayar</a>
                        </div>
                    </div>
                </div> --}}
                {{-- ahir pembayaran pendaftaran --> --}}

                 <!-- biaya lainya -->
                <div class="col-8">
                    <div class="card mt-3 ms-2">
                        <div class="card-header bg-white border-dark">
                            <h5>Biaya Pendaftaran</h5>
                        </div>
                        <div class="card-body">
                            <div class="pembayaran1">
                                <h6>Uang Pangkal Gedung</h6>
                                <p>3.000.000</p>
                            </div>
                            <div class="pembayaran1">
                                <h6>Uang Seragam</h6>
                                <p>1.000.000</p>
                            </div>
                            <div class="pembayaran1">
                                <h6>SPP (bulan pertama)</h6>
                                <p>150.000</p>
                            </div>
                            <hr>
                            <div class="pembayaran1">
                                <p>Total:</p>
                                <p>Rp.4.150.000</p>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-3 btn-bayar">
                            <a class="btn btn-success btn-lg masuk" href="#">Bayar</a>
                        </div>
                    </div>
                </div>
                <!-- ahir biaya lainya -->

@endsection