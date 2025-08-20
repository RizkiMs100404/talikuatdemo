@extends('layouts.app')
@section('contents')
<div class="container my-2 p-0">
    <!-- USER ADMIN PPK -->
    <div class="card shadow-sm rounded-4 mb-5 border-0">
        <div class="card-header d-flex justify-content-between align-items-center border-bottom">
            <h5 class="mb-0">User Admin PPK</h5>
            <a class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createAdminUptd">
                <i class="bi bi-plus-lg me-1"></i> Tambah
            </a>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive" style="max-height: 60vh; overflow-y:auto;">
                <table id="adminUPTD" class="table table-hover align-middle mb-0">
                    <thead class="table-light sticky-top">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>NIP/ NIK</th>
                            <th>UPTD</th>
                            <th class="text-center" style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rehan Subianto</td>
                            <td>RehanSubianto@gmail.com</td>
                            <td>197202061998031002</td>
                            <td>UPTD 1</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editDataAdminUptd" onclick="updateAdminUptd(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteDataAdminUptd" onclick="deleteDataAdminUptd(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sandi Armansyah</td>
                            <td>Sandi Armansyah@gmail.com</td>
                            <td>197202061998031006</td>
                            <td>UPTD 2</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editDataAdminUptd" onclick="updateAdminUptd(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteDataAdminUptd" onclick="deleteDataAdminUptd(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Andi Wibowo</td>
                            <td>Andi Wibowo@gmail.com</td>
                            <td>197202061998032003</td>
                            <td>UPTD 3</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editDataAdminUptd" onclick="updateAdminUptd(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteDataAdminUptd" onclick="deleteDataAdminUptd(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ifan Purwana</td>
                            <td>Ifan Purwana@gmail.com</td>
                            <td>197202061998031010</td>
                            <td>UPTD 4</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editDataAdminUptd" onclick="updateAdminUptd(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteDataAdminUptd" onclick="deleteDataAdminUptd(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Rasya Husana</td>
                            <td>Rasyacanana@gmail.com</td>
                            <td>197202061997932002</td>
                            <td>UPTD 5</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editDataAdminUptd" onclick="updateAdminUptd(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteDataAdminUptd" onclick="deleteDataAdminUptd(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- USER KONSULTAN -->
    <div class="card shadow-sm rounded-4 mb-5 border-0">
        <div class="card-header d-flex justify-content-between align-items-center border-bottom">
            <h5 class="mb-0">User Konsultan</h5>
            <a class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#createUserKonsultan">
                <i class="bi bi-plus-lg me-1"></i> Tambah
            </a>
        </div>
        <div class="card-body p-3">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label>Show
                        <select class="form-select form-select-sm d-inline w-auto">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries
                    </label>
                </div>
                <div class="col-md-4 offset-md-4 text-end">
                    <label>Search:
                        <input type="search" class="form-control form-control-sm d-inline w-auto">
                    </label>
                </div>
            </div>
            <div class="table-responsive" style="max-height: 60vh; overflow-y:auto;">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light sticky-top">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nama Konsultan</th>
                            <th>UPTD</th>
                            <th class="text-center" style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Akbar Gurnita</td>
                            <td>Akbargurnita@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 1</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editDataKonsultan" onclick="updateUserKonsultan(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" onclick="deleteUserKonsultan(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Alip Mikey</td>
                            <td>alipmikey@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 2</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editDataKonsultan" onclick="updateUserKonsultan(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" onclick="deleteUserKonsultan(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Zidan janawi</td>
                            <td>ziidanjanawi@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 3</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editDataKonsultan" onclick="updateUserKonsultan(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" onclick="deleteUserKonsultan(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Beni Konsul</td>
                            <td>benikonsul@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 4</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editDataKonsultan" onclick="updateUserKonsultan(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" onclick="deleteUserKonsultan(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Udin Jahyati</td>
                            <td>udinjahyati@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 5</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editDataKonsultan" onclick="updateUserKonsultan(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" onclick="deleteUserKonsultan(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Ariel Kusnandi</td>
                            <td>Arielkusnandi@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 6</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editDataKonsultan" onclick="updateUserKonsultan(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" onclick="deleteUserKonsultan(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- USER PPK -->
    <div class="card shadow-sm rounded-4 mb-5 border-0">
        <div class="card-header d-flex justify-content-between align-items-center border-bottom">
            <h5 class="mb-0">User PPK</h5>
            <a class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#createUserPPK">
                <i class="bi bi-plus-lg me-1"></i> Tambah
            </a>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive" style="max-height: 60vh; overflow-y:auto;">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light sticky-top">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>NIP</th>
                            <th>UPTD</th>
                            <th class="text-center" style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ayu Aslana</td>
                            <td>ayigunari@gmail.com</td>
                            <td>197103122008011003</td>
                            <td>UPTD 1</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editUserPPK" onclick="updateUserPPK(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserPPK" onclick="deleteUserPPK(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Heri Jonto</td>
                            <td>herijonto@gmail.com</td>
                            <td>197103122008012005</td>
                            <td>UPTD 2</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editUserPPK" onclick="updateUserPPK(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserPPK" onclick="deleteUserPPK(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Deden Marhadi</td>
                            <td>dedenmarhadi@gmail.com</td>
                            <td>197103122008050012</td>
                            <td>UPTD 3</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editUserPPK" onclick="updateUserPPK(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserPPK" onclick="deleteUserPPK(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Fimar Firaun</td>
                            <td>firaunselpi@gmail.com</td>
                            <td>197103122008012004</td>
                            <td>UPTD 4</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editUserPPK" onclick="updateUserPPK(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserPPK" onclick="deleteUserPPK(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Emon Cahyadi</td>
                            <td>emoncahyadi@gmail.com</td>
                            <td>188103122008011003</td>
                            <td>UPTD 5</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editUserPPK" onclick="updateUserPPK(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserPPK" onclick="deleteUserPPK(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ayu Aslana</td>
                            <td>ayigunari@gmail.com</td>
                            <td>197103122008011003</td>
                            <td>UPTD 1</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editUserPPK" onclick="updateUserPPK(this)">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUserPPK" onclick="deleteUserPPK(this)">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal Tambah Admin UPTD -->
<div class="modal fade" id="createAdminUptd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createAdminUptdLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg rounded-4">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="createAdminUptdLabel">Tambah Data User Admin UPTD</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="https://tk.temanjabar.net/user-manajement/create-admin-uptd" method="post">
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-semibold">Nama</label>
                            <input type="text" class="form-control rounded-3" id="name" name="name" required />
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control rounded-3" id="email" name="email" required />
                        </div>
                        <div class="col-md-6">
                            <label for="no_pegawai" class="form-label fw-semibold">NIP / NIK</label>
                            <input type="text" class="form-control rounded-3" id="no_pegawai" name="no_pegawai" required />
                        </div>
                        <div class="col-md-6">
                            <label for="no_tlp" class="form-label fw-semibold">No. Telp</label>
                            <input type="text" class="form-control rounded-3" id="no_tlp" name="no_tlp" required />
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input type="password" class="form-control rounded-3" id="password" name="password" required />
                        </div>
                        <div class="col-md-6">
                            <label for="uptd" class="form-label fw-semibold">UPTD</label>
                            <select name="uptd" class="form-select rounded-3" required>
                                <option value="">Pilih UPTD</option>
                                <option value="56">UPTD 1</option>
                                <option value="115">UPTD 2</option>
                                <option value="58">UPTD 3</option>
                                <option value="66">UPTD 4</option>
                                <option value="73">UPTD 5</option>
                                <option value="80">UPTD 6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top-0 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary rounded-3" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success rounded-3">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Admin UPTD -->
<div class="modal fade" id="editDataAdminUptd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editDataAdminUptdLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg rounded-4">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="editDataAdminUptdLabel">Edit Admin PPK</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-semibold">Nama</label>
                            <input type="text" class="form-control rounded-3" id="name" name="name" required />
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control rounded-3" id="email" name="email" required />
                        </div>
                        <div class="col-md-6">
                            <label for="no_pegawai" class="form-label fw-semibold">NIP / NIK</label>
                            <input type="text" class="form-control rounded-3" id="no_pegawai" name="no_pegawai" required />
                        </div>
                        <div class="col-md-6">
                            <label for="no_tlp" class="form-label fw-semibold">No. Telp</label>
                            <input type="text" class="form-control rounded-3" id="no_tlp" name="no_tlp" required />
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input type="password" class="form-control rounded-3" id="password" name="password" />
                        </div>
                        <div class="col-md-6">
                            <label for="uptd" class="form-label fw-semibold">UPTD</label>
                            <select name="uptd" id="uptd" class="form-select rounded-3" required>
                                <option value="">Pilih UPTD</option>
                                <option value="56">UPTD 1</option>
                                <option value="115">UPTD 2</option>
                                <option value="58">UPTD 3</option>
                                <option value="66">UPTD 4</option>
                                <option value="73">UPTD 5</option>
                                <option value="80">UPTD 6</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="ppk" class="form-label fw-semibold">PPK</label>
                            <select name="ppk" id="ppk" class="form-select rounded-3" required>
                                <option value="">Pilih PPK</option>
                                <option value="56">UPTD 1</option>
                                <option value="115">UPTD 2</option>
                                <option value="58">UPTD 3</option>
                                <option value="66">UPTD 4</option>
                                <option value="73">UPTD 5</option>
                                <option value="80">UPTD 6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top-0 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary rounded-3" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success rounded-3">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete Admin UPTD -->
<div class="modal fade" id="deleteDataAdminUptd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteDataAdminUptdLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg rounded-4">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="deleteDataAdminUptdLabel">Hapus Admin UPTD</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer border-top-0 justify-content-end">
                <button type="button" class="btn btn-outline-secondary rounded-3" data-bs-dismiss="modal">Close</button>
                <a class="btn btn-danger rounded-3">Delete</a>
            </div>
        </div>
    </div>
</div>


<!-- Modal Tambah User Konsultan -->
<div class="modal fade" id="createUserKonsultan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createUserKonsultanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="createUserKonsultanLabel">Tambah User Konsultan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control" name="nik" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">No. Telp</label>
                            <input type="text" class="form-control" name="no_telp" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Konsultan</label>
                            <select name="konsultan_id" class="form-select" required>
                                <option value="">Pilih Konsultan</option>
                                <option value="1">PT. Brajamusti</option>
                                <option value="2">PT. Kanuragan</option>
                                <option value="3">PT. Panca sona</option>
                                <option value="4">PT. Rawarontek</option>
                                <option value="5">PT. Bandung bondowoso</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">UPTD</label>
                            <select name="uptd" class="form-select" required>
                                <option value="">Pilih UPTD</option>
                                <option value="1">UPTD 1</option>
                                <option value="2">UPTD 2</option>
                                <option value="3">UPTD 3</option>
                                <option value="4">UPTD 4</option>
                                <option value="5">UPTD 5</option>
                                <option value="6">UPTD 6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary rounded-pill"><i class="bi bi-save me-1"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit User Konsultan -->
<div class="modal fade" id="editUserKonsultan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editUserKonsultanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editUserKonsultanLabel">Edit User Konsultan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control" name="nik" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">No. Telp</label>
                            <input type="text" class="form-control" name="no_telp" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Password <small class="text-muted">(Kosongkan jika tidak diubah)</small></label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Konsultan</label>
                            <select name="konsultan_id" class="form-select" required>
                                <option value="">Pilih Konsultan</option>
                                <option value="1">PT. Brajamusti</option>
                                <option value="2">PT. Kanuragan</option>
                                <option value="3">PT. Panca sona</option>
                                <option value="4">PT. Rawarontek</option>
                                <option value="5">PT. Bandung bondowoso</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">UPTD</label>
                            <select name="uptd" class="form-select" required>
                                <option value="">Pilih UPTD</option>
                                <option value="1">UPTD 1</option>
                                <option value="2">UPTD 2</option>
                                <option value="3">UPTD 3</option>
                                <option value="4">UPTD 4</option>
                                <option value="5">UPTD 5</option>
                                <option value="6">UPTD 6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary rounded-pill"><i class="bi bi-pencil-square me-1"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete User Konsultan -->
<div class="modal fade" id="deleteUserKonsultan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteUserKonsultanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteUserKonsultanLabel">Hapus User Konsultan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>Apakah anda yakin ingin menghapus user ini?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Batal</button>
                <a class="btn btn-danger rounded-pill"><i class="bi bi-trash me-1"></i> Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- ========================= MODAL USER PPK ========================= -->

<!-- Modal Tambah User PPK -->
<div class="modal fade" id="createUserPPK" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createUserPPKLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="createUserPPKLabel">Tambah User PPK</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">NIP</label>
                            <input type="text" class="form-control" name="no_pegawai" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">No. Telp</label>
                            <input type="text" class="form-control" name="no_tlp" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">UPTD</label>
                            <select name="uptd" class="form-select" required>
                                <option value="">Pilih UPTD</option>
                                <option value="55">UPTD 1</option>
                                <option value="88">UPTD 2</option>
                                <option value="64">UPTD 3</option>
                                <option value="68">UPTD 4</option>
                                <option value="74">UPTD 5</option>
                                <option value="81">UPTD 6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning rounded-pill"><i class="bi bi-save me-1"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit User PPK -->
<div class="modal fade" id="editUserPPK" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editUserPPKLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="editUserPPKLabel">Edit User PPK</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">NIP</label>
                            <input type="text" class="form-control" name="no_pegawai" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">No. Telp</label>
                            <input type="text" class="form-control" name="no_tlp" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Password <small class="text-muted">(Kosongkan jika tidak diubah)</small></label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">UPTD</label>
                            <select name="uptd" class="form-select" required>
                                <option value="">Pilih UPTD</option>
                                <option value="55">UPTD 1</option>
                                <option value="88">UPTD 2</option>
                                <option value="64">UPTD 3</option>
                                <option value="68">UPTD 4</option>
                                <option value="74">UPTD 5</option>
                                <option value="81">UPTD 6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning rounded-pill"><i class="bi bi-pencil-square me-1"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete User PPK -->
<div class="modal fade" id="deleteUserPPK" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteUserPPKLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteUserPPKLabel">Hapus User PPK</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>Apakah anda yakin ingin menghapus user ini?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Batal</button>
                <a class="btn btn-danger rounded-pill"><i class="bi bi-trash me-1"></i> Hapus</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Tambah User Konsultan -->
<div class="modal fade" id="createUserKonsultan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createUserKonsultanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="createUserKonsultanLabel">Tambah User Konsultan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" required>
                        </div>
                        <div class="col-md-6">
                            <label for="no_telp" class="form-label">No. Telp</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                        </div>
                        <div class="col-md-6">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="konsultan_id" class="form-label">Konsultan</label>
                            <select name="konsultan_id" class="form-select" required>
                                <option value="">Pilih Konsultan</option>
                                <option value="1">PT. Brajamusti</option>
                                <option value="2">PT. Kanuragan</option>
                                <option value="3">PT. Panca Sona</option>
                                <option value="4">PT. Rawarontek</option>
                                <option value="5">PT. Bandung Bondowoso</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="uptd" class="form-label">UPTD</label>
                            <select name="uptd" class="form-select" required>
                                <option value="">Pilih UPTD</option>
                                <option value="1">UPTD 1</option>
                                <option value="2">UPTD 2</option>
                                <option value="3">UPTD 3</option>
                                <option value="4">UPTD 4</option>
                                <option value="5">UPTD 5</option>
                                <option value="6">UPTD 6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success rounded-pill"><i class="bi bi-save me-1"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit User Konsultan -->
<div class="modal fade" id="editDataKonsultan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editDataKonsultanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editDataKonsultanLabel">Edit User Konsultan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">
                <div class="modal-body">
                    <div class="row g-3">
                        <!-- Fields sama seperti modal tambah, tapi bisa diisi via JS -->
                        <div class="col-md-6">
                            <label for="name_edit" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name_edit" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email_edit" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email_edit" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nik_edit" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik_edit" name="nik" required>
                        </div>
                        <div class="col-md-6">
                            <label for="no_telp_edit" class="form-label">No. Telp</label>
                            <input type="text" class="form-control" id="no_telp_edit" name="no_telp" required>
                        </div>
                        <div class="col-md-6">
                            <label for="jabatan_edit" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan_edit" name="jabatan" required>
                        </div>
                        <div class="col-md-6">
                            <label for="password_edit" class="form-label">Password <small class="text-muted">(Kosongkan jika tidak diubah)</small></label>
                            <input type="password" class="form-control" id="password_edit" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="konsultan_id_edit" class="form-label">Konsultan</label>
                            <select name="konsultan_id" id="konsultan_id_edit" class="form-select" required>
                                <option value="">Pilih Konsultan</option>
                                <option value="1">PT. Brajamusti</option>
                                <option value="2">PT. Kanuragan</option>
                                <option value="3">PT. Panca Sona</option>
                                <option value="4">PT. Rawarontek</option>
                                <option value="5">PT. Bandung Bondowoso</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="uptd_edit" class="form-label">UPTD</label>
                            <select name="uptd" id="uptd_edit" class="form-select" required>
                                <option value="">Pilih UPTD</option>
                                <option value="1">UPTD 1</option>
                                <option value="2">UPTD 2</option>
                                <option value="3">UPTD 3</option>
                                <option value="4">UPTD 4</option>
                                <option value="5">UPTD 5</option>
                                <option value="6">UPTD 6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary rounded-pill"><i class="bi bi-pencil-square me-1"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete User Konsultan -->
<div class="modal fade" id="deleteUserKonsultan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteUserKonsultanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteUserKonsultanLabel">Hapus User Konsultan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mb-0">Apakah anda yakin ingin menghapus user ini?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Batal</button>
                <a class="btn btn-danger rounded-pill"><i class="bi bi-trash me-1"></i> Hapus</a>
            </div>
        </div>
    </div>
</div>

@endsection
<!-- ========================= MODAL USER KONSULTAN ========================= -->

