<?php 
session_start();
// 1. koneksi ke db 
$mysqli = mysqli_connect(
				"localhost",   //host db
				"root", 	   //user db
				"", 	   //pass db
				"webprog"      //nama db
		   );

function eksekusi($sql){
	global $mysqli;	
	//echo $sql;
	$result = $mysqli->query($sql);
	if(!$result){
		echo $mysqli->error.'<br/>';
	}
	return $result;
}

function select($table,$where=''){
	if(strtoupper(substr(trim($table),0,6))=='SELECT'){
		$sql =$table
			  .($where==''?'':' WHERE '.$where);
	}
	else {
		$sql = "SELECT * FROM $table "
			  .($where==''?'':' WHERE '.$where);
	}
	$hasil = eksekusi($sql);
	$data=array();
	if($hasil){
		$data = $hasil->fetch_all(MYSQLI_ASSOC);
	}
	return $data;	
}

function save($table,$field,$where=''){
	$sql = " SET ";
	$susun=array();
	foreach($field as $k=>$v){
		$susun[] =" $k='$v'";
	}
	$sql .= join(',',$susun);
	if($where !='')
		$sql = "UPDATE $table ".$sql." WHERE ".$where ;
	else 
		$sql = "INSERT INTO $table ".$sql;
	
	$hasil = eksekusi($sql);
	return $hasil;
}


function delete($table,$where=''){
	$sql = "DELETE FROM $table ".($where==''?'':'WHERE '.$where);
	$hasil = eksekusi($sql);
	return $hasil;	
}
