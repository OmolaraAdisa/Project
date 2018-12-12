<?php
require('./init/db_connect.php');
?>

<?php

$GLOBALS['connect'] = $connect;


?>

<?php

function addProduct($name, $price) {

    $connect = $GLOBALS['connect'];

    $sql = "INSERT INTO products(name, price) VALUES ('$name', '$price')" ;
    
    $result = mysqli_query($connect, $sql);

    if(!$result) {

        echo('Unable to insert product into Database'. mysqli_error($connect));
    };

}


function selectProductAllProduct() {

    $connect = $GLOBALS['connect'];

    $sql = "SELECT * FROM products LIMIT 6" OR die(mysqli_error($connect));

    $result = mysqli_query($connect, $sql);

    if(!$result) {
        echo ('Unable to get product from database '. mysqli_error($connect));
    }

    $productData = mysqli_fetch_all($result, MYSQLI_ASSOC);


    if(empty($productData)) {

    }else {
        return $productData;
    }
}

function fetchOrderData() {

    $connect = $GLOBALS['connect'];

    $sql = "SELECT * FROM orders INNER JOIN products ON products.id = orders.product_id"
     OR die(mysqli_error($connect));

    $result = mysqli_query($connect, $sql);

    if(!$result) {
        echo ('Unable to get product from database '. mysqli_error($connect));
    }

    $OrderData = mysqli_fetch_all($result, MYSQLI_ASSOC);


    if(empty($OrderData)) {

    }else {
        return  $OrderData;
    }
}

?>