<?php
//koneksi ke database dengan dsn
$host   = 'localhost';
$db     = 'db_user';
$user   = 'root';
$pass   = '';
$charset= 'utf8';

$dsn    = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo    = new PDO($dsn, $user, $pass);
?>