@extends('layouts.app')

@section('contents')
<div class="container-fluid py-4">

    {{-- Header & Breadcrumb --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="mb-1 fw-bold">Data Umum</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="#">Data Umum</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Kontraktor</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambah">
                <i class="bi bi-plus-lg me-1"></i>Tambah
            </button>
            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalTahun">
                <i class="bi bi-calendar me-1"></i>Pilih Tahun Database
            </button>
        </div>
    </div>

    {{-- Toolbar --}}
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body d-flex flex-wrap justify-content-between align-items-center gap-3">
            <div class="d-flex align-items-center gap-2">
                <label class="mb-0">Show</label>
                <select class="form-select form-select-sm w-auto">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                <label class="mb-0">entries</label>
            </div>
            <div class="input-group input-group-sm w-auto">
                <input type="text" class="form-control" placeholder="Search...">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </div>

    {{-- Table --}}
    <div class="card shadow-sm border-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama Kegiatan</th>
                        <th>Kontraktor</th>
                        <th>Konsultan</th>
                        <th>PPK</th>
                        <th class="text-center" style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>pekerjaan membuat alat<br> alat berat seperti <br> membuat senjata</td>
                        <td>PT Pindad</td>
                        <td>PT Pindad</td>
                        <td>Raihan Gunari Arifin</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-outline-secondary me-1" href="/dataumum.detail">
                                <i class="bi bi-search"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary me-1" href="/dataumum.edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-success" href="/dataumum.upload">
                                <i class="bi bi-folder2-open"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>pekerjaan membuat<br> kereta</td>
                        <td>PT Kereta api indonesia</td>
                        <td>PT Kereta api</td>
                        <td>Onal subhan arifin</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-outline-secondary me-1" href="/dataumum.detail">
                                <i class="bi bi-search"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary me-1" href="/dataumum.edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-success" href="/dataumum.upload">
                                <i class="bi bi-folder2-open"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>pekerjaan menjual<br> jaringan data</td>
                        <td>PT telkom indonesia</td>
                        <td>PT telkom</td>
                        <td>Sandi subhan arifin</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-outline-secondary me-1" href="/dataumum.detail">
                                <i class="bi bi-search"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary me-1" href="/dataumum.edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-success" href="/dataumum.upload">
                                <i class="bi bi-folder2-open"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>pekerjaan elektronika</td>
                        <td>PT Len industry</td>
                        <td>PT Len</td>
                        <td>Zidan gunari arifin</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-outline-secondary me-1" href="/dataumum.detail">
                                <i class="bi bi-search"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary me-1" href="/dataumum.edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-success" href="/dataumum.upload">
                                <i class="bi bi-folder2-open"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- Modal Tambah --}}
<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Data Kontraktor</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3"><label class="form-label">Nama Perusahaan Kontraktor</label><input type="text" class="form-control"></div>
                <div class="mb-3"><label class="form-label">Nama Direktur</label><input type="text" class="form-control"></div>
                <div class="mb-3"><label class="form-label">Nama General Superintendent</label><input type="text" class="form-control"></div>
                <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control"></div>
                <div class="mb-3"><label class="form-label">Alamat</label><input type="text" class="form-control"></div>
                <div class="mb-3"><label class="form-label">NPWP</label><input type="text" class="form-control"></div>
                <div class="mb-3"><label class="form-label">No. Telp</label><input type="tel" class="form-control"></div>
                <div class="mb-3"><label class="form-label">Bank</label><input type="text" class="form-control"></div>
                <div class="mb-3"><label class="form-label">No. Rekening</label><input type="text" class="form-control"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Pilih Tahun --}}
<div class="modal fade" id="modalTahun" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title">Pilih Tahun Database</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <select class="form-select">
                    <option selected>Pilih Tahun</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                </select>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-info text-white">Simpan</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Hapus --}}
<div class="modal fade" id="modalHapus" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content border-0">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Hapus Data</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mb-0">Yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button class="btn btn-light btn-sm" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endsection
