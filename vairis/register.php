<?php
if(isset($_POST["submit"]))
{
    $name = $_POST["UserName"];
    $password = $_POST["Password"];
    $firstname = $_POST["FirstName"];
    $lastname = $_POST["LastName"];
    $email = $_POST["Email"];

    $insert_customer = "insert into users
    (name,password,firstname,lastname,email) 
    values('$name','$password','$firstname,'$lastname','$email')";

    $sql = "SELECT Email FROM users WHERE Email='$email'";
    $result = mysqli_query($dbconfig, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $run_customer = mysqli_query($con, $insert_customer);

    if(mysqli_num_rows($result) == 1)
    {
        echo "Sorry...This email already exist..";
    }
    else
    {
        $query = mysqli_query($dbconfig, "INSERT INTO users (name, email, password)VALUES ('$name', '$email', '$password')");

        if($query)
        {
            echo "Thank You! you are now registered.";
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
            <a href="index.php" class="navbar-brand"><img src="img/dragon.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="search">
                <form method="get" action="results.php" enctype="multipart/form-data">
                    <input type="text" name="user_query" placeholder="Search product"/>
                    <input type="submit" name="search" value="Search"/>
                </form>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="login.php"><i class="fa fa-sign-in"></i>Ienākt</a>
                </li>
                <li>
                    <a href="cart.html"><i class="fa fa-shopping-cart"></i>  :5</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="container">
    <form class="form-signin">
        <h2 class="form-signin-heading">Ievadiet savus datus</h2>
        <label for="inputUsername" class="sr-only" name="username">Lietotājvārds</label>
        <input type="text" id="inputUsername" class="form-control" placeholder="Lietotājvārds" required autofocus>
        <label for="inputPassword" class="sr-only" name="password">Parole</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Parole" required>
        <label for="inputFirstName" class="sr-only" name="firstname">Vārds</label>
        <input type="text" id="inputFirstName" class="form-control" placeholder="Vārds" required>
        <label for="inputLastName" class="sr-only" name="lastname">Uzvārds</label>
        <input type="text" id="inputLastName" class="form-control" placeholder="Uzvārds" required>
        <label for="inputEmail" class="sr-only" name="email">Epasts</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Epasts" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Atcerēties
            </label>
            <a2 class="pin">VAI</a2>
            <a href="login.php" class="sendregister">Ienākt</a>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Reģistrēties</button>
    </form>
</div> <!-- /container -->

</body>
</html>