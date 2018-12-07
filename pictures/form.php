 <?php
 $connect= mysqli_connect('localhost','root','','project');

 if(!$connect){
    echo "not connected to database";

 }


?>
<?php
if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    $phoneno= $_POST['phoneno'];
    $gender= $_POST['gender'];
    $address= $_POST['address'];
    $date= $_POST['date'];

    //echo $firstname.' '.$address; exit; 

    $sql = "INSERT INTO customers (firstname, lastname,email,password,phoneno,gender,address,date) 
    VALUES ('$firstname', '$lastname','$email','$password','$phoneno','$gender','$address',NOW())";


    $result = mysqli_query($connect, $sql);

    if(!$result) {

        die(mysqli_error($connect));
    }
    else{
        echo "submitted successfuly!";
    }
    
    

}

?>