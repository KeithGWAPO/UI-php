<?php
        include("dbconnect.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "welcome.css">
    <style>
        .bodyvid{
            height: 100%;
            overflow: hidden;
            margin-top: 130px;
        }
        #background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            object-fit: cover;
        }
        .box{
            background-color: rgb(225, 225, 225);
        }
        </style>
</head>
<body>
    <div class="bodyvid">
        <video autoplay loop id="background-video" src="background.mp4"></video>
    <div class="box">
        <div class="upper-box">
            <ul class="navul">
                <li class="navli"><a class="active" href="#setting">Setting</a></li>
                <li class="navli"><a href="#cashiering">Cashiering</a></li>
                <li class="navli"><a href="#product list">Product List</a></li>
                <li class="navli"><a href="#home">Home</a></li>
                <li class="navli"><a class="name" >R.V.M. Cashiering System</a></li>
            </ul>
        </div>
            <div class="welcome-input">
                <?php
                session_start();
                if(isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    echo "<h1>Welcome, $username!</h1>";
                } else {
                    header("Location: index.php");
                    exit();
                }
                ?>
            </div>
    </div>
    </div>
</body>
</html>