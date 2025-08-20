@extends('layouts.app')

@section('contents')
<div class="container-fluid py-4">

    {{-- Header & Breadcrumb --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="mb-1 fw-bold">Data Kontraktor</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Kontraktor</li>
                </ol>
            </nav>
        </div>
        <div>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambah">
                <i class="bi bi-plus-lg me-1"></i>Tambah Kontraktor
            </button>
            <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter">
                <i class="bi bi-funnel me-1"></i>Filter
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
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Nama Direktur</th>
                        <th>No. Telp</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PT Ilmu Hitam</td>
                        <td>Nur Rawarontek</td>
                        <td>00000000000000</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEdit">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapus">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>PT Ilmu Hitam</td>
                        <td>Nur Rawarontek</td>
                        <td>00000000000000</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEdit">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapus">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>PT Ilmu Hitam</td>
                        <td>Nur Rawarontek</td>
                        <td>00000000000000</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEdit">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapus">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>PT Ilmu Hitam</td>
                        <td>Nur Rawarontek</td>
                        <td>00000000000000</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEdit">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapus">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- Offcanvas Filter --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasFilter">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Filter Kontraktor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <div class="mb-3">
            <label class="form-label">Nama Perusahaan</label>
            <input type="text" class="form-control" placeholder="Cari nama perusahaan...">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Direktur</label>
            <input type="text" class="form-control" placeholder="Cari nama direktur...">
        </div>
        <button class="btn btn-primary w-100">Terapkan Filter</button>
    </div>
</div>

{{-- Modal Tambah --}}
<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Kontraktor</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                {{-- Form Fields --}}
                <div class="mb-3">
                    <label class="form-label">Nama Perusahaan Kontraktor</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Direktur</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama General Superintendent</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">NPWP</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">No. Telp</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Bank</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">No. Rekening</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Edit --}}
<div class="modal fade" id="modalEdit" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title">Edit Kontraktor</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                        <label  class="form-label">Nama Perusahaan Kontraktor
                        </label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Nama Direktur
                        </label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Nama General Superintendent
                        </label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Email </label>
                        <input type="email" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Alamat</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="npwp" class="form-label">NPWP</label>
                        <input type="text" class="form-control npwp"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">No. Telp</label>
                        <input type="tel" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Bank</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">No. Rekening</label>
                        <input type="text" class="form-control"  />
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-warning text-white">Update</button>
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
