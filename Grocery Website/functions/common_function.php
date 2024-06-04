<?php
// include('./includes/connect.php');
function getproducts()
{
global $conn;
if(!isset($_GET['category'])){
$select_query="SELECT * FROM `products` order by rand() limit 0,8";
$result_query=mysqli_query($conn,$select_query);
while($row=mysqli_fetch_assoc($result_query))
{
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image = $row['product_image'];
$product_price = $row['product_price'];
$category_id = $row['category_id'];
echo " <div class='col-md-4 mb-2'>
<div class='card'>
<img src='./Image/blog-2.jpg' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<p class='card-text'>$product_description</p>
<p class='price'>Price:$product_price/-</p>
<a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
</div>
</div>
</div>";
}
}
}
function get_all_products()
{
global $conn;
if(!isset($_GET['category'])){
$select_query="SELECT * FROM `products` order by rand()";
$result_query=mysqli_query($conn,$select_query);
while($row=mysqli_fetch_assoc($result_query))
{
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image = $row['product_image'];
$product_price = $row['product_price'];
$category_id = $row['category_id'];
echo " <div class='col-md-4 mb-2'>
<div class='card'>
<img src='./Image/blog-2.jpg' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<p class='card-text'>$product_description</p>
<p class='price'>Price:$product_price/-</p>
<a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
</div>
</div>
</div>";
}
}
}
function get_unique_categories()
{
global $conn;
if(isset($_GET['category'])){
$category_id=$_GET['category'];
$select_query="SELECT * FROM `products` WHERE category_id=$category_id ";
$result_query=mysqli_query($conn,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
echo "<h2 class='text-center text-danger'>NO STOCK FOR THIS CATEGORY";
}
while($row=mysqli_fetch_assoc($result_query))
{
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image = $row['product_image'];
$product_price = $row['product_price'];
$category_id = $row['category_id'];
echo " <div class='col-md-4 mb-2'>
<div class='card'>
<img src='./Image/blog-2.jpg' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<p class='card-text'>$product_description</p>
<p class='price'>Price:$product_price/-</p>
<a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
</div>
</div>
</div>";
}
}
}
function getcategories()
{
global $conn;
$select_categories="SELECT * FROM categories";
$result_categories=mysqli_query($conn,$select_categories);
while($row_data=mysqli_fetch_assoc($result_categories)) {
$category_title=$row_data['category_title'];
$category_id=$row_data['category_id'];
echo "<li class='nav-item '>
<a href='index.php?category=$category_id' class='nav-link text-dark bg-secondary'>$category_title</a>
</li>";
}
}
function search_products()
{
global $conn;
if(isset($_GET['search_data_product'])){
$search_data_product=$_GET['search_data'];
$search_query="SELECT * FROM `products` WHERE product_keywords like
'%$search_data_product%'";
$result_query=mysqli_query($conn,$search_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
echo "<h2 class='text-center text-danger'>NO RESULTS MATCH FOR THIS CATEGORY
OR PRODUCT";
}
while($row=mysqli_fetch_assoc($result_query))
{
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image = $row['product_image'];
$product_price = $row['product_price'];
$category_id = $row['category_id'];
echo " <div class='col-md-4 mb-2'>
<div class='card'>
<img src='./Image/blog-2.jpg' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<p class='card-text'>$product_description</p>
<p class='price'>Price:$product_price/-</p>
<a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
</div>
</div>
</div>";
}
}
}
function getIPAddress() {
//whether ip is from the share internet
if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
$ip = $_SERVER['HTTP_CLIENT_IP'];
}
//whether ip is from the proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//whether ip is from the remote address
else{
$ip = $_SERVER['REMOTE_ADDR'];
}
return $ip;
}
// $ip = getIPAddress();
// echo 'User Real IP Address - '.$ip;
function cart()
{
global $conn;
if(isset($_GET['add_to_cart'])){
$get_ip_add = getIPAddress();
$get_product_id=$_GET['add_to_cart'];
$select_query="SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add' and
product_id=$get_product_id ";
$result_query=mysqli_query($conn,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows>0){
echo "<script>alert('THIS ITEM IS ALREADY PRESENT')</script>";
echo "<script>window.open('index.php','_self')</script>";
}else{
$insert_query= "INSERT INTO `cart_details` (product_id,ip_address,quantity) values
('$get_product_id','$get_ip_add',0)";
$result_query=mysqli_query($conn,$insert_query);
echo "<script>alert('ITEM IS ADDED TO CART')</script>";
echo "<script>window.open('index.php','_self')</script>";
}
}
}
function cart_item()
{
if(isset($_GET['add_to_cart'])){
global $conn;
$get_ip_add = getIPAddress();
$select_query="SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
$result_query=mysqli_query($conn,$select_query);
$count_cart_items=mysqli_num_rows($result_query);
}else{
global $conn;
$get_ip_add = getIPAddress();
$select_query="SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
$result_query=mysqli_query($conn, $select_query);
$count_cart_items=mysqli_num_rows($result_query);
}
echo $count_cart_items;
}
function total_cart_price()
{
global $conn;
$get_ip_add = getIPAddress();
$total_price=0;
$cart_query="SELECT * FROM `cart_details` where ip_address='$get_ip_add'";
$result=mysqli_query($conn,$cart_query);
while($row=mysqli_fetch_array($result))
{
$product_id=$row['product_id'];
$select_products="SELECT * FROM `products` where product_id='$product_id'";
$result_products=mysqli_query($conn, $select_products);
while($row_product_price=mysqli_fetch_array($result_products)){
$product_price=array($row_product_price ['product_price']);
$product_values=array_sum($product_price);
$total_price+=$product_values;
}
}
echo $total_price;
}
?>
?>
