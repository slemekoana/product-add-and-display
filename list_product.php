<?php 
    // echo 'hello, there!'
    $conn = mysqli_connect('localhost', 'root', '', 'product_management');

    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    } 

    $sql = 'SELECT sku,name,price,productType,size,height,length,width,weight FROM products ORDER BY id';
    $result = mysqli_query($conn, $sql);

    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($conn);

    

    // foreach ($products as $product) {
    //     echo $product;
    // }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="fixed-header">
        <h1><a href="#">Product Add</a></h1>
        <a href="addProduct.php">
            <input type="submit" value="ADD" name='submit'>
        </a>
        <a href="">
            <input type="submit" value="MASS DELETE">
        </a>
        <!-- <hr></hr>  -->
    </div>



    
    <div class="grid-container">
        <?php foreach ($products as $key => $product) { ?>
            <div class="grid-item">
                <input type="checkbox" class="delete-checkbox" name="delete-checkbox" value="delete-checkbox">
                <div><?php echo $product['sku']?></div>
                <div><?php echo $product['name']?></div>
                <div><?php echo $product['price']." $"?></div>
                <div><?php if ($product['productType'] == 'dvd') { ?>
                    <div><?php echo $product['size']." MB"?></div>
                <?php } elseif ($product['productType'] == 'furniture') { ?>
                    <div><?php echo "Dimension: ".$product['height']."*".$product['width']."*".$product['length']?></div>                
                <?php }  elseif ($product['productType'] == 'book') { ?>
                    <div><?php echo "Weight: ".$product['weight']." KG"?></div>                
                <?php } ?></div>
                <!-- ?></div> -->
            </div>
        <?php } ?>
    </div>


</body>
</html>