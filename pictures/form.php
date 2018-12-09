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
    $male= $_POST['male'];
    $female= $_POST['female'];
    $address= $_POST['address'];

    //echo $firstname.' '.$address; exit; 

    
    $sql = "INSERT INTO signup (firstname, lastname,email,password,phoneno,male,address, female) 
    VALUES ('$firstname', '$lastname','$email','$password','$phoneno','$male','$address', '$female')";


    $result = mysqli_query($connect, $sql);

    if(!$result) {

        die(mysqli_error($connect));
    }
    else{
        echo "submitted successfuly!";
    }
    
    

}

?>