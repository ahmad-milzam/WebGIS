<?php

include_once 'koneksi.php';
include_once 'insertdata.php';

if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
    
$namaPerusahaan = mysqli_real_escape_string($conn, $_POST['namaPerusahaan']);
$kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
$website = mysqli_real_escape_string($conn, $_POST['website']);
$nomorHp = mysqli_real_escape_string($conn, $_POST['nomorHp']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$kota = mysqli_real_escape_string($conn, $_POST['kota']);
$provinsi = mysqli_real_escape_string($conn, $_POST['provinsi']);
$latitude = mysqli_real_escape_string($conn, $_POST['latitude']);
$longitude = mysqli_real_escape_string($conn, $_POST['longitude']);

$sql = "INSERT INTO jasaweb (nama_perusahaan, kategori, website, no_hp, alamat, kota, provinsi, latitude, longitude) VALUES ('$namaPerusahaan', '$kategori', '$website', '$nomorHp', '$alamat', '$kota', '$provinsi', '$latitude', '$longitude')";
    
if($conn->query($sql) === TRUE){
    // echo '<script>alert("Record Added Sucessfully")</script>';
    echo ("<script language='javascript'>
        $( document ).ready(function() {
          $('#about2').modal('show');
        });
        </script>");
}
else
{
    echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();

?>