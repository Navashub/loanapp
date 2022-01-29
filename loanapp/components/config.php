<?php 
define('DBSERVER', 'localhost');
define('DBUSERNAME', 'root');
define('DBPASSWORD', '');
define('DBNAME', 'user');

// connect to mysql database
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBNAME);

// Check db connection
if($db === false) {
	die("Error: Connection error" . mysqli_connect_error());
}
?>