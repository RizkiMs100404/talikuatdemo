
@extends('layouts.app')
@section('contents')
<div class="container d-flex justify-content-end mt-5">
<div class="height-100 bg-light">
        <main>
        <div class="content-wrapper" >
        <div class="">
        <div class="card mb-4">
        <div class="card-header">User Admin PPK</div>
        <div class="card-body">
            <div class="">
                <a class="btn btn-mat btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createAdminUptd">
                    Tambah</a>


            </div>
            <div class="container" style="max-height: 80vh; overflow-y: auto">
                <table id="adminUPTD" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>NIP/ NIk</th>
                            <th>UPTD</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <tr>
                            <td>1</td>
                            <td>Rehan Subianto</td>
                            <td>RehanSubianto@gmail.com</td>
                            <td>
                                197202061998031002
                            </td>
                            <td>UPTD 1</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editDataAdminUptd" d onclick="updateAdminUptd(this)">
                                   
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
                                </a>


                            </td>
                        </tr>
                                                <tr>
                            <td>2</td>
                            <td>Sandi Armansyah</td>
                            <td>SandiArmansyah.@gmail.com</td>
                            <td>
                                198702032020121005
                            </td>
                            <td>UPTD 2</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editDataAdminUptd" onclick="updateAdminUptd(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a>

                            </td>
                        </tr>
                                                <tr>
                            <td>3</td>
                            <td>Andi Wibowo</td>
                            <td>Andibowo@gmail.com</td>
                            <td>
                                193938233935294907
                            </td>
                            <td>UPTD 3</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editDataAdminUptd" onclick="updateAdminUptd(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a>


                            </td>
                        </tr>
                                                <tr>
                            <td>4</td>
                            <td>Ifan Purwana</td>
                            <td>Ifanpurwana@gmail.com</td>
                            <td>
                                197311132014121001
                            </td>
                            <td>UPTD 4</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editDataAdminUptd" onclick="updateAdminUptd(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a>


                            </td>
                        </tr>
                                                <tr>
                            <td>5</td>
                            <td>Rasya SUHANA</td>
                            <td>Rasyacanana@gmail.com</td>
                            <td>
                                197402102007011010
                            </td>
                            <td>UPTD 5</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editDataAdminUptd"  onclick="updateAdminUptd(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a>


                            </td>
                        </tr>
                         
                                            </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-end mt-5">
    <div class="card mt-5">
        <div class="card-header">User Konsultan</div>
        <div class="">
            <div class="">
                <a class="btn btn-mat btn-primary mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#createUserKonsultan">
                    Tambah</a>
   <!-- serch -->
   <div class="container text-center">
    <div class="row">
   
      <!-- show entries -->
      <div class="kiri col-md-4">
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
    <div class="kanan col-md-3 offset-md-4 ">
    <label class="d-flex ">Search:
      <input type="search" >
    </label>
    </div>
    <!-- end of search button -->
 

            </div>
            <div class="mt-3" style="max-height: 80vh; overflow-y: auto">
                <table border="2" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nama Konsultan</th>
                            <th>UPTD</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <tr>
                            <td>1</td>
                            <td>Akbar Gurnita</td>
                            <td>Akbargurnita@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 1</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editDataKonsultan" onclick="updateUserKonsultan(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                   </a>

                                <a class="btn btn-mat btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" data-id="1" data-name="Rida Gurnita" onclick="deleteUserKonsultan(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                </svg>
                                </a>
                            </td>
                        </tr>
                                                <tr>
                            <td>2</td>
                            <td>Alip Mikey</td>
                            <td>AlipMikey@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 2</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editDataKonsultan" onclick="updateUserKonsultan(this)"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                   </a>

                                <a class="btn btn-mat btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" data-id="2" data-name="Muhammad Faeza, S.T" onclick="deleteUserKonsultan(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                </svg>
                                </a>
                            </td>
                        </tr>
                                                <tr>
                            <td>3</td>
                            <td>Zidan janawi</td>
                            <td>ZidanJanawi@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 3</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editDataKonsultan" onclick="updateUserKonsultan(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                   </a>

                                <a class="btn btn-mat btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" data-id="3" data-name="Junaidi Jawawi" onclick="deleteUserKonsultan(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                </svg>
                                </a>
                            </td>
                        </tr>
                                                <tr>
                            <td>4</td>
                            <td>Beni Konsul</td>
                            <td>Benikonsul@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 4</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editDataKonsultan"onclick="updateUserKonsultan(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                   </a>

                                <a class="btn btn-mat btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" data-id="4" data-name="user konsul" onclick="deleteUserKonsultan(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                </svg>
                                </a>
                            </td>
                        </tr>
                                                <tr>
                            <td>5</td>
                            <td>Udin Jahyanti</td>
                            <td>UdinJahyanti@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 5</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editDataKonsultan" onclick="updateUserKonsultan(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                   </a>

                                <a class="btn btn-mat btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" data-id="5" data-name="Ir. H. Jojo Kahya Santoso" onclick="deleteUserKonsultan(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                </svg>
                                </a>
                            </td>
                        </tr>
                                                <tr>
                            <td>6</td>
                            <td>Ariel Kusnandi</td>
                            <td>Arielkusnandi@gmail.com</td>
                            <td>PT. BINA MARGA</td>
                            <td>UPTD 6</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editDataKonsultan" onclick="updateUserKonsultan(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                </a>

                                <a class="btn btn-mat btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserKonsultan" data-id="6" data-name="Kusnandi" onclick="deleteUserKonsultan(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
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
<div class=" d-flex justify-content-end mt-5">
        <div class="card mt-5">
        <div class="card-header">User PPK</div>
        <div class="card-body">
            <div class="">
                <a class="btn btn-mat btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createUserPPK">
                    Tambah</a>


            </div>
            <div class="container" style="max-height: 80vh; overflow-y: auto">
                <table border="2"class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>NIP</th>
                            <th>UPTD</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <tr>
                            <td>1</td>
                            <td>Ayu aslana</td>
                            <td>ayigunari@gmail.com</td>
                            <td>197103122008011003</td>
                            <td>UPTD 1</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editUserPPK"  onclick="updateUserPPK(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                   </a>


                            </td>
                                                    <tr>
                            <td>2</td>
                            <td>Heri Jondo</td>
                            <td>herijonto@gmail.com</td>
                            <td>197807082009011001</td>
                            <td>UPTD 2</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editUserPPK"onclick="updateUserPPK(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                   </a>


                            </td>
                                                    <tr>
                            <td>3</td>
                            <td>Dede marhadi</td>
                            <td>Dedemarhadi@gmail.com</td>
                            <td>197103122008011003</td>
                            <td>UPTD 3</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editUserPPK" onclick="updateUserPPK(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                   </a>


                            </td>
                                                    <tr>
                            <td>4</td>
                            <td>Fimar Firaun</td>
                            <td>firaunsepli@gmail.com</td>
                            <td>197103122008011003</td>
                            <td>UPTD 4</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editUserPPK"onclick="updateUserPPK(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                   </a>


                            </td>
                                                    <tr>
                            <td>5</td>
                            <td>Emon Cahyadi</td>
                            <td>emoncahyadi@gmail.com</td>
                            <td>197111172007011007</td>
                            <td>UPTD 5</td>
                            <td>
                                <a class="btn btn-mat btn-primary" data-bs-toggle="modal" data-bs-target="#editUserPPK" onclick="updateUserPPK(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                   </a>


                            </td>
                                                    <tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    </div>
</main>
</div>
<!-- Modal Tambah Admin UPTD -->
<div class="modal fade" id="createAdminUptd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createAdminUptdLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-dark">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createAdminUptdLabel">
                    Tambah Data User Admin UPTD
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="https://tk.temanjabar.net/user-manajement/create-admin-uptd" method="post">
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_pegawai" class="form-label">NIP / NIK
                        </label>
                        <input type="text" class="form-control" id="no_pegawai" name="no_pegawai" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_tlp" class="form-label">No. Telp</label>
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password" required />
                    </div>
                    <div class="mb-3">
                        <label for="uptd" class="form-label">UPTD </label>
                        <select name="uptd" class="form-select" required>
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

<!-- Modal Edit Admin UPTD -->
<div class="modal fade" id="editDataAdminUptd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editDataAdminUptdLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editDataAdminUptdLabel">
                    Edit Admin PPK
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_pegawai" class="form-label">NIP / NIK
                        </label>
                        <input type="text" class="form-control" id="no_pegawai" name="no_pegawai" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_tlp" class="form-label">No. Telp</label>
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password" />
                    </div>
                    <div class="mb-3">
                        <label for="uptd" class="form-label">UPTD </label>
                        <select name="uptd" id="uptd" class="form-select" required>
                            <option value="">Pilih UPTD</option>
                            <option value="56">UPTD 1</option>
                            <option value="115">UPTD 2</option>
                            <option value="58">UPTD 3</option>
                            <option value="66">UPTD 4</option>
                            <option value="73">UPTD 5</option>
                            <option value="80">UPTD 6</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ppk" class="form-label">PPK </label>
                        <select name="ppk" id="uptd" class="form-select" required>
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
<!-- Modal Delete Admin UPTD -->
<div class="modal fade" id="deleteDataAdminUptd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteDataAdminUptdLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteJenisPekerjaanLabel">
                    Delete Data Jenis Pekerjaan
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

<!-- Modal Tambah User Konsultan -->
<div class="modal fade" id="createUserKonsultan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createUserKonsultanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createUserKonsultanLabel">
                    Tambah Data User Konsultan
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>method="post">
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="for   m-label">Email </label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK </label>
                        <input type="text" class="form-control" id="nik" name="nik" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No. Telp</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" required />
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password" required />
                    </div>
                    <div class="mb-3">
                        <label for="konsultan_id" class="form-label">Konsultan</label>
                        <select name="konsultan_id" class="form-select" required>
                            <option value="">Pilih Konsultan</option>
                                                        <option value="1">
                                PT. Brajamusti
                            </option>
                                                        <option value="2">
                                PT. Kanuragan
                            </option>
                                                        <option value="3">
                                PT. Panca sona
                            </option>
                                                        <option value="4">
                                PT. Rawarontek
                            </option>
                                                        <option value="5">
                                PT. Bandung bondowoso
                            </option>
                                                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="uptd" class="form-label">UPTD </label>
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
<!-- Modal Edit User Konsultan -->
<div class="modal fade" id="editDataKonsultan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editDataKonsultanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editDataKonsultanLabel">
                    Tambah Data User Konsultan
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="https://tk.temanjabar.net/user-manajement/create-admin-konsultan" method="post">
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK </label>
                        <input type="text" class="form-control" id="nik" name="nik" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No. Telp</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" required />
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password" />
                    </div>
                    <div class="mb-3">
                        <label for="konsultan_id" class="form-label">Konsultan</label>
                        <select name="konsultan_id" id="konsultan_id" class="form-select" required>
                        <option value="">Pilih Konsultan</option>
                                                        <option value="1">
                                PT. Brajamusti
                            </option>
                                                        <option value="2">
                                PT. Kanuragan
                            </option>
                                                        <option value="3">
                                PT. Panca sona
                            </option>
                                                        <option value="4">
                                PT. Rawarontek
                            </option>
                                                        <option value="5">
                                PT. Bandung bondowoso
                            </option>
                                                     
                                                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="uptd" class="form-label">UPTD </label>
                        <select name="uptd" id="uptd" class="form-select" required>
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
<!-- Modal Delete User Konsultan -->
<div class="modal fade" id="deleteUserKonsultan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteUserKonsultanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteUserKonsultanLabel">
                    Delete User
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

<!-- Modal Tambah User PPK -->
<div class="modal fade" id="createUserPPK" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createUserPPKLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createUserPPKLabel">
                    Tambah Data User PPK
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_pegawai" class="form-label">NIP </label>
                        <input type="text" class="form-control" id="no_pegawai" name="no_pegawai" required />
                    </div>

                    <div class="mb-3">
                        <label for="no_tlp" class="form-label">No. Telp</label>
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password" required />
                    </div>
                                        <div class="mb-3">
                        <label for="uptd" class="form-label">UPTD </label>
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
<!-- Modal Edit User PPK -->
<div class="modal fade" id="editUserPPK" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editUserPPKLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editUserPPKLabel">
                    Tambah Data User PPK
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <input type="hidden" name="_token" value="rbJX2rFLKp2LKPLgCDiIiSFNOyt8sIaADDp8TsdF">                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_pegawai" class="form-label">NIP </label>
                        <input type="text" class="form-control" id="no_pegawai" name="no_pegawai" required />
                    </div>

                    <div class="mb-3">
                        <label for="no_tlp" class="form-label">No. Telp</label>
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password" />
                    </div>
                    <div class="mb-3">
                        <label for="uptd" class="form-label">UPTD </label>
                        <select name="uptd" id="uptd" class="form-select" required>
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

</main>
</div>
            </div>
@endsection