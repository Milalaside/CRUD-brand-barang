<?php 
include('db.php');
$id=$_GET['id'];
$data = select('brand','Brandid='.$id);

if(isset($_POST['btn'])){
	$field=array(
		'BrandNama'=>$_POST['brand_nama']
	);
	save('brand',$field,'Brandid='.$id);	
	header('Location:index2.php?r=brand.php');
}
?>
<form method="post">
	<div class="row">
		<div class="input-field col s6">
		  <input name="brand_nama" value="<?php echo $data[0]['BrandNama'];?>" id="brand_nama" type="text" class="validate">
		  <label for="brand_nama">Nama Brand</label>
		</div>
	 </div>
	 <div>
		<button name="btn" value="btn" class="btn" type="submit">Simpan</button>
	 </div>
</form>