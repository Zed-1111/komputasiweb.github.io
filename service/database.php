<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portofolio";

$db = mysqli_connect($servername, $username, $password, $dbname);

if (!$db) {
    echo "Error: " . mysqli_connect_error();
    die("error!!!");
}

?>
