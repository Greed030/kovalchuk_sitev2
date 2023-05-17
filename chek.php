<?php
	$email = filter_var(trim($_POST['mail']), 
	FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
	$password = filter_var(trim($_POST['pass']), 
	FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
	$mysql = new mysqli('localhost','root','root','registration_sj');
	$mysql->query("INSERT INTO `user` (`email`,`password`) VALUES('$email','$password')");
	$mysql->close();
	header('Location: /authorization.php')
?>