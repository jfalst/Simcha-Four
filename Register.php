
<?php
include 'functions.php';
if(isset($_POST['submit'])){
    register();
}

?>

<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="register.css">

<head>
    <meta charset="UTF-8">
    <title>register</title>
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


<body>

<br>

<h2>Don't have an account? Please fill out the following form to register</h2>

<div id="form" align="center">
    <form action="Register.php" method="post">

        <input type="text" placeholder="first name" name="first_name">

        <input type="text" placeholder="last name" name="last_name">

        <input type="text" placeholder="email" name="email_address">

        <input type="text" placeholder="user name" name="user_name">

        <input type="password" placeholder="password" name="pass_word">

        <input type="submit" value="Sign up" name="submit">
    </form>

</div>

</body>
</html>
*/