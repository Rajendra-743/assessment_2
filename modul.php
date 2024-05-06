<?php
// File: get_modul.php

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "rating_dan_ulasan";

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari tabel
$sql = "SELECT * FROM rating_dan_ulasan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ubah hasil query ke dalam bentuk array
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    // Tampilkan data dalam format JSON
    echo json_encode($rows);
} else {
    echo "0 results";
}
$conn->close();
?>
