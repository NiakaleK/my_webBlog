<?php
try {
	$dtb = new PDO('mysql:host=localhost; dbname=my_weblog; charset=utf8', 'root', '');
}
catch (PDOException $e) {
	die ('Error : ' . $e->getMessage());
}
?>