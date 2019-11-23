<?php
	
	$mysqli = new mysqli("us-cdbr-iron-east-05.cleardb.net", "b8292f7881368d", "7e3cec8213cb4bb", "heroku_8f66853773b3ac0");
	if (mysqli_connect_errno()) {
		printf("Falloxd", $mysqli->connect_error);
		exit();
	}
?>