<!DOCTYPE html>
<html>

<head>
    <title> Yöneticiler </title>
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

        .left-panel th,
        .left-panel td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
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
            background-color: #ff6666;
            /* Kırmızı renk */
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        /* Geri dönüş butonu stilleri */
        .return-btn {
            margin: 20px;
            padding: 10px 20px;
            background-color: #ffcc00;
            /* Sarı renk */
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
        <div class="left-panel">
            <h2>Yöneticiler Listesi</h2>
            <table>
                <tr>
                    <th>Yönetici Adı</th>
                    <th>Yönetici Soyadı</th>
                    <th>TC Kimlik</th>
                    
                </tr>
                <?php
                include("baglanCon.php");

                $sql = "SELECT * FROM adminler";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['admin_ad'] . "</td>";
                        echo "<td>" . $row['admin_soyad'] . "</td>";
                        echo "<td>" . $row['admin_tc'] . "</td>";
                       
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Kayıt bulunamadı.</td></tr>";
                }
                $conn->close();
                ?>
            </table>
        </div>
    </div>
    <div class="footer">
        <p>GOCAYÖRÜK Hastane Randevu Sistemi®<br>
            <a href="https://saglik.gov.tr">T.C. Sağlık Bakanlığı</a>
        </p>
    </div>
    <button onclick="window.location.href='adminPanel.php'" class="return-btn">Admin Paneline Geri Dön</button>
</body>

</html>
