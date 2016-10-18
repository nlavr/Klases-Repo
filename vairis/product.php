<!DOCTYPE html>
<?php
include'functions/dbconfig.php';
include'functions/platformas.php'
?>
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
session_start();
if ($_SESSION['email'] == true) {
    include 'menu_logged.php';
} else {
    include 'menu_unlogged.php';
}
?>

    <!-- /.container -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="lead">Izvēlies platforumu</p>
                <div class="list-group">
                    <ul id="drop-nav">

                        <?php foreach(getMenuTree() as $id => $item): ?>
                            <li>
                                <a onmouseover="changeTo(this)" onmouseout="changeBack(this)" href="###############" class="list-group-item" style="background-color: rgb(192, 192, 192);"><?= $item['name'] ?></a>
                                <?php if(count($item['categories'])): ?>
                                    <ul>
                                        <?php foreach($item['categories'] as $catId => $category): ?>
                                            <li>
                                                <a onmouseover="changeTo(this)" onmouseout="changeBack(this)" href="###############" class="list-group-item" style="background-color: rgb(192, 192, 192);"><?= $category['name'] ?></a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                <?php endif ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
<!-- /container -->

</body>
</html>
