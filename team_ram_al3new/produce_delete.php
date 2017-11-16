<?php
   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'raw_db');
   $sql = "DELETE FROM produce_product WHERE id='$_GET[id]'";
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=produce_view.php");
   else
	   echo "Not Deleted!";


?>