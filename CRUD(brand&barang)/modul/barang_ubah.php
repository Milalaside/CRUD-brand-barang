<?php 
include('db.php');
$id=$_GET['id'];
$data = select('barang','barangid='.$id);

if(isset($_POST['btn'])){
	$field=array(
		'BarangNama'=>$_POST['barang_nama'],
		'BarangHarga'=>$_POST['barang_harga'],
		'BarangDisc'=>$_POST['barang_disc'],
		'BarangBrand'=>$_POST['barang_brand'],
		'BarangJenis'=>$_POST['barang_jenis']
	);
	save('barang',$field,'barangid='.$id);	
	header('Location:index2.php?r=barang.php');
}
?>
<form method="post">
	<div class="row">
		<div class="input-field col s6">
		  <input name="barang_nama" value="<?php echo $data[0]['BarangNama'];?>" id="barang_nama" type="text" class="validate">
		  <label for="barang_nama">Nama barang</label><br>
		</div>
	 </div>
	 
	 
	 <div class="row">
		<div class="input-field col s6">
		  <input name="barang_harga" value="<?php echo $data[0]['BarangHarga'];?>" id="barang_harga" type="text" class="validate">
		  <label for="barang_harga">Harga barang</label><br>
		</div>
	 </div>
	 
	 
	  <div class="row">
		<div class="input-field col s6">
		  <input name="barang_disc" value="<?php echo $data[0]['BarangDisc'];?>" id="barang_disc" type="text" class="validate">
		  <label for="barang_disc">Diskon barang</label><br>	
		</div>
	 </div>
	 
	 
	  <div class="row">
		<div class="input-field col s6">
		  <input name="barang_brand" value="<?php echo $data[0]['BarangBrand'];?>" id="barang_brand" type="text" class="validate">
		  <label for="barang_brand">Brand barang</label><br>
		</div>
	 </div>
	 
	 
	  <div class="row">
		<div class="input-field col s6">
		  <input name="barang_jenis" value="<?php echo $data[0]['BarangJenis'];?>" id="barang_jenis" type="text" class="validate">
		  <label for="barang_jenis">Jenis barang</label><br>
		</div>
	 </div>
	 
	 <div>
		<button name="btn" value="btn" class="btn" type="submit">Simpan</button>
	 </div>
</form>