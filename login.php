<?php
	session_start();
	// connect to database
	$db = mysqli_connect("localhost", "root", "", "kan");
	if (isset($_POST['login_btn'])) {
		$username = mysql_real_escape_string($_POST['user_name']);
		$password = mysql_real_escape_string($_POST['password']);
		$password = md5($password); // remember we hashed password before storing last time
		$sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['user_name'] = $username;
			header("location: index.php"); //redirect to home page
		}else{
			$_SESSION['message'] = "Username/password combination incorrect";
		}
	}
?>
<!DOCTYPE html>
<html>
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
</head>

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



		<?php
			if (isset($_SESSION['message'])) {
				echo "<div id='error_msg'>".$_SESSION['message']."</div>";
				unset($_SESSION['message']);
			}

		?>


<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>

					<div class="form-group">
						<label for="name">User Name</label>
						<input type="text" name="user_name" placeholder="User Name" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>

					<div class="form-group">
							<input type="submit" name="login_btn" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
		New User? <a href="register.php">Sign Up Here</a>
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
