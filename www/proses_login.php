<?php
// buka sesi
session_start() ;

//tangkap data dari form
$user = $_POST['username'] ;
$pass = md5($_POST['password']) ;

//koneksi
$konek = mysqli_connect("db","user","user","akademik") ;

//sql cari user password
$sql = "SELECT 
			pengguna.username, mahasiswa.nim, mahasiswa.nama, mahasiswa.jurusan
		FROM pengguna 
			INNER JOIN mahasiswa ON mahasiswa.id = pengguna.id_mahasiswa
		WHERE 
			username = '".$user."' and password = '".$pass."'" ;
			echo $sql ;

//query
$query = mysqli_query($konek, $sql) ;

//fetch to array
$data = mysqli_fetch_assoc($query) ;

$jumlah = count($data) ;
if($jumlah == 0) {
	echo "Login gagal, user dan password salah" ;
}else{
// simpan di sesi
	$_SESSION["username"] = $data["username"] ;
	$_SESSION["nim"] = $data["nim"] ;
	$_SESSION["nama"] = $data["nama"] ;
	$_SESSION["jurusan"] = $data["jurusan"] ;
	header("Location: index.php") ;
}

// tutup koneksi
mysqli_close($konek);
?>








