<?php


?>

    <?php include('header.php'); ?>

    
    <form id="product_form">
        <div class="mb-3">
            <label for="InputSKU" class="form-label">SKU</label>
            <input type="sku" class="form-control" id="sku" aria-describedby="sku">
        </div>
        <div class="mb-3">
            <label for="InputName" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" required type="text">
        </div>
        <div class="mb-3">
            <label for="InputPrice" class="form-label">Price ($)</label>
            <input type="price" class="form-control" id="price" required type="number">
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

        <div class="row g-3 align-items-center">
            <div class="col-auto" id="dvd">
                <label for="inputPassword6" id="size" class="col-form-label">Size (MB)</label>
                <input type="password" id="size" class="form-control" aria-describedby="passwordHelpInline">
                <div id="emailHelp" class="form-text">Please provide the size in megapixel.</div>
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto" id="furniture">
                <label for="inputPassword6" id="height" class="col-form-label">Height (CM)</label>
                <input type="password" id="height" class="form-control" aria-describedby="passwordHelpInline">
                <label for="inputPassword6" id="width" class="col-form-label">Width (CM)</label>
                <input type="password" id="width" class="form-control" aria-describedby="passwordHelpInline">
                <label for="inputPassword6" id="length" class="col-form-label">Length (CM)</label>
                <input type="password" id="length" class="form-control" aria-describedby="passwordHelpInline">
                <div id="emailHelp" class="form-text">Please provide dimensions in H*W*L.</div>
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto" id="book">
                <label for="inputPassword6" id="weight" class="col-form-label">Weight (KG)</label>
                <input type="password" id="weight" class="form-control" aria-describedby="passwordHelpInline">
                <div id="emailHelp" class="form-text">Please provide the weight in kilograms.</div>
            </div>
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

    <?php include('footer.php'); ?>

<!-- </body> -->
</html>