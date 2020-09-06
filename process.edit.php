<?php session_start();

require_once('inc/db.php');

$id = $_GET['id'];

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

//update
$sql = 
"UPDATE 
    user
SET
    first_name = ?,
    last_name = ?

WHERE
    id = ?
";
$pdo->prepare($sql)->execute([
    $first_name,
    $last_name,
    $id
]);
header("location: ./");
?>