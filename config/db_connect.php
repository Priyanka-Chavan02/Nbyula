<?php

$connection = mysqli_connect($_SERVER["DB_HOST"], $_SERVER["DB_USERNAME"], $_SERVER["DB_PASSWORD"] , $_SERVER["DB_NAME"], $_SERVER["DB_PORT"]);
// check connection
if (!$connection) {
	echo 'Connection error: ' . mysqli_connect_error();
}
$db = mysqli_select_db($connection, 'sms');
