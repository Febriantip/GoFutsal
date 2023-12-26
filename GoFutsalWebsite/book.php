<?php 
require 'koneksi.php';

if (isset($_POST["book"])) {
                    
    if(book($_POST)> 0) {
        echo('<div class="alert alert-success" role="alert">
        Booking Successed!
      </div>
      ');
    }
  
        else {
          echo('<div class="alert alert-danger" role="alert">
          Booking Failed
        </div>');
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <style>
body {
  background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(lap1.jpg);
  background-size: cover;
}
.form-label, h1, h3 {
  color: #fff;
}
.back, .book{
  text-decoration: none;
}
a{
  color : black;
  text-decoration: none;
}

</style>
<body> 
    <div class="container">
    
    <h1>BOOK FUTSAL</h1>   

    <form action="" method="post" enctype="multipart/form-data">
                
    <div class="mb-3">
      <label for="nama_tim" class="form-label">Team Name:</label>
      <input type="nama_tim" class="form-control" id="nama_tim" placeholder="Enter" name="nama_tim" required />
    </div>
    <div class="mb-3">
      <label for="jam" class="form-label">Time:</label>
      <input type="Time" class="form-control" id="jam" placeholder="Enter" name="jam" required />
      </label>
    </div>
    <div class="mb-3">
      <label for="tanggal" class="form-label">Date:</label>
      <input type="Date" class="form-control" id="tanggal" placeholder="Enter" name="tanggal" required />
    </div>
    <div class="mb-3">
      <label for="no_tlpn" class="form-label">Phone Number:</label>
      <input type="number" class="form-control" id="no_tlpn" placeholder="Enter " name="no_tlpn" required />
    </div>
    <div class="form-group">
    <label for="file" class="form-label">Uplpad Foto</label>
      <input type="file" name="foto" class="form-control">
    </div>
    <br>
  <button type="book" name="book" class="btn btn-primary">Book</button>
</form>
<br>
<div class="row1">
    <div class="col1">
        <button type="button" class="btn btn-light"><a href="jadwala.php" class="back">Back</a></button></button>
    </div>
</div>
</div>
            </div>
            
            </body>

