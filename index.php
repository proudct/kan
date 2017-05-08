<?php
session_start();

// connect to database
$db = mysqli_connect("localhost", "root", "", "kan");


// include_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home |PaiChillKan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">

        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">PaiChillKan</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                    	<h1><img src="images/5555.png" alt="logo"></h1>
                    </a>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">หน้าหลัก</a></li>
                        <li class="dropdown"><a href="place.html">สถานที่ท่องเที่ยว <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                              <li><a href="1.html">อุทยานแห่งชาติเขื่อนศรีนครินทร์ - น้ำตกห้วยแม่ขมิ้น</a></li>
                              <li><a href="2.html">อุทยานแห่งชาติทองผาภูมิ - เขาช้างเผือก</a></li>
                              <li><a href="3.html">น้ำตกไทรโยคใหญ่-น้ำตกไทรน้อย</a></li>
                              <li><a href="4.html">วัดถ้ำเสือ</a></li>
                              <li><a href="5.html">สะพานข้ามแม่น้ำแคว และทางรถไฟสายมรณะ</a></li>
                              <li><a href="6.html">สุสานทหารสัมพันธมิตรดอนรัก</a></li>
                              <li><a href="7.html">สังขละบุรี</a></li>
                              <li><a href="8.html">อุทยานแห่งชาติถ้ำธารลอด</a></li>
                              <li><a href="9.html">อุทยานแห่งชาติน้ำตกเอราวัณ</a></li>
                              <li><a href="10.html">ช่องเขาขาด</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="hotel.html">ที่พัก<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                              <li><a href="h1.html">เมือง</a></li>
                               <li><a href="h2.html">ไทรโยค</a></li>
                               <li ><a href="h3.html">สังขละบุรี</a></li>
                                <li><a href="h4.html">ทองผาภูมิ</a></li>
                                <li><a href="h5.html">เขื่อนศรีนครินทร์</a></li>
                                <li><a href="h6.html">อุทยาน</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="food.html">ร้านอาหาร <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                              <li><a href="ครัวชุกโดน.html">ครัวชุกโดน</a></li>
                              <li><a href="ครัวผักหวานบ้าน.html">ครัวผักหวานบ้าน</a></li>
                              <li><a href="ครัวออฟโรด.html">ครัวออฟโรด</a></li>
                              <li><a href="ร้านอ้อมตีนไก่.html">ร้านอ้อมตีนไก่</a></li>
                              <li><a href="@ชานชาลา.html">@ชานชาลา</a></li>
                              <li><a href="แพอาหารริมเขื่อน.html">แพอาหารริมเขื่อน</a></li>
                              <li><a href="แพมิตรสัมพันธ์.html">แพมิตรสัมพันธ์</a></li>
                              <li><a href="ร้านอาหารโรงแรมไทยเสรี.html">ร้านอาหารโรงแรมไทยเสรี</a></li>
                              <li><a href="ร้านอาหารสุดทางรัก.html">ร้านอาหารสุดทางรัก</a></li>
                              <li><a href="ร้านคีรีธารา.html">ร้านคีรีธารา</a></li>
                            </ul>
                        </li>

                        <li><a href="review.html">รีวิว</a></li>
                    </ul>
                </div>

    </header>



    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>กาญจนบุรี</h1>
                        <p>“แคว้นโบราณ ด่านเจดีย์ มณีเมืองกาญจน์ สะพานข้ามแม่น้ำแคว แหล่งแร่น้ำตก”</p>
                        <a href="register.php" class="btn btn-common">SIGN UP</a>
                        <a href="login.php" class="btn btn-common">LOG IN</a>
                    </div>
                    <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/pic/ต้นไม้.png" alt="">
                        </div>
                        <h2><font color = "#99FF66">ต้นไม้ประจำจังหวัด</h2></font>
                        <p>ต้นขานาง</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/pic/ตราประจำ.png" alt="">
                        </div>
                        <h2><font color = "#CC33FF">ตราประจำจังหวัด</h2></font>
                        <p>รูปเจดีย์สามองค์ทรงป้าน</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/pic/ดอกไม้.png" alt="">
                        </div>
                        <h2><font color = "#FF3399">ดอกไม้ประจำจังหวัด</h2></font>
                        <p>ดอกกาญจนิกา</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <!-- <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Triangle Corporate Template</h1>
                            <p>A responsive, retina-ready &amp; wide multipurpose template.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="#" class="btn btn-common">TAKE THE TOUR</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section> -->
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
              <div class="single-features">
                  <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <img src="images/1.png" class="img-responsive" alt="">

                  </div>
                  <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                      <h2>ลักษณะทางภูมิประเทศ</h2>
                      <P>พื้นที่ส่วนใหญ่ทางเหนือและตะวันตกเป็นผืนป่า มีเทือกเขาสลับซับซ้อนทางทิศตะวันตกทอดยาวเป็นแนวกั้นเขตชายแดนระหว่างไทยกับพม่า ทางใต้เป็นที่ราบลุ่มแม่น้ำแม่กลองที่มีความอุดมสมบูรณ์เหมาะแก่การเพาะปลูก</P>

                  </div>
              </div>

              <div class="single-features">
                  <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h2>สภาพภูมิอากาศ</h2>
                    <P>มีลักษณะร้อนชื้น มีอากาศร้อนอบอ้าวและร้อนจัดในช่วงเดือนเมษายน ฝนตกชุกในช่วงเดือนกันยายน และได้รับอิทธิพลความหนาวเย็นจากประเทศจีนแผ่ลงมาในช่วงกลางเดือนพฤศจิกายนถึงเดือนกุมภาพันธ์</P>

                  </div>

                  <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <!-- <img src="images/home/slider/house.png" class="img-responsive" alt=""> -->
                    <img src="images/2.png" class="img-responsive" alt="">

                  </div>
              </div>






                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/3.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>สถานที่ท่องเที่ยว</h2>
                        <P>กาญจนบุรีอุดมสมบูรณ์ไปด้วยพื้นที่ป่า เทือกเขา พรรณไม้ โถงถํ้า นํ้าตกและยังมีแม่นํ้าสายหลัก 2 สาย คือแม่นํ้าแควใหญ่ และแม่นํ้าแควน้อยที่ไหลมาบรรจบเป็น ‘แม่นํ้าแม่กลอง’ ณ ใจกลางเมือง แถมยังเป็นเมืองที่เต็มไปด้วยเรื่องราวในประวัติศาสตร์อีกด้วย ความที่จังหวัดกาญจนบุรี เป็นจังหวัดที่มีขนาดใหญ่ จึงทำให้เมืองกาญจนบุรีนี้ มีที่เที่ยวมากมายและหลากหลาย</P>
                       <a href="place.html" class="btn btn-common">อ่านเพิ่มเติม</a>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>ที่พัก</h2>
                        <P>ข้อมูลที่พักกาญจนบุรีในราคาโดนใจ ทั้งแบบราคาถูก แบบสวยหรู และหลากสไตล์ไปกับ โรงแรมในเมือง รีสอร์ทใกล้น้ำตก บ้านเป็นหลัง แพริมน้ำบรรยากาศธรรมชาติ พร้อมแผนที่</P>
                        <a href="hotel.html" class="btn btn-common">อ่านเพิ่มเติม</a>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/4.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/5.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>ร้านอาหาร</h2>
                        <P>เรารวบรวมร้านอาหารขึ้นชื่อ อร่อยขั้นเทพ รวมไปถึงร้านอาหารในตำนานของจังหวัดกาญจนบุรี. รวมไปถึงร้านอาหารอร่อยที่คนเมืองกาญจน์ยังแนะนำ</P>
                        <a href="food.html" class="btn btn-common">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--/#features-->




     <section id="team">
         <div class="container">
             <div class="row">
                 <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">ของดีเมืองกาญ</h1>
                 <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">หากมาจังหวัดกาญจนบุรีแล้ว ไม่ซื้อ เหมือนคุณมาไม่ถึงกาญจนบุรี</p>
                 <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                     <!-- Indicators -->
                     <ol class="carousel-indicators visible-xs">
                         <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                         <li data-target="#team-carousel" data-slide-to="1"></li>
                     </ol>
                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                         <div class="item active">
                             <div class="col-sm-3 col-xs-6">
                                 <div class="team-single-wrapper">
                                     <div class="team-single">
                                         <div class="person-thumb">
                                             <img src="images/gift/มะขามแก้ว.png" class="img-responsive" alt="">
                                         </div>
                                         <div class="social-profile">
                                             <ul class="nav nav-pills">
                                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="person-info">
                                    <a href="http://www.kaew.co.th/"><h2>มะขามแก้ว</h2></a>
                                         <!-- <p>CEO &amp; Developer</p> -->
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-xs-6">
                                 <div class="team-single-wrapper">
                                     <div class="team-single">
                                         <div class="person-thumb">
                                             <img src="images/gift/วุ้นเส้นท่าเรือ.png" class="img-responsive" alt="">
                                         </div>
                                         <div class="social-profile">
                                             <ul class="nav nav-pills">
                                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="person-info">
                                         <a href="https://www.facebook.com/%E0%B8%88%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B8%9B%E0%B8%A5%E0%B8%B5%E0%B8%81-%E0%B8%AA%E0%B9%88%E0%B8%87-%E0%B8%A7%E0%B8%B8%E0%B9%89%E0%B8%99%E0%B9%80%E0%B8%AA%E0%B9%89%E0%B8%99%E0%B8%97%E0%B9%88%E0%B8%B2%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B8%AD-%E0%B8%95%E0%B8%A3%E0%B8%B2%E0%B8%AA%E0%B8%B4%E0%B8%87%E0%B8%AB%E0%B9%8C%E0%B9%82%E0%B8%95-1502047806780630/"><h2>วุ้นเส้นท่าเรือ</h2></a>

                                         <!-- <p>CEO &amp; Developer</p> -->
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-xs-6">
                                 <div class="team-single-wrapper">
                                     <div class="team-single">
                                         <div class="person-thumb">
                                             <img src="images/gift/วุ้นมะพร้าวอ่อน.png" class="img-responsive" alt="">
                                         </div>
                                         <div class="social-profile">
                                             <ul class="nav nav-pills">
                                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="person-info">

                                         <a href="http://www.raanwimol.com/"><h2>วุ้นมะพร้าวอ่อน</h2></a>
                                         <!-- <p>CEO &amp; Developer</p> -->
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-xs-6">
                                 <div class="team-single-wrapper">
                                     <div class="team-single">
                                         <div class="person-thumb">
                                             <img src="images/gift/น้ำพริกแม่พะเยาว์.png" class="img-responsive" alt="">
                                         </div>
                                         <div class="social-profile">
                                             <ul class="nav nav-pills">
                                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="person-info">

                                         <a href="https://www.facebook.com/maepayaochillipaste/"><h2>น้ำพริกแม่พะเยาว์</h2></a>
                                         <!-- <p>CEO &amp; Developer</p> -->
                                     </div>
                                 </div>
                             </div>
                         </div>



                         <div class="item">
                             <div class="col-sm-3 col-xs-6">
                                 <div class="team-single-wrapper">
                                     <div class="team-single">
                                         <div class="person-thumb">
                                             <img src="images/gift/นกประดิษฐ์.png" class="img-responsive" alt="">
                                         </div>
                                         <div class="social-profile">
                                             <ul class="nav nav-pills">
                                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="person-info">

                                         <a href="http://www.thaitambon.com/shop/0211014949-%E0%B8%81%E0%B8%A5%E0%B8%B8%E0%B9%88%E0%B8%A1%E0%B8%AD%E0%B8%B2%E0%B8%8A%E0%B8%B5%E0%B8%9E%E0%B8%99%E0%B8%81%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%94%E0%B8%B4%E0%B8%A9%E0%B8%90%E0%B9%8C"><h2>นกประดิษฐ์</h2></a>
                                         <!-- <p>CEO &amp; Developer</p> -->
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-xs-6">
                                 <div class="team-single-wrapper">
                                     <div class="team-single">
                                         <div class="person-thumb">
                                             <img src="images/gift/ผ้าขาวม้าร้อยสี.png" class="img-responsive" alt="">
                                         </div>
                                         <div class="social-profile">
                                             <ul class="nav nav-pills">
                                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="person-info">

                                         <a href="http://www.otoptoday.com/wisdom/145/%E0%B8%9C%E0%B9%89%E0%B8%B2%E0%B8%95%E0%B8%B2%E0%B8%88%E0%B8%B1%E0%B8%81%E0%B8%9C%E0%B9%89%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%A1%E0%B9%89%E0%B8%B2%E0%B8%A3%E0%B9%89%E0%B8%AD%E0%B8%A2%E0%B8%AA%E0%B8%B5"><h2>ผ้าขาวม้าร้อยสี</h2></a>
                                         <!-- <p>CEO &amp; Developer</p> -->
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-xs-6">
                                 <div class="team-single-wrapper">
                                     <div class="team-single">
                                         <div class="person-thumb">
                                             <img src="images/gift/ผ้าไหมบาติก.png" class="img-responsive" alt="">
                                         </div>
                                         <div class="social-profile">
                                             <ul class="nav nav-pills">
                                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="person-info">
                                      <a href="http://www.thaitambon.com/shop/01111813941-%E0%B8%A8%E0%B8%B9%E0%B8%99%E0%B8%A2%E0%B9%8C%E0%B8%A8%E0%B8%B4%E0%B8%A5%E0%B8%9B%E0%B8%AB%E0%B8%B1%E0%B8%95%E0%B8%96%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%9C%E0%B9%89%E0%B8%B2%E0%B9%84%E0%B8%AB%E0%B8%A1%E0%B8%9A%E0%B8%B2%E0%B8%95%E0%B8%B4%E0%B8%81"><h2>ผ้าไหมบาติก</h2></a>

                                         <!-- <p>CEO &amp; Developer</p> -->
                                     </div>
                                 </div>
                             </div>


                             <div class="col-sm-3 col-xs-6">
                                 <div class="team-single-wrapper">
                                     <div class="team-single">
                                         <div class="person-thumb">
                                             <img src="images/gift/อัญมณี.png" class="img-responsive" alt="">
                                         </div>
                                         <div class="social-profile">
                                             <ul class="nav nav-pills">
                                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="person-info">
                                        <a href="http://www.kitirinjewelry.com/"><h2>อัญมณี</h2></a>

                                         <!-- <p>CEO &amp; Developer</p> -->
                                     </div>
                                 </div>
                             </div>
                           </div>





                     <!-- Controls -->
                     <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                     <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
                 </div>
             </div>
         </div>
     </section>
     <!--/#team-->






    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Review</h1>



        <section id="blog" class="padding-top padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="masonery_area">
                        <div class="col-md-3 col-sm-4">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="https://pantip.com/topic/33750051"><img src="images/re/1.png" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">15 <br><small>Jun</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-tag"></i>สังขละบุรี</a></li>
                                    </ul>
                                    <h2 class="post-title bold"><a href="https://pantip.com/topic/33750051">เพราะใจมันเซ เลยหนีไปสังขละ </a></h2>
                                    <!-- <h3 class="post-author"><a href="#">Posted by micron News</a></h3> -->
                                    <!-- <p>หลายคนชอบพูดว่า " ใจมันเซ ทะเลคือจุดหมาย " ... แต่เราไม่ใช่ เบื่อแล้วทะเล ( เป็นคนระยองฮิ ) เลยอยากหนีไปที่ไหนซักที่ ที่มันไกลๆ ไปแบบอยู่กับตัวเอง ไปคิด ไปทบทวน ไปร้องไห้แล้วลืมเรื่องเห้ๆในชีวิต ...</p> -->
                                    <a href="https://pantip.com/topic/33750051" class="read-more">อ่านเพิ่มเติม</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <!-- <li><a href="#"><i class="fa fa-heart"></i>Love</a></li> -->
                                            <li><a href="comment.php"><i class="fa fa-comments"></i>Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-4">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="https://th.readme.me/p/1206"><img src="images/re/2.png" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="https://th.readme.me/p/1206">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="https://th.readme.me/p/1206"><i class="fa fa-tag"></i>สังขละบุรี</a></li>
                                    </ul>
                                    <h2 class="post-title bold"><a href="https://th.readme.me/p/1206">ครั้งหนึ่ง. . . ที่สังขละบุรี </a></h2>
                                    <!-- <h3 class="post-author"><a href="#">Posted by micron News</a></h3> -->
                                    <!-- <p>ผมก็เป็นมนุษย์เงินเดือนคนหนึ่งหละครับ เงินเดือนก็ไม่ได้มีอะไรมากมายกับใครเขา แต่ฝันที่อยากจะออกไปท่องเที่ยว เจอธรรมชาติที่กว้างใหญ่ . . . .  ไปไหนทั้งทีก้ต้องวางแผนกันแบบบ้าพลังหา ขบวนการวิธีไปแบบประหยัดที่สุด</p> -->
                                      <a href="https://th.readme.me/p/1206" class="read-more">อ่านเพิ่มเติม</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <!-- <li><a href="#"><i class="fa fa-heart"></i>Love</a></li> -->
                                            <li><a href="comment1.php"><i class="fa fa-comments"></i>Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="https://th.readme.me/p/1206"><img src="images/re/3.png" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="https://th.readme.me/p/1206">20 <br><small>May</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-tag"></i>กาญจบุรี</a></li>
                                    </ul>
                                    <h2 class="post-title bold"><a href="https://th.readme.me/p/5153">นั่งรถไฟฟรีไปเมืองกาญ </a></h2>
                                    <!-- <h3 class="post-author"><a href="#">Posted by micron News</a></h3> -->
                                    <!-- <p>กาญจนบุรี เป็นอีกจังหวัดที่มะนาวหลงรัก ตั้งแต่ครั้งเปิดตัวการเขียนรีวิวครั้งแรก เรื่อง...ไปรถไฟฟรี ไปชมวิวรถไฟสายมรณะไปโดดน้ำที่แพริเวอร์แควจังเกิ้ลราฟท์

ไปใช้ชีวิต Slow Life ไปใช้ชีวิตแบบไม่มีไฟฟ้ากัน!</p> -->
                                    <a href="https://th.readme.me/p/5153" class="read-more">อ่านเพิ่มเติม</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <!-- <li><a href="#"><i class="fa fa-heart"></i>Love</a></li> -->
                                            <li><a href="comment2.php"><i class="fa fa-comments"></i>Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="https://th.readme.me/p/3955"><img src="images/re/4.png" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="https://th.readme.me/p/3955">10 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                     <ul class="nav nav-justified post-nav">
                                        <li><a href="https://th.readme.me/p/3955"><i class="fa fa-tag"></i>สังขละบุรี</a></li>
                                    </ul>
                                    <h2 class="post-title bold"><a href="https://th.readme.me/p/3955">สังขละบุรี ถิ่นน่ารัก</a></h2>
                                    <!-- <h3 class="post-author"><a href="#">Posted by micron News</a></h3> -->
                                    <!-- <p>เอาบรรยากาศสังขละบุรี ช่วงปลายเดือนพฤศจิกา มาให้ชมค่ะ .. อากาศเริ่มเย็นลงเรื่อยๆ .. สังขละบุรี ก็เหมือนมีมนต์สะกดมากขึ้นเรื่อยๆ ... </p> -->
                                    <a href="https://th.readme.me/p/3955" class="read-more">อ่านเพิ่มเติม</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <!-- <li><a href="#"><i class="fa fa-heart"></i>Love</a></li> -->
                                            <li><a href="comment3.php"><i class="fa fa-comments"></i>Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>




<div>
     <a href="review.html" class="btn btn-common">อ่านเพิ่มเติม</a>
</div>

                         </center>

                      </div>
                  </div>
                </div>

                </section>
    <!--/#clients-->




    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

  </body>
  </html>
