<?php

/**
 * Created by PhpStorm.
 * User: Vairis
 * Date: 10/5/2016
 * Time: 02:00 AM
 */

// Pieslēgšanās pie lokālā servera
$con = mysqli_connect("localhost", "root", "", "myshop");

// Darbības pārbaude
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>