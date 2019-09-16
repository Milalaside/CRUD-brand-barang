<?php
//index2.php?r=brand.php
	include('template/head.php');
	if(isset($_GET['r']))
		include('modul/'.$_GET['r']);
	else{
		echo '<h1>Hi... Selamat Datang</h1>';
	}
	include('template/foot.php');
?>