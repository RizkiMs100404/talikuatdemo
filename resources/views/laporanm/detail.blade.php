
@extends('layouts.app')
@section('contents')

<div class="container d-flex justify-content-end mt-5">
<div class="height-100 bg-light">
        <main>
        <div class="content-wrapper" >
              <a class="btn btn-success "style="margin-left:100px;"  rel="noopener noreferrer">Download Template Laporan</a>
<div class="row mt-3">
    <div class="col-lg-9 grid-margin stretch-card">
            <div class="card "style="margin-left:100px;">
                <input type="hidden">        
                <input type="hidden" />
                <div  class=" card-body " >
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Paket</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control"  required readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">Minggu Ke</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">Upload File Laporan</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="file" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Rencana</label>
                                <input type="text"class="form-control"/>
                                                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Realisasi</label>
                                <input type="text"class="form-control" />
                                                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Deviasi</label>
                                <input type="text"  class="form-control"/>
                                                            </div>
                        </div>
                    </div>
                    <h4 class="text-center fw-bolder fs-3 mt-4 mb-4">Detail Nomor Mata Pembayaran</h4>
                         <div class="form-group row mb-3">
                        <label class="text-wrap">Skh-1.1.22.(1a) - Pembuatan dokumen RKK, RMPK, RKPPL (apabila ada) dan RMLLP</label>
                        <div class="input-group">
                            <input type="text"  class="form-control"/>
                        </div>
                    </div>
                         <div class="form-group row mb-3">
                        <label class="text-wrap">Skh-1.1.22.(1c) - Penyusunan pelaporan penerapan SMKK</label>
                        <div class="input-group">
                            <input type="text"  class="form-control"  />
                        </div>
                    </div>
                         <div class="form-group row mb-3">
                        <label class="text-wrap">SKh-1.1.22.(3b1) - Topi pelindung (safety helmet)</label>
                        <div class="input-group">
                            <input type="text"  class="form-control"  />
                        </div>
                    </div>
                         <div class="form-group row mb-3">
                        <label class="text-wrap">SKh-1.1.22.(3b7) - Sarung tangan (safety gloves)</label>
                        <div class="input-group">
                            <input type="text"  class="form-control" />
                        </div>
                    </div>
                         <div class="form-group row mb-3">
                        <label class="text-wrap">SKh-1.1.22.(3b8) - Sepatu keselamatan (safety shoes, rubber safety shoes and toe cap)</label>
                        <div class="input-group">
                            <input type="text" class="form-control"  />
                        </div>
                    </div>
                         <div class="form-group row mb-3">
                        <label class="text-wrap">SKh-1.1.22.(3b11) - Rompi keselamatan (safety vest)</label>
                        <div class="input-group">
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                         <div class="form-group row mb-3">
                        <label class="text-wrap">SKh-1.1.22.(4a) - Asuransi (Construction All Risks/CAR)</label>
                        <div class="input-group">
                            <input type="hidden" name="nmp[]" value="SKh-1.1.22.(4a)" />
                            <input type="hidden" name="uraian[]" value="Asuransi (Construction All Risks/CAR)" />
                            <input type="text"  class="form-control"  />
                        </div>
                    </div>
                         <div class="form-group row mb-3">
                        <label class="text-wrap">Skh-1.1.22.(6a) - Peralatan P3K  (Kotak P3K, Alat
pengukur suhu badan, tandu, obat luka, dll)</label>
                        <div class="input-group">
                            <input type="text"  class="form-control" />
                        </div>
                    </div>
                        <div class="form-group row mb-3">
                        <label class="text-wrap">SKh-1.1.22.(7e) - Rambu informasi</label>
                        <div class="input-group">
                            <input type="text"  class="form-control" />
                        </div>
                    </div>
                        <div class="form-group row mb-3">
                        <label class="text-wrap">SKh-1.1.22.(7h) - Kerucut lalu lintas (traffic cone)</label>
                        <div class="input-group">
                            <input type="text"  class="form-control"  />
                        </div>
                    </div>
                        <div class="form-group row mb-3">
                        <label class="text-wrap">3.2.(1a) - Timbunan Biasa dari sumber galian</label>
                        <div class="input-group">
                            <input type="text"class="form-control"/>
                        </div>
                    </div>
                        <div class="form-group row mb-3">
                        <label class="text-wrap">3.4.(2) - Pemotongan Pohon Pilihan diameter 15 – 30 cm</label>
                        <div class="input-group">
                            <input type="text"  class="form-control"  />
                        </div>
                    </div>
                        <div class="form-group row mb-3">
                        <label class="text-wrap">7.9.(1) - Pasangan Batu</label>
                        <div class="input-group">
                            <input type="text"  class="form-control"/>
                        </div>
                    </div>
                       <div class="form-group row mb-3">
                        <label class="text-wrap">7.15.(1) - Pembongkaran Pasangan Batu</label>
                        <div class="input-group">
                            <input type="text"  class="form-control"/>
                        </div>
                    </div>
                      <div class="form-group row mb-3">
                        <label class="text-wrap">9.2.(5) - Patok Pengarah</label>
                        <div class="input-group">
                            <input type="text"  class="form-control" />
                        </div>
                    </div>
                  <p id="totalParent">Total : <span class="text-danger" id="total"></span></p>
                </div>

            </div>
           
        </form>
        
    </div>
    <button type="button" class="btn btn-primary mt-2 w-50 " style="margin-left: 130px;" onclick="validate()">
                Save
            </button>
</div>

        </div>
        </main>
    </div>
</div>

@endsection