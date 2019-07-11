<?php
session_start() ;
if(isset($_SESSION['username'])) {
	echo "Login sebagai : ".$_SESSION['username']." NIM ".$_SESSION["nim"]." Nama ".$_SESSION["nama"]." <hr/>" ;
	?>
	<a href="form_isi.php">Input Data</a> | 
	<a href="logout.php">Logout</a> | 
	<hr/>
	<?php
	//1. ada koneksi
	$konek = mysqli_connect("localhost","root","","akademik") ;

	//2. perintah sql
	$sql = "select * from mahasiswa" ;

	//3. menjalankan sql
	$query = mysqli_query($konek,$sql) ;

	//4. jika hasil menjalankan adalah resource data hasil select
	//	maka ubah jadi array (fetch)
	// ulang selama data record masih ada
	?>

		
	<h1>Tabel Data Mahasiswa</h1>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>NIM</td>
			<td>Nama</td>
			<td>Jurusan</td>
			<td>Operasi</td>
		</tr>
	<?php		
	while($data = mysqli_fetch_assoc($query)){
		?>
			<tr>
				<td><?php echo $data["id"] ?></td>
				<td><?php echo $data["nama"] ?></td>
				<td><?php echo $data["nim"] ?></td>
				<td><?php echo $data["jurusan"] ?></td>
				<td>
					<a href="update_form.php?id=<?php echo $data["id"] ?>"> Update </a>
					<a href="hapus.php?id=<?php echo $data["id"] ?>"> Hapus </a>
				</td>
			</tr>
		<?php
	}
	?>
	</table>
		
	<?php
	//6. tutup koneksi
	mysqli_close($konek) ;
}else{
	include("form_login.php") ;
}

















