<?php

$conn = mysqli_connect('localhost','root','','project');

if(!$conn){
    echo "not connected to database";
 }

?>

<?php

$GLOBALS['conn'] = $conn;


?>

<?php

function addProduct($name, $price) {

    $conn = $GLOBALS['conn'];

    $sql = "INSERT INTO products(name, price) VALUES ('$name', '$price')" ;
    
    $result = mysqli_query($conn, $sql);

    if(!$result) {

        echo('Unable to insert product into Database'. mysqli_error($conn));
    };

}


function selectProductAllProduct() {

    $conn = $GLOBALS['conn'];

    $sql = "SELECT * FROM products LIMIT 3" OR die(mysqli_error($conn));

    $result = mysqli_query($conn, $sql);

    if(!$result) {
        echo ('Unable to get product from database '. mysqli_error($conn));
    }

    $productData = mysqli_fetch_all($result, MYSQLI_ASSOC);


    if(empty($productData)) {

    }else {
        return $productData;
    }
}

?>