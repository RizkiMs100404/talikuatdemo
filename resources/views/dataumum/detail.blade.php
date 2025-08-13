@extends ('layouts.app')

@section ('contents')

<div class="container d-flex justify-content-start mt-5">
<div class="card mt-4 position-absolute">
    <div class="card-header">Data umum</div>

    <div class="card-body">
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      <p>pemda</p>
      <select class="form-select text-dark" aria-label="Disabled select example" disabled>
  <option>PEMERINTAH PROVINSI JAWA BARAT</option>
</select>
    </div>

    <div class="col">
      <p>opd</p>
      <select class="form-select text-dark" aria-label="Disabled select example" disabled>
  <option>DINAS BINA MARGA DAN PENATAAN RUANG PROVINSI JAWA BARAT</option>
</select>
    </div>

    <div class="col">
    <p>UPTD</p>
      <select class="form-select text-secondary" aria-label="Disabled select example" disabled>
  <option>  UPTD 1</option>
</select>
    </div>
  </div>
</div>
       
<div class="container text-center mt-3">
  <div class="row align-items-start">
    <div class="col">
      <p>Kategori Paket Kegiatan</p>
      <select class="form-select text-secondary" aria-label="Disabled select example" disabled>
      <option>Pemeliharaan Berkala Jalan</option>
    </select>
    </div>

    <div class="col">
      <p>Nama Kegiatan / Paket</p>
      <select class="form-select text-dark" aria-label="Disabled select example" disabled>
      <option>Pekerjaan Pemeliharaan</option>
    </select>
    </div>

    <div class="col">
    <p>Nilai kontrak</p>
      <select class="form-select text-dark" aria-label="Disabled select example" disabled>
      <option>  Rp. 2.137.467.500</option>
    </select>
    </div>
  </div>
</div>

<div class="container text-center mt-3">
  <div class="row align-items-start">
    <div class="col">
      <p>Tanggal Kontark</p>
      <select class="form-select text-dark" aria-label="Disabled select example" disabled>
  <option>31/05/2024</option>
</select>
    </div>

    <div class="col">
      <p>No. Kontrak</p>
      <select class="form-select text-dark" aria-label="Disabled select example" disabled>
  <option>445/PUR.03.10.01/0038/SP/PJ2WPI</option>
</select>
    </div>

    <div class="col">
    <p>No. SPMK</p>
      <select class="form-select text-dark" aria-label="Disabled select example" disabled>
  <option>  447/PUR.03.10.01/0038/SPMK/PJ2WPI</option>
</select>
    </div>
  </div>
</div>

<div class="container text-center mt-3">
  <div class="row align-items-start">
    <div class="col">
      <p>Tanggal SPMK</p>
      <select class="form-select text-dark" aria-label="Disabled select example" disabled>
  <option>31/05/2024</option>
</select>
    </div>

    <div class="col">
      <p>Panjang KM</p>
      <select class="form-select text-dark" aria-label="Disabled select example" disabled>
  <option>1</option>
</select>
    </div>

    <div class="col">
    <p>Waktu Pelaksanaan</p>
      <select class="form-select text-dark" aria-label="Disabled select example" disabled>
  <option>  100</option>
</select>
    </div>
  </div>
</div>           
</div>
            
    <div class="card-header">Ruas jalan</div>
    <div class="card-body">
    <div class="col">
    <p>Waktu Pelaksanaan</p>
      <select class="form-select text-dark" aria-label="Disabled select example" disabled>
      <option>  100</option>
    </select>
    </div>

    <div class="container mt-3">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Ruas Jalan</th>
                <th>Segmen Jalan</th>
                <th>Koordinat <br> Awal (Lat)</th>
                <th>Koordinat <br> Awal (Long)</th>
                <th>Koordinat <br>Akhir (Lat)</th>
                <th>Koordinat <br>Akhir (Long)</th>
                <th>Cek Lokasi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>JR001</td>
                <td>Segmen 1</td>
                <td>-6.123456</td>
                <td>106.123456</td>
                <td>-6.654321</td>
                <td>106.654321</td>
                <td><button class="btn btn-primary">Cek</button></td>
            </tr>  
        </tbody>
    </table>
</div>
</div>



<div class="card-header">Data Anggota</div>
    <div class="card-body">
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
     <p>Kontraktor</p>
      <select class="form-select text-dark mt-3" aria-label="Disabled select example" disabled>
  <option>PT BUDI MULYA JAYA</option>
</select>
    </div>
   
    <div class="col">
     <p>PPK</p>
      <select class="form-select text-dark mt-3" aria-label="Disabled select example" disabled>
  <option>Ade SUBHAN .ST</option>
</select>
    </div>
  </div>

  <div class="row align-items-start">
    <div class="col mt-3">
     <p>Konsultan super visi</p>
      <select class="form-select text-dark mt-3" aria-label="Disabled select example" disabled>
  <option>PT.LIMA PILAR PERSADA</option>
</select>
    </div>
   
    <div class="col mt-3">
     <p>PPK kegiatan</p>
      <select class="form-select text-secondary mt-3" aria-label="Disabled select example" disabled>
  <option>pemeliharaan jalan</option>
</select>
    </div>
  </div>
</div>
<!-- kembali -->
<div class="d-grid gap-2">
<button type="button" class="btn btn-dark btn-lg">Kembali</button>
</div>
<!-- end -->
</div>
</div>  
@endsection






