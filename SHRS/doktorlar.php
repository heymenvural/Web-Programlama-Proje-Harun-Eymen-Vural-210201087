<!DOCTYPE html>
<html>

<head>
    <title> Doktorlar </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Genel stiller */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        /* Sol panel stilleri */
        .left-panel {
            flex: 1;
            padding: 20px;
            background-color: #ffcccc;
            border-radius: 8px;
        }

        .left-panel h2 {
            margin-top: 0;
            color: #333;
        }

        .left-panel table {
            border-collapse: collapse;
            margin-bottom: 20px;
            width: 100%;
        }

        .left-panel th, .left-panel td {
            padding: 8px;
            border-right: 1px dashed #fff; /* Sağ taraftaki beyaz kesikli dikey çizgi */
            border-left: 1px dashed #fff; /* Sol taraftaki beyaz kesikli dikey çizgi */
        }

        .left-panel th:first-child, .left-panel td:first-child {
            border-left: none; /* İlk sütunun solunda çizgi olmasın */
        }

        .left-panel th:last-child, .left-panel td:last-child {
            border-right: none; /* Son sütunun sağında çizgi olmasın */
        }

        .left-panel th {
            background-color: #ff6666;
            color: white;
            text-align: left;
        }

        .left-panel tr:hover {
            background-color: #cc3333;
            color: white;
        }

        /* Footer stilleri */
        .footer {
            background-color: #ff6666; /* Kırmızı renk */
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        /* Geri dönüş butonu stilleri */
        .return-btn {
            margin: 20px;
            padding: 10px 20px;
            background-color: #ffcc00; /* Sarı renk */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: fixed;
            top: 20px;
            right: 20px;
        }

        .return-btn:hover {
            background-color: #ffbb00;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include("baglanCon.php");

        $sql = "SELECT * FROM doktor";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='left-panel'>";
                echo "<h2>" . $row['doktor_ad'] . " " . $row['doktor_soyad'] . "</h2>";
                echo "<table>";
                echo "<tr><th>Klinik</th><td>" . $row['doktor_klinik'] . "</td></tr>";
                echo "<tr><th>Hastane</th><td>" . $row['doktor_hastane'] . "</td></tr>";
             
                echo "</table>";
                echo "</div>";
            }
        } else {
            echo "Kayıt bulunamadı.";
        }
        $conn->close();
        ?>
    </div>
    <div class="footer">
        <p>GOCAYÖRÜK Hastane Randevu Sistemi®<br>
            <a href="https://saglik.gov.tr">T.C. Sağlık Bakanlığı</a>
        </p>
    </div>
    <button onclick="window.location.href='adminPanel.php'" class="return-btn">Admin Paneline Geri Dön</button>
</body>

</html>
