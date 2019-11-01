<?php

include "conn.php" ;

include "Header.php";
if ($con)
{
	
  if (isset($_GET['id'])) 
  {    
      $sql= "select * from links where id=" .$_GET['id'];
	 

	     if($qry=mysqli_query($con,$sql))
	    {
		  if (mysqli_num_rows($qry) )
		   {
			   $bllog=mysqli_fetch_array($qry) ;
			   
			   
			 echo "  <div class='container-fluid content-wrapper'>
    <div class='row'>
        <div class='col-md-6 col-md-offset-3'>
            <div class='card card-container'>
		  <br><br>
  <h2> <div class='card-header'>تعديل الرابط</div></h2>
  <form class='form-horizontal' role='form'  method=post enctype='multipart/form-data'>
  
	
	<div class='form-group'>
      <label class='control-label col-sm-2' for='NAME'> </label>
      <div class='col-sm-10'>
        <input type='text' name='Name' class='form-control' value='".$bllog['name']."' id='NAME' placeholder='اسم الموقع او رقم الهاتف'>
      </div>
    </div>
	
	 <div class='form-group'>
      <label class='control-label col-sm-2' for='tittle'> </label>
      <div class='col-sm-10'>
        <input type='text' name='tittle' value='".$bllog['link']."' class='form-control' id='tittle' placeholder='الرابط او رقم الهاتف'>
      </div>
    </div>
		<div class='form-group'>
  <label for='sel1'>نوع الرابط</label>
  <select class='form-control' id='sel1' name='type' value='".$bllog['type']."'>
     <option value ='site'  select> موقع </option>
	 <option value ='phone' > رقم تلفون </option>
	  <option value ='email' > بريد الكتروني</option>
  </select>
</div>
   
	<div class='form-group'>
      <label class='control-label col-sm-2'  for='pwd'>شعار الموقع:</label>
      <div class='col-sm-10'>          
        <input type='file'  name='fname'  value='".$bllog['image']."' class='form-control' id='pwd' >
      </div>
    </div>
  
  
	
	
  
    <div class='form-group'>        
      <div class='col-sm-offset-2 col-sm-10'>
        <button type='submit' class='btn btn-default' name='sbmt' >update </button>
      </div>
    </div>
  </form>
</div>
</div> </div></div>
";
		 
		   }
		

$types=array('image/jpeg','image/gif','image/png') ;
if ( isset ($_FILES ) )
{
	
	  @$image = $_FILES['fname'] ['name'] ;
@$f_type= $_FILES['fname'] ['type'] ;
@$file_tmp= $_FILES['fname'] ['tmp_name'] ;
@$size = $_FILES['fname'] ['size'] ;

	if ( in_array($f_type,$types)) 
	{
	if (move_uploaded_file($file_tmp ,'images/'.$image) )	
	{
		echo "sucesss <br> ";
		$image_find=$image;
	
	}
	else 
		$image_find=$bllog['image'];
	}
	else 
		$image_find=$bllog['image'];
}
	if (@$_POST['Name']=="")
		$Name=$bllog['name'];
	else
		$Name=$_POST['Name'];
		   
		   if (@$_POST['link']=="")
		$link=$bllog['link'];
	else
		$link=$_POST['link'];
		   
		  if ( isset($_POST['sbmt']))
		  {
			  $upQuery="update links set name='".strip_tags($Name)."',link='".strip_tags($link)."', image='".$image_find."'  where id =".$_GET['id'] ;
			  if ($qryuodate=mysqli_query($con,$upQuery)) 
				//  header ('Location:select_bllog.php') ;
				echo " <script>location.replace('index.php') </script> " ; 
			  else 
				  echo "error " .mysqli_error($con);
			  
		  }
		  
	    }
	
	
  }
}
else
echo "no connection" ;	


include "footer.php";


?>
