<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("kan");
error_reporting(0);
$dbLink = mysql_connect("localhost","root","");
    mysql_query("SET character_set_client=utf8", $dbLink);
    mysql_query("SET character_set_connection=utf8", $dbLink);
session_start();
if($_GET["Action"] == "Save")
{
	// Get Username from Database with UserID
	$QueryUsername = "SELECT * FROM users WHERE id = '".$_SESSION['id']."' ";
	$ResultUsername = mysql_query($QueryUsername);
	$ResultUsername2 =  mysql_fetch_array($ResultUsername);
	//*** Insert Topic ***//
	$strSQL = "INSERT INTO commenttable3 ";
	$strSQL .="(name,comment) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_SESSION["user_name"]."','".$_POST["comment"]."') ";
	$objQuery = mysql_query($strSQL);

			header("location:comment3.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>รีวิว |PaiChillKan</title>
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



    <div id="header" class="">
    	<!-- <div id="cabeza" class="navegador">
    		<div class="caja">
    			<div class="logo">
    			<div class="collapse navbar-collapse" id="navbar1">
    			<a href="index.php"><img src="http://www.orztoon.co/wp-content/themes/grifus/images/logo.png" alt="" /></a> -->
    			<ul class="nav navbar-nav navbar-right">

            <li><a><font color = "#969696"><?php echo $_SESSION['user_name'];  ?></font></a></li>
    				<li><a href="register.php"><font color = "#969696">Sign Up</font></a></li>
            <li><a href="login.php"><font color = "#969696">Log In</font></a></li>
            	<li><a href="logout.php"><font color = "#969696">Log  Out</font></a></li>
    			</ul>
    		</div>

    			</div>
    		</div>
    		<div style="clear:both;"></div>
    			</div>
    </div>




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




   <section id="blog" class="padding-top">
       <div class="container">
           <div class="row">
             <div class="col-md-3 col-sm-4">
                 <div class="single-blog two-column">
                     <div class="post-thumb">
                         <a href="blogdetails.html"><img src="images/re/4.png" class="img-responsive" alt=""></a>
                         <div class="post-overlay">
                            <span class="uppercase"><a href="#">10 <br><small>Feb</small></a></span>
                         </div>
                     </div>
                     <div class="post-content overflow">
                         <ul class="nav nav-justified post-nav">
                             <li><a href="กาญจนบุรี.html"><i class="fa fa-tag"></i>กาญจบุรี</a></li>
                         </ul>
                         <h2 class="post-title bold"><a href="https://th.readme.me/p/5153">นั่งรถไฟฟรีไปเมืองกาญ </a></h2>
                         <!-- <h3 class="post-author"><a href="#">Posted by micron News</a></h3> -->
                       <p>กาญจนบุรี เป็นอีกจังหวัดที่มะนาวหลงรัก ตั้งแต่ครั้งเปิดตัวการเขียนรีวิวครั้งแรก เรื่อง...ไปรถไฟฟรี ไปชมวิวรถไฟสายมรณะไปโดดน้ำที่แพริเวอร์แควจังเกิ้ลราฟท์

ไปใช้ชีวิต Slow Life ไปใช้ชีวิตแบบไม่มีไฟฟ้ากัน!</p>
                         <a href="https://th.readme.me/p/5153" class="read-more">อ่านเพิ่มเติม</a>
                         <div class="post-bottom overflow">
                             <ul class="nav nav-justified post-nav">
                                 <!-- <li><a href="#"><i class="fa fa-heart"></i>Love</a></li> -->
                                 <li><a href="comment3.php"><i class="fa fa-comments"></i>Comments</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="container">
                <div class="column">
                  <div class="col-md-6 col-md-offset-0 well" style="background-color:#afafa3">
              <form action="comment3.php?Action=Save" method="POST">
              <table>
              <legend><font color = "#e2f20c">Comment</font></legend>
              <tr><td><label for="name" >Name : <?php echo $_SESSION["user_name"]; ?></td></tr>
              <tr><td colspan="2"><br><label for="name" >Comment : </label></td></tr>
              <tr><td colspan="5"><textarea name="comment" rows="5" cols="60"></textarea></td></tr>
              <tr><td colspan="2"><br><input type="submit" name="submit" value="Comment"></td></tr>
              </table>
              </form>
              </div>
              </div><div class="container" >
                  <div class="row">
                    <div class="col-md-6 col-md-offset-0 well" style="background-color:#afafa3">
                <?php
                $dbLink = mysql_connect("localhost","root","");
                    mysql_query("SET character_set_results=utf8", $dbLink);
                    mb_language('uni');
                    mb_internal_encoding('UTF-8');

                $getquery=mysql_query("SELECT * FROM commenttable3 ORDER BY id DESC");
                while($rows=mysql_fetch_assoc($getquery))


                {
                $id=$rows['id'];
                $name=$rows['name'];
                $comment=$rows['comment'];
                echo $name .' :'. '<br/>' . '<br/>' . $comment . '<br/>' . '<br/>' . '<hr size="1"/>'
                ;}
                ?>
                </div>
                </div>
                </div>
              </div>
      </div>
    </div>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

        </body>
        </html>
        <?php
        mysql_close($objConnect);
        ?>
