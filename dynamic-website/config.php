<?php
$databaseHost = 'localhost';
$databaseName = 'dynamic';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect(
    $databaseHost, 
    $databaseUsername, 
    $databasePassword, 
    $databaseName
); 
?>