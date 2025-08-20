@extends('layouts.app')

@section('contents')
<div class="container py-4">

    {{-- Header & Breadcrumb --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="mb-1">Jadwal</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
                </ol>
            </nav>
        </div>
        <div>
            <button class="btn btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter">
                <i class="bi bi-funnel me-1"></i> Filter
            </button>
        </div>
    </div>

    {{-- Toolbar Show Entries + Search --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <label class="d-inline-flex align-items-center">
                Show
                <select class="form-select form-select-sm mx-2" style="width:auto">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                entries
            </label>
        </div>
        <div>
            <label class="d-inline-flex align-items-center">
                Search:
                <input type="search" class="form-control form-control-sm ms-2" placeholder="Cari data...">
            </label>
        </div>
    </div>

    {{-- Table --}}
    <div class="table-responsive" style="max-height: 70vh;">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nama Kegiatan</th>
                    <th>UPTD</th>
                    <th>Kontraktor</th>
                    <th>Konsultan</th>
                    <th>PKK</th>
                    <th style="width: 20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>PT. Nagahitam</td>
                    <td>Ir. Soekarno</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <a href="/jadual.detail" class="btn btn-outline-primary btn-sm me-1">
                            <i class="bi bi-search"></i>
                        </a>
                        <a href="/jadual.edit" class="btn btn-outline-info btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PT. Auahgelap</td>
                    <td>Moh. Hatta</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <a href="/jadual.uplode" class="btn btn-outline-warning btn-sm">
                            <i class="bi bi-floppy-fill"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>PT. Siap Laksanakan</td>
                    <td>Agung Hercules</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm me-1">
                            <i class="bi bi-search"></i>
                        </a>
                        <a class="btn btn-outline-info btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-between align-items-center mt-3">
        <div>Showing 1 to 3 of 3 entries</div>
        <nav>
            <ul class="pagination pagination-sm mb-0">
                <li class="page-item disabled"><a class="page-link">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item disabled"><a class="page-link">Next</a></li>
            </ul>
        </nav>
    </div>

{{-- Offcanvas Filter --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasFilter">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Filter Jadwal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <label class="form-label">Nama Kegiatan</label>
        <input type="text" class="form-control mb-3" placeholder="Cari nama kegiatan...">
        <button class="btn btn-primary w-100">Terapkan</button>
    </div>
</div>

{{-- Modal Tambah --}}
<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Jadwal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <label class="form-label">Nama Kegiatan</label>
                <input type="text" class="form-control mb-3" placeholder="Masukkan nama kegiatan">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

@endsection
