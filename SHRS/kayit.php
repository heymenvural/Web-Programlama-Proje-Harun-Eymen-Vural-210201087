<?php
ob_start();
session_start();
include ("baglan.php");

    $tarih = date('d-m-Y H:i:s',time());
    $saat = date_default_timezone_set('Europe/Istanbul');
    //kayit
    if(isset($_POST['kayit_ol'])){

        $user_ad=isset($_POST['user_ad']) ? $_POST['user_ad']: null;
        $user_soyad=isset($_POST['user_soyad']) ? $_POST['user_soyad']: null;
        $user_sifre=isset($_POST['user_sifre']) ? $_POST['user_sifre']: null;
        $user_sifrey=isset($_POST['user_sifrey']) ? $_POST['user_sifrey']: null;
        $user_tc=isset($_POST['user_tc']) ? $_POST['user_tc']: null;
        $user_tel=isset($_POST['user_tel']) ? $_POST['user_tel']: null;
        $user_mail=isset($_POST['user_mail']) ? $_POST['user_mail']: null;
        $user_adres=isset($_POST['user_adres']) ? $_POST['user_adres']: null;

        if(empty($user_ad) || empty($user_soyad)|| empty($user_sifre)|| empty($user_sifrey)|| // gönderilenler boş mu
        empty($user_tc)|| empty($user_tel)|| empty($user_mail)|| empty($user_adres)) 
        { 
        echo ("<SCRIPT LANGUAGE='JavaScript'> alert('Lütfen Boş Bırakmayın.'); window.location='register.php'</SCRIPT>");
        }else{
            if($user_sifre!=$user_sifrey){
                echo "<SCRIPT> alert('Sifreler Esit Olmalidir..!'); window.location='register.php' </SCRIPT>";
                }
                else{
                //veritabanı ekleme islemi
                $sql = $db -> prepare('INSERT INTO hasta SET
                user_ad = ?,
                user_soyad = ?,
                user_sifre = ?,
                user_tc = ?,
                user_tel = ?,
                user_mail = ?,
                user_adres = ?
                ');
                $ekle = $sql -> execute([
                    $user_ad, $user_soyad, $user_sifre, $user_tc, $user_tel, $user_mail, $user_adres
                ]);
                if($ekle){
                    echo "<SCRIPT> alert('Kaydınız Başarı ile Gerçekleşti.'); window.location='login.php' </SCRIPT>";
                }else{
                    $hata = $sql->errorInfo();
                    echo 'mysql hatası' .$hata[2];
                }
            }
        }
    }

  
    
    //giris
    if(isset($_POST['giris_yap'])){
        $user_tc = $_POST['user_tc'];
        $user_sifre = $_POST['user_sifre'];

        $userSor = $db ->prepare("SELECT * FROM hasta WHERE user_tc=:user_tc and user_sifre=:user_sifre ");
        $userSor->execute([
            'user_tc' => $user_tc,
            'user_sifre' => $user_sifre
        ]);
        
        $say = $userSor -> rowCount();
        if($say==1){
            $_SESSION['kullanici_tc']=$user_tc;
            header('location:user.php?durum=basarili');
            exit;
        }else{
            echo "<SCRIPT> alert('T.C. veya Şifre Hatali..!'); window.location='login.php' </SCRIPT>";
        }
       
    } 

    //kullanici cekme    
    $kullanicisor=$db->prepare("SELECT * FROM hasta WHERE user_tc=:user_tc");
    $kullanicisor-> execute([
    'user_tc' => $_SESSION['kullanici_tc']
    ]);
    $say = $kullanicisor->rowCount();
    $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
    
    if($say==0){
      header('location:main.php?izinsizGiris');
      exit;
    }
    
    //randevu kayit
    if(isset($_POST['randevu_kaydet'])){
        $randevu_tarih = isset($_POST['tarih']) ? $_POST['tarih']: null;
        $randevu_saat = isset($_POST['saat']) ? $_POST['saat']: null;
        $randevu_hastane = isset($_POST['hastane']) ? $_POST['hastane']: null;
        $randevu_klinik = isset($_POST['klinik']) ? $_POST['klinik']: null;
        $randevu_doktor= isset($_POST['doktor']) ? $_POST['doktor']: null;
        $randevu_hasta_id = isset($_POST['user_id']) ? $_POST['user_id']: null;

        $kaydet = $db -> prepare("INSERT INTO randevu SET
        randevu_tarih = ?,
        randevu_saat = ?,
        randevu_hastane = ?,
        randevu_klinik = ?,
        randevu_doktor = ?,
        randevu_hasta_id = ?  
        ");
        $insert=$kaydet->execute([
        $randevu_tarih , $randevu_saat, $randevu_hastane, $randevu_klinik , $randevu_doktor , $randevu_hasta_id  
        ]);
        if($insert){
            echo "<SCRIPT> alert('Randevunuz Kayıt Edilmiştir'); window.location='bekleyenRandevu.php' </SCRIPT>";
        }else{
            echo "<SCRIPT> alert('Lütfen tüm alanları eksiksiz doldurunuz..!'); window.location='bekleyenRandevu.php' </SCRIPT>";
        }
    }
   
    // echo <SCRIPT> alert("sadasd"); window.location='user.php' </SCRIPT>;
?>