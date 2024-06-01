<?php
include("baglanCon.php");

// AJAX isteği ile gönderilen randevu ID'sini alın
$appointmentId = $_POST['appointmentId'];

// Randevuyu silmek için SQL sorgusu
$sql = "DELETE FROM randevu WHERE randevu_id = $appointmentId";

if ($conn->query($sql) === TRUE) {
    // Silme başarılıysa
    echo "Randevu başarıyla silindi";
} else {
    // Hata oluştuysa
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
