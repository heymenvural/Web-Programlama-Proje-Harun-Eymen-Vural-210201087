<?php include 'kayit.php'; ?>
<html>

<head>
    <title> GYRS Hoşgeldiniz </title>
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
        <h3>GOCAYÖRÜK Hastane Randevu Sistemine Hoşgeldiniz</h3>
        <p> Bu sistem üzerinden rahatça randevu alabilir,
            randevularınızı takip edebilirsiniz. </p>
        <img src="content.jpg" alt="">
    </div>

    <div class="userPanel">
        <a href="randevuAl.php"> <button class="dropbtn2" form="action=POST">Randevu Al</button> </a> <br>
        <div class="dropdown">
            <button class="dropbtn">Randevularım</button> <br>
            <div class="dropdown-content">
                <a href="bekleyenRandevu.php">Bekleyen Randevular</a>
                <a href="gecmisRandevu.php">Geçmiş Randevular</a>
            </div>
        </div>

        <a href="hesap.php"> <button class="dropbtn2">Bilgilerini Güncelle</button> </a><br>
        <a href="logout.php"> <button class="dropbtn2">Çıkış</button> </a>

    </div>

    <div class="social">
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
    </div>

    <footer>
        <p>Vural Hastane Randevu Sistemi®<br>
            <a href="https://saglik.gov.tr">T.C. Sağlık Bakanlığı</a>
        </p>
    </footer>
</body>

</html>