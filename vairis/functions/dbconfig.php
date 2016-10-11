<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'myshop';
$dbconfig = mysqli_connect($host,$username,$password,$database);

    if ($dbconfig->connect_errno) {
        die("ERROR : -> " . $dbconfig->connect_error);
    }
?>