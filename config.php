<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "user_db";

$conn = new mysqli($host, $user, $password, $database);

if($conn_>connect_error) {
    die("connection failed: ".  $conn_>connect_error)
}


?>