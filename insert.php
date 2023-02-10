
<?php
include "config.php";

$product_name=$_POST['product_name'];
$quantity=$_POST['quantity'];
$unit=$_POST['unit'];
$status=$_POST['status'];
$sql="INSERT INTO  product (product_name, quantity, unit, status ) VALUES  ('$product_name','$quantity','$unit','$status')";
mysqli_query($conn,$sql);
header("location:main.html")
?>

