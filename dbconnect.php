<?php
try {
	$dbh = new PDO('mysql:host=localhost;dbname=DB', 'username', 'password');
} catch (PDOException $e) {
	echo 'DB接続エラー：' . $e->getMessage();
	exit();
}
