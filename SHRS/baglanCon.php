<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hastaneotomasyon"; // Veritabanı adınızı burada güncelleyin

// Veritabanı bağlantısı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
