
<html>
<head>
<title>Log in</title>
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
<!-- banner -->
<div class="banner page-head">
	<div class="logo">
		<h1><a href="index.html">IT-Crowd</a></h1>
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
				<h2>Welcome to IT-Crowd System</h2>

					<?php
	include  ("connect.php");
	$id = htmlspecialchars($_POST['username']);
	$pwd = $_POST["password"];

	$sql = 'SELECT *
        FROM patient WHERE id = $id';
		/*echo $id .'   '. $pwd;*/
$check_query = mysqli_query($conn,"select name from patient where id='$id' and password='$pwd' limit 1");  
if($result = mysqli_fetch_array($check_query)){  
    //µÇÂ¼³É¹¦  
    session_start();  
    $_SESSION['id'] = $id;  
    $_SESSION['name'] = $result['name']; 
	$_SESSION['request'] = -1; 
$name = $result['name'];	
	echo '<h2>Hello<br></h2>';// . $id .  $result["name"] . '<br>';
  //  echo '<a href="clinic.php"><input type="button"  value = "continue" /></a>';
      
} else {   
    exit('Failed <a href="javascript:history.back(-1);">back</a>');  
}  

$conn->close();
?>
			 <h2><?php echo $id; ?></h2>
			  <h2><?php echo $name; ?><br></h2>
			  <?php echo '<a href="clinic.php"><input type="button"  value = "continue" /></a>';?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //contact -->
<!-- copy-right -->
<div class="copy-right">
	<div class="container">
		<p>Copyright &copy; 2016.IT Crowd. All rights reserved.</p>
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