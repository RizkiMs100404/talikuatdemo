@extends('layouts.app')
@section('contents')

<div class="container mt-5">
    {{-- Card Pertama --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header fw-bold">
            PK-6-38900K-126 - 1 PEKERJAAN PEMELIHARAAN BERKALA JALAN RUAS JL. PANGERAN CAKRABUANA
        </div>
        <div class="card-body">
            <a href="/laporanmk.detail" class="btn btn-dark mb-3">
                <i class="bi bi-file-earmark-plus"></i> Buat Laporan
            </a>

            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle text-center">
                    <thead class="table-dark">
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
                        {{-- Data contoh --}}
                        <tr>
                            <td>Januari</td>
                            <td>500</td>
                            <td>480</td>
                            <td>-20</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Februari</td>
                            <td>600</td>
                            <td>590</td>
                            <td>-10</td>
                            <td><span class="badge bg-warning text-dark">Proses</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- /Data contoh --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Card Kedua --}}
    <div class="card shadow-sm">
        <div class="card-header fw-bold">
            PK-6-38900K-126 - 1 PEKERJAAN PEMELIHARAAN BERKALA JALAN RUAS JL. PANGERAN CAKRABUANA
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-dark mb-3">
                <i class="bi bi-file-earmark-plus"></i> Buat Laporan
            </a>

            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle text-center">
                    <thead class="table-dark">
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
                        <tr>
                            <td colspan="6" class="text-muted">Belum ada data</td>
                        </tr>
                        {{-- /Data kosong --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
