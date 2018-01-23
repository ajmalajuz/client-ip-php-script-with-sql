<?php
		include_once 'db.php';
		
		$ip = $_SERVER['REMOTE_ADDR'];
		$amdts = $_SERVER['HTTP_USER_AGENT'];
		
		mysql_query("INSERT INTO ajuz (ip, agents) VALUES('$ip','$agents')");
// script written by Ajmal ajuzz 
?>