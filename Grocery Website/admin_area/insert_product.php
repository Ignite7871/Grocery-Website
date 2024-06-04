<?php
include('../includes/connect.php');

if(isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    $product_status = true;

    // Check if product_image is set and not empty
    if(isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
        $product_image = $_FILES['product_image']['name'];
        $temp_image = $_FILES['product_image']['tmp_name'];

        $upload_dir = "./product_images/";
        if(move_uploaded_file($temp_image, $upload_dir . $product_image)) {
            // Image uploaded successfully
            $product_status = true;

    $insert_products = "INSERT INTO `products` (product_title,product_description,product_keywords,category_id,product_image,product_price,date,status) VALUES ('$product_title','$product_description','$product_keywords','$product_category','$product_image','$product_price',NOW(),'$product_status')";

    $result_query = mysqli_query($conn, $insert_products);
    if($result_query) {
        echo "<script>alert('Successfully Updated The Product')</script>";
    } else {
        echo "<script>alert('Failed to update the product')</script>";
    }
}
    }
}
?>








<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <title>Insert Products</title>

    <link rel="icon" type="image/icon"  href="../Image/favicon.PNG">

<!-- css link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel ="stylesheet" href="../style.css">
<!-- css link -->

<!--font link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--font link -->










</head>
<body class="bg-light">
    <div class="container mt-3" >
        <h1 class="text-center"> Insert Products</h1>
        <form action="" method="post" entype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keyword</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product Keywords" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <?php 
                    $select_query = "SELECT * FROM categories";
                    $result_query=mysqli_query($conn,$select_query);
                    while($row=mysqli_fetch_assoc($result_query))
                    {
                        $category_title= $row['category_title'];
                        $category_id= $row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">Product Image</label>
                <input type="file" name="product_image" id="product_image" class="form-control" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-danger mb-3 px-3" value="Insert Product" >
            </div>


        </form>
    </div>
    





<!-- js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!-- js link -->

</body>
</html>






