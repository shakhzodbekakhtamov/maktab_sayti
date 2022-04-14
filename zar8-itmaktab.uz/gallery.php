
<?php
  
    require($_SERVER['DOCUMENT_ROOT'] . '/private/function.php');

    $search = $GLOBALS['pdo']->query("SELECT * FROM `news` WHERE id");

    $sear = new SearchNews();
    $searr = $sear -> searchs($_POST);
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
                      <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                      <li><a href="https://www.youtube.com/channel/UCfI_OmHpatdt04yHFCKCz1w"><i class='bx bxl-youtube'></i></a></li>
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
  <!--<div id="mu-search">-->
  <!--  <div class="mu-search-area">      -->
  <!--    <button class="mu-search-close"><span class="fa fa-close"></span></button>-->
  <!--    <div class="container">-->
  <!--      <div class="row">-->
  <!--        <div class="col-md-12">            -->
  <!--          <form class="mu-search-form">-->
  <!--            <input type="search" placeholder="Qidirmoqchi bo`lgan mavzuni kiriting...">              -->
  <!--          </form>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  <!-- End search box -->
 <!-- Start gallery  -->
<!--  <section id="mu-gallery">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-gallery-area">
         
          <div class="mu-title">
            <h2>Maktabimizdagi yangiliklar</h2>
            <p>Bu sahifada maktabimizda bo`layotgan barcha yangiliklardan xabardor etib boriladi va natijalarini bilishingiz mumkin</p>
          </div>

          <div class="mu-gallery-content">
            <div class="mu-gallery-body">
              <ul id="mixit-container" class="row">

                <li class="col-md-6 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="./assets/img/yangiliklar/suponova2.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>"Zakovat" haftaligi</h4>
                          <p>Abdulla Avloniy haftaligi munosabati bilan ona tili va adabiyot fani o'qituvchisi, ijodiy-madaniy masalalar bòyicha tarģibotchi D.Suponova tomonidan 6 - "G" sinf o'quvchilari bilan "Zakovat " intellektual o'yini o'tkazdi. O'quvchilar adibning hayoti va ijodi, asarlari, hikmatli sòzlari haqida bilimlarini sinovdan òtkazishdi.</p>
                          <a href="assets/img/gallery/big/1.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>                  
                    </div>
                  </div>
                </li>

               <li class="col-md-6 col-sm-6 col-xs-12 mix library">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="./assets/img/yangiliklar/suponova.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>"Zakovat"</h4>
                          <p>Abdulla Avloniy haftaligi munosabati bilan ona tili va adabiyot fani o'qituvchisi, ijodiy-madaniy masalalar bòyicha tarģibotchi D.Suponova tomonidan 6 - "G" sinf o'quvchilari bilan "Zakovat " intellektual o'yini o'tkazdi. O'quvchilar adibning hayoti va ijodi, asarlari, hikmatli sòzlari haqida bilimlarini sinovdan òtkazishdi.</p>
                          <a href="assets/img/gallery/big/2.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div> 
                    </div>
                  </div>
               </li>

                <li class="col-md-6 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="./assets/img/yangiliklar/rasm1.jpg" alt=""></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Abdulla Avloniy haftaligi</h4>
                          <p>2021 yil 5-oktabr kuni Abdulla Avloniy haftaligi munosabati bilan "Maktab-eng uliģ dargoh " mavzusida 4 -"B" sinf òquvchilari  G.Haqberdiyeva ustoz tomonidan ochiq dars soati òtkazildi. Darsda òquvchilar Abdulla Avloniy hayoti haqida, adibning asarlari, hikmatlari va baytlari mazmun mohiyati haqida tushunchaga ega bòldilar. Darsda turli metodlardan foydalanildi. Bundan tashqari 5 ta partiyaga bòlindi va nomlandi. </p>
                          <a href="assets/img/gallery/big/3.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="col-md-6 col-sm-6 col-xs-12 mix classroom">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="./assets/img/yangiliklar/rasm2.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Abdulla Avloniy haftaligi</h4>
                          <p>2021 yil 5-oktabr kuni Abdulla Avloniy haftaligi munosabati bilan "Maktab-eng uliģ dargoh " mavzusida 4 -"B" sinf òquvchilari  G.Haqberdiyeva ustoz tomonidan ochiq dars soati òtkazildi. Darsda òquvchilar Abdulla Avloniy hayoti haqida, adibning asarlari, hikmatlari va baytlari mazmun mohiyati haqida tushunchaga ega bòldilar. Darsda turli metodlardan foydalanildi. Bundan tashqari 5 ta partiyaga bòlindi va nomlandi. Savollarga tòģri javob bergan har bir partiya ovoz yiģdi, eng kòp ovoz tòplagan guruh ģolib deb topildi.</p>
                          <a href="assets/img/gallery/big/4.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="col-md-6 col-sm-6 col-xs-12 mix others">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="./assets/img/yangiliklar/qariyalar2.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>"Кексаларни эъзозлаш - эзгу фазилат" tadbiri</h4>
                          <p>Зарафшон шаҳар 8-сонли ИАТЧЎИД умумтаълим мактабда  "Кексаларни эъзозлаш уларга ҳурмат-эҳтиром кўрсатиш -халқимизга хос эзгу фазилат" деган ғоя остида 5-октябр куни маънавий-маърифий тадбир ташкил этилди. Тадбирга Зарафшон шаҳар ҳокимлик вакиллари, "Қурувчи" маҳалласида  ва шаҳримизда истиқомат қилаётган нуронийлар, нафақадаги устозлар ва ўқувчи ёшлар иштрок этди.</p>
                          <a href="assets/img/gallery/big/5.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="col-md-6 col-sm-6 col-xs-12 mix cafe">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="./assets/img/yangiliklar/qariyalar.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>"Кексаларни эъзозлаш - эзгу фазилат" tadbiri</h4>
                          <p>Зарафшон шаҳар 8-сонли ИАТЧЎИД умумтаълим мактабда  "Кексаларни эъзозлаш уларга ҳурмат-эҳтиром кўрсатиш -халқимизга хос эзгу фазилат" деган ғоя остида 5-октябр куни маънавий-маърифий тадбир ташкил этилди. Тадбирга Зарафшон шаҳар ҳокимлик вакиллари, "Қурувчи" маҳалласида  ва шаҳримизда истиқомат қилаётган нуронийлар, нафақадаги устозлар ва ўқувчи ёшлар иштрок этди.</p>
                          <a href="assets/img/gallery/big/6.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="col-md-6 col-sm-6 col-xs-12 mix others">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="./assets/img/yangiliklar/zakovat.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>"Zakovat"</h4>
                          <p>Zarafshon shahar 8-sonli IATCHOʻDIU maktabi kutubxonasida 2021-yil 25-sentabr kuni Boshlangʻich taʼlim fan oyligi doirasida 4-"G" sinf oʻquvchlari oʻrtasida Buyuk Sohibqiron Amir Temurhayoti va  bosib oʻtgan yoʻli yuzasidan zakovat intellektual oʻyini oʻtkazildi</p>
                          <a href="assets/img/gallery/big/7.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>             
                    </div>
                  </div> 
                </li>
                <li class="col-md-6 col-sm-6 col-xs-12 mix library">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="./assets/img/yangiliklar/zakovat2.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>"Zakovat"</h4>
                          <p>Zarafshon shahar 8-sonli IATCHOʻDIU maktabi kutubxonasida 2021-yil 25-sentabr kuni Boshlangʻich taʼlim fan oyligi doirasida 4-"G" sinf oʻquvchlari oʻrtasida Buyuk Sohibqiron Amir Temurhayoti va  bosib oʻtgan yoʻli yuzasidan zakovat intellektual oʻyini oʻtkazildi</p>
                          <a href="assets/img/gallery/big/8.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="col-md-6 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="./assets/img/yangiliklar/tafakkur2.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>Zarafshon shahar 8-son iformatika va axborot texnologiyalari chuqurlashtirib o‘qitishga ixtisoslashtirilgan davlat umumta’lim maktabining o‘quvchilari joriy yilning 22-sentabr kuni  3-umumiy o‘rta ta’lim maktabida o‘tkazilgan  “Tafakkur sinovlari” intellektual o‘yinlari  “Vazirlik kubogi” respublika turnirining shahar bosqichida ishtirok etib, faxrli 1-o‘rinni qo‘lga kiritdi. O‘quvchilarimizga viloyat bosqichida omad tilaymiz.</p>
                          <a href="assets/img/gallery/big/9.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>             
                    </div>
                  </div> 
                </li>
                <li class="col-md-6 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">   
                        <a href="#"><img alt="img" src="./assets/img/yangiliklar/tafakkur.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>"Tafakkur sinovlari" tanlovi</h4>
                          <p>Zarafshon shahar 8-son iformatika va axborot texnologiyalari chuqurlashtirib o‘qitishga ixtisoslashtirilgan davlat umumta’lim maktabining o‘quvchilari joriy yilning 22-sentabr kuni  3-umumiy o‘rta ta’lim maktabida o‘tkazilgan  “Tafakkur sinovlari” intellektual o‘yinlari  “Vazirlik kubogi” respublika turnirining shahar bosqichida ishtirok etib, faxrli 1-o‘rinni qo‘lga kiritdi. O‘quvchilarimizga viloyat bosqichida omad tilaymiz.</p>
                          <a href="assets/img/gallery/big/9.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>             
                    </div>
                  </div> 
                </li>
              </ul>            
            </div>
          </div>
         </div>
       </div>
     </div>
   </div>
 </section> -->

  <section id="mu-gallery">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-gallery-area">
         
          <div class="mu-title">
            <h2>Maktabimizdagi yangiliklar</h2>
            <p>Bu sahifada maktabimizda bo`layotgan barcha yangiliklardan xabardor etib boriladi va natijalarini bilishingiz mumkin</p>
          </div>

          <div class="mu-gallery-content">
            <div class="mu-gallery-body">
              <ul id="mixit-container" class="row">
                <?php while($search_new = $search -> fetch()): ?>
                <li class="col-md-6 col-sm-6 col-xs-12 mix" id="<?=strtolower(trim($search_new['title'])) ?>">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="./users/image/<?=$search_new['image']; ?>"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4><?=$search_new['title']; ?></h4>
                          <p><?=$search_new['text']; ?></p>
                          <a href="assets/img/gallery/big/1.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>                  
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
 <!-- End gallery  -->
 

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