<?php
include 'functions.php';
include 'connection.php';
if(isset($_POST['submit'])){
    Login();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <meta charset="UTF-8">
    <title>Title</title>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">



                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand"></a>
            </div>
            <h3 style="text-align: center">Simcha's Basement</h3>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li><a href="Home.html">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="Login.php">Login</a></li>
                    <li><a href="Register.php">Register</a></li>

                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</head>



<link rel="stylesheet" type="text/css" href="login.css">

<body>

<img src="logo.png" style="width: 205px; height: 205px; display: block; margin: auto "/>

<h2>Login to access your account:</h2>

<div id="form" align="center">

    <form action="login.php" method="post">
        <input type="text" placeholder="user name" name="user_name">

        <input type="password" placeholder="password" name="pass_word">

        <input type="submit" value="Log in" name="submit">

</div>

<p>Don't have an account?
    <a href="Register.php">Register</a>
</p>

</body>
</html>
