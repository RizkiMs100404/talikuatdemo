
@extends('layouts.app')
@section('contents')


<div class="height-100 bg-light">
        <main>
        <div class="content-wrapper" >

<div class="container">
  <!-- serch -->
  <div class="container text-center mt-3">
    <div class="row">
   
      <!-- show entries -->
      <div class="kiri col-md-4 mb-4">
        <label class="d-flex">Show
          <select>
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
          </select> entries
        </label>
    </div>
    <!-- search button -->
    <div class="kanan col-md-3 offset-md-3 ">
    <label class="d-flex">Search:
      <input type="search">
    </label>
    </div>
    <!-- end of search button -->

            </div>
            <div class="" style="max-height: 80vh; overflow-y: auto">
                <table border="2"  class="table table-striped ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kegiatan</th>
                            <th>UPTD</th>
                            <th>Kontraktor</th>
                            <th>Konsultan</ th>
                            <th>PKK</th>
                            <th style="width: 22%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <tr>
                            <td>1</td>
                            <td>PT.nagahitam</td>
                            <td>ir soekarno</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>
                                <a  href="/jadual.detail" class="btn btn-mat btn-primary " >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>

                                    </a>

                                <a href="/jadual.edit" class="btn btn-mat btn-info" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                </svg>
                                   
                                </a>
                            </td>
                        </tr>
                                                <tr>
                            <td>2</td>
                            <td>PT.auahgelap</td>
                            <td>moh.hatta</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>
                                <a href="/jadual.uplode"class="btn btn-mat btn-warning" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16">
  <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z"/>
  <path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z"/>
</svg>
                                   </i></a>

                                
                                                <tr>
                            <td>3</td>
                            <td>PT.siaplaksanakan</td>
                            <td>agung hercules</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>
                                <a class="btn btn-mat btn-primary" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>

                                   </a>

                                <a class="btn btn-mat btn-info" >
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
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
        </main>
</div>


 @endsection