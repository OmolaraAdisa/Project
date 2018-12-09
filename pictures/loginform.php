
<?php
require('./init/db_connect.php')
?>
<?php
session_start()
?>
<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) == 1) {
  	  $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        $url = $_SESSION['REDIRECT'];
        header("Location: ./admin.php");   } else {
            echo 'Yo why are you not working';
        };
}


?>