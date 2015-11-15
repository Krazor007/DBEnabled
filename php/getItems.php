<?php

	include 'includes/connection.php';
    header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	$result = mysql_query("select * from products"); 
    while ($rows = mysql_fetch_array($result)) 
    {
    	$data[] = $rows;
    }
    echo json_encode($data);

?>