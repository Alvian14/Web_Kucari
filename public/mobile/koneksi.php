<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "kucari";

// $server = "103.247.11.134";
// $user = "tifz1761_root";
// $pass = "tifnganjuk123";
// $database = "tifz1761_kucari";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>
