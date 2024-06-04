<!--db link -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Quirkyshap </title>

<!--CSS link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">
<link rel ="stylesheet" href="style.css">
<!--CSS link -->

<!--font link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/
6.5.1/css/all.min.css" integrity="sha512-
DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWM
n13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--font link -->

</head>
<body>

<!--navbar -->
<div class="container-fluid p-0">

<!-- first child -->
<nav class="navbar navbar-expand-lg bnavbar-light bg-success">
<div class="container-fluid">
<img src="./Image/logo.jpg" alt="" class="logo">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bstarget="#
navbarSupportedContent" aria-controls="navbarSupportedContent" ariaexpanded="
false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="display.php">Products</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Features</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Categories</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Chat</a>
</li>
<li class="nav-item">
<a class="nav-link" href="cart.php"><i class="fa-solid fa-cartshopping"></
i><sup><?php cart_item(); ?></sup></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Total Price: <?php total_cart_price() ?></a>
</li>
</ul>
<form class="d-flex" action="search_products.php" method="get">
<input class="form-control me-2" type="search" placeholder="Search" arialabel="
Search" name="search_data">
<input type="submit" value="Search" class="btn btn-outline-light"
name="search_data_product">
</form>
</div>
</div>
</nav>
<?php cart(); ?>

<!--second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
<li class="nav-item">
<a class="nav-link text-dark" href="#">Welcome Guest</a>
</li>
<li class="nav-item">
<a class="nav-link text-dark" href="./users_area/user_login.php">Login</a>
</li>
</ul>
</nav>

<!--third child -->
<div class="bg-light">
<h3 class="text-center">Quirkyshap</h3>
<p class="text-center">Your Comfort is our Happiness</p>
</div>

<!--fourth child -->
<div class="row ">
<div class="col-md-10">

<!--products -->
<div class="row">
<?php
search_products();
get_unique_categories();
?>
</div>
</div>
<div class="col-md-2 bg-light p-0">

<!-- Categories -->
<ul class="navbar-nav me-auto text-center">
<li class="nav-item bg-success">
<a href="#" class="nav-link text-light"><h4>Categories</h4></a>
</li>
<?php
getcategories();
?>
</ul>
</div>
</div>

<!--last child -->
<?php include("./includes/footer.php"); ?>
</div>

<!--navbar -->

<!--js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
integrity="sha384-
0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
crossorigin="anonymous"></script>
<!--js link -->
</body>
</html>