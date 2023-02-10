<?php
error_reporting(0);

include "dbclass.php";
$search= $_POST['srch'];
$dbase=new db();
$arr=array('product_name'=>$search);
$row=$dbase->search('product',$arr);
/*
$sql="select * from product where product_id =".trim($search);
$res=mysqli_query($conn,$sql);*/
echo "<table board='1' class='table' class='tablist'>";
echo "<th>product_name</th>";
echo "<th>quantity</th>";
echo "<th>status</th>";
echo "<th>unit</th>";
foreach($row as $key=>$val){
echo "<tr><td>".$val['product_name']."</td>";
echo "<td>".$val['quantity']."</td>";
echo "<td>".$val['unit']."</td>";
echo "<td>".$val['status']."</td>";
echo "<td><button><a href='array.php?li=".$val['product_id']."'>تعديل</a></button></td></tr>";
}
echo "</table>"
/*
echo "<pre>";
print_r($row);
echo "</pre>";
*/
?>