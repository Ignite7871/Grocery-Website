<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>Quirkyshap Admin Dashboard</title>

    <link rel="icon" type="image/icon"  href="../Image/favicon.PNG">


 <!-- css link -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 <link rel ="stylesheet" href="admin_area/style.css">
 <!-- css link -->
 
 <!--font link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--font link -->

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>


<!-- styling-->



    <style>
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.logo
{
    width: 5%;
    height: 5%;
}
.card-img-top
{
    width: 100%;
    height: 200px;
    object-fit: contain;
}
.admin_image
{
    width: 100px;
    object-fit: contain;
}
.btn
{
	border: .2px solid var(--black);
	margin-top: 1rem;
	font-size: 1rem;
	color: var(--black);
	cursor: pointer;
}
.btn:hover
{
    background-color: gray;
    color: black;
}

    </style>



<!-- styling-->


</head>
<body>
    
<!-- navbar -->

<div class="container-fluid p-0">

    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../Image/favicon.PNG" class="logo"><a>Quirkyshap</a>
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                <li class="nav-item">
                 <a href="#" class="nav-link " >Welcome Admin</a>
                 </li>
                </ul>
            </nav>
        </div>
    </nav>

    <!-- second child -->
    <div class="bg-light">
        <h3 class="text-center p-3">Manage Details</h3>
    </div>

    <!-- third child -->
    <div class="row">
        <div class="col-md-12 bg-danger d-flex align-items-center p-2">
            <div class="p-2">
                <a href="" ><img src="../Image/pic-3.png" alt="" class="admin_image ms-4"></a>
                <p class="text-light ms-4">Admin Name</p>
            </div>
            <div class="button text-center m-2">
                    <button class="my-2"><a href="insert_product.php?insert_product" class="btn">Insert Products</a></button>
                    <button><a href="" class="btn">View Products</a></button>
                    <button><a href="index.php?insert_category" class="btn">Insert Categories</a></button>
                    <button><a href="" class="btn">View Categories</a></button>
                    <button><a href="" class="btn">All Orders</a></button>
                    <button><a href="" class="btn">All Items</a></button>
                    <button><a href="" class="btn">List Users</a></button>
                    <button><a href="" class="btn">Logout</a></button>
                </div>
        </div>
    </div>



  <!-- fourth child -->
  <div class="container my-5">
    <?php
    if(isset($_GET['insert_category']))
    {
        include('insert_categories.php');
    }
    ?>
 </div>











  <!--last child -->
  <div class="bg-info p-3 text-center">
  <p>All rights reserved @- Designed by Team-2024</p>
  </div>

</div>
















<!-- js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!-- js link -->





</body>
</html>