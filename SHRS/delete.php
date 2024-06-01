<?php
session_start();
include("baglan.php");

if (isset($_POST['sil'])) {
    $randevu_id = $_POST['randevu_id'];

    // Randevuyu veritabanından sil
    $sil = $db->prepare("DELETE FROM randevu WHERE randevu_id = :id");
    $sil->execute(['id' => $randevu_id]);

    if ($sil) {
        echo "<SCRIPT> alert('Randevu başarıyla silindi.'); window.location='bekleyenRandevu.php' </SCRIPT>";
    } else {
        echo "<SCRIPT> alert('Randevu silinirken bir hata oluştu.'); window.location='bekleyenRandevu.php' </SCRIPT>";
    }
}
?>
