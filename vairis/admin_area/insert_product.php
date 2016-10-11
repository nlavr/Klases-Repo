<!DOCTYPE html>
<?php
include("../functions/platformas.php");
include("../functions/dbconfig.php");
?>

<html lang="lv" xmlns="http://www.w3.org/1999/html">

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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Mans CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Navigācija -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../index.php" class="navbar-brand"><img src="../img/dragon.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="search">
                <form method="get" action="../results.php" enctype="multipart/form-data">
                    <input type="text" name="user_query" placeholder="Search product"/>
                    <input type="submit" name="search" value="Search"/>
                </form>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="../login.php"><i class="fa fa-sign-in"></i>Ienākt</a>
                </li>
                <li>
                    <a href="../cart.html"><i class="fa fa-shopping-cart"></i>  :5</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>PRODUCTS</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Preces nosaukums</label>
            <div class="col-md-4">
                <input id="name" name="name" placeholder="Nosaukums" class="form-control input-md" required="" type="text">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="namelv">Preces apraksts</label>
            <div class="col-md-4">
                <input id="namelv" name="namelv" placeholder="Nosaukumslv" class="form-control input-md" required="" type="text">
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="category">Kategorija</label>
            <div class="col-md-4">
                <select id="category" name="category" placeholder="Kategorija" class="form-control" required="">
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="platform">Platforma</label>
            <div class="col-md-4">
                <select id="platform" name="platform" placeholder="Platforma" class="form-control" required="">
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="quantity">Daudzums</label>
            <div class="col-md-4">
                <input id="quantity" name="quantity" placeholder="Daudzums" class="form-control input-md" required="" type="text">
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="description">Apraksts</label>
            <div class="col-md-4">
                <textarea class="form-control" id="description" name="description" placeholder="Apraksts"></textarea>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="descriptionlv">Apraksts LV</label>
            <div class="col-md-4">
                <textarea class="form-control" id="descriptionlv" name="Apraksts LV"></textarea>
            </div>
        </div>

        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Bilde</label>
            <div class="col-md-4">
                <input id="filebutton" name="filebutton" class="input-file" type="file">
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit">Submit</label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Button</button>
            </div>
        </div>
    </fieldset>
</form>

<!-- /.container -->
<div class="container">
    <hr>
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright BESTSOFT</p>
            </div>
        </div>
    </footer>
</div>
<!-- /.container -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!--On Mouse Over skripts-->
<script src="js/mouseOver.js"></script>
</body>
</html>

