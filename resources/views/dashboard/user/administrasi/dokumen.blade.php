@extends('dashboard.user.layouts.main')
@section('container')
    @if (session()->has('updoc'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('updoc') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
                <!-- menu Upload Dokumen -->
                <div class="col-8">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h4><i class="fa-regular fa-file-lines me-3"></i>Upload Dokumen Pelengkap</h4>
                        </div>
                        <div class="card-body upload">
                            <form action="/dashboard/dokumen/up_doc" method="post" enctype="multipart/form-data" >
                                @csrf
                                @method('put')
                            <table class="table table-bordered">
                                  <tr class="text-center">
                                    <td class="fs-5">Akta Kelahiran</td>
                                    <td class="fs-5"> 
                                        <div style="overflow:hidden; max-height:200px">
                                            <input type="hidden" name="oldDoc1" value="{{ $doc->akta_lahir }}">
                                            @if ($doc->akta_lahir)
                                            <p class="btn btn-success">Sudah Upload</p>
                                            @else
                                                <p class="btn btn-danger">Belum Upload</p>
                                            @endif
                                        </div>
                                    </td>
                                    <td >
                                        <label for="akta_lahir" class="fs-6 btn btn-primary">Upload<i class="fa-solid fa-upload ms-2"></i></label>
                                        <input type="file" name="akta_lahir" id="akta_lahir" class="ms-4 input @error('akta_lahir')is-invalid @enderror" onchange="getImage(this.value);">
                                        <p id="display-image"></p>
                                    </td>
                                  </tr>
                                
                                  <tr class="text-center">
                                    <td class="fs-5">Kartu Keluarga</td>
                                    <td class="fs-5">
                                        <div style="overflow:hidden; max-height:200px"  >
                                            <input type="hidden" name="oldDoc2" value="{{ $doc->kartu_keluarga }}">
                                            @if ($doc->kartu_keluarga)
                                            <p class="btn btn-success">Sudah Upload</p>
                                            @else
                                                <p class="btn btn-danger">Belum Upload</p>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <label for="kartu_keluarga" class="fs-6 btn btn-primary">Upload<i class="fa-solid fa-upload ms-2"></i></label>
                                        <input type="file" name="kartu_keluarga" id="kartu_keluarga" class="ms-4 input @error('kartu_keluarga')is-invalid @enderror" onchange="getImage2(this.value);">
                                        <p id="display-image2"></p>
                                    </td>
                                    
                                  </tr>
                                  
                                  <tr class="text-center">
                                    <td class="fs-5">Pas Photo</td>
                                    <td class="fs-5">
                                        <div style="overflow:hidden; max-height:200px"  >
                                            <input type="hidden" name="oldDoc3" value="{{ $doc->pas_photo }}">
                                            @if ($doc->pas_photo)
                                            <p class="btn btn-success">Sudah Upload</p>
                                            @else
                                                <p class="btn btn-danger">Belum Upload</p>
                                            @endif
                                        </div>
                                    </td>
                                    <td ><label for="pas_photo" class="fs-6 btn btn-primary">Upload<i class="fa-solid fa-upload ms-2"></i></label>
                                        <input type="file" name="pas_photo" id="pas_photo" class="ms-4 input @error('pas_photo')is-invalid @enderror" onchange="getImage3(this.value);">
                                        <p id="display-image3"></p>
                                    </td>
                                  </tr>
                                  <tr class="text-center">
                                    <td class="fs-5">Ijazah Terakhir</td>
                                    <td class="fs-5">
                                        <div style="overflow:hidden; max-height:200px"  >
                                            <input type="hidden" name="oldDoc4" value="{{ $doc->ijazah_terakhir }}">
                                            @if ($doc->ijazah_terakhir)
                                            <p class="btn btn-success">Sudah Upload</p>
                                            @else
                                                <p class="btn btn-danger">Belum Upload</p>
                                            @endif
                                        </div>
                                    </td>
                                    <td> <label for="ijazah_terakhir" class="fs-6 btn btn-primary">Upload<i class="fa-solid fa-upload ms-2"></i></label>
                                        <input type="file" name="ijazah_terakhir" id="ijazah_terakhir" class="ms-4 input @error('ijazah_terakhir')is-invalid @enderror" onchange="getImage4(this.value);">
                                        <p id="display-image4"></p>
                                    </td>
                                  </tr>
                                  <tr class="text-center">
                                    <td class="fs-5">Transkrip Nilai</td>
                                    <td class="fs-5">
                                        <div style="overflow:hidden; max-height:200px"  >
                                            <input type="hidden" name="oldDoc5" value="{{ $doc->transkrip_nilai }}">
                                            @if ($doc->transkrip_nilai)
                                            <p class="btn btn-success">Sudah Upload</p>
                                            @else
                                                <p class="btn btn-danger">Belum Upload</p>
                                            @endif
                                        </div>
                                    </td>
                                    <td><label for="transkrip_nilai" class="fs-6 btn btn-primary">Upload<i class="fa-solid fa-upload ms-2"></i></label>
                                        <input type="file" name="transkrip_nilai" id="transkrip_nilai" class="ms-4 input @error('transkrip_nilai') is-invalid @enderror" onchange="getImage5(this.value);">
                                        <p id="display-image5"></p></button>
                                    </td>
                                  </tr>
                              </table>
                              <div class="d-grid gap-2 col-12">
                                <button type="submit" class="btn btn-info btn-lg text-white">Kirim</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ahir menu Upload Dokumen -->
@endsection
@section('javascript')
    <script src="/js/Dokumen.js"></script>
@endsection