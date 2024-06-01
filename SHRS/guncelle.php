<?php 
include 'baglan.php';
$sql = $db->prepare ("SELECT * FROM hasta where user_id=:id");
$sql -> execute(array(
'user_id'=> $_GET['id']
));
$satir = $sql -> fetch(PDO::FETCH_ASSOC);

    if (isset($_POST["guncelle"])){
        $guncelle = $db ->prepare("UPDATE hasta SET
            user_ad = :ad,
            user_soyad = :soyad,
            user_sifre = :sifre,
            user_tc = :tc,
            user_tel = :tel,
            user_mail = :mail,
            user_adres = :adres
        ");
        $guncelle->execute(array(
            "ad" => $_POST["user_ad"],
            "soyad" => $_POST["user_soyad"],
            "sifre" => $_POST["user_sifre"],
            "tc" => $_POST["user_tc"],
            "tel" => $_POST["user_tel"],
            "mail" => $_POST["user_mail"],
            "adres" => $_POST["user_adres"],
            'id' => $_GET['hasta_id']
        )); 
    }
?>