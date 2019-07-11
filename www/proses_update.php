<?php
//tangkap data dari form
$id = $_POST["id"] ;
$nim = $_POST["nim"] ;
$nama = $_POST["nama"] ;
$jurusan = $_POST["jurusan"] ;

// echo "NIM ".$nim."<br/>" ;
// echo "Nama ".$nama."<br/>" ;
// echo "Jurusan ".$jurusan."<br/>" ;

//1. ada koneksi
$konek = mysqli_connect("localhost","root","","akademik") ;

//2. perintah sql
$sql = "update mahasiswa set nim='".$nim."', nama='".$nama."', jurusan='".$jurusan."' where id='".$id."' " ;

//3. menjalankan sql
$query = mysqli_query($konek,$sql) ;
if($query)
	header("Location: index.php") ;
else
	echo "data gagal diupdate" ;

//6. tutup koneksi
mysqli_close($konek) ;
?>