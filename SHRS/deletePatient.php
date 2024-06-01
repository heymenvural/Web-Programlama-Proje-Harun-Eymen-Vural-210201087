<?php
// Veritabanı bağlantısını içeri aktar
include("baglanCon.php");

// POST isteği ile gönderilen hastanın kimliğini al
$patientId = $_POST['patientId'];

// Silme sorgusunu hazırla
$sql = "DELETE FROM hasta WHERE user_id = $patientId";

// Sorguyu çalıştır ve sonucu kontrol et
if ($conn->query($sql) === TRUE) {
    echo "Hasta başarıyla silindi.";
} else {
    echo "Hata oluştu: " . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
