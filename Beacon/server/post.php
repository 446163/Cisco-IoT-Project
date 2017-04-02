<?php
    include_once 'dbconfig.php';
    
    if(isset($_POST['Submit'])) {
    	$red = $_POST['red'];
    	$green = $_POST['green'];
    	$blue = $_POST['blue'];
		$sql_query = "INSERT INTO led_config VALUES ($red, $green, $blue);";
		mysqli_query($link, $sql_query);
    }
?>