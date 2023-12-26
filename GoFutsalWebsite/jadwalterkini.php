<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Go Futsal</title>
</head>
<style>
body {
  background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(lap1.jpg);
  background-size: cover;
}
h2, h4{
  color: #fff;
  text-align: center;
}
.col1 a{
    text-decoration: none;
    color: black;
}
.row1{
    padding-left: 85%;

}
button{
    width: 100px;
    color: #000;
    font-size: 15px;
    padding: 10px;
    background: #fff;
    border: 0;
    border-radius: 10px;
    outline: none;
    margin-top: 25px;
    margin-bottom: 20px ;
}
</style>
    <body>
        <div class="container">
            <div class="jadwalterkini">
                <h2>JADWAL LAPANGAN TERKINI</h2>
                <div class="container">
                    <h4>JADWAL LAPANGAN A</h4>       
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
                            <?php
                        // koneksi database
                        $conn = mysqli_connect("localhost", "root", "", "futsal");

                        $result = mysqli_query($conn, "SELECT * FROM jadwala");

                        ?>

                        <?php $i = 1; ?>
                        <?php while( $row = mysqli_fetch_assoc($result)): ?>

                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row["nama_tim"]; ?></td>
                                <td><?= $row["jam"]; ?></td>
                                <td><?= $row["tanggal"]; ?></td>
                                <td><?= $row["no_tlpn"]; ?></td>
                            </tr>

                            <?php $i++; ?>
                            <?php endwhile; ?>
                        </table>
                </div>
                <div class="container">
                <h4>JADWAL LAPANGAN B</h4>       
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
                        <?php
                        // koneksi database
                        $conn = mysqli_connect("localhost", "root", "", "futsal");

                        $result = mysqli_query($conn, "SELECT * FROM jadwalb");

                        ?>

                        <?php $i = 1; ?>
                        <?php while( $row = mysqli_fetch_assoc($result)): ?>

                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row["nama_tim"]; ?></td>
                                <td><?= $row["jam"]; ?></td>
                                <td><?= $row["tanggal"]; ?></td>
                                <td><?= $row["no_tlpn"]; ?></td>
                            </tr>

                            <?php $i++; ?>
                            <?php endwhile; ?>
                    </table>
                </div>
                <div class="container">
                    <h4>JADWAL LAPANGAN C</h4>       
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
                            <?php
                        // koneksi database
                        $conn = mysqli_connect("localhost", "root", "", "futsal");

                        $result = mysqli_query($conn, "SELECT * FROM jadwalc");

                        ?>

                        <?php $i = 1; ?>
                        <?php while( $row = mysqli_fetch_assoc($result)): ?>

                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row["nama_tim"]; ?></td>
                                <td><?= $row["jam"]; ?></td>
                                <td><?= $row["tanggal"]; ?></td>
                                <td><?= $row["no_tlpn"]; ?></td>
                            </tr>

                            <?php $i++; ?>
                            <?php endwhile; ?>
                        </table>
                </div>
                <div class="container">
                    <h4>JADWAL LAPANGAN D</h4>       
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
                            <?php
                        // koneksi database
                        $conn = mysqli_connect("localhost", "root", "", "futsal");

                        $result = mysqli_query($conn, "SELECT * FROM jadwald");

                        ?>

                        <?php $i = 1; ?>
                        <?php while( $row = mysqli_fetch_assoc($result)): ?>

                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row["nama_tim"]; ?></td>
                                <td><?= $row["jam"]; ?></td>
                                <td><?= $row["tanggal"]; ?></td>
                                <td><?= $row["no_tlpn"]; ?></td>
                            </tr>

                            <?php $i++; ?>
                            <?php endwhile; ?>
                        </table>
                </div>
            </div>
        </div>

</div>
            <div class="row1">
                <div class="col1">
                    <button type="button"><a href="Dashboard.html">Back</a></button>
                </div>
            </div>
    </body>
</head>