 
 <?php 
 	$id = $_GET['id'];
 
 	//Import File Koneksi Database
 	require_once('connection.php');
 
 	//Membuat SQL Query
	 $sql = "DELETE FROM tb_android WHERE id=$id;";
	 
	 
	 //Menghapus Nilai pada Database 
	 if(mysqli_query($con,$sql)){
	 echo 'Berhasil Menghapus Pemagang';
	 }else{
	 echo 'Gagal Menghapus Pemagang';
	 }
	 
	 mysqli_close($con);
	 ?>