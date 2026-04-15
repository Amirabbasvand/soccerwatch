<?php

$dbhost = "localhost";
$dbname = "voetbalteams";
$dbpass = 'bit_academy';
$dbuser = "bit_academy";


try {
    $pdo = new PDO("mysql:host="  . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpass);
} catch (PDOException $err) {
    echo 'Database connectie probleem: ' . $err->getMessage();
    exit();
}