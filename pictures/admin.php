<?php


$conn = mysqli_connect('localhost','root','','project');

if(!$conn){
    echo "not connected to database";
 }


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

            <tbody>
              <tr>
                <th scope="row">1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
             </tr>

             <tr>
               <th scope="row">2</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
            </tr>

            <tr>
               <th scope="row">3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
            
            </tr>
  </tbody>
</table>


</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

    
</body>
</html>