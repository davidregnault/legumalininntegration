<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=qchampeno_legumalin', 'qchampeno', 'mcJWCEK4Gz',
	[
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	]);
