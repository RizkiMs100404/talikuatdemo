@extends('layouts.app')
@section('contents')

<!--Container Main start-->
<div class="height-100 bg-light">
        <main>
              <div class="container mt-3">
        <div class="card mb-3" style="max-height: 100vh; overflow-y: auto;">
        <div class="card-header">PK-6-38900K-126 - 1 PEKERJAAN PEMELIHARAAN BERKALA JALAN RUAS JALAN JL. PANGERAN CAKRABUANA </div>
        <div class="card-body">

                        <a  class="btn btn-mat btn-dark waves-effect waves-light" >Buat Laporan</a>
                        <hr>
            <div class="container mt-2">
                <table border="2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Bulan</th>
                            <th>Rencana</th>
                            <th>Realisasi</th>
                            <th>Deviasi</th>
                            <th>Status</th>
                            <th style="width: 13%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                                            </tbody>
                </table>
            </div>
        </div>
    </div>
              </div>
    </main>
    </div>
    


<div>
<main>

<div class="card mb-3 mt-3" style="max-height: 100vh; overflow-y: auto;">
<div class="card-header">PK-6-291000-137 - PERBAIKAN BADAN JALAN BTS. MAJALENGKA/INDRAMAYU - JATIBARANG KM.CN. 78+200</div>
        <div class="card-body">
                        <a class="btn btn-mat btn-dark waves-effect waves-light" >Buat Laporan</i></a>
                        <hr>
            <div class="container mt-2">
                <table border="2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Periode</th>
                            <th>Rencana</th>
                            <th>Realisasi</th>
                            <th>Deviasi</th>
                            <th>Status</th>
                            <th style="width: 13%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <tr>
                            <td>2024</td>
                            <td>30.647</td>
                            <td>31.211</td>
                            <td>0.564</td>
                            <td>
                            <span class="badge bg-success">Disetujui<span>
                            </td>
                            <td>
                            <a class="btn btn-mat btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editKonsultan" onclick="updateKonsultan(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>

                                    <i class="bx bx-edit-alt"></i></a>

                                                                                            </td>
                        </tr>
                                                <tr>
                            <td>2024</td>
                            <td>30.647</td>
                            <td>31.211</td>
                            <td>0.564</td>
                            <td>
                                                                <span class="badge bg-success">Disetujui</span>
                                                            </td>
                            <td>
                            <a class="btn btn-mat btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editKonsultan" onclick="updateKonsultan(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>

                                    <i class="bx bx-edit-alt"></i></a>

                                                                                            </td>
                        </tr>
                                                <tr>
                            <td>2024</td>
                            <td>30.647</td>
                            <td>31.211</td>
                            <td>0.564</td>
                            <td>
                                                                <span class="badge bg-success">Disetujui</span>
                                                            </td>
                            <td>
                            <a class="btn btn-mat btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editKonsultan" onclick="updateKonsultan(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>

                                    <i class="bx bx-edit-alt"></i></a>
   </td>
                        </tr>
                                            </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- detail-laporan -->
<div class="modal fade text-dark modal-lg"  id="editKonsultan" >
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header ">
                <h1 class="modal-title fs-5" id="editKonsultanLabel">
                    Detail Laporan
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
                <input type="hidden" name="_token">               
                 <div class="modal-body">
                    <div class="mb-3">
                        <label  class="form-label">Id paket
                        </label>
                        <input  class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Periode
                        </label>
                        <input  class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">File
                        </label>
                        
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Rencana </label>
                        <input  class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Realisasi</label>
                        <input class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Deviasi</label>
                        <input  class="form-control npwp"  />
                    </div>
                    <div>
                        <h3 class="text-center">Detail Nomor Mata Pembayaran</h3>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Skh-1.1.22.(1a) - Pembuatan dokumen RKK, RMPK, RKPPL (apabila ada) dan RMLLP</label>
                        <input  class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label text-center">
Skh-1.1.22.(1c) - Penyusunan pelaporan penerapan SMKK</label>
                        <input  class="form-control"  />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    
</div>
        </main>
    </div>
</div>
@endsection


