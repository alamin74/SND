<?php
    $link=NULL;
    $category=$_POST['category'];
    $date1=$_POST['b'];
	$sack=$_POST['c'];
	$price=$_POST['d'];
include 'connection.php';
    $flag=mysqli_query($link,"INSERT INTO produce_product (category,date1,sack,price)
    VALUES('$category','$date1','$sack','$price')");
    if($flag==TRUE){
        echo file_get_contents('producing_product.php');
        echo "successfully added ".$category." to the database";
    }else{
        echo '<br>';
        echo mysqli_error($link);
    }
?>
