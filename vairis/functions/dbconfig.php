<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'myshop';
$dbconfig = mysqli_connect($host,$username,$password,$database);

    if ($dbconfig->connect_errno) {
        die("ERROR : -> " . $dbconfig->connect_error);
    }
?>