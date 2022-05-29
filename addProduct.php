<?php
    // $conn = mysqli_connect('localhost', 'root', '', 'product_management');

    // if(!$conn) {
    //     echo 'Connection error: ' . mysqli_connect_error();
    // } 

    // include('db_connection.php');


    if (isset($_POST['submit'])) {
        echo "Submitted?";
    }

    $errors = array('sku'=>'', 'name'=>'', 'price'=>'', 'productType'=>'', 'size'=>'', 'weight'=>'', 'height'=>'', 'width'=>'', 'length'=>'');

    if(isset($_POST['submit'])){

        if(empty($_POST['sku'])) {
            $errors['sku'] = 'A sku code is required <br />';
        } else {
            $sku = $_POST['sku'];
            // if(!filter_var($sku, FILTER_VALIDATE_SKU)) {
            //     $errors['sku'] = 'sku must not be empty';
            // }
        }

        if(empty($_POST['name'])) {
            $errors['name'] = 'A name is required <br />';
        } else {
            $name = $_POST['name'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $name)) {
                $errors['name'] = 'Name must be letters and spaces only';
            }
        }

        if(empty($_POST['price'])) {
            $errors['price'] = 'The price is required <br />';
        } else {
            $price = $_POST['price'];
            if(!preg_match('/^[0-9\s]+$/', $price)) {
                $errors['price'] = 'Price must be numbers';
            }
        }


        if(empty($_POST['productType'])) {
            $errors['productType'] = 'The type switcher is required <br />';
        } else {
        if (($_POST['productType']) == 'dvd') {
            // echo $_POST['size'];
            if(empty($_POST['size'])) {
                $errors['size'] = 'The size is required <br />';
            } else {
                $size = $_POST['size'];
                if(!preg_match('/^[0-9\s]+$/', $size)) {
                    $errors['size'] = 'Size must be numbers';
                }
            }
        } elseif ($_POST['productType'] == 'book') {
            if(empty($_POST['weight'])) {
                $errors['weight'] = 'The weight is required <br />';
            } else {
                $weight = $_POST['weight'];
                if(!preg_match('/^[0-9\s]+$/', $weight)) {
                    $errors['weight'] = 'Weight must be numbers';
                }
            }
        } else {

            if(empty($_POST['height'])) {
                $errors['height'] = 'The height is required <br />';
            } else {
                $height = $_POST['height'];
                if(!preg_match('/^[0-9\s]+$/', $height)) {
                    $errors['height'] = 'Height must be numbers';
                }
            }
    
            if(empty($_POST['width'])) {
                $errors['width'] = 'The width is required <br />';
            } else {
                $width = $_POST['width'];
                if(!preg_match('/^[0-9\s]+$/', $width)) {
                    $errors['width'] = 'Width must be numbers';
                }
            }
    
            if(empty($_POST['length'])) {
                $errors['length'] = 'The length is required <br />';
            } else {
                $length = $_POST['length'];
                if(!preg_match('/^[0-9\s]+$/', $length)) {
                    $errors['length'] = 'Length must be numbers';
                }
            }
        }
        }

        




        if(array_filter($errors)) {
            echo 'There are errors in the form';
        } else {
            $sku = mysqli_real_escape_string($conn, $_POST['sku']);
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $price = mysqli_real_escape_string($conn, $_POST['price']);
            $productType = mysqli_real_escape_string($conn, $_POST['productType']);
            $size = mysqli_real_escape_string($conn, $_POST['size']);
            $height = mysqli_real_escape_string($conn, $_POST['height']);
            $length = mysqli_real_escape_string($conn, $_POST['length']);
            $width = mysqli_real_escape_string($conn, $_POST['width']);
            $weight = mysqli_real_escape_string($conn, $_POST['weight']);

            $sql = "INSERT INTO products(sku,name,price,productType,size,height,length,width,weight) VALUES('$sku', '$name', '$price', '$productType', '$size', '$height', '$length', '$width', '$weight')";
            // echo "Form is valid";

            if(mysqli_query($conn, $sql)){
                header('Location: list_product.php');
            } else {
                echo "query error: " . mysqli_error($conn);
            }
        }
    }
    
?>

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
    
    </div>

    <div class="add-product">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="product_form" method="post" >
            <label for=""> SKU </label>
            <input type="text" name="sku" id="sku">
            <div class="red-text"><?php echo $errors['sku']?></div>
            <br></br>

            <label for="">Name</label>
            <input type="text" name="name" id="name">
            <div class="red-text"><?php echo $errors['name']?></div>
            <br></br>

            <label for="">Price ($)</label>
            <input type="text" name="price" id="price">
            <div class="red-text"><?php echo $errors['price']?></div>
            <br></br>

            <label for="" class="">Type Switcher</label method="post">
            <select name="productType" class="" id="productType">
                <option selected> </option>
                <option value="dvd">DVD</option>
                <option value="book">Book</option>
                <option value="furniture">Furniture</option>
            </select>
            <div class="red-text"><?php echo $errors['productType']?></div>
            <br></br>

            <div class="col-auto" id="dvd">
                <label for="" id="size" class="">Size (MB)</label>
                    <input type="text" name='size' id="size" class="">
                    <div class="red-text"><?php echo $errors['size']?></div>
            </div>
            <div class="col-auto" id="book">
                <label for="" id="weight" class="">Weight (KG)</label>
                    <input type="text" name='weight' id="weight" class="">
                    <div class="red-text"><?php echo $errors['weight']?></div>
            </div>
            <div class="col-auto" id="furniture">
                <label for="" id="height" class="">Height (CM)</label>
                    <input type="text" id="height" name='height' class="">
                    <div class="red-text"><?php echo $errors['height']?></div>
                    <br></br>
                <label for="" id="width" class="">Width (CM)</label>
                    <input type="text" id="width" name='width' class="">
                    <div class="red-text"><?php echo $errors['width']?></div>
                    <br></br>
                <label for="" id="length" class="">Length (CM)</label>
                    <input type="text" id="length" name='length' class="">
                    <div class="red-text"><?php echo $errors['length']?></div>
                    <br></br>
            </div>


        <div class="container">
            <input type="submit" value="Save" name="submit">
            <input type="button" value="Cancel" name="cancel">
        </div>
            
        </form>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>

            $(document).ready(function() {
                $("#productType").on('change',function() {
                    $(".col-auto").hide();
                    $("#" + $(this).val()).fadeIn(700);
                }).change();
            });
        </script>

    </div>

    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2022 Selaelo Lemekoana</div>        
    </div>
</body>
</html>