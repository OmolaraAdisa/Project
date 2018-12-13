<?php
require("./functions/functions.php")
?>

<?php

$productData = selectProductAllProduct();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu order website</title>
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
            <div class="col" >
                    <p class="lead font-weight-normal ml-5">
                        Top deals, just for you!
                    </p>
            </div>

            

        </div>
        

        
    </div>



    <div class="container navigation" >
        <div class="logo float-left">
                <img src="img/laras kitchen.jpg" alt="Sample image">
        </div>
           
        <nav class="navbar navbar-expand-sm bg-light float-right">

                <ul class="navbar-nav" >
                  
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Admin</a>
                  </li>
                  
                </ul>
              
        </nav>
       


    </div>
    <br>

    
     <div id="firstcarouselslideonly" class="carousel slide" data-ride="carousel" >

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/food7.jpg" alt="first slide">
                </div>
    
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/food4.jpg" alt="second slide">
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
            
            <button type="submit" class="btn">Show result</button>
        </form>


    </div>
    <br>
    <br>

<div class="container">


    <div class="row">
    <?php

        foreach ($productData as $productData) {

        echo '<div class="col-md-4 mb-3">';
        echo '<div class="card">';
        echo '<img class="card-img-top" src="' . $productData['image'] . '" alt="Card image cap">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $productData['name'] . '</h5>';
        echo '<h6 class="card-subtitle mb-2 text-muted">' . $productData['price'] . '</h6>';
        echo '<button data-toggle="modal" data-target="#product_' . $productData['id']. '" role="button" class="btn btn-primary text-white">Order Now</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        //Modal
        echo '<form action="./functions/orderform.php" method="POST" >';
        echo '<div class="modal modal-lg fade" id="product_' . $productData['id'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        echo '<div class="modal-dialog" role="document">';
        echo '<div class="modal-content">';
        echo '<div class="modal-header">';
        echo '<h5 class="modal-title" id="exampleModalLabel">' . $productData['name'] . ' - ' . $productData['price'] . '</h5>';
        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
        echo '</div>';//header
        echo '<div class="modal-body">';

        echo '<input type="hidden" name="product_id" value="'.$productData['id'].'">';

        echo '<div class="form-group">';
        echo '<label>Name</label>';
        echo '<input type="text" name="customer_name" class="form-control" required>';
        echo '</div>';//form-group

        echo '<div class="form-group">';
        echo '<label>Phone Number</label>';
        echo '<input type="number" name="phone_number" class="form-control" required>';
        echo '</div>';//form-group

        echo '<div class="form-group">';
        echo '<label>Address</label>';
        echo '<textarea rows="3" name="address" class="form-control" required></textarea>';
        echo '</div>';//form-group

        echo '</div>';//body
        echo '<div class="modal-footer">';
        echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
        echo '<button type="submit" class="btn btn-primary" name="submit">Place Order</button>';
        echo '</div>';//footer
        echo '</div>';//content
        echo '</div>';//modal-dialog
        echo '</div>';//modal
        echo '</form>';

        }

        ?>
        </div>
    
</div>
<br>
<br>

<div class=" container-fluid testimonies text-center">
        <p>USER TESTIMONIES</p>
        <img src="img/woman.jpg" alt="sample image" width="200px" height="200px">
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
        <p>Receive order in less than 5mins! </p>
        <br>
        <div class="row pb-3">
            <div class="col">
                <img src="img/cock1.jpg" alt="Sample image">
                <p>$150</p>
            </div>
            <div class="col">
                    <img src="img/cock2.jpg" alt="Sample image">
                <p>$150</p>
            </div>
            <div class="col">
                    <img src="img/cock3.jpg" alt="Sample image">
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
                <img src="img/deliver 1.jpg" alt="Sample image">
                <p>ARON</p>

            </div>
            <div class="col">
                <img src="img/deliver 2.jpg" alt="Sample image">
                <p>JACK</p>

            </div>
            <div class="col">
                <img src="img/deliver 3.jpg" alt="Sample image">
                <p>RAMSEY</p>
            </div>
            <div>
                <img src="img/deliver 4.jpg" alt="Sample image">
                <p>ROWLAND</p>
            </div>

        </div>

    </div>

    <footer class="page-footer ">
        <div class="container-fluid text-center text-md-left">
            
             <div class="row">

            
                  <div class="col-3">
    
                        <h6> <address>NO 5, ShAGAM EXPRESSWAY  Partial addresses: Dugbe, Queen's cinema
                            Postcodes: 5022.
                            PO Box:  39100, Agodi.
                            Community Boxes: CMB C5, Agodi.
                            Counter Delivery: Counter Delivery, Bus stop Gate PostCentre, Ibadan</address>
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
         
    
    
            <div class="footer-copyright text-center py-3">© 2018 Copyright Lara's Kitchen</div>
         
       
        </div>
    </footer>

  
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>