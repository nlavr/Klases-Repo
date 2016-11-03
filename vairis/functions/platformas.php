<?php

global $con;
$con = mysqli_connect("localhost", "root", "", "myshop");

$get_platforms = "select * from platforms";
$run_platforms = mysqli_query($con, $get_platforms);

while ($row_platforms = mysqli_fetch_array($run_platforms)) {
    $platorm_id = $row_platforms['ID'];
    $platform_name = $row_platforms['name'];
    $platformsList[] = array('name' => $platform_name,'platform_id' => $platorm_id); 
}
//<a onmouseover="changeTo(this)" onmouseout="changeBack(this)" href="###############" class="list-group-item" style="background-color: rgb(192, 192, 192);">PC</a>
?>


<?php
    if(isset($platformsList) && !empty($platformsList)) {
        foreach($platformsList as $platformItem) {
?>
    <a onmouseover="changeTo(this)" onmouseout="changeBack(this)" href="platforms.php?platoromId=<?php echo $platformItem['platform_id']; ?>" class="list-group-item" style="background-color: rgb(192, 192, 192);"><?php echo $platformItem['name']; ?></a>
<?php   }
    } ?>
