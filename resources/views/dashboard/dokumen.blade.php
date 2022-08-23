@extends('dashboard.layouts.main')
@section('container')
    <!-- menu Upload Dokumen -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h4><i class="fa-regular fa-file-lines me-3"></i>Upload Dokumen Pelengkap</h4>
                        </div>
                        <div class="card-body upload">
                            <form action="">
                                <div class="mb-4">
                                    <label for="akte">Foto Copy Akte Kelahiran<i class="fa-solid fa-upload ms-4"></i></label>
                                    <input type="file" name="akte" id="akte" class="ms-4 input" onchange="getImage(this.value);">
                                    <p id="display-image"></p>
                                </div>
                                <div class="mb-4">
                                    <label for="kk">Foto Copy Kartu Keluarga<i class="fa-solid fa-upload ms-4"></i></label>
                                    <input type="file" name="kk" id="kk" class="ms-4 input" onchange="getImage2(this.value);">
                                    <p id="display-image2"></p>
                                </div>
                                <div class="d-grid gap-2 col-2">
                                    <a href="" class="btn btn-info btn-lg text-white">Kirim</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ahir menu Upload Dokumen -->
@endsection