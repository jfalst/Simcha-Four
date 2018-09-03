<?php
session_start();
include 'functions.php';
include 'connection.php';
?>

<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <ul class="nav nav-pills" style="background-color:azure">
        <li role="presentation"><a href="Upload.php">Upload</a></li>
        <li role="presentation"><a href="seefiles.php">See Files</a></li>
        <li role="presentation"><a href="mixedfiles.php">Mixed Files</a></li>
        <li role="presentation"><a href="post.php">Posts</a></li>
        <li role="presentation"><a href="Logout.php">Log Out</a></li>

    </ul>

</head>

<body background="light-background.jpg">


<table class="table">
    <thead class="thead-inverse">
    <tr>

        <th>Username</th>
        <th>Category</th>
        <th>Song</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $login = $_SESSION['login_user'];

    $sql = "SELECT * FROM songs WHERE user_name = '$login'";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        $uname = $row['user_name'];
        $catName = $row['cat_name'];
        $song = $row['song_name'];
        echo "<tr>";
            echo "<td>{$uname}</td>";
            echo "<td>{$catName}</td>";
            echo "<td><a href='songs/$song'>$song</a></td>"; "<br>";
        echo "</tr>";

    }

    ?>

    </tbody>
</table>




</body>


</html>
