<?php

    $conn = mysqli_connect('localhost', 'selaelo', 'productManager', 'product_management');

    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    } 

    
?>