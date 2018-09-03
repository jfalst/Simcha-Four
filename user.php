<?php
include 'functions.php';
include 'connection.php';
session_start();
$user = $_SESSION['login_user'];
?>

<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <ul class="nav nav-pills" style="background-color: azure">
        <li role="presentation"><a href="Upload.php">Upload</a></li>
        <li role="presentation"><a href="seefiles.php">See Files</a></li>
        <li role="presentation"><a href="mixedfiles.php">Mixed Files</a></li>
        <li role="presentation"><a href="post.php">Posts</a></li>
        <li role="presentation"><a href="Logout.php">Log Out</a></li>



    </ul>



</head>
<body background="nycskyline.jpg">
<?php echo "<h2 style='text-align: center; color: blue; text-decoration: underline'> Welcome  $user, you are logged in. From here, you can upload songs and see all your uploaded songs</h2>"; ?>



</body>
</html>