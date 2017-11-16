<?php
    $link=NULL;
	$link = mysqli_connect("localhost", "root", "","ram_db");
	if(!$link){
	echo"not connected";
	}else{
		//echo "connected";
	}
?>
