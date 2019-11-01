<?php

include "conn.php" ;

if (isset( $_GET['id'],$_GET['col']) ) 
{
	   
$sql="delete from ".$_GET['col']." where id=".$_GET['id'];
    if ($qry=mysqli_query($con,$sql)) 
	{
				  	echo " <script>location.replace('index.php') </script> " ; 
		//header ( 'Location:select_bllog.php') ;
	}		
	else 
		echo "error" .mysqli_error($con) ;
	
	
	
}
?>