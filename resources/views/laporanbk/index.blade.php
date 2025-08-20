@extends('layouts.app')
@section('contents')

<div class="container mt-4">
    {{-- Card Pertama --}}
    <div class="card shadow border-0 rounded-4 mb-4">
        <div class="card-header bg-primary text-white fw-bold">
            PK-6-38900K-126 - 1 PEKERJAAN PEMELIHARAAN BERKALA JALAN RUAS JL. PANGERAN CAKRABUANA
        </div>
        <div class="card-body">
            <a href="/laporan" class="btn btn-dark mb-3">
                <i class="bi bi-file-earmark-plus"></i> Buat Laporan
            </a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-primary">
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
                        {{-- Data akan dimuat di sini --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Card Kedua --}}
    <div class="card shadow border-0 rounded-4">
        <div class="card-header bg-success text-white fw-bold">
            PK-6-38900K-126 - 1 PEKERJAAN PEMELIHARAAN BERKALA JALAN RUAS JL. PANGERAN CAKRABUANA
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-dark mb-3">
                <i class="bi bi-file-earmark-plus"></i> Buat Laporan
            </a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-success">
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
                        {{-- Data akan dimuat di sini --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
