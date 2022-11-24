<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <main>
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Ubah Data</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href='index.php' class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href='logout.php' class="nav-link">Logout</a></li>

      </ul>
    </header>
<?php
include 'session.php';
include "koneksi.php";

?>
<h3>Tambah Data Baru<h3>
<form action="" method="post">
    <table>

</div> 
<div class="row mb-3">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Year</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="year" >
  </div>
</div> 
<div class="row mb-3">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Month</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="month" >
  </div>
</div> 
<div class="row mb-3">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Week</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="week" >
  </div>
</div> 
<div class="row mb-3">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Date</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="date" >
  </div>
</div> 
<div class="row mb-3">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Monday</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="mon" >
  </div>
</div> 
<div class="row mb-3">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Tuesday</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="tue" >
  </div>
</div> 
<div class="row mb-3">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Wednesday</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="wed" >
  </div>
</div> 
<td>
    <input class="btn btn-lg btn-primary" type="submit" value="Simpan" name="proses">
</td>

    </table>
</form>
<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into syllabus set  
    year='$_POST[year]',
    month='$_POST[month]',
    week='$_POST[week]',
    date='$_POST[date]',
    mon='$_POST[mon]',
    tue='$_POST[tue]',
    wed='$_POST[wed]'");

echo "Data barang baru telah tersimpan";
echo "<meta http-equiv=refresh content=1;URL='database.php'>";}

?>
