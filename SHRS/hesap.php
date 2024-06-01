<?php include('kayit.php'); ?>
<html>

<head>
    <title> GYRS Hesap Ayarlarınız </title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="icon" href="icon.png" type="x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="topBar">
    <img src="../SHRS/newlogo.png" />
        <div class="userLogin">
            <a href="user.php">
                <h4> HOŞGELDİNİZ SAYIN </h4>
                <?php echo $kullanicicek['user_ad']; echo " " ; echo $kullanicicek['user_soyad']; ?>
            </a>
        </div>
    </div>

    <div class="content"> 
        <form action="guncelle.php" method="get">
            <table style="margin-left:30%;">
                <tr>
                    <td>Ad </td>
                    <td> <input type="text" name="user_ad" placeholder="<?php echo $kullanicicek['user_ad'] ?>"></td>
                </tr>
                <tr>
                    <td>Soyad</td>
                    <td> <input type="text" name="user_soyad" placeholder="<?php echo $kullanicicek['user_soyad'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Şifre</td>
                    <td> <input type="text" name="user_sifre" placeholder="<?php echo $kullanicicek['user_sifre'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Şifre Yeniden</td>
                    <td> <input type="text" name="user_sifrey"></td>
                </tr>
                <tr>
                    <td>T.C. Kimlik No</td>
                    <td> <input type="text" name="user_tc" maxlength="11" pattern="\d*"
                            placeholder="<?php echo $kullanicicek['user_tc'] ?>" /></td>
                </tr>
                <tr>
                    <td>Telefon</td>
                    <td> <input type="text" name="user_tel" maxlength="11" pattern="\d*"
                            placeholder="<?php echo $kullanicicek['user_tel'] ?>"></td>
                </tr>
                <tr>
                    <td>E-Posta</td>
                    <td> <input type="email" name="user_mail" placeholder="<?php echo $kullanicicek['user_mail'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Adres</td>
                    <td> <textarea type="text" name="user_adres"> <?php echo $kullanicicek['user_adres'] ?> </textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="guncelle">Güncelle</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="userPanel">
        <a href="randevuAl.php"> <button class="dropbtn" form="action=POST">Randevu Al</button> </a> <br>
        <div class="dropdown">
            <button class="dropbtn">Randevularım</button> <br>
            <div class="dropdown-content">
                <a href="bekleyenRandevu.php">Bekleyen Randevular</a>
                <a href="gecmisRandevu.php">Geçmiş Randevular</a>
            </div>
        </div>

        <a href="hesap.php"> <button class="dropbtn">Bilgilerini Güncelle</button> </a><br>
        <a href="logout.php"> <button class="dropbtn">Çıkış</button> </a>

    </div>

    <div class="social">
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
    </div>

    <footer>
        <p>GOCAYÖRÜK Hastane Randevu Sistemi®<br>
            <a href="https://saglik.gov.tr">T.C. Sağlık Bakanlığı</a>
        </p>
    </footer>
</body>

</html>
