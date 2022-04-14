<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/private/function.php');
  $sear = new SearchNews();
  $searr = $sear -> searchs($_POST);
  
  $search = $GLOBALS['pdo']->query("SELECT * FROM `teachers` WHERE id");
  
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
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Box icon  -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
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
            <li class="active"><a href="index.php">Asosiy</a></li> 
            <?php if(isset($_COOKIE['uslog']) and isset($_COOKIE['uspass'])): ?>                             
            <?php echo "<li><a href='users/admin.php'>Admin</a></li>"; ?>
            <?php endif; ?>                                    
            <li><a href="gallery.php">Yangiliklar</a></li>           
            <li><a href="contact.php">Bog`lanish</a></li>            
            <li><form method="post"><input type="search" name="search" textarea = "Qidiruv..."><input type="submit" value="Search"></form></li>
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Qidirmoqchi bo`lgan mavzuni kiriting...">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/maktab.jpg" alt="img">
        </figure>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>Sifatli ta`lim</h3>
              <p>Farzandlaringizga yuqori bilimli va katta tajribaga ega o`qituvchilar ta`lim berishi kafolatlanadi!</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Malakali o`qituvchilar</h3>
              <p>Yuqori bilim, tajriba va pedagogik ko`nikmalarga ega malakali o`qituvchilar ta`lim berishi kafolatlanadi!</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-table"></span>
              <h3>Zamonaviy sinf xonalari</h3>
              <p>Yaqinda ta`mirlangan eng zamonaviy va barcha qulayliklarga ega maktabda ta`lim olish kafolati!</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>Biz haqimizda</h2>              
                  </div>
                  <!-- End Title -->
                  <p>Zarafshon shahar 8-IATCHO`DUmaktabi haqida qisqacha:</p>
                  <ul>
                    <li>Eng zamonaviy o`quv qurollari va texnologiyalari bilan jihozlangan</li>
                    <li>Informatika va axborot texnologiyalarini o`rgatishga iqtisoslashtirilgan</li>
                    <li>Yuqori sifatli ta`lim va katta tajribaga ega o`qituvchilar jamoasi</li>
                    <li>Qo`shimcha to`garak va mashg`ulotlar</li>
                  </ul>
                  <p>Hozirgi kundagi Axborot texnologiyalari rivojlanayotgan davrda barcha qulayliklarga ega zamonaviy maktabda ta`lim olishni taklif etamiz!</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                  <a href="https://youtu.be/Lo6v4dYBEDY">
                    <img src="assets/img/maktab rasm.jpg" alt="img">
                  </a>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <div class="row">
              <!-- Start counter item -->
              <div class="col-lg-4 col-md-4 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-book"></span>
                  <h4 class="counter">100</h4>
                  <p>KURSLAR</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-4 col-md-4 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-users"></span>
                  <h4 class="counter">1200</h4>
                  <p>O`QUVCHILAR</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-4 col-md-4 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class='bx bxs-user-pin'></span>
                  <h4 class="counter">150</h4>
                  <p>O`QITUVCHILAR</p>
                </div>
              </div>
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->

  <!-- Start features section -->
  <section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Imkoniyatlarimiz</h2>
              <p>Yangitdan rekonstruksiya qilingan barcha zamonaviy o`quv qurollariga ega maktabimizning imkoniyatlari va xususiyatlari</p>
            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-book"></span>
                    <h4>Qo`shimcha kurslar</h4>
                    <p>Maktabdan bo`sh vaqtlarida qo`shimcha kurslar va mashg`ulotlar. Bo`sh o`zlashtirayotganlar bilan ishlash va qo`shimcha mashg`ulotlar</p>
                    <a href="#">Ko`proq biling</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-users"></span>
                    <h4>Malakali o`qituvchilar</h4>
                    <p>Yuqori malakaga ega o`qituvchi va murabbiylar jamoasi. Respublika va viloyat bosqichlaridagi tanlovlarda munosib ishtirok etgan ustozlar jamoasi</p>
                    <a href="#">Ko`proq biling</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-laptop"></span>
                    <h4>Onlayn ta`lim</h4>
                    <p>Ma`lum sabablarga maktabga kelmagan o`quvchilar uchun qolib ketgan darslarni o`z vaqtida o`zlashtirish uchun onlayn darslar orqali o`zlashtirish</p>
                    <a href="#">Ko`proq biling</a>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- End features content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End features section -->

  <!-- Start our teacher -->
  <section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2>Malakali o`qituvchilarimiz</h2>
              <p>Ko`p yillik tajribasi mobaynida O`zbekiston miqyosida e`tirof etilgan ustoz va murabbiylar jamoasi</p>
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <div class="row">
                <?php while($search_t = $search -> fetch()): ?>
                <div class="col-lg-3 col-md-3  col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="./users/image/teachers/<?=$search_t['image']; ?>" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="https://t.me/joinchat/28iFVOZKjfoyMmFi"><i class='bx bxl-telegram'></i></a>
                        <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                        <a href="#"><i class='bx bxl-youtube'></i></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4><?=$search_t['first_name'],$search_t['last_name'] ?></h4>
                      <span><?=$search_t['subject'] ?></span>
                      <p><?=$search_t['other_information'] ?></p>
                    </div>
                  </div>
                </div>
                <!--<div class="col-lg-3 col-md-3 col-sm-6">-->
                <!--  <div class="mu-our-teacher-single">-->
                <!--    <figure class="mu-our-teacher-img">-->
                <!--      <img src="" alt="teacher img">-->
                <!--      <div class="mu-our-teacher-social">-->
                <!--        <a href="https://t.me/joinchat/28iFVOZKjfoyMmFi"><i class='bx bxl-telegram'></i></a>-->
                <!--        <a href="#"><i class='bx bxl-facebook-circle'></i></a>-->
                <!--        <a href="#"><i class='bx bxl-youtube'></i></a>-->
                <!--      </div>-->
                <!--    </figure>                    -->
                <!--    <div class="mu-ourteacher-single-content">-->
                <!--      <h4>Familiyasi Ismi</h4>-->
                <!--      <span>Fani</span>-->
                <!--      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-3 col-sm-6">-->
                <!--  <div class="mu-our-teacher-single">-->
                <!--    <figure class="mu-our-teacher-img">-->
                <!--      <img src="assets/img/teachers/teacher-03.png" alt="teacher img">-->
                <!--      <div class="mu-our-teacher-social">-->
                <!--        <a href="https://t.me/joinchat/28iFVOZKjfoyMmFi"><i class='bx bxl-telegram'></i></a>-->
                <!--        <a href="#"><i class='bx bxl-facebook-circle'></i></a>-->
                <!--        <a href="#"><i class='bx bxl-youtube'></i></a>-->
                <!--      </div>-->
                <!--    </figure>                    -->
                <!--    <div class="mu-ourteacher-single-content">-->
                <!--      <h4>Familiyasi ismi</h4>-->
                <!--      <span>Fani</span>-->
                <!--      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-3 col-sm-6">-->
                <!--  <div class="mu-our-teacher-single">-->
                <!--    <figure class="mu-our-teacher-img">-->
                <!--      <img src="assets/img/teachers/teacher-04.png" alt="teacher img">-->
                <!--      <div class="mu-our-teacher-social">-->
                <!--        <a href="https://t.me/joinchat/28iFVOZKjfoyMmFi"><i class='bx bxl-telegram'></i></a>-->
                <!--        <a href="#"><i class='bx bxl-facebook-circle'></i></a>-->
                <!--        <a href="#"><i class='bx bxl-youtube'></i></a>-->
                <!--      </div>-->
                <!--    </figure>                    -->
                <!--    <div class="mu-ourteacher-single-content">-->
                <!--      <h4>Familiyasi ismi</h4>-->
                <!--      <span>Fani</span>-->
                <!--      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>-->
                <!--    </div>-->
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
            </div> 
            <!-- End our teacher content -->           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End our teacher -->

  <!-- Start testimonial -->
  <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-testimonial-area">
            <div id="mu-testimonial-slide" class="mu-testimonial-content">
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-1.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Familiyasi ismi</h4>
                  <span>Ota ona</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-3.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Familiyasi ismi</h4>
                  <span>Ota ona</span><html xmlns</html>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-2.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Familiyasi ismi</h4>
                  <span>Ota ona</span>
                </div>
              </div>
              <!-- end testimonial single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial -->

  <!-- Start from blog -->

  <!-- End from blog -->

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; Barcha huquqlar himoyalangan <a href="index.html" rel="nofollow">Zar8Maktab</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>