
<a href="?r=barang_tambah.php" class="btn">Tambah</a>
<?php 
include('db.php');
echo "test ini barang";
$data = select('barang');
echo '<table>';
	echo '<tr>';
	echo '<td>No.</td>';
	echo '<td>Nama Barang</td>';
	echo '<td>Harga</td>';
	echo '<td>Diskon</td>';
	echo '<td>Brand</td>';
	echo '<td>Jenis</td>';
	echo '<td>Aksi</td>';
	echo '</tr>';

	
foreach($data as $k=>$v){
	echo '<tr>';
	echo '<td>'.($k+1).'</td>';
	echo '<td>'.$v['BarangNama'].'</td>';
	echo '<td>'.$v['BarangHarga'].'</td>';
	echo '<td>'.$v['BarangDisc'].'</td>';
	echo '<td>'.$v['BarangBrand'].'</td>';
	echo '<td>'.$v['BarangJenis'].'</td>';
	echo '<td>
		<a href="index2.php?id='.$v['BarangId'].'&r=barang_ubah.php" class="btn">Edit</a>
		<a href="index2.php?id='.$v['BarangId'].'&r=barang_hapus.php" class="btn">Hapus</a>	
	</td>';
	echo '</tr>';
}
echo '</table>';



?>