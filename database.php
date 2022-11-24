<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    
  </head>
  <body>
    <main>
      <?php
include 'session.php';
?>
<div class="container">
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Database Anda</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href='index.php' class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href='logout.php' class="nav-link">Logout</a></li>
        

      </ul>
    </header>
<style>
    .div-1 {
        background-color: #FFF;
    }
    </style>
<div class="div-1">
<table class="table">
    <tr>
        <th>ID</th>
        <th>Year</th>
        <th>Month</th>
        <th>Week</th>
        <th>Date</th>
        <th>Mon</th>
        <th>Tuesday</th>
        <th>Wednesday</th>        
        <th colspan='2'>Option</th>
    </tr>
    <a class="btn btn-lg btn-primary" href="insert.php" role="button">Create New Data »</a>

    

</main>

    <?php

    include "koneksi.php";

    $id=1;
    $ambildata = mysqli_query($koneksi,"select * from syllabus");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$id</td>
            <td>$tampil[year]</td>
            <td>$tampil[month]</td>
            <td>$tampil[week]</td>
            <td>$tampil[date]</td>
            <td>$tampil[mon]</td>
            <td>$tampil[tue]</td>
            <td>$tampil[wed]</td>
            <td><a href='edit.php?id=$tampil[id]'> Edit </a></td>
            <td><a href='delete.php?id=$tampil[id]'> Delete </a></td>
        </tr>";

        $id++;
    }
        ?>
        </div>
</body>
</html>