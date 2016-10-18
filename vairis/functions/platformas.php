<?php
$con = mysqli_connect("localhost", "root", "", "myshop");

function getplatforms()
{
    global $con;
    $get_platforms = "select * from platforms";

    $run_platforms = mysqli_query($con, $get_platforms);

    while ($row_platforms = mysqli_fetch_array($run_platforms)) {
        $platorm_id = $row_platforms['ID'];
        $platform_name = $row_platforms['name'];
        echo " <li><a onmouseover=\"changeTo(this)\" onmouseout=\"changeBack(this)\" href=\"###############\" class=\"list-group-item\" style=\"background-color: rgb(192, 192, 192);\">$platform_name</a></li>";
    }
}
?>