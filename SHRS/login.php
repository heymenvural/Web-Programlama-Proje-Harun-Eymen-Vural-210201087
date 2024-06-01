<?php
   ob_start();
   session_start();
   include('baglan.php');
   ?>
<html>

<head>
    <title> GYRS Giriş Ekranı </title>
    <meta charset="UTF-8">
    <link rel="icon" href="icon.png" type="x-icon" />
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>
    <div class="topBar">
        <a href="main.php"> 
            <img src= "../SHRS/newlogo.png" /> 
    </a>
    </div>

    <form action="kayit.php" method="post">
        <h3> Lütfen bilgilerinizin doğruluğundan emin olunuz..! </h3>

        <table>
            <tr>
                <td>T.C. Kimlik No</td>
                <td> <input name="user_tc" type="text" maxlength="11" pattern="\d*" placeholder="T.C." /></td>
            </tr>
            <tr>
                <td>Şifre</td>
                <td> <input type="password" name="user_sifre"></td>
            </tr>
            <tr>
                <td>
                    <a href="adminLogin.php">Yönetici Paneli</a>
                </td>
                <td>
                    <button type="submit" name="giris_yap">GİRİŞ YAP</button>
                </td>
            </tr>
        </table>
    </form>
    <footer>
        <p>GOCAYÖRÜK Hastane Randevu Sistemi®<br>
            <a href="https://saglik.gov.tr">T.C. Sağlık Bakanlığı</a>
        </p>
    </footer>
</body>

</html>