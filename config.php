<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_kripto";

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
  die('Connection error' . $connect->connect_error);
}
//else echo "success";
