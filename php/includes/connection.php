<?php
	
	$dbhost = 'localhost';
	$dbuser = 'root';
   	$dbpass = '';
   	$db = 'allcure_db';
   	$conn = mysql_connect($dbhost,$dbuser,$dbpass,$db);
   	mysql_select_db($db);
?> 