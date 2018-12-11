<?php

$conn = mysqli_connect('localhost','root','','project');

if(!$conn){
    echo "not connected to database";
 }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signup Page </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="project.css"/>
</head>
<body>


    <div class="container-fluid signupheader">
       <a href="menu.php"><img src="img/laras kitchen.jpg"> </a>
        
    </div>
    <br>
    <br>
    <br>


    <div class="container">

        <form action="signupform.php" method="POST" >

            <div class="row">
            
                        <div class="col">
                                <div class="form-group">
                                        <label for="Firstname">Firstname</label>
                                        <input type="text" class="form-control" id="Firstname" name="firstname" placeholder="Firstname" required>
                                   </div>
                        </div>
              
                        <div class="col">
              
                            <div class="form-group">
                                  <label for="Lastname">Lastname</label>
                                  <input type="text" class="form-control" id="Lastname" name="lastname" placeholder="Lastname" required>
                            </div>
                            
                        </div>
              
           </div>
          

        
           <div class="row">
              <div class="col">
                   <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
                   </div>
              </div>
    
              <div class="col">
                    <div class="form-group col-6">
                            <label for="phoneno">PhoneNo</label>
                            <input type="number" class="form-control" id="phoneno" name="phoneno" placeholder="phoneno" required>
                      </div>                          
              </div>
           </div>
    
              
            <div class="row">
                <div class="col-6">
                  <label for="address"> Address</label>          
                  <input type="text" class="form-control col-6" id="address" name="address" placeholder="address" required>
                </div>

                <div class="col-4">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                </div>

            </div>
           
          
    
            
    
             <div class="form-check">
                  <label>Gender</label>
                  <br>
                  <input class="form-check-input" type="radio" value="female" name="female" id="Female">
                  <label class="form-check-label" for="Female" >Female</label>
                  <br>
                  <input class="form-check-input" type="radio" value="male" name="male" id="Male">
                  <label class="form-check-label" for="Female">Male</label>
             </div>
             <br>
             <button class="btn btn-success btn-small" type="submit" name="submit">Submit</button>
    
        </form>
    
    </div> 


    <br>
    <br>
    <br>

    <div class="container-fluid  signup">

        <footer> &copy 2018 copyright Lara's Kitchen</footer>

    </div>





    


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
</body>
</html>