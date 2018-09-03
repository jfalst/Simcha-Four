<?php
include 'functions.php';
include 'connection.php';
session_start();


if(isset($_POST['submit'])){
    submitPosts();
}


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

<body background="light.jpg">

    <form action="post.php" method="post">
        <label>User name:</label>
        <input type="text" placeholder="usernmae" name="username" style="width: 25%">
        <label>Comment:</label>
        <input type="text" placeholder="comments" name="comments">
        <input type="submit" name="submit">
    </form>


    <table class="table">
        <thead class="thead-inverse">
        <tr>

            <th>Username</th>
            <th>Post</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $login = $_SESSION['login_user'];

        $sql = "SELECT * FROM posts ";

        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
            $uname = $row['user_name'];
            $comment = $row['comments'];
            echo "<tr>";
            echo "<td>{$uname}</td>";
            echo "<td>{$comment}</td>";
            echo "</tr>";

        }

        ?>

        </tbody>
    </table>



</body>

</html>
