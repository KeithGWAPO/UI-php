<?php
    include("dbconnect.php");

    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM login where username = '$username' and password = '$password'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            echo '<script>
            window.location.href = "index.php";
            alert("Login Failed. Invalid username or password!!!");
            </script>';
        }
    }
?>