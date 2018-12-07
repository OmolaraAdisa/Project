<?php
require("./functions/functions.php")
?>

<?php

$conn = mysqli_connect('localhost','root','','project');

if(!$conn){
    echo "not connected to database";
 }

?>

<?php

$productData = selectProductAllProduct();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu ordering website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="project.css"/>
</head>
<body>

    <div style="float:right">
        <p>08057666000   lara'skitchen@gmail.com  </p>

    </div>
    <br>
    <br>
    <div class="container-fluid header" style="text-align:center">
        <div class="row">
            <div class="col">
                    <p class="lead font-weight-normal ml-5">
                        Top deals, just for you!
                    </p>
            </div>

            <div class="col">
                <a href="login.html"><button type="submit" class="btn btn-secondary mr-5"> Order now</button></a>
            </div>

        </div>
        

        
    </div>



    <div class="container navigation" >
        <div class="logo float-left">
                <img src="laras kitchen.jpg" alt="Sample image">
        </div>
           
        <nav class="navbar navbar-expand-sm bg-light float-right">

                <ul class="navbar-nav" >
                  <li class="nav-item">
                    <a class="nav-link" href="signup.html">Sign Up</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.html">Log In</a>
                  </li>
                  
                </ul>
              
        </nav>
       


    </div>
    <br>

    
     <div id="firstcarouselslideonly" class="carousel slide" data-ride="carousel" >

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="food7.jpg" alt="first slide">
                </div>
    
                <div class="carousel-item">
                    <img class="d-block w-100" src="food4.jpg" alt="second slide">
                </div>
                
                
            </div>
    
    </div>

    <div class="container-fluid section text-center">
        <h2>Lara's Kitchen</h2>
        <p>We bring food to your doorstep</p>
        <br>
        <br>

        <form>
            <input type="text" class="formcontrol" placeholder="search">
            <input type="text" class="formcontrol" placeholder="search">
            <button type="submit" class="btn">Show result</button>
        </form>


    </div>
    <br>
    <br>

<div class="container">

    <div class="col">
        <?php

        foreach ($productData as $productData) {
          echo " <div class='row'>" ;
           echo " <div class='col-3 padding-0'>" ;
               echo "<div class='card'   style=' width:15rem;'>" ;
                  echo " <img class='card' src='food9.jpg' alt='card image cap'>" ; 
                   echo "<div class='card-body'> " ;   
                      echo "<p class='card-text'> " ;     
                         echo "".$productData['name']." £".$productData['price']. "";   
                          echo "<p><a href='checkout.html'>Purchase</a></p>" ;     
                        echo "</p>";
                    echo "</div>";    
              echo "</div>";

           echo "</div>" ;

        }



        ?>
    

            <!-- 



             <div class="col-3 padding-0">
                <div class="card" style="width: 15rem;">
                    <img class="card" src="food8.jpg" alt="card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            Burger $200
                            <p><a href="">Purchase</a></p>
                        </p>

                    </div>


                </div>

            </div>

            <div class="col-3 padding-0">
                    <div class="card" style="width: 15rem;">
                        <img class="card" src="food4.jpg" alt="card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                Drink $10
                                <p><a href="">Purchase</a></p>
                            </p>
    
                        </div>
    
    
                    </div>
    
            </div>
            -->


        </div>

        <br>
        <br>

         <?php

        foreach ($productData as $productData) {
             echo " <div class='row'>" ;
                echo " <div class='col-3 padding-0'>" ;
                      echo "<div class='card'   style=' width:15rem;'>" ;
                         echo " <img class='card' src='food4.jpg' alt='card image cap'>" ; 
                             echo "<div class='card-body'> " ;   
                                echo "<p class='card-text'> " ;     
                                      echo "".$productData['name']." £".$productData['price']. "";   
                                     echo "<p><a href='checkout.html'>Purchase</a></p>" ;     
                                echo "</p>";
                             echo "</div>";    
                        echo "</div>";
            echo "</div>" ;
        }
        ?>





         <!-- 
         <div class="row">
            
            <div class="col-3 padding-0">
                <div class="card" style="width: 15rem;">
                    <img class="card" src="food2.jpg" alt="card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                    Veggies$5
                                    <p><a href="">Purchase</a></p>
                            </p>
            
                        </div>
            
            
                </div>
            
            </div>

            <div class="col-3 padding-0">
                <div class="card" style="width: 15rem;">
                    <img class="card" src="food1.jpg" alt="card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                    Hotdog $50
                                    <p><a href="">Purchase</a></p>
                            </p>
                        </div>

                </div>

            </div>
            
            <div class="col-3  padding-0">
                    <div class="card" style="width: 15rem;">
                        <img class="card" src="food6.jpg" alt="card image cap">
                            <div class="card-body">
                                <p class="card-text">
                                        Lunch $15
                                    <p><a href="">Purchase</a></p>
                                </p>
                            </div>
    
                    </div>
    
             </div>

           
    

             </div>
            

        </div>

 
    </div>

    -->

</div>
<br>
<br>

<div class=" container-fluid testimonies text-center">
        <p>USER TESTIMONIES</p>
        <img src="woman.jpg" alt="sample image" width="200px" height="200px">
         <br>
        <p>I haven't found a better delivery service.Tested and trusted!
        <p>Sharon Cobbs</p>
</div>

<br>
<br>
<br>

    <div class="container text-center howitworks ">
        <h2>HOW IT WORKS</h2>
        <br>
        <br>
        <br>
        <br>
        <div class="row how">


            <div class="col">
                <h2>ORDER</h2>
            </div>
            <div class="col">
                 <h2>RECEIVE</h2>   
            </div>
            <div class="col">
                <h2>PAY</h2>
            </div>
            <div class="col">
                <h2>ENJOY</h2>
            </div>

        </div>

    </div>


<br>
<br>
<br>
<br>




    <div class="container-fluid cocktails text-center">
        <h2> COCKTAILS FOR YOUR OFFICE EVENTS</h2>
        <br>
        <p>Receive order in less than 5mins! <a href="login.html"><button type="submit " class="btn btn-light">Order now!</button></a></p>
        <br>
        <div class="row pb-3">
            <div class="col">
                <img src="cock1.jpg" alt="Sample image">
                <p>$150</p>
            </div>
            <div class="col">
                    <img src="cock2.jpg" alt="Sample image">
                <p>$150</p>
            </div>
            <div class="col">
                    <img src="cock3.jpg" alt="Sample image">
                <p>$200</p>
            </div>

        </div>

    </div>
    <br>
    <br>
    <div class="container deliverymen">
        <div>
        <p>KNOW YOUR DELIVERYMEN</p>
        <br>
        <P>At Lara's kitchen, we care so much about your safety </P>
        <p>Our workers are committed to delivering at high speed</p>
        <p>they love to serve you</p>
        </div>
        <br>
        <div class="row ">
            <div class="col">
                <img src="deliver 1.jpg" alt="Sample image">
                <p>ARON</p>

            </div>
            <div class="col">
                <img src="deliver 2.jpg" alt="Sample image">
                <p>JACK</p>

            </div>
            <div class="col">
                <img src="deliver 3.jpg" alt="Sample image">
                <p>RAMSEY</p>
            </div>
            <div>
                <img src="deliver 4.jpg" alt="Sample image">
                <p>ROWLAND</p>
            </div>

        </div>

    </div>

    <footer class="page-footer ">
        <div class="container-fluid text-center text-md-left">
            
             <div class="row">

            
                  <div class="col-3">
    
                     <h6> <address>NO 5, Roxwell street NBC  Partial addresses: Main Highway Otaki
                            Postcodes: 5022.
                            PO Box:  39100, Howick.
                            Community Boxes: CMB C5, Huntly.
                            Counter Delivery: Counter Delivery, Carters Beach PostCentre, Westport</address>
                        </h6>   
                  </div>
           
    
                  <div class="col-6 text-right">
                   <h6>Follow us</h6> 
            
                  <a class="fb-ic">
                    <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  
                  <a class="tw-ic">
                    <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                 
                  <a class="gplus-ic">
                    <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                
                  <a class="li-ic">
                    <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                
                  <a class="ins-ic">
                    <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  
                  <a class="pin-ic">
                    <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
                  </a>



                  </div>
             
    
            </div>
         
    
        </div>
      
        <div class="footer-copyright text-center py-3">© 2018 Copyright Lara's Kitchen
         
       
        </div>
    </footer>

  
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>