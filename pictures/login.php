<?php
if(isset($_POST['submit'])){
    $query = "SELECT * FROM customers WHERE email='$email' AND password='$password' ";
    $result = mysqli_query($connect, $sql);
}
    if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        $url = $_SESSION['REDIRECT'];
        header('checkout.html');
    
}


?>