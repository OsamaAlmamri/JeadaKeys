


<?php
include "conn.php" ;   
include "Header.php";
if(isset($_POST['sbmt'],$_POST['name'],$_POST['position'],$_POST['email'],$_POST['emerge'],$_POST['describtion'],$_POST['huor'],$_POST['mobile2'],$_POST['mobile']))
{

$image = $_FILES['fname'] ['name'] ;
$f_type= $_FILES['fname'] ['type'] ;
$file_tmp= $_FILES['fname'] ['tmp_name'] ;
$size = $_FILES['fname'] ['size'] ;
$types=array('image/jpeg','image/gif','image/png') ;
$name=mysqli_real_escape_string($con, strip_tags($_POST['name']));
		$position=mysqli_real_escape_string($con, strip_tags($_POST['position']));
		$huor=mysqli_real_escape_string($con, strip_tags($_POST['huor']));
		$describtion=mysqli_real_escape_string($con, strip_tags($_POST['describtion']));
		$emerge=mysqli_real_escape_string($con, strip_tags($_POST['emerge']));
		
	//	$password=md5($password.$salt);
		$email=mysqli_real_escape_string($con, strip_tags($_POST['email']));

		$mobile2=$_POST['mobile2'] ;
		$mobile=strip_tags($_POST['mobile']) ;
		
		
		
		
		        if(empty($name) || empty($email) || empty($huor) || empty($mobile))
                  echo  "All Fields Are Requierd"; 
   // alert("uuuuuuuuuuuuuu");
	           

         else  {
		 
	               if (mysqli_num_rows($qry) )
	                   echo " <script > alert('this user_name is used Please select anther user_name') ; </script>	 "  ;		              
				//  echo "this user_name is used Please select anther user_name " ;
			             
                   else {
			  
		if ( isset ($_FILES ) )
{
	if ( in_array($f_type,$types)) 
	{
		 $check="select * from primary_data where log='".$image."'";
    if ($qry=mysqli_query($con,$check)) 
	 if (mysqli_num_rows($qry) )
		       $image=$name.$image;

	if (move_uploaded_file($file_tmp ,'images/'.$image) )	
	
		$image_find=$image ;
	else 
		$image_find='';
	}
	
	else{
		echo "the type not allowed " ;
	$image_find='';
	}
	
}
	
		$sql= "insert into primary_data (name ,position,huor,email,phone1,phone2,log ,describtion,emerge)
		values ('$name','$position','$huor' ,'$email','$mobile','$mobile2','$image_find','$describtion','$emerge') ";

		if ($qry=mysqli_query($con,$sql) )
		{
				echo " <script>location.replace('index.php') </script> " ; 
			//header('location:login.php');
		}else{
			echo "error :".mysqli_error($con);
		}
}
			   }
}
?>


<div class="container-fluid content-wrapper">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="card card-container">
	
     

<br><br><br>
  <h2> <div class="card-header">اضافة البيانات</div></h2>
  <form class="form-horizontal" role="form" action="#" method=post enctype='multipart/form-data'>
  
   <div class="form-group">
      <label class="control-label col-sm-2" for="NAME">اسم الموقع  : </label>
      <div class="col-sm-10">
        <input type="text" name='name' class="form-control" id="NAME" placeholder="اسم الموقع">
      </div>
    </div>
	
	   <div class="form-group">
      <label class="control-label col-sm-2" for="position">الموقع: </label>
      <div class="col-sm-10">
        <input type="text" name='position' class="form-control" id="position" placeholder="مكان وموقع المحل">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">الايميل:</label>
      <div class="col-sm-10">
        <input type="email" name='email' class="form-control" id="email" placeholder="الايميل">
      </div>
    </div>
	

 
						
						 <div class="form-group">
                            <div id="divMobile" class="has-feedback">
                                <input type="tel" id="mobile" name="mobile" minlength="9" class="form-control input-lg"
                                       placeholder="رقم الهاتف الاول" >
                                <i class="fa fa-phone fa-lg form-control-feedback"></i>
                            </div>
                        </div>
						
	 <div class="form-group">
                            <div id="divMobile" class="has-feedback">
                                <input type="tel" id="mobile" name="mobile2" minlength="9" class="form-control input-lg"
                                       placeholder="رقم الهاتف البديل" >
                                <i class="fa fa-phone fa-lg form-control-feedback"></i>
                            </div>
                        </div>


<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">الخلفية:</label>
      <div class="col-sm-10">          
        <input type="file"  name='fname' class="form-control" id="pwd" >
      </div>
    </div>
	
	
	<div class="form-group">
  <label for="describtion">الوصف:</label>
  <textarea class="form-control" rows="5"  name ="describtion" id="describtion">
  الوصف الذي ياتي بعد اسم الموقع
  </textarea>
</div>
	
	
<br><br>

<div class="form-group">
  <label for="emerge">الحالات الطارئة:</label>
  <textarea class="form-control" rows="5"  name ="emerge" id="emerge">
 وصف الحالات الطارئة
  </textarea>
</div>
	
	
<br><br>


<div class="form-group">
  <label for="huor">ساعات العمل :</label>
  <textarea class="form-control" rows="5"  name ="huor" id="huor">
  وصف ساعات العمل
  </textarea>
</div>
	
	
<br><br>

  
    
	
	 <div class="form-group">
                            <div>
                                <div id="btn-up" class="btn-group">
                                    <button type="reset" id="reset" class="btn btn-default">تفريغ </button>
                                     <button type="submit" class="btn btn-default" name='sbmt' >ادخال</button>
                                </div>
                            </div>
                        </div>
  </form>
</div>

</div>
</div>
</div>


 
 

      
       


<?php



include "Footer.php";

?>