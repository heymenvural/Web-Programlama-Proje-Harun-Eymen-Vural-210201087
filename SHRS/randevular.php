<!DOCTYPE html>
<html>

<head>
    <title> Randevular </title>
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
        <div class="left-panel">
            <h2>Randevular Listesi</h2>
            <table>
                <tr>
                <th>Randevuyu Alan ID </th>
                    <th>Hastane</th>
                    <th>Doktorun İsmi</th>
                    <th>Tarih</th>
                    <th>Saat</th>
                    <th>Sil</th> <!-- Silme butonu için sütun eklendi -->
                </tr>
                <?php
                include("baglanCon.php");

                $sql = "SELECT * FROM randevu";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['randevu_hasta_id'] . "</td>";
                        echo "<td>" . $row['randevu_hastane'] . "</td>";
                        echo "<td>" . $row['randevu_doktor'] . "</td>";
                        echo "<td>" . $row['randevu_tarih'] . "</td>";
                        echo "<td>" . $row['randevu_saat'] . "</td>";
                        // Silme butonunu ekle
                        echo "<td><button class='delete-btn' onclick='deleteAppointment(" . $row['randevu_id'] . ")'>Sil</button></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Kayıt bulunamadı.</td></tr>";
                }
                $conn->close();
                ?>
            </table>
        </div>
    </div>
    <div class="footer">
        <p>Vural Hastane Randevu Sistemi®<br>
            <a href="https://saglik.gov.tr">T.C. Sağlık Bakanlığı</a>
        </p>
    </div>
    <button onclick="window.location.href='adminPanel.php'" class="return-btn">Admin Paneline Geri Dön</button>

    <script>
        function deleteAppointment(appointmentId) {
            var confirmation = confirm("Randevuyu silmek istediğinizden emin misiniz?");
            if (confirmation) {
                // AJAX ile PHP dosyasına istek gönderme
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "deleteAppointment.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Silme işlemi başarılıysa
                        alert(xhr.responseText);
                        // Sayfayı yenileme veya işlem sonrası başka bir aksiyon
                    }
                };
                xhr.send("appointmentId=" + appointmentId);
            }
        }
    </script>
</body>

</html>
<?php
include("baglanCon.php");

if(isset($_POST['appointmentId'])) {
    $appointmentId = $_POST['appointmentId'];
    
    // Randevuyu sil
    $sql = "DELETE FROM randevu WHERE randevu_id = $appointmentId";
    if ($conn->query($sql) === TRUE) {
        echo "Randevu başarıyla silindi!";
    } else {
        echo "Randevu silinirken bir hata oluştu: " . $conn->error;
    }
    
    $conn->close();
}
?>
