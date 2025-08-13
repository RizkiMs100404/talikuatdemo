@extends ('layouts.app')

@section ('contents')

<div class="container d-flex justify-content-end mt-5">
<div class="height-100 bg-light">
        <main>
        <div class="content-wrapper" >
<div class="card mt-4" id="card-kontraktor">
        <div class="card-header">Data kontraktor</div>
        <div class="card-body">
            <div class="container">
                <a href="" class="btn btn-mat btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#createKontraktor">
                    Tambah</a>
                    <a href="" class="btn btn-mat btn-info mb-3" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Pilih Tahun Database</a>

  <!-- serch -->
  <div class="text-center mt-3">
    <div class="row">
   
      <!-- show entries -->
      <div class="kiri col-md-4 mb-4">
        <label class="d-flex">Show
          <select name="adminUPTD_length" aria-controls="adminUPTD" class="">
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
          </select> entries
        </label>
    </div>
    <!-- search button -->
    <div class="kanan col-md-3 offset-md-4 ">
    <label class="d-flex ">Search:
      <input type="search" class="" placeholder="" aria-controls="adminUPTD">
    </label>
    </div>
    <!-- end of search button -->

            </div>
            <div class="" style="max-height: 80vh; overflow-y: auto">
                <table border="2" id="kontraktor" class="table table-white table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kegiatan</th>
                            <th>Kontraktor</th>
                            <th>Konsultan</th>
                            <th>PPK</th>
                            <th style="width: 22%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <tr>
                            <td>1</td>
                            <td>pekerjaan membuat alat<br> alat berat seperti <br> membuat senjata</td>
                            <td>PT pindad</td>
                            <td>PT pindad</td>
                            <td>raihan gunari arifin</td>
                            </td>
                            <td>
                                <a class="btn btn-mat btn-primary" href="/dataumum.detail"
                                    onclick="updateKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
                                    </a>

                                <a class="btn btn-mat btn-info"   href="/dataumum.edit"
                                     onclick="deleteKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
                                   
                                </a>
                                <br>
                                <a class="btn btn-mat btn-success mt-2"  href="/dataumum.upload" onclick="deleteKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
  <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7z"/>
</svg>
                                   
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>pekerjaan membuat <br> kereta</td>
                            <td>PT kereta api indonesia</td>
                            <td>PT kereta api</td>
                            <td>onal subhan arifin</td>
                            <td>
                            <a class="btn btn-mat btn-primary" href="/dataumum.detail"
                                    onclick="updateKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
                                    </a>

                                <a class="btn btn-mat btn-info"   href="/dataumum.edit"
                                     onclick="deleteKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
                                   
                                </a>
                                <br>
                                <a class="btn btn-mat btn-success mt-2"  href="/dataumum.upload" onclick="deleteKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
  <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7z"/>
</svg>
                                   
                                </a>
                            </td>
                        </tr>
              

                        <tr>
                            <td>1</td>
                            <td>pekerjaan menjual <br> jaringan data</td>
                            <td>PT telkom indonesia</td>
                            <td>PT telkom</td>
                            <td>sandi subhan arifin</td>
                            <td>
                            <a class="btn btn-mat btn-primary" href="/dataumum.detail"
                                    onclick="updateKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
                                    </a>

                                <a class="btn btn-mat btn-info"   href="/dataumum.edit"
                                     onclick="deleteKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
                                   
                                </a>
                                <br>
                                <a class="btn btn-mat btn-success mt-2"  href="/dataumum.upload" onclick="deleteKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
  <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7z"/>
</svg>
                                   
                                </a>
                            </td>
                        </tr>
              

                        <tr>
                            <td>1</td>
                            <td>pekerjaan elektronika </td>
                            <td>PT len industry</td>
                            <td>PT len </td>
                            <td>zidan gunari arifin</td>
                            <td>
                            <a class="btn btn-mat btn-primary" href="/dataumum.detail"
                                    onclick="updateKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
                                    </a>

                                <a class="btn btn-mat btn-info"   href="/dataumum.edit"
                                     onclick="deleteKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
                                   
                                </a>
                                <br>
                                <a class="btn btn-mat btn-success mt-2"  href="/dataumum.upload" onclick="deleteKontraktor(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
  <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7z"/>
</svg>
                                   
                                </a>
                            </td>
                        </tr>
              


                        </tbody>
                </table>
            </div>
        </div>
    </div>

        <!-- Modal Add Kontraktor -->
<div class="modal fade" id="createKontraktor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="createKontraktorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createKontraktorLabel">
                    Tambah Data Kontraktor
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
                <input type="hidden" name="_token" value="Gu6mxpNmYA77avTDuKehpcv6qXmD3VB33ZizDvsH">                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Perusahaan Kontraktor
                        </label>
                        <input type="text" class="form-control" id="nama" name="nama" required />
                    </div>
                    <div class="mb-3">
                        <label for="nama_direktur" class="form-label">Nama Direktur
                        </label>
                        <input type="text" class="form-control" id="nama_direktur" name="nama_direktur" required />
                    </div>
                    <div class="mb-3">
                        <label for="nama_gs" class="form-label">Nama General Superintendent
                        </label>
                        <input type="text" class="form-control" id="nama_gs" name="nama_gs" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required />
                    </div>
                    <div class="mb-3">
                        <label for="npwp" class="form-label">NPWP</label>
                        <input type="text" class="form-control npwp" id="npwp" name="npwp" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No. Telp</label>
                        <input type="tel" class="form-control" id="no_telp" name="no_telp" required />
                    </div>
                    <div class="mb-3">
                        <label for="bank" class="form-label">Bank</label>
                        <input type="text" class="form-control" id="bank" name="bank" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_rek" class="form-label">No. Rekening</label>
                        <input type="text" class="form-control" id="no_rek" name="no_rek" required />
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
<div class="modal fade" id="deleteKontraktor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="deleteKontraktorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteKontraktorLabel">
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

<!-- Modal kalender-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Tahun Database</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body mb3">
      <select class="form-select" aria-label="Default select example">
        <option selected>Pilih Tahun</option>
        <option value="1">2020</option>
        <option value="2">2021</option>
        <option value="3">2022</option>
        <option value="4">2023</option>
        <option value="5">2024</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div>
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