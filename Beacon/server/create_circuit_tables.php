<?php
    include_once 'dbconfig.php';

	$sql_query = "DROP TABLE IF EXISTS `led_config`;";
	mysqli_query($link, $sql_query);

	// RFID (RFID string, Access (bool))
	$sql_query = "CREATE TABLE IF NOT EXISTS `led_config` (
		  `red` int NOT NULL,
		  `green` int NOT NULL,
		  'blue' int NOT NULL);";
	mysqli_query($link, $sql_query);
	
	$sql_query = "INSERT INTO led_config VALUES (100, 100, 100)";
	mysqli_query($link, $sql_query);
	
	echo "Circuit tables were created.";
?>
