
@extends('layouts.app')
@section('contents')

<!--Container Main start-->
<div class="container d-flex justify-content-end mt-5">
<div class="height-100 bg-light">
        <main>
        <div class="content-wrapper" >
              <div class="container">
    <div class="card mb-4">
        <div class="card-header">Data Umum</div>
        <div class="card-body">
            <div class="row align-items-start mb-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Pemda</label>
                        <input type="text"  class="form-control"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>OPD</label>
                        <input type="text"  class="form-control"/>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>UTPD</label>
                        <input type="text"  class="form-control"/>
                    </div>
                </div>

            </div>
            <div class="row align-items-start mb-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Kategori Paket Kegiatan</label>

                        <input type="text"class="form-control" \>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Kegiatan / Paket</label>
                        <input type="text" class="form-control"  style="text-transform: uppercase" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nilai Kontrak</label>
                        <input type="text"class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="row align-items-start mb-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tanggal Kontrak</label>
                        <input type="date" class="form-control"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>No. Kontrak</label>
                        <input type="text"class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>No. SPMK</label>
                        <input type="text" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row align-items-start mb-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tanggal SPMK</label>
                        <input type="date" class="form-control "/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Panjang KM</label>
                        <input type="number" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Waktu Pelaksanaan</label>
                        <input type="number"  class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row align-items-start mb-3">
                <div class="col">
                    <div class="form-group">
                        <label>Kontraktor</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label>Konsultan Supervisi</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="form-group">
                        <label>PPK</label>
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>PPK Kegiatan</label>
                        <input type="text" class="form-control"  />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Data Jadual Pekerjaan
            </div>


                    <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label>File jadual</label>
                            <div class="input-group">
                                <input accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" type="file" class="form-control"/>
                                <button class="btn btn-success" type="button">
                                    Upload
                                </button>
                            </div>
                        </div>

                        
                    </div>
                    <div class="col-4  offset-md-2">
                        <div class="form-group">
                            <label>Template Jadual</label>
                            <div class="input-group">
                                <a class="btn btn-primary w-100"  rel="noopener noreferrer"> Download</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        
        <button type="submit" class="btn btn-primary w-100 mt-3 mb-5">
            Simpan
        </button>
    </form>
</div>
        </div>
</main>
</div>
</div>
</div>
    @endsection