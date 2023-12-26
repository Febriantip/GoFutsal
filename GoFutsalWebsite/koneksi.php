<?php
//koneksi
$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "futsal";

$konek = mysqli_connect($hostname,$user,$password,$db_name) or die (mysqli_error($konek));

$conn = mysqli_connect("localhost", "root", "", "futsal");

function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

 function book($data) {
    global $conn;

    $nama_tim = $data["nama_tim"];
    $jam = $data["jam"];
    $tanggal = $data["tanggal"];
    $no_tlpn = $data["no_tlpn"];
    $foto = $_FILES['foto'];
        if($foto=''){}else{
            $config['upload_path'] = './foto';
			$config['allowed_types'] = 'jpg|png|jpeg';
        }
    

    $query = "INSERT INTO jadwala
    VALUES
    ('','$nama_tim','$jam','$tanggal','$no_tlpn', '$foto' )
    ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
    }

    
 
 function bookb($data) {
    global $conn;

    $nama_tim = $data["nama_tim"];
    $jam = $data["jam"];
    $tanggal = $data["tanggal"];
    $no_tlpn = $data["no_tlpn"];
    $foto = $_FILES['foto'];
        if($foto=''){}else{
            $config['upload_path'] = './foto';
			$config['allowed_types'] = 'jpg|png|jpeg';
        }

    $query = "INSERT INTO jadwalb
    VALUES
    ('','$nama_tim','$jam','$tanggal','$no_tlpn', '$foto' )
    ";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
 }

function bookc($data) {
   global $conn;

$nama_tim = $data["nama_tim"];
$jam = $data["jam"];
$tanggal = $data["tanggal"];
$no_tlpn = $data["no_tlpn"];
$foto = $_FILES["foto"];
        if($foto=''){}else{
            $config['upload_path'] = './foto';
			$config['allowed_types'] = 'jpg|png|jpeg';
        }

   $query = "INSERT INTO jadwalc
   VALUES
   ('','$nama_tim','$jam','$tanggal','$no_tlpn', '$foto' )
   ";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}

function bookd($data) {
    global $conn;
 
 $nama_tim = $data["nama_tim"];
 $jam = $data["jam"];
 $tanggal = $data["tanggal"];
 $no_tlpn = $data["no_tlpn"];
 $foto = $_FILES["foto"];
        if($foto=''){}else{
            $config['upload_path'] = './foto';
			$config['allowed_types'] = 'jpg|png|jpeg';
        }
 
    $query = "INSERT INTO jadwald
    VALUES
    ('','$nama_tim','$jam','$tanggal','$no_tlpn', '$foto' )
    ";
 mysqli_query($conn,$query);
 
 return mysqli_affected_rows($conn);
 }

 

?>