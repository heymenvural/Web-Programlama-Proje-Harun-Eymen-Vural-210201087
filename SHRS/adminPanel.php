<!DOCTYPE html>
<html>

<head>
    <title> GYRS Yönetici Paneli </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Geri dönüş butonu stilleri */
        .return-btn {
            margin: 20px;
            padding: 10px 20px;
            background-color: #4CAF50; /* Yeşil renk */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 999; /* Diğer elementlerin üstünde olması için */
        }

        .return-btn:hover {
            background-color: #45a049; /* Hover efekti */
        }
    </style>
</head>

<body>
    <div class="banner">
        <?php 
        include("baglanCon.php");

        $sql = "SELECT admin_ad, admin_soyad, admin_tc, admin_pass FROM adminler";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Verileri çek ve yazdır
            while($adminCek = $result->fetch_assoc()) {
                echo "<p>Yönetici: " . $adminCek["admin_ad"] . " " . $adminCek["admin_soyad"] . "</p>";
            }
        } else {
            echo "Yönetici bulunamadı.";
        }
        ?>
        <img src="../SHRS/newlogo.png">
    </div>
    <div class="buttons">
        <table>
            <tr>
                <td>
                    <form action="../SHRS/hastalar.php" method="get">
                        <button type="submit" name="hastalar">Hastalar</button>
                    </form>
                </td>
               
                <td>
                    <form action="../SHRS/doktorlar.php" method="get">
                        <button type="submit" name="doktorlar">Doktorlar</button>
                    </form>
                </td>
                <td>
                    <form action="../SHRS/randevular.php" method="get">
                        <button type="submit" name="randevular">Randevular</button>
                    </form>
                </td>
                <td>
                    <form action="../SHRS/yoneticiler.php" method="get">
                        <button type="submit" name="yoneticiler">Yöneticiler</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    
    <div class="footer">
        <footer>
            <p>GOCAYÖRÜK Hastane Randevu Sistemi®<br>
                <a href="https://saglik.gov.tr">T.C. Sağlık Bakanlığı</a>
            </p>
        </footer>
    </div>

    <!-- Geri dönüş butonu -->
    <button onclick="window.location.href='main.php'" class="return-btn">Geri Dön</button>
</body>

</html>
