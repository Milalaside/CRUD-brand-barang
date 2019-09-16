
<a href="?r=brand_tambah.php" class="btn">Tambah</a>
<?php 
include('db.php');

$data = select('brand');
echo '<table>';
	echo '<tr>';
	echo '<td>No.</td>';
	echo '<td>Nama Brand</td>';
	echo '<td>Aksi</td>';
	echo '</tr>';
//index2.php?r=brand.php
foreach($data as $k=>$v){
	echo '<tr>';
	echo '<td>'.($k+1).'</td>';
	echo '<td>'.$v['BrandNama'].'</td>';
	echo '<td>
		<a href="index2.php?id='.$v['BrandId'].'&r=brand_ubah.php" class="btn">Edit</a>
		<a href="index2.php?id='.$v['BrandId'].'&r=brand_hapus.php" class="btn">Hapus</a>	
	</td>';
	echo '</tr>';
}
echo '</table>';



?>