@extends('layouts.app')
@section('contents')

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header fw-bold">
            PK-6-291000-137 - PERBAIKAN BADAN JALAN BTS. MAJALENGKA/INDRAMAYU - JATIBARANG KM.CN. 78+200
        </div>
        <div class="card-body">
            <a href="/laporanm.detail" class="btn btn-dark mb-3">
                Buat Laporan
            </a>

            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Periode</th>
                            <th>Rencana</th>
                            <th>Realisasi</th>
                            <th>Deviasi</th>
                            <th>Status</th>
                            <th style="width: 13%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>2024</td>
                            <td>30.647</td>
                            <td>31.211</td>
                            <td>0.564</td>
                            <td>
                                <span class="badge bg-success">Disetujui</span>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editKonsultan" onclick="updateKonsultan(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
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
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editKonsultan" onclick="updateKonsultan(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
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
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editKonsultan" onclick="updateKonsultan(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
