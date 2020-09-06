<?php session_start();
require_once('inc/db.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

//insert
$sql = 
"INSERT INTO
    user (
        first_name,
        last_name
    )
    VALUES
    (
        ?,?
    )
";
$pdo->prepare($sql)->execute([
    $first_name,
    $last_name
]);

header("location: ./");
?>