<?php
//tangkap data dari form
$nim = $_POST["nim"] ;
$nama = $_POST["nama"] ;
$jurusan = $_POST["jurusan"] ;

// echo "NIM ".$nim."<br/>" ;
// echo "Nama ".$nama."<br/>" ;
// echo "Jurusan ".$jurusan."<br/>" ;

//1. ada koneksi
$konek = mysqli_connect("localhost","root","","akademik") ;

//2. perintah sql
$sql = "insert into mahasiswa (nim, nama, jurusan) 
		value ('".$nim."','".$nama."','".$jurusan."') " ;

//3. menjalankan sql
$query = mysqli_query($konek,$sql) ;
if($query)
	header("Location: index.php") ;
else
	echo "data gagal disimpan" ;

//6. tutup koneksi
mysqli_close($konek) ;
?>