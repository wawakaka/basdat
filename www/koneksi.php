<?php
$host="localhost"; 		// Host name
$username="root"; 		// Mysql username
$password=""; 			// Mysql password
$db_name="basdat"; 	// Database name
$conn = mysql_connect("$host", "$username", "$password")or die("Couldn't connect to MySQL Server, please check your configuration files.");
mysql_select_db("$db_name")or die("Connection to MySQL Server has been successfull, but we couldn't load the database. Please check your configuration files.");
?>