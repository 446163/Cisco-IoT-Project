<?php
    include_once 'dbconfig.php';
	$sql_query = "SELECT * FROM led_config";
	$res = mysqli_query($link, $sql_query);
	$data = mysql_fetch_assoc($res);
	echo $data[0];
	var_dump($res);
	list($count) = @mysql_fetch_row(mysqli_query($link, $sql_query));
	echo $count;
	echo "test";
?>