<?php
	try{
		$db = new PDO("mysql:host=localhost; dbname=hastaneotomasyon; charest=utf8" , 'root','');
		// echo "vt baglanti basarili";
	}catch (Exception $e){
		echo $e -> getMessage();
	}

?>