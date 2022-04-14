<?php
    
    require($_SERVER['DOCUMENT_ROOT'] . '/private/function.php');
    auth();


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">    
		<title>Zarafshon 8-maktab</title>

		<!-- Favicon -->
		<!-- <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"> -->

		<!-- Font awesome -->
		<link href="/assets/css/font-awesome.css" rel="stylesheet">
		<!-- Box icon  -->
		<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
		<!-- Bootstrap -->
		<link href="/assets/css/bootstrap.css" rel="stylesheet">   
		<!-- Slick slider -->
		<link rel="stylesheet" type="text/css" href="/assets/css/slick.css">          
		<!-- Fancybox slider -->
		<link rel="stylesheet" href="/assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
		<!-- Theme color -->
		<link id="switcher" href="/assets/css/theme-color/default-theme.css" rel="stylesheet">          

		<!-- Main style sheet -->
		<link href="/assets/css/style.css" rel="stylesheet">    


		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
	    h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
	    (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
	    })(window,document.documentElement,'optimize-loading','dataLayer',1000,
	    {'GTM-XXXXXX':true});</script>

  	</head>
  	<body> 
	  	<!--START SCROLL TOP BUTTON -->
	    <a class="scrollToTop" href="#">
	      <i class="fa fa-angle-up"></i>      
	    </a>
	  	<!-- END SCROLL TOP BUTTON -->

	  	<!-- Start header  -->
		<header id="mu-header">
		    <div class="container">
		      <div class="row">
		        <div class="col-lg-12 col-md-12">
		          <div class="mu-header-area">
		            <div class="row">
		              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		                <div class="mu-header-top-left">
		                  <div class="mu-top-email">
		                    <i class="fa fa-envelope"></i>
		                    <span>zar8maktab@mail.ru</span>
		                  </div>
		                  <div class="mu-top-phone">
		                    <i class="fa fa-phone"></i>
		                    <span>+998 79 573 26 59</span>
		                  </div>
		                </div>
		              </div>
		              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		                <div class="mu-header-top-right">
		                  <nav>
		                    <!-- kontaklar uchun -->
		                    <ul class="mu-top-social-nav">
		                      <li><a href="https://t.me/joinchat/28iFVOZKjfoyMmFi"><i class='bx bxl-telegram'></i></a></li>
		                      <li><a href="https://www.facebook.com/zarafshonshahar.sakkizinchimaktab"><i class='bx bxl-facebook-circle'></i></a></li>
		                      <li><a href="https://youtube.com/channel/UCfI_OmHpatdt04yHFCKCz1w"><i class='bx bxl-youtube'></i></a></li>
		                    </ul>
		                  </nav>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		</header>
		  <!-- End header  -->
		  <!-- Start menu -->
		<section id="mu-menu">
		    <nav class="navbar navbar-default" role="navigation">  
		      <div class="container">
		        <div class="navbar-header">
		          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Mobil uchun</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <!-- LOGO -->              
		          <!-- TEXT BASED LOGO -->
		          <a class="navbar-brand" href="/"><span>zar8maktab</span></a>
		          <!-- IMG BASED LOGO  -->
		          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
		            <li class="active"><a href="/">Asosiy</a></li> 
		            <?php if(isset($_COOKIE['uslog']) and isset($_COOKIE['uspass'])): ?>                             
		            <?php echo "<li><a href='admin.php'>Admin</a></li>"; ?>
		            <?php endif; ?>                                    
		            <li><a href="/gallery.php">Yangiliklar</a></li>           
		            <li><a href="/contact.php">Bog`lanish</a></li>            
		            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
		          </ul>                     
		        </div><!--/.nav-collapse -->        
		      </div>     
		    </nav>
		</section>
	  	<!-- End menu -->
		<p><a href="news.php">Yangiliklar qo'shish</a></p>
		<p><a href="contact.php">Xabarlarni ko'rish</a></p>
		<p><a href="teachers.php">O'qituvchi qo'shish</a></p>
		<p><a href="/">Asosiy sahifaga qaytish</a></p>

		<!-- <footer id="mu-footer">
		    <div class="mu-footer-bottom">
		      <div class="container">
		        <div class="mu-footer-bottom-area">
		          <p>&copy; Barcha huquqlar himoyalangan <a href="index.html" rel="nofollow">Zar8Maktab</a></p>
		        </div>
		      </div>
		    </div>
		</footer> -->
		<!-- End footer -->

		<!-- jQuery library -->
		<script src="/assets/js/jquery.min.js"></script>  
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/assets/js/bootstrap.js"></script>   
		<!-- Slick slider -->
		<script type="text/javascript" src="/assets/js/slick.js"></script>
		<!-- Counter -->
		<script type="text/javascript" src="/assets/js/waypoints.js"></script>
		<script type="text/javascript" src="/assets/js/jquery.counterup.js"></script>  
		<!-- Mixit slider -->
		<script type="text/javascript" src="/assets/js/jquery.mixitup.js"></script>
		<!-- Add fancyBox -->        
		<script type="text/javascript" src="/assets/js/jquery.fancybox.pack.js"></script>


		<!-- Custom js -->
		<script src="/assets/js/custom.js"></script> 

  	</body>
</html>