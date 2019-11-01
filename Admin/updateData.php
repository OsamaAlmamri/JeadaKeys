

<?php
include "conn.php" ;
include "header.php";

//$id=28;
 if (isset($_GET['state'],$_GET['id'])) 
  {    
echo $_GET['state'];
 
 $id=$_GET['id'];


if ($_GET['state']=='log' )
	$t='file';

else 
	$t='text';
		 echo " 
	   <div class='container-fluid content-wrapper'>
    <div class='row'>
        <div class='col-md-6 col-md-offset-3'>
            <div class='card card-container'>
		  
  <h2> <div class='card-header'>update ".$_GET['state']."</div></h2>
  <form class='form-horizontal' role='form'  method=post enctype='multipart/form-data'>
  
	  <div class='form-group'>
      <label class='control-label col-sm-2' for='title'>New value : </label>
      <div class='col-sm-10'>
        <input type='".$t."' name='new'  class='form-control' id='new' placeholder='Enter your ".$_GET['state']."'>
      </div>
	   </div>
	   <div class='form-group'>        
      <div class='col-sm-offset-2 col-sm-10'>
        <button type='submit' class='btn btn-default' name='sbmt' >Edit</button>
      </div>
    </div>
	
	    </div>
		 </div>
		  </div>
		   </div>
		    </div>
			";
	  
	  
	  
	   if ( isset($_POST['sbmt']))
		  {
			  
			  
			 $new=mysqli_real_escape_string($con,$_POST['new']) ;
			  $types=array('image/jpeg','image/gif','image/png') ;
if ( isset ($_FILES ) )
{
	  $image = $_FILES['new'] ['name'] ;
$f_type= $_FILES['new'] ['type'] ;
$file_tmp= $_FILES['new'] ['tmp_name'] ;
$size = $_FILES['new'] ['size'] ;

	if ( in_array($f_type,$types)) 
	{
	if (move_uploaded_file($file_tmp ,'images/'.$image) )	
	{
		echo "sucesss <br> ";
		$new=$image;
	
	}
	else 
		$new='propic.png';
	}
	else 
		$image_find='propic.png';
}

			  $upQuery="update  primary_data set ".$_GET['state']." ='".$new."' where id=" .$id;
			  if ($qryuodate=mysqli_query($con,$upQuery)) 
				 		echo " <script>location.replace('index.php') </script> " ; 
			//header('location:profile.php');
		 
			  else 
				  echo "error " .mysqli_error($con);
			  
		  }

  
  }


	
?>


