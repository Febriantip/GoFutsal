<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Go Futsal</title>
</head>
<style>
body {
  background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(lap1.jpg);
  background-size: cover;
}
h2, p {
  color: #fff;
}
.book, .back{
  text-decoration: none;
  color: black;
}
</style>
    <body> 
    <div class="container">
    <h2>JADWAL LAPANGAN B</h2>       
  <table class="table table-light table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Team Name</th>
        <th>Time</th>
        <th>Date</th>
        <th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
                    

                    <?php
                    // koneksi database

                    require 'koneksi.php';
                    $jadwalb = query("SELECT * FROM jadwalb");

                    ?>

                    <?php $i = 1; ?>
                    <?php foreach ( $jadwalb as $row ): ?>

                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["nama_tim"]; ?></td>
                        <td><?= $row["jam"]; ?></td>
                        <td><?= $row["tanggal"]; ?></td>
                        <td><?= $row["no_tlpn"]; ?></td>
                    </tr>

                    <?php $i++; ?>
                    <?php endforeach; ?>

                </table>
           


            <div class="txt">
                <p>
                    *Note untuk para pelanggan setia GO FUTSAL, Jadwal lapangan kosong yang tidak ditampilkan dan untuk batal booking<a href="whatsapp://send?text=GO%20FUTSAL%0AHari%20:%0AJam%20:%0ANama%20Tim%20:%0ANo%20Telepon%20:%0ALAPANGAN%20A&phone=+628561146480"> Hubungi Kami</a>
                </p>
            </div>
            
            <div class="d-grid">
  <button type="button" class="btn btn-light btn-block"><a href="bookb.php" class="book">Book Your Team Here!</button>
</div> 
                  
<div class="mb-3 mt-3">
<div class="row1">
    <div class="col1">
        <button type="button" class="btn btn-light"><a href="booking.html" class="back">Back</a></button></button>
    </div>
</div>
                    </div>
</div>
    </body>
</head>