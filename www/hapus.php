<?php
session_start() ;
if(isset($_SESSION['username'])) {
	$id = $_GET["id"] ;

	//1. ada koneksi
	$konek = mysqli_connect("localhost","root","","akademik") ;

	//2. perintah sql
	$sql = "delete from mahasiswa where id='".$id."'" ;

	//3. menjalankan sql
	$query = mysqli_query($konek,$sql) ;
	if($query)
		header("Location: index.php") ;
	else
		echo "data gagal dihapus" ;


	//6. tutup koneksi
	mysqli_close($konek) ;
}else{
	include("form_login.php") ;
}
?>