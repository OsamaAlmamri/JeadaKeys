<?php
include "conn.php" ;   
include "Header.php";
if(isset($_POST['sbmt']) )
{


	
		$text=strip_tags($_POST['text']) ;
	
		$image_find=$image;
		

if ( isset ($_FILES ) )
{
	  @$image = $_FILES['fname'] ['name'] ;
@$f_type= $_FILES['fname'] ['type'] ;
@$file_tmp= $_FILES['fname'] ['tmp_name'] ;
@$size = $_FILES['fname'] ['size'] ;



$types=array('image/jpeg','image/gif','image/png') ;

	
		
			if ( isset ($_FILES ) )
{
	if ( in_array($f_type,$types)) 
	{
		 $check="select * from service where log='".$image."'";
    if ($qry=mysqli_query($con,$check)) 
	 if (mysqli_num_rows($qry) )
		       $image=$name.$image;

	if (move_uploaded_file($file_tmp,'images/'.$image) )	
	
		$image_find=$image ;
	else 
		$image_find='';
	}
	
	else{
		echo "the type not allowed " ;
	$image_find='';
	}
}
	
}
		
		$sql= "insert into service (log,text) 
		values ('$image_find','$text') ";

		if ($qry=mysqli_query($con,$sql) )
		{
						  	echo " <script>location.replace('index.php') </script> " ; 
		//	header('location:select_bllog.php');
		}else{
			echo "error :".mysqli_error($con);
		}

}

?>



<div class='container-fluid content-wrapper'>
    <div class='row'>
        <div class='col-md-6 col-md-offset-3'>
            <div class='card card-container'>
	
     
 <h2> <div class="card-header">اضف خدمة جديدة</div></h2>
  <form class="form-horizontal" role="form" action="#" method=post enctype='multipart/form-data'>
  	
	<div class='form-group'>
  <label for='comment'>الشرح:</label>
  <textarea class='form-control' rows='5'  name='text'  id='text'  ></textarea>
</div>
   
	<div class='form-group'>
      <label class='control-label col-sm-2' for='pwd'>الصورة:</label>
      <div class='col-sm-10'>          
        <input type='file'  name='fname'  class='form-control' id='pwd' >
      </div>
    </div>
  
  
	
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name='sbmt' >Submit</button>
      </div>
    </div>
  </form>
</div>


</div>
</div>
</div>





