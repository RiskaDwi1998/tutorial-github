	<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Import File Koneksi database
		require_once('connection.php');
		
		//Mendapatkan Nilai Variable
		$name = $_POST['name'];
		$jk = $_POST['jk'];
		$tl = $_POST['tl'];
		$namakampus = $_POST['namakampus'];
		$nohp = $_POST['nohp'];


		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_android (name,jk, tl, namakampus,nohp) VALUES ('$name','$jk','$tl','$namakampus','$nohp')";
		
		//Eksekusi Query database
		if(mysqli_query($con, $sql)){
		echo 'Berhasil Menambahkan Pemagang';
		}else{
		echo 'Gagal Menambahkan Pemagang';
		}
		
		mysqli_close($con);
	}
?>