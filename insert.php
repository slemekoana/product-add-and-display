<?php

    $sku = $name = $price = '';

    $errors = array('sku'=>'', 'name'=>'', 'price'=>'');

    if(isset($_POST['submit'])){

        if(empty($_POST['sku'])) {
            $errors['sku'] = 'A sku code is required <br />';
        } else {
            $sku = $_POST['sku'];
            if(!filter_var($sku, FILTER_VALIDATE_SKU)) {
                $errors['sku'] = 'sku must not be empty';
            }
        }

        if(empty($_POST['name'])) {
            $errors['name'] = 'A name is required <br />';
        } else {
            $name = $_POST['name'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $name)) {
                $errors['name'] = 'Name must be letters and spaces only';
            }
        }

        if(array_filter($errors)) {
            echo 'There are errors in the form';
        } else {
            header('Location: list_product');
        }
    }


?>