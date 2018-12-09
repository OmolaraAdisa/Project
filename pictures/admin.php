<?php

require('./init/db_connect.php');
require('./functions/functions.php');

?>

<?php
$OrderData = fetchOrderData();
?>

<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="project.css"/>
</head>
<body>






    <div class="container">

       <table class="table">
            <thead>
              <tr>
                 <th scope="col">id</th>
                 <th scope="col">product_id</th>
                 <th scope="col">firstname</th>
                 <th scope="col">phoneno</th>
                 <th scope="col">address</th>
              </tr>
            </thead>
  <?php
  foreach($OrderData as $OrderData) {
    echo "<tbody>";
    echo "<tr>";
     echo '<th scope="row">'.$OrderData['id'].'</th>';
     echo "<td>".$OrderData['product_id']."</td>" ;
     echo "<td>".$OrderData['customer_name']."</td>" ;
     echo "<td>".$OrderData['phone_number']."</td>" ;
     echo "<td>".$OrderData['address']."</td>" ;
     
   echo "</tr>";

echo "</tbody>";

  }
  ?>
</table>


</div>




<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

    
</body>
</html>