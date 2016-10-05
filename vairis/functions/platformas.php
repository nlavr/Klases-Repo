<?php

// Pieslēgšanās pie lokālā servera
$con = mysqli_connect("localhost", "root", "", "myshop");

// Saņemam platformu sarkastu no servera
function getPlatforms(){
    global $con;

    $get_Platforms = "select * from platforms";
    $run_Platforms = mysqli_query($con, $get_Platforms);

    while ($row_Platforms=mysqli_fetch_array($run_Platforms)){
        $PlatformID = $row_Platforms['ID'];
        $PlatformName = $row_Platforms['Name'];
        echo "<a onmouseover=\"changeTo(this)\" onmouseout=\"changeBack(this)\" href=\"#\" class=\"list-group-item\" style=\"background-color: rgb(192, 192, 192);\">$PlatformName</a>";
    }
}
?>