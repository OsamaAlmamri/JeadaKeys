<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> 0568191921 محل مفاتيح في مدينة جدة </title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Medilab
    Theme URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
       ,<!--       <a class="navbar-brand" href="#"><img src="29020185_2000639150188719_475697670_n.jpg" class="img-responsive" style="width:50px ; height:50px;  margin-top: -16px;"></a> -->
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">الرئيسة</a></li>
                <li class=""><a href="#service">الخدمات </a></li>
          
                <li class=""><a href="#lastNews">اخر الاخبار</a></li>
                <li class=""><a href="#contact">اتصل بنا</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
            <!--  <img style="width: 140px;" src="29020185_2000639150188719_475697670_n.jpg" class="img-responsive">  -->
            </div>
            <div class="banner-text text-center">
              <h1 class="white">محل مفاتيح في جدة </h1>
              <p> محل مفاتيح وبرمجة ريموتات السيارة بقسمين ثابت ومتنقل </p>
			  <p> نغطي جميع مناطق مدينة جدة و ضواحيها  </p>
              <a href="#contact" class="btn btn-appoint">0568191921</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  
  
  
  
  <?php

include "Admin/conn.php" ;
?>

  <?php
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
       
  
	    <th>text</th>
		
		<th>image</th>
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
		
		echo " <td> <a class='btn btn-success'  href='update_bllog.php?id=".$row['id']."'> تعديل </a> </td>" ;
		echo " <td> <a class='btn btn-danger' href='delete_bllog.php?id=".$row['id']."'> حذف </a> </td> </tr>" ;
	}

			echo "  </tbody>
  </table>
</div></div> " ;
			

	
	}
	
	else 
		
	echo " ERROR ON CONNECTION " ;
	
	echo "<a href='add_bllag.php'>   <input type='button' class='btn-default btn-block' value='اضف خدمة جديدة'> </a>" ;
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
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
        
          
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </footer>
  <!--/ footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
