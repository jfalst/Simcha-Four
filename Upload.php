<?php
session_start();
include 'functions.php';
include 'connection.php';


if(isset($_POST['submit'])){
    upload();
}

?>

<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Upload</title>



</head>
<body background="blue.jpg">
    <ul class="nav nav-pills">
        <li role="presentation"><a href="Upload.php">Upload</a></li>
        <li role="presentation"><a href="seefiles.php">See Files</a></li>
        <li role="presentation"><a href="mixedfiles.php">Mixed Files</a></li>
        <li role="presentation"><a href="post.php">Posts</a></li>
        <li role="presentation"><a href="Logout.php">Log Out</a></li>


    </ul>


    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Upload Files</strong> </div>
            <div class="panel-body">

                <!-- Standar Form -->
                <h4>Select files from your computer</h4>
                <form action="Upload.php" method="post" enctype="multipart/form-data" id="js-upload-form">
                    <div class="form-inline">
                        <div class="form-group">
                            <input type="file" name="filename" id="fileToUpload" multiple>
                            <label for="usr">Category Name:</label>
                            <br>
                            <input type="text" class="form-control" name="cat_name">
                        </div>
                        <input type="submit" class="btn btn-sm btn-primary" name="submit">Upload files</input>
                    </div>
                </form>



            </div>
        </div>
    </div> <!-- /container -->




</body>
</html>


