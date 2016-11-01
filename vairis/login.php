<?php
session_start();
include'functions/dbconfig.php';

if(isset($_POST['login'])) {
    require 'functions/connect.php';
    $email = $_POST['email'];//lauku nosaukumi no kuriem dabusim datus
    $password = md5($_POST['password']);//lauku nosaukumi no kuriem dabusim datus
    $select_userdata = "select * from users where password ='$password' AND email = '$email'";

    //izvelejam lietotaju no datubazes kur parole un emails atbilst ievaditajam laukos
    $run_check = mysqli_query($dbconfig, $select_userdata);//pieprasijuma palaisana
    while($row = $run_check->fetch_assoc()) {
        $username = $row['username'];
    }
    $check_user = mysqli_num_rows($run_check);//parbaude vai ir tads lietotajs vai ne

    if ($check_user == 0)
    {
        echo "<script>alert('Password or email is incorrect')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        echo "<script>alert ('You Have Been Logged in')</script>";
        //header('Location: index.php');
        //exit;
    }
}
if(isset($_GET['logout'])) {
    unset($_SESSION['email']);
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
include 'menu_unlogged.php';
?>

<div class="container">
    <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Ievadiet savus datus</h2>
        <label for="inputEmail" class="sr-only">Epasts</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Epasts" required autofocus>
        <label for="inputPassword" class="sr-only">Parole</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Parole" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Atcerēties
            </label>
            <a2 class="pin2">VAI</a2>
          <a href="register.php" class="sendregister">Reģistrēties</a>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Ienākt</button>
    </form>
</div> <!-- /container -->

</body>
</html>
