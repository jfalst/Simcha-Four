<?php
include 'connection.php';


function register(){
    global $conn;


    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email_address'];
    $uname = $_POST['user_name'];
    $pword = $_POST['pass_word'];
    $checkuser = "SELECT * FROM user WHERE user_name = '$uname'";
    $result = $conn->query($checkuser);
    $row = $result->fetch_assoc();

#check if username exists
    if($row['user_name']==$uname){
        echo'sorry, username exists already';
    }
    else{
        $sql = "INSERT INTO user (first_name, last_name, email, user_name , pass_word) VALUES ('$fname', '$lname', '$email', '$uname', '$pword')";

        echo"<script>window.location.assign('Login.php');</script>";

    }
    $conn->query($sql);




}
function Login(){
    session_start();
    global $conn;


    $myusername= $conn->real_escape_string($_POST['user_name']);
    $mypassword= $conn->real_escape_string($_POST['pass_word']);

# get the username
    $sql = "SELECT * FROM user WHERE user_name = '$myusername' ";

#querey the username
    $result = $conn->query($sql);
    echo $conn->error;
    $row = $result->fetch_assoc();

    if($row['pass_word'] && $row['pass_word'] == $mypassword){
        $_SESSION['login_user'] = $myusername;
        echo "<script> window.location.assign('user.php'); </script>";



    }
    else{
        echo 'your username or password is incorrect';

    }

}



function upload(){
    global $conn;


    $name = $_FILES['filename']['name'];
    $tempName = $_FILES['filename']['tmp_name'];
    $location = "songs/";

    $catName = $_POST['cat_name'];
    $uname = $_SESSION['login_user'];


    echo $conn->error;

    move_uploaded_file($tempName, $location.$name);
    $sql = "INSERT INTO songs (user_name, cat_name, song_name) VALUES ('$uname', '$catName','$name')";
    $conn->query($sql);
    echo $conn->error;

    echo "<script> window.location.assign('user.php'); </script>";


}

function submitPosts(){
    global $conn;

    $username = $_POST['username'];

    $comments = $_POST['comments'];



    $sql = "INSERT INTO posts (user_name, comments) VALUES ('$username', '$comments')";

    $conn->query($sql);



}



?>