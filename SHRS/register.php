<html>

<head>
    <title> SHRS Kayıt Ekranı </title>
    <link rel="icon" href="icon.png" type="x-icon" />
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>
    <div class="topBar">
        <a href="main.php">
        <img src="../SHRS/newlogo.png" />
        </a>
    </div>
    </div>
    <form action="kayit.php" method="post">
        <h3> Lütfen bilgilerinizin doğruluğundan emin olunuz..! </h3>
        <table>
            <tr>
                <td>Ad </td>
                <td> <input type="text" name="user_ad" placeholder="Ad"></td>
            </tr>
            <tr>
                <td>Soyad</td>
                <td> <input type="text" name="user_soyad" placeholder="Soyad"></td>
            </tr>
            <tr>
                <td>Şifre</td>
                <td> <input type="password" name="user_sifre"></td>
            </tr>
            <tr>
                <td>Şifre Yeniden</td>
                <td> <input type="password" name="user_sifrey"></td>
            </tr>
            <tr>
                <td>T.C. Kimlik No</td>
                <td> <input type="text" name="user_tc" maxlength="11" pattern="\d*" placeholder="T.C." /></td>
            </tr>
            <tr>
                <td>Telefon</td>
                <td> <input type="text" name="user_tel" maxlength="11" pattern="\d*" placeholder="Telefon"></td>
            </tr>
            <tr>
                <td>E-Posta</td>
                <td> <input type="email" name="user_mail" placeholder="E-Posta"></td>
            </tr>
            <tr>
                <td>Adres</td>
                <td> <textarea type="text" name="user_adres"> </textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="kayit_ol">KAYIT OL</button>
                </td>
            </tr>
        </table>
    </form>
    <footer>
        <p>Vural Hastane Randevu Sistemi®<br>
            <a href="https://saglik.gov.tr">T.C. Sağlık Bakanlığı</a>
        </p>
    </footer>
</body>

</html>