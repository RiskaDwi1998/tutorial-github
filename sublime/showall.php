<?php 

	//Import File Koneksi Database
	require_once('connection.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM tb_android";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
		"id"=>$row['id'],
		"name"=>$row['name']
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>