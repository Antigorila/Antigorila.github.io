<?php

$serveraddres = "localhost";
$username = "root";
$password = "";
$databaseName = "lionsdaleapp";

try {
    $connection = mysqli_connect($serveraddres,$username,$password,$databaseName);
    echo "<script>alert('Sikerült')</script>";
} catch (\Throwable $th) {
    $connection = "";
    echo "<script>alert('Valami rosz...');</script>";
}

?>