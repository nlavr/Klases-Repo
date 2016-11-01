<?php
include'functions/dbconfig.php';

if(isset($_POST["submit"])) {

    $name = $_POST["username"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];

    $sql = "SELECT email FROM users WHERE email='".$email."'";
    $result = mysqli_query($dbconfig, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // $run_customer = mysqli_query($dbconfig, $insert_customer);

    if(!empty($row)) {
        //failed
        $error = 1;
    } else {
        //success
        $passwordmd5 = md5($password);
        $query = mysqli_query($dbconfig, "INSERT INTO users (username, password, firstname, lastname, email) VALUES ('".$name."', '".$passwordmd5."', '".$firstname."', '".$lastname."','".$email."')");
        $success = 1;
    }
}


function checkPost($name) {
    if (isset($_POST[$name]))  {
        return $_POST[$name];
    } else {
        return "";
    }
}c
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
    <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Ievadiet savus datus</h2>
        <?php if(isset($error) && $error == 1) { ?>
            <div class="error message" >
                Sorry...This email already exist..
            </div>
        <?php }  ?>

        <?php if(isset($success) && $success == 1)  { ?>
            <div class="success message" >
                Thank You! you are now registered.
            </div>
        <?php } ?>

        <?php if(!isset($success)) { ?>
        <div>

            <label for="inputUsername" class="sr-only">Lietotājvārds</label>
            <input type="text" id="inputUsername" value="<?php echo checkPost('username'); ?>" name="username" class="form-control" placeholder="Lietotājvārds" required autofocus>

            <label for="inputPassword" class="sr-only" >Parole</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Parole" required>

            <label for="inputFirstName" class="sr-only" >Vārds</label>
            <input type="text" id="inputFirstName" value="<?php echo checkPost('firstname'); ?>" name="firstname"class="form-control" placeholder="Vārds" required>

            <label for="inputLastName" class="sr-only" >Uzvārds</label>
            <input type="text" id="inputLastName" value="<?php echo checkPost('lastname'); ?>" name="lastname" class="form-control" placeholder="Uzvārds" required>

            <label for="inputEmail" class="sr-only" >Epasts</label>
            <input type="email" id="inputEmail" name="email" value="<?php echo checkPost('email'); ?>" class="form-control" placeholder="Epasts" required>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Atcerēties
                </label>
                <a2 class="pin">VAI</a2>
                <a href="login.php" class="sendregister">Ienākt</a>
            </div>
            <button class="" type="submit" name="submit">Reģistrēties</button>
            <?php } ?>
    </form>
</div> <!-- /container -->
</body>
</html>
