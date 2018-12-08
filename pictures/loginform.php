<?php
session_start();
if(isset($_POST['submit'])){
    $query = "SELECT * FROM `admin` WHERE username='$username' AND password='$password' ";
    $result = mysqli_query($connect, $sql);
}
    if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        $url = $_SESSION['REDIRECT'];
        header("Location: admin.php");
    
}


?>