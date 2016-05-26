<?php session_start(); ?>
<html>
<head>
<title>My Appointment</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medi Cure Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- toggle menu links -->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- //menu links -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<!-- effect9 links -->
<link href="css/ihover.css" rel="stylesheet" media="all">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
</head>
<!-- slide-toggle-menu -->
<body class="cbp-spmenu-push">
       <!--top-header-->
		<!--bottom-->
		
		<section class="button">
					<button id="showLeftPush"><img src="images/menu.png" alt=""></button>
		   </section>
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
				<h3>Menu</h3>
						<a href="clinic.php" class="active">CLINIC</a>
						<a href="about.html">ABOUT</a>
						<a href="myappointment.php">APPOINTMENT</a>
						<a href="information.html">Doc Information</a>
		    </nav>
		  
		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
<!-- banner -->
<div class="banner page-head">
	<div class="logo">
		<h1><a href="index.html">IT-Crowd</a></h1>
	</div>
	<div class="search">		
		<h5><?php echo $_SESSION['id'].' '.$_SESSION['name']; ?> </h5> 
	</div>
	
	
</div>
<!-- //banner -->
<!-- blog -->

<!-- //blog -->
<!-- contact -->
<div class="contact-home">
	<div class="map-home">
				<iframe src="http://www.google.cn/maps/embed?pb=!1m14!1m12!1m3!1d6622.099296049747!2d126.63788674218571!3d45.74613822049616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-CN!2scn!4v1464180064559"></iframe>
		<div class="map-pos">
			<div class="login-pad">
				<h2>Your Appointment</h2>
				<br>
				<?php
					$id = $_POST['request'] ;
					$type = $_POST['submit'];
					//echo $id . ' '. $type;
					echo '<h3>Do you want to '.$type.' this appointment</h3>';
		$patient_id = $_SESSION['id'];
		$patient_name = $_SESSION['name'];
		
		if ($_SESSION['id'] == $patient_id )
		{
			$dbhost = 'localhost:3306';  //mysql服务器主机地址
   $dbuser = 'root';      //mysql用户名
   $dbpass = 'xiong1995';//mysql用户名密码
   $dbname = 'mydb';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql1 = "SELECT * FROM request where id = '$id'";
$check_query1 = mysqli_query($conn,$sql1); 
$result1 = mysqli_fetch_array($check_query1);
$doctor_id = $result1['doctor_id'];
$date_prefer = $result1['date_prefer'];
$sql2 = "SELECT * FROM doctor where id = '$doctor_id'";
$check_query = mysqli_query($conn,$sql2); 
$result = mysqli_fetch_array($check_query);   
$doc_name = $result['name'];	
	
      
} 
else {   
    exit('Failed <a href="javascript:history.back(-1);">back</a>');  
}  



	
	echo '<h4>Details of appointment</h4>';
	echo "<h4>ID:     $patient_id </h4>";
	echo "<h4>Name:   $patient_name </h4>";
	echo "<h4>Doc_ID:   $doctor_id </h4>";
	echo "<h4>Doc Name: $doc_name </h4>";
	echo "<h4>date:   $date_prefer </h4>";
	
 

$conn->close();
					if ($type == 'Change') //update
					{
						$_SESSION['request'] = $id; 
						?><a href="clinic.php"><input type="button" name = "button1" value = "Confirm" /></a><?php
					}
					else   //delete
					{
						$_SESSION['request'] = $id; 
						?><a href="delete.php"><input type="button" name = "button1" value = "Confirm" /></a><?php
						
					}
				
				?>
				<br>
				<br>
				<br>
				<h2><a href="javascript:history.back(-1);">back</a></h2>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //contact -->
<!-- copy-right -->
<div class="copy-right">
	<div class="container">
		<p>Copyright &copy; 2016.IT Crowd. All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
	</div>
</div>
<!-- //copy-right -->
<!-- Bootstrap core JavaScript-->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="js/bootstrap.js"></script>
	<!-- js -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>