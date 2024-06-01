<?php include('kayit.php'); ?>
<html>

<head>
    <title> GYRS Randevularınız </title>
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
    <div class="randevular">
        <table>
            <tr>
                <th>Randevu Sil</th>
                <th>Tarih</th>
                <th>Saat</th>
                <th>Hastane</th>
                <th>Klinik</th>
                <th>Doktor</th>
            </tr>
            <?php 
            $randevu_sor = $db->prepare("SELECT * FROM randevu INNER JOIN hasta ON randevu.randevu_hasta_id=hasta.user_id WHERE user_tc=:user_tc");
            $randevu_sor->execute(['user_tc' => $_SESSION['kullanici_tc']]);

            while($randevu_cek = $randevu_sor->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td>
                    <form action="../SHRS/delete.php" method="post">
                        <input type="hidden" name="randevu_id" value="<?php echo $randevu_cek['randevu_id']; ?>">
                        <button type="submit" name="sil">Randevu Sil</button>
                    </form>
                </td>
                <td><?php echo $randevu_cek['randevu_tarih']; ?></td>
                <td><?php echo $randevu_cek['randevu_saat']; ?></td>
                <td><?php echo $randevu_cek['randevu_hastane']; ?></td>
                <td><?php echo $randevu_cek['randevu_klinik']; ?></td>
                <td><?php echo $randevu_cek['randevu_doktor']; ?></td>
            </tr>
            <?php } ?>
        </table>
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

        <a href="hesap.php"> <button class="dropbtn">Ayarlarım</button> </a><br>
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
