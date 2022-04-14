<?php

	require 'config.php';

    ob_start();
    session_start();

	$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

	// try {
	// 	$GLOBALS['pdo'] = new PDO($dsn, $user, $password);
	// } catch (PDOException $e) {
	// 	echo $e->getMessage();
	// }
?>