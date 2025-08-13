
@extends('layouts.app')
@section('contents')
<div class="d-flex justify-content-center mt-5">
<div class="height-100 bg-light">
        <main>
        <div class="content-wrapper" >
<div class="card mt-4" id="card-konsultan">
        <div class="card-header">Data Konsultan</div>
        <div class="card-body">
            <div class="container">
                <a class="btn btn-mat btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createKonsultan">
                    Tambah</a>


  <!-- serch -->
  <div class="text-center mt-3">
    <div class="row">
   
      <!-- show entries -->
      <div class="kiri col-md-4 mb-4">
        <label class="d-flex">Show
          <select >
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
          </select> entries
        </label>
    </div>
    <!-- search button -->
    <div class="kanan col-md-2 offset-md-2 ">
    <label class="d-flex ">Search:
      <input type="search" >
    </label>
    </div>
    <!-- end of search button -->

            </div>
            <div class="" style="max-height: 80vh; overflow-y: auto">
                <table border="2" id="konsultan" class="table table-striped ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Nama Direktur</th>
                            <th>No. Telp</th>
                            <th style="width: 22%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <tr>
                            <td>1</td>
                            <td>PT.nagahitam</td>
                            <td>ir soekarno</td>
                            <td>1</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editKonsultan" onclick="updateKonsultan(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>

                                   </a>

                                <a class="btn btn-mat btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteKonsultan" onclick="deleteKonsultan(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                </svg>
                                    
                                </a>
                            </td>
                        </tr>
                                                <tr>
                            <td>2</td>
                            <td>PT.auahgelap</td>
                            <td>moh.hatta</td>
                            <td>1</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editKonsultan"onclick="updateKonsultan(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>

                                   </a>

                                <a class="btn btn-mat btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteKonsultan" onclick="deleteKonsultan(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                </svg>
                                    
                                </a>
                            </td>
                        </tr>
                                                <tr>
                            <td>3</td>
                            <td>PT.siaplaksanakan</td>
                            <td>agung hercules</td>
                            <td>1</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editKonsultan" onclick="updateKonsultan(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>

                                   </a>

                                <a class="btn btn-mat btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteKonsultan" onclick="deleteKonsultan(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
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
<!-- Modal Tambah Konsultan -->
<div class="modal fade text-dark" id="createKonsultan">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createKonsultanLabel">
                    Tambah Data Konsultan
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
                <input type="hidden" name="_token" >
                <div class="modal-body">
                    <div class="mb-3">
                        <label  class="form-label">Nama Perusahaan Konsultan
                        </label>
                        <input type="text" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Nama Direktur
                        </label>
                        <input type="text" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Nama Site Engineer
                        </label>
                        <input type="text" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Email </label>
                        <input type="email" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Alamat</label>
                        <input type="text" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">NPWP</label>
                        <input type="text" class="form-control npwp"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">No. Telp</label>
                        <input type="tel" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit Konsultan -->
<div class="modal fade text-dark" id="editKonsultan" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editKonsultanLabel">
                    Tambah Data Konsultan
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
                <input type="hidden" name="_token">               
                 <div class="modal-body">
                    <div class="mb-3">
                        <label  class="form-label">Nama Perusahaan Konsultan
                        </label>
                        <input type="text" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Nama Direktur
                        </label>
                        <input type="text" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Nama Site Engineer
                        </label>
                        <input type="text" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Email </label>
                        <input type="email" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Alamat</label>
                        <input type="text" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">NPWP</label>
                        <input type="text" class="form-control npwp"  />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">No. Telp</label>
                        <input type="tel" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Delete Kontraktor -->
<div class="modal fade text-dark" id="deleteKonsultan" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteKonsultanLabel">
                    Delete Data Kontraktor
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <a class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

        
    </div>
        </div>
    </main>
</div>
</div>
 @endsection