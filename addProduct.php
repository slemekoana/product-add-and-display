<?php


?>

<!DOCTYPE html>
<html>

    <?php include('header.php'); ?>

    <form id="product_form">
        <div class="mb-3">
            <label for="InputSKU" class="form-label">SKU</label>
            <input type="sku" class="form-control" id="sku" aria-describedby="sku">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="InputName" class="form-label">Name</label>
            <input type="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="InputPrice" class="form-label">Price ($)</label>
            <input type="price" class="form-control" id="price">
        </div>
        <div class="mb-3">
            <label for="InputPrice" class="form-label">Type Switcher</label>
            <select class="form-select" id="productType" aria-label="Default select example">
                <option selected>Type Switcher</option>
                <option value="dvd">DVD</option>
                <option value="book">Book</option>
                <option value="furniture">Furniture</option>
            </select>        
        </div>
        

    </form>

    <?php include('footer.php'); ?>

<!-- </body> -->
</html>