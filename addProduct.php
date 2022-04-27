<?php

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
        <div class="container">
            <input type="submit" value="Save" name="submit">
            <input type="button" value="Cancel" name="cancel">
        </div>
    </div>

    <div class="add-product">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="product_form" method="post" >
            <label for=""> SKU </label>
            <input type="text" name="sku" id="sku" required>
            <br></br>

            <label for="">Name</label>
            <input type="text" name="name" id="name" required>
            <br></br>

            <label for="">Price ($)</label>
            <input type="text" name="price" id="price" required>
            <br></br>

            <label for="" class="">Type Switcher</label method="post">
            <select name="productType" class="" id="productType" required>
                <option selected>Type Switcher</option>
                <option value="dvd">DVD</option>
                <option value="book">Book</option>
                <option value="furniture">Furniture</option>
            </select>
            <br></br>

            <div class="col-auto" id="dvd">
                <label for="" id="size" class="">Size (MB)</label>
                    <input type="text" id="size" class="" required>
            </div>
            <div class="col-auto" id="book">
                <label for="" id="weight" class="">Weight (KG)</label>
                    <input type="text" id="weight" class="" required>
            </div>
            <div class="col-auto" id="furniture">
                <label for="" id="height" class="">Height (CM)</label>
                    <input type="text" id="height" class="" required>
                    <br></br>
                <label for="" id="width" class="">Width (CM)</label>
                    <input type="text" id="width" class="" required>
                    <br></br>
                <label for="" id="length" class="">Length (CM)</label>
                    <input type="text" id="length" class="" required>
                    <br></br>
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