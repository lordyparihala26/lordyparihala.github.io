<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "review";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "rusakkkkk";
    die("error!");
}

?>