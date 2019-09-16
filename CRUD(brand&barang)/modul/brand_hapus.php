<?php 
include('db.php');
$id=$_GET['id'];
delete('brand','BrandId='.$id);
header('Location:index2.php?r=brand.php');

?>