<a href="logout.php">LOGOUT</a> <hr/>
<?php
session_start() ;

if(isset($_SESSION["username"]))
	echo "Nama User : ". $_SESSION["username"] ;
else
	echo "Anda sudah logout, silahkan <a href='form_login.php' >login</a> lagi.";

?>