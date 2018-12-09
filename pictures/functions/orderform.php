<?php
require('../init/db_connect.php')
?>

<?php
if(isset($_POST['submit'])) {
   $product_id = $_POST['product_id'];
   $customer_name = $_POST['customer_name'];
   $phone_number = $_POST['phone_number'];
   $address = $_POST['address'];
  
   $sql = "INSERT INTO orders (product_id,customer_name,phone_number,address) 
   VALUES ('$product_id', '$customer_name','$phone_number','$address')";

   $result = mysqli_query($connect, $sql);

   if(!$result) {

       die(mysqli_error($connect));
   }
   else{
       echo "you will receive your order in few mins! kindly be informed that this is a pay on delivery service";
   }
   
   

}






?>