<?php	
	$mysql_hostname="localhost";
	$mysql_user="towfiqchowdhury_admin";
	$mysql_password="!@#$%";
	$mysql_database="towfiqchowdhury_bdmybd";
	$prefix="";
	@$db=mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die ("Could not connect to database");
	mysql_select_db($mysql_database,$db) or die ("Could not select database");
?>