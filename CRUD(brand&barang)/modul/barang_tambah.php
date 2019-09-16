<?php 
include('db.php');
if(isset($_POST['btn'])){
	$field=array(
		'BarangNama'=>$_POST['barang_nama'],
		'BarangHarga'=>$_POST['barang_harga'],
		'BarangDisc'=>$_POST['barang_disc'],
		'BarangBrand'=>$_POST['barang_brand'],
		'BarangJenis'=>$_POST['barang_jenis']
	);
	save('barang',$field);	
	header('Location:index2.php?r=barang.php');
}
?>
<form method="post">
	<div class="row">
		<div class="input-field col s6">
		  <input name="barang_nama" value="" id="barang_nama" type="text" class="validate">
		  <label for="barang_nama">Nama Barang</label>
		</div>
	 </div>
	 
	 <div class="row">
		<div class="input-field col s6">
		  <input name="barang_harga" value="" id="barang_harga" type="text" class="validate">
		  <label for="barang_harga">Harga Barang</label>
		</div>
	 </div>
	 
	  <div class="row">
		<div class="input-field col s6">
		  <input name="barang_disc" value="" id="barang_disc" type="text" class="validate">
		  <label for="barang_disc">Diskon Barang</label>
		</div>
	 </div>
	 
	  <div class="row">
		<div class="input-field col s6">
		  <input name="barang_brand" value="" id="barang_brand" type="text" class="validate">
		  <label for="barang_brand">Brand Barang</label>
		</div>
	 </div>
	  <div class="row">
		<div class="input-field col s6">
		  <input name="barang_jenis" value="" id="barang_jenis" type="text" class="validate">
		  <label for="barang_jenis">Jenis Barang</label>
		</div>
	 </div>
	 
	 
	 
	 
	 
	 <div>
		<button name="btn" value="btn" class="btn" type="submit">Simpan</button>
	 </div>
</form>