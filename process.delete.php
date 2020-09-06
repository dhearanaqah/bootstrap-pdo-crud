<?php session_start();
require_once('inc/db.php');
$id = $_GET['id'];

//delete satu kali aja, yang penting primary key
$sql = "DELETE FROM user WHERE id = ?";
$pdo->prepare($sql)->execute([$id]);

header("location: ./");
?>