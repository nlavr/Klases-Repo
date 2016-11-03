<?php
include'functions/dbconfig.php';

if(isset($_GET['platoromId'])) {
    $sql = "SELECT * FROM platforms WHERE ID='".$_GET['platoromId']."'";
    $result = mysqli_query($dbconfig, $sql);

    if(!empty($result)) {
        while ($row = mysqli_fetch_array($result)) {
            $output = $row;
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <title>Mans veikals</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Mans CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php
    if(isset($_SESSION['email']) == 1){
        include 'menu_logged.php';
    }else{
        include 'menu_unlogged.php';
    }
?>
<div class="container">
<div style="color:red;margin-top:90px">
    Platform id: <?php echo isset($output) ? $output['ID'] : 'not exists'; ?> <br/>
    Platform name: <?php echo isset($output) ? $output['name'] : 'not exists'; ?> <br/>
</div>
</div> <!-- /container -->
</body>
</html>

