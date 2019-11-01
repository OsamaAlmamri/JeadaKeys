<?php
include "conn.php" ;   
include "Header.php";
if(isset($_POST['sbmt'] ,$_POST['tittle'] ,$_POST['name'] ))
{
    		$type=strip_tags($_POST['type']);
	$name=strip_tags($_POST['name']);
	
	
	$tittle=strip_tags($_POST['tittle']) ;
		$image_find=$image;
			$time = date("D- y/m/j  h-i-s ") ;

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
		 $check="select * from post  where image='".$image."'";
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
		
		$sql= "insert into links (name,link,type,image) 
		values ('$name','$tittle','$type','$image_find') ";

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
	
     <br>
     <br>
 <h2> <div class="card-header">اضف رابط او رقم هاتف او بريد </div></h2>
 <br>
     <br>
  <form class="form-horizontal" role="form" action="#" method=post enctype='multipart/form-data'>
  	
	<div class="form-group">
      <label class="control-label col-sm-2" for="NAME"> </label>
      <div class="col-sm-10">
        <input type="text" name='name' class="form-control" id="NAME" placeholder="اسم الموقع او رقم الهاتف">
      </div>
    </div>
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="tittle"> </label>
      <div class="col-sm-10">
        <input type="text" name='tittle' class="form-control" id="tittle" placeholder="الرابط او رقم الهاتف">
      </div>
    </div>
		<div class="form-group">
  <label for="sel1">نوع الرابط</label>
  <select class="form-control" id="sel1" name='type'>
     <option value ="site" > موقع </option>
	 <option value ="phone" > رقم تلفون </option>
	  <option value ="email" > بريد الكتروني</option>
  </select>
</div>
   
	<div class='form-group'>
      <label class='control-label col-sm-2' for='pwd'>شعار الموقع:</label>
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





