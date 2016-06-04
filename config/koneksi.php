<?php
	$koneksi = mysql_connect("localhost","root","") or die (mysql_error());
	$database = mysql_select_db("surat",$koneksi) or die (mysql_error());
?>