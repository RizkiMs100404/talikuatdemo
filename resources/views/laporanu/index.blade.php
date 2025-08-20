@extends('layouts.app')
@section('contents')

<div class="height-100 bg-light py-4">
    <main>
        <div class="container">

            {{-- Card 1 --}}
            <div class="card shadow-sm mb-4">
                <div class="card-header fw-bold">
                    PK-6-38900K-126 - 1 PEKERJAAN PEMELIHARAAN BERKALA JALAN RUAS JALAN JL. PANGERAN CAKRABUANA
                </div>
                <div class="card-body">
                    <a class="btn btn-dark mb-3">Buat Laporan</a>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle">
                            <thead class="table-dark text-center">
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
                                {{-- Data kosong --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="card shadow-sm">
                <div class="card-header fw-bold">
                    PK-6-291000-137 - PERBAIKAN BADAN JALAN BTS. MAJALENGKA/INDRAMAYU - JATIBARANG KM.CN. 78+200
                </div>
                <div class="card-body">
                    <a class="btn btn-dark mb-3">Buat Laporan</a>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle">
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
                            <tbody>
                                <tr>
                                    <td>2024</td>
                                    <td>30.647</td>
                                    <td>31.211</td>
                                    <td>0.564</td>
                                    <td><span class="badge bg-success">Disetujui</span></td>
                                    <td class="text-center">
                                        <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editKonsultan">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2025</td>
                                    <td>31.647</td>
                                    <td>33.211</td>
                                    <td>1.564</td>
                                    <td><span class="badge bg-success">Disetujui</span></td>
                                    <td class="text-center">
                                        <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editKonsultan">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                                {{-- Data lainnya --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

{{-- Modal Detail Laporan --}}
<div class="modal fade text-dark modal-lg" id="editKonsultan" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Id Paket</label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Periode</label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">File</label>
                    <input type="file" class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Rencana</label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Realisasi</label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Deviasi</label>
                    <input class="form-control" />
                </div>
                <h5 class="text-center mt-4">Detail Nomor Mata Pembayaran</h5>
                <div class="mb-3">
                    <label class="form-label">Skh-1.1.22.(1a) - Pembuatan dokumen RKK, RMPK, RKPPL, dan RMLLP</label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Skh-1.1.22.(1c) - Penyusunan pelaporan penerapan SMKK</label>
                    <input class="form-control" />
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

@endsection
