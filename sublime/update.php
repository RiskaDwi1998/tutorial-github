<?php 
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
        require_once('connection.php');

		$id = $_POST['id'];
		$name = $_POST['name'];
		$namakampus = $_POST['namakampus'];
		$nohp = $_POST['nohp'];
		// $jk = $_POST['jk'];
		// $tl = $_POST['tl'];
		
		//import file koneksi database 
		
		//Membuat SQL Query
		$sql = "UPDATE tb_android SET name = '$name',namakampus = '$namakampus', nohp = '$nohp' WHERE id = $id";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
		echo 'Berhasil Update Data Pemagang';
		}else{
		echo 'Gagal Update Data Pemagang';
		}
		
		mysqli_close($con);
	}
?>