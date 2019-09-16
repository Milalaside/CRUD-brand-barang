<?php 
include('db.php');
$id=$_GET['id'];
delete('barang','BarangId='.$id);
header('Location:index2.php?r=barang.php');

?>