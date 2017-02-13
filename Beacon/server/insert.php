<?php
    include_once 'dbconfig.php';
    
    if(isset($_POST['Submit'])) {
    	$red = $_POST['red'];
    	$green = $_POST['green'];
    	$blue = $_POST['blue'];
    	
		$sql_query = "DELETE FROM led_config;";
		mysqli_query($link, $sql_query);
    	
		$sql_query = "INSERT INTO led_config VALUES ($red, $green, $blue);";
		mysqli_query($link, $sql_query);
    }
?>

<!doctype html>

<head>

</head>
<body>
	<h1>COLOURS!!!</h1>
	<form id="colors" action="insert.php" method="post">
		<label>RED</label>
		<input name="red" type="number" value="0">
		<br><br>
		<label>GREEN</label>
		<input name="green" type="number" value="0">
		<br><br>
		<label>BLUE</label>
		<input name="blue" type="number" value="0">
		<br><br>
		<input type="submit" name="Submit">
	</form>
</body>