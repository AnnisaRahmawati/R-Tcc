<?php
$host='db';
$user='user';
$pass='user'; //---- Password root ----
$db='akademik'; // ------ Nama database --
$ok=mysql_connect($host,$user,$pass) or die ('gagal konek'.mysql_error());
mysql_select_db($db,$ok);
?>