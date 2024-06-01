<html>
<?php include ('baglan.php');

 $doktorSor=$db->prepare("select * from doktor");
 $doktorSor->execute();
 while($doktorCek=$doktorSor->fetch(PDO::FETCH_ASSOC)){ 
     echo $doktorCek['doktor_ad']; ?> <br> <?php
     echo $doktorCek['doktor_klinik']; ?> <br> <?php
     echo $doktorCek['doktor_hastane'];  ?> <br> <?php
     } 
 ?>

</html>