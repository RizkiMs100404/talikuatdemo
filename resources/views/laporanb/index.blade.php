@extends('layouts.app')
@section('contents')

<div class="container mt-5">
    <div class="card shadow border-0 rounded-4">
        <div class="card-header bg-primary text-white fw-bold d-flex justify-content-between align-items-center">
            PK-6-38900K-126 - 1 PEKERJAAN PEMELIHARAAN BERKALA JALAN RUAS JALAN JL. PANGERAN CAKRABUANA
            <a href="/laporanb.detail" class="btn btn-dark btn-sm">
                <i class="bi bi-file-earmark-plus me-1"></i> Buat Laporan
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-primary text-nowrap">
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
                        {{-- Data akan ditampilkan di sini --}}
                        <tr>
                            <td>Januari</td>
                            <td>Rp 10.000.000</td>
                            <td>Rp 9.500.000</td>
                            <td>Rp 500.000</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                            <td>
                                <a href="#" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Februari</td>
                            <td>Rp 12.000.000</td>
                            <td>Rp 11.000.000</td>
                            <td>Rp 1.000.000</td>
                            <td><span class="badge bg-warning text-dark">Proses</span></td>
                            <td>
                                <a href="#" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        {{-- Tambahkan data lainnya sesuai kebutuhan --}}
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-3">
                <small class="text-muted">Showing 1 to 2 of 2 entries</small>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><span class="page-link">Previous</span></li>
                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><span class="page-link">2</span></li>
                        <li class="page-item"><span class="page-link">Next</span></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>

@endsection
