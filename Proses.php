<?php
$conn = new mysqli("localhost", "root", "", "temanflo", 3307);
if($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$jenis_buket = $_POST['jenis_buket'];
$tema = isset($_POST['tema']) ? implode(",", $_POST['tema']) : '';
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
$Deskripsi = $_POST['Deskripsi'];

$sql = "INSERT INTO produk (jenis_buket, tema, ukuran, harga, Deskripsi)
        VALUES ('$jenis_buket', '$tema', '$ukuran', '$harga', '$Deskripsi')";

if ($conn->query($sql) === TRUE) {
    echo "Buket berhasil disimpan!";
} else {
    echo "Error SQL: " . $conn->error;
}

?>
