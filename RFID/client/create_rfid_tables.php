<?php
    include_once 'dbconfig.php';

	$sql_query = "DROP TABLE IF EXISTS `rfid_cards`;";
	mysqli_query($link, $sql_query);

	$sql_query = "DROP TABLE IF EXISTS `rfid_access`;";
	mysqli_query($link, $sql_query);

	// RFID (RFID string, Access (bool))
	$sql_query = "CREATE TABLE IF NOT EXISTS `rfid_cards` (
		  `uid` varchar(50) NOT NULL,
		  `access` tinyint(1) NOT NULL
		);";
	mysqli_query($link, $sql_query);

	$sql_query = "ALTER TABLE `rfid_cards`
		ADD PRIMARY KEY (`uid`);";
	mysqli_query($link, $sql_query);

	// RFID Access Log (RFID, Datetime stamp)
	$sql_query = "CREATE TABLE IF NOT EXISTS `rfid_access` (
		  `uid` varchar(50) NOT NULL,
		  `datetime` datetime NOT NULL
		);";
	mysqli_query($link, $sql_query);

	$sql_query = "ALTER TABLE `rfid_access`
		ADD PRIMARY KEY (`uid`,`datetime`);";
	mysqli_query($link, $sql_query);
	
	echo "RFID tables were created."
?>
