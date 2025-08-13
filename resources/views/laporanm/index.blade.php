@extends('layouts.app')
@section('contents')

<!--Container Main start-->

<div class="container d-flex justify-content-end mt-5">
<div class="height-100 bg-light">
        <main>
        <div class="content-wrapper" >
<div class="card mb-3 mt-3" style="max-height: 100vh; overflow-y: auto;">
<div class="card-header">PK-6-291000-137 - PERBAIKAN BADAN JALAN BTS. MAJALENGKA/INDRAMAYU - JATIBARANG KM.CN. 78+200</div>
        <div class="card-body">
                        <a href="/laporanm.detail" class="btn btn-mat btn-dark waves-effect waves-light" >Buat Laporan</i></a>
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

                                   </a>

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

                                   </a>

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

                                   </a>
   </td>
                        </tr>
                                            </tbody>
                </table>
            </div>
        </div>
    </div>
        </div>
        </main>
</div>
</div>
@endsection


