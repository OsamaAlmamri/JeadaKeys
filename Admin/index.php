
  
  
  <?php
 //<a href="mailto:alklecker@example.com">
 //<meta name="format-detection" content="telephone=no">
 //<meta http-equiv="x-rim-auto-match" content="none">
 //<a href="tel:+18005551212">Call us free at (800) 555-1212</a>
include "header.php" ;
include "conn.php" ;
?>

  <?php
  
  
  

  
  
  
  
  
  
  
  
  
  // المنشورات
  
  
  
  
  
  
if ($con) 
	{
		$sql="select * from  post " ;
		$result=mysqli_query($con,$sql) ;
		$count=mysqli_affected_rows($con) ;
			echo $count;
			
			
			
			echo "<div style='margin-top: 50px;'>
				 <div class='container'>
				<div class='text-primary' style='padding: 5px 0px 5px 0px; margin-top: -25px;'>
            <h1 class='text-center'>المنشورات   </h1>
        </div>
  
  
  
             <div class='table-responsive'>  
  <table class='table'>
    <thead>
      <tr class='success'>
	  <th>id</th>
       
      <th>العنوان</th>
	    
		<th>تاريخ النشر</th>
		<th>الشرح</th>
		<th>الصورة</th>
      </tr>
    </thead>
  <tbody> 
	" ;
			$color=0;
			while ( $row=mysqli_fetch_array($result))
{
	$color++;
	if (	$color%2==0 )
		$c='danger';
	else 
		$c='info';
	
	
		echo "<tr  class='".$c."' > <td>". $row['id'] ."</td> <td>"  
		.$row['tittle'] ."</td> <td>" 
.$row['date'] ."</td> <td>" 		
    .$row['text'] ."</td> 
	
	<td>
	  
    
  
      <a  class='thumbnail'>
        <img src='images/".$row['image']."'  width='84' height='13'>
      </a>
   
   
  
  </td>
	" ;
		
		echo " <td> <a class='btn btn-success'  href='updatePost.php?id=".$row['id']."'> تعديل </a> </td>" ;
		echo " <td> <a class='btn btn-danger' href='delete.php?col=post &id=".$row['id']."'> حذف </a> </td> </tr>" ;
	}

			echo "  </tbody>
  </table>
</div></div> " ;
			

	
	}
	
	else 
		
	echo " ERROR ON CONNECTION " ;
	
	echo "<a href='addPost.php'>   <input type='button' class='btn-default btn-block' value='اضف منشور'> </a>" ;
	//echo "<a href='logout.php'>   <input type='button' class='btn-default btn-block' value='LOGOUT'> </a>" ;
echo"</div></div> </div> ";












  
  
  
  
  
  
  
  // الخدمات
  
  
  
  	if ($con) 
	{
		$sql="select * from  service " ;
		$result=mysqli_query($con,$sql) ;
		$count=mysqli_affected_rows($con) ;
			echo $count;
			
			
			
			echo "<div style='margin-top: 50px;'>
				 <div class='container'>
				<div class='text-primary' style='padding: 5px 0px 5px 0px; margin-top: -25px;'>
            <h1 class='text-center'>الخدمات   </h1>
        </div>
  
  
  
             <div class='table-responsive'>  
  <table class='table'>
    <thead>
      <tr class='success'>
	  <th>id</th>
       
  
	    <th>شرح الخدمة </th>
		
		<th>رمز الخدمة</th>
      </tr>
    </thead>
  <tbody> 
	" ;
			$color=0;
			while ( $row=mysqli_fetch_array($result))
{
	$color++;
	if (	$color%2==0 )
		$c='danger';
	else 
		$c='info';
	
	
		echo "<tr  class='".$c."' > <td>". $row['id'] ."</td> <td>"  
    .$row['text'] ."</td> 
	<td>
	  
    
  
      <a  class='thumbnail'>
        <img src='images/".$row['log']."'  width='84' height='13'>
      </a>
   
   
  
  </td>
	" ;
		
		echo " <td> <a class='btn btn-success'  href='update_service.php?id=".$row['id']."'> تعديل </a> </td>" ;
		echo " <td> <a class='btn btn-danger' href='delete.php?col=service &id=".$row['id']."'> حذف </a> </td> </tr>" ;
	}

			echo "  </tbody>
  </table>
</div></div> " ;
			

	
	}
	
	else 
		
	echo " ERROR ON CONNECTION " ;
	
	echo "<a href='add_service.php'>   <input type='button' class='btn-default btn-block' value='اضف خدمة جديدة'> </a>" ;
	//echo "<a href='logout.php'>   <input type='button' class='btn-default btn-block' value='LOGOUT'> </a>" ;
echo"</div></div> </div> ";












// الروابط

if ($con) 
	{
		$sql="select * from  links " ;
		$result=mysqli_query($con,$sql) ;
		$count=mysqli_affected_rows($con) ;
			echo $count;
			
			
			
			echo "<div style='margin-top: 50px;'>
				 <div class='container'>
				<div class='text-primary' style='padding: 5px 0px 5px 0px; margin-top: -25px;'>
            <h1 class='text-center'>الروابط وارقام الهواتف   </h1>
        </div>
  
  
  
             <div class='table-responsive'>  
  <table class='table'>
    <thead>
      <tr class='success'>
	  <th>id</th>
       
  
	    <th>اسم الموقع  </th>
		 <th>الرابط   </th>
		
		<th>شعار الموقع </th>
      </tr>
    </thead>
  <tbody> 
	" ;
			$color=0;
			while ( $row=mysqli_fetch_array($result))
{
	$color++;
	if (	$color%2==0 )
		$c='danger';
	else 
		$c='info';
	
	
		echo "<tr  class='".$c."' > <td>". $row['id'] ."</td> <td>"  
		.$row['name'] ."</td> <td>" 
    .$row['link'] ."</td> 
	<td>
	  
    
  
      <a  class='thumbnail'>
        <img src='images/".$row['image']."'  width='84' height='13'>
      </a>
   
   
  
  </td>
	" ;
		
		echo " <td> <a class='btn btn-success'  href='updatelink.php?id=".$row['id']."'> تعديل </a> </td>" ;
		echo " <td> <a class='btn btn-danger' href='delete.php?col=links &id=".$row['id']."'> حذف </a> </td> </tr>" ;
	}

			echo "  </tbody>
  </table>
</div></div> " ;
			

	
	}
	
	else 
		
	echo " ERROR ON CONNECTION " ;
	
	echo "<a href='addlink.php'>   <input type='button' class='btn-default btn-block' value='اضف رابط جديد'> </a>" ;
	//echo "<a href='logout.php'>   <input type='button' class='btn-default btn-block' value='LOGOUT'> </a>" ;
echo"</div></div> </div> ";






// اتصل بناء 

if ($con) 
	{
		$sql="select * from  concat " ;
		$result=mysqli_query($con,$sql) ;
		$count=mysqli_affected_rows($con) ;
			echo $count;
			
			
			
			echo "<div style='margin-top: 50px;'>
				 <div class='container'>
				<div class='text-primary' style='padding: 5px 0px 5px 0px; margin-top: -25px;'>
            <h1 class='text-center'>اتصل بناء   </h1>
        </div>
  
  
  
             <div class='table-responsive'>  
  <table class='table'>
    <thead>
      <tr class='success'>
	  <th>id</th>
       
  
	    <th>المرسل  </th>
		 <th>الربيد الالكتروني   </th>
		
		<th>الموضوع </th>
		<th>الرسالة </th>
		<th>تاريخ الارسال </th>
		<th>تحديد كمقروة </th>
      </tr>
    </thead>
  <tbody> 
	" ;
			$color=0;
			while ( $row=mysqli_fetch_array($result))
{
	$color++;
	if (	$color%2==0 )
		$c='danger';
	else 
		$c='info';
	
	
		echo "<tr  class='".$c."' > <td>". $row['id'] ."</td> <td>"  
		.$row['name'] ."</td> <td>" 
		.$row['email'] ."</td> <td>" 
		.$row['tittle'] ."</td> <td>" 
		.$row['text'] ."</td> <td>" 
		.$row['date'] ."</td> <td>"   ;
		 if ($row['reple'] ==0)
					echo ("لم يتم الرد ") ;	
		  else 
			  echo ("تم الرد") ;	
	 echo "</td> 
	
	" ;
	  if($row['reple']==1)
		echo " <td  > <a class='btn btn-primary  ' href='reple.php?id=".$row['id']."'> تحدييد كغير مقروة </a> </td>";
     else
     echo " <td > <a class='btn btn-primary  ' href='reple.php?id=".$row['id']."'> تحديد كمقروئة </a> </td>";	

// <a href="mailto:alklecker@example.com">
		
		echo " <td> <a class='btn btn-success'  href='mailto:".$row['email']."'> رد  </a> </td>" ;
		echo " <td> <a class='btn btn-danger' href='delete.php?col=concat &id=".$row['id']."'> حذف </a> </td> </tr>" ;
	}

			echo "  </tbody>
  </table>
</div></div> " ;
			

	
	}
	
	else 
		
	echo " ERROR ON CONNECTION " ;
	
	echo "<a href='addlink.php'>   <input type='button' class='btn-default btn-block' value='اضف رابط جديد'> </a>" ;
	//echo "<a href='logout.php'>   <input type='button' class='btn-default btn-block' value='LOGOUT'> </a>" ;
echo"</div></div> </div> ";









// الروابط

if ($con) 
	{
		$sql="select * from  primary_data " ;
		$result=mysqli_query($con,$sql) ;
		$count=mysqli_affected_rows($con) ;
			echo $count;
			
			
			
			echo "<div style='margin-top: 50px;'>
				 <div class='container'>
				<div class='text-primary' style='padding: 5px 0px 5px 0px; margin-top: -25px;'>
            <h1 class='text-center'>المعلومات الاساسية للموقع  </h1>
        </div>
  
  
  
             <div class='table-responsive'>  
  <table class='table'>
    <thead>
      <tr class='success'>
	  <th>اسم البيانات</th>
       
  
	    <th>الوصف </th>
		
      </tr>
    </thead>
  <tbody> 
	" ;
			
			while ( $row=mysqli_fetch_array($result))
{
	
	
	  echo "
	  
	  <tr class='danger'> <td> اسم الموقع </td>   <td>". $row['name'] ."</td>    <td> <a class='btn btn-success'  href='updateData.php?state=name &id=".$row['id']."'> تعديل </a> </td> </tr>
	  <tr class='info'> <td>  الوصف تحت اسم الموقع  </td>  <td>". $row['describtion'] ."</td>  <td> <a class='btn btn-success'   href='updateData.php?state=describtion & id=".$row['id']."'> تعديل </a> </td>  </tr>
	  <tr class='danger'> <td>   خلفية الموقع </td>  <td> <a  class='thumbnail'>  <img src='images/".$row['log']."'  width='84' height='13'>  </a> </td>   <td> <a class='btn btn-success'  href='updateData.php?state=log & id=".$row['id']."'> تعديل </a> </td></tr>
	  <tr class='info'>  <td> الرقم  </td>     <td>". $row['phone1'] ."</td>   <td> <a class='btn btn-success'   href='updateData.php?state=phone1 & id=".$row['id']."'> تعديل </a> </td></tr>
      <tr class='danger'> <td>  الرقم البديل </td>    <td>". $row['phone2'] ."</td>   <td> <a class='btn btn-success'   href='updateData.php?state=phone2 & id=".$row['id']."'> تعديل </a> </td> </tr> 	  
	  <tr class='info'> <td>   الايميل </td>    <td>". $row['email'] ."</td>  <td> <a class='btn btn-success'   href='updateData.php?state=email & id=".$row['id']."'> تعديل </a> </td> </td>
	  <tr class='danger'> <td> موقع المحل  </td>  <td>". $row['position'] ."</td>   <td> <a class='btn btn-success'  href='updateData.php?state=position & id=".$row['id']."'> تعديل </a> </td> </tr>
	  <tr class='info'> <td>  الحالات الطارئة </td>  <td>". $row['emerge'] ."</td>  <td> <a class='btn btn-success'   href='updateData.php?state=emerge & id=".$row['id']."'> تعديل </a> </td></tr>
	  <tr class='danger'> <td> ساعات العمل </td>  <td>". $row['huor'] ."</td>    <td> <a class='btn btn-success'  href='updateData.php?state=huor & id=".$row['id']."'> تعديل </a> </td></tr>
	 
	  
	  ";
	
	}

			echo "  </tbody>
  </table>
</div></div> " ;
			

			if ($count==0)
	echo "<a href='Data.php'>   <input type='button' class='btn-default btn-block' value='للاسف لقد تم فقد جميع بيانات الموق انقر هنا للاضافة من جديد'> </a>" ;
	
	}
	
	else 
		
	echo " ERROR ON CONNECTION " ;
	
	//echo "<a href='logout.php'>   <input type='button' class='btn-default btn-block' value='LOGOUT'> </a>" ;
echo"</div></div> </div> ";






?>


































  
  
  
  
  <!--service-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">خدماتنا</h2>
          <hr class="botm-line">
          <p>
محل مفاتيح وبرمجة ريموتات السيارة بقسمين ثابت ومتنقل 
نغطي جميع مناطق مدينة جدة و ضواحيها</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              
              <p>فتح جميع انواع السيارات </p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              
              <p>استخراج وتوليف المفتاح المقود للسيارة سواء  مفتاح عادي او ريموت بصمة </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              
              <p>جميع اجهزة برمجة مفاتيح السيارات </p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>ملاحظة</h4>
              <p> يلزم تسجيل بيانات العميل عند فتح وعمل مفتاح للسيارة </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ service-->
  <!--cta-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>الحالات الطارئة </h3>
              <p> اتص بناء من اي مكان من مدينة جدة او ضواحيها ناتيك في اي وقت تريد </p>
             
            </div>
          </div>
		  
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>ساعات العمل</h3>
                 <p>دوام على مدى 24 ساعة  </p>
           
            </div>
          </div>
	
		  <!--
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>ساعات العمل</h3>
                 <p>دوام على مدى 24 ساعة  </p>
            </div>
          </div>
		  	  -->
        </div>
      </div>
    </div>
  </section>
  <!--cta-->
 
  <!--doctor team-->
  <section id="lastNews" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">اخر الاحداث </h2>
          <hr class="botm-line">
        </div>
		
		
		
		
		
		
		
		
		
        <div class="col-md-6 col-sm-6 col-xs-16">
          <div class="thumbnail">
		  <div class="caption">
              <h3>Jessica Wally</h3>
              <div class="card-footer small text-muted">Posted 1 hr ago</div>
              
            </div>
            <img src="29341563_2000638376855463_1282994003_n.jpg" style="width: 400px ;height:400px; " alt="..." class="team-img">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              
			  <div class="card-footer small text-muted">Posted 1 hr ago</div>
          </div>
        </div>
		
		 <div class="col-md-6 col-sm-6 col-xs-16">
          <div class="thumbnail">
		  <div class="caption">
              <h3>Jessica Wally</h3>
              <p>Doctor</p>
              
            </div>
            <img src="img/doctor1.jpg" alt="..." class="team-img">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              
			  
          </div>
        </div>
		
		
       <!--
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor4.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jason Davis</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
		-->
      </div>
    </div>
  </section>
  <!--/ doctor team-->
  <!--testimonial-->
  
  <!--/ testimonial-->
  <!--cta 2-->
   
  
  <!--cta-->
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">اتصل بنا</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>معلومات الاتصال </h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>321 Awesome Street<br> New York, NY 17022</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@companyname.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>0568191921</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">هل لديك اي سؤال او استفسار</h3>
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="اسمك" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="الايميل" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="الموضوع" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="من فضلك اكتب  رسالتك هنا" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">ارسال  الرسالة</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->

  <?php

include "footer.php" ;

?>