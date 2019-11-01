



<?php

include "conn.php" ;

include "Header.php";
if ($con)
{
  if (isset($_GET['id'])) 
  {    
      $sql= "select * from concat where id=" .$_GET['id'];
	 

	     if($qry=mysqli_query($con,$sql))
	    {
		  if (mysqli_num_rows($qry) )
		   {
			   $row=mysqli_fetch_array($qry) ;
			   $state=$row['reple'];
			   if ($state==1)
			    $upQuery="update concat set reple=0  where id =".$_GET['id'] ;
			else
				 $upQuery="update concat set reple=1  where id =".$_GET['id'] ;
			  if ($qryuodate=mysqli_query($con,$upQuery)) 
				//  header ('Location:user_info.php') ;
			  	echo " <script>location.replace('index.php') </script> " ; 
			  else 
				  echo "error " .mysqli_error($con);
	        }
}
}			
}			 
include "footer.php";

?>
