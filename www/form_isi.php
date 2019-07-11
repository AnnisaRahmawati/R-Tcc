<?php
session_start() ;
if(isset($_SESSION['username'])) {
	echo "Login sebagai : ".$_SESSION['username']." NIM ".$_SESSION["nim"]." Nama ".$_SESSION["nama"]." <hr/>" ;
?>
	<h1>Input Data Mahasiswa</h1>
	<form action="proses_isi.php" method="post">
		NIM <br/>
		<input type="text" name="nim" /> <br/>
		Nama <br/>
		<input type="text" name="nama" /> <br/>
		Jurusan <br/>
		<input type="text" name="jurusan" /> <br/>
		<hr/>
		<button type="submit">SIMPAN</button>
	</form>
<?php
}else{
	include("form_login.php") ;
}