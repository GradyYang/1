<?php session_start(); ?>
<html>
<head>
<title>Choose a clinic</title>
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
<link rel="stylesheet" href="css/swipebox.css">
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
<!--gallery-starts--> 
<div class="treatments">
	<div class="container">
		<h3 class="tittle">Clinic</h3> 		
			<script src="js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
			</script>
				<div class="view view-sixth">
                    <a href="appointment1.php"><img src="images/1.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h4>Internal Medicine</h4>
                        <p>The branch of medicine that deals with the diagnosis and treatment of diseases of the internal organs.</p>
                    </div></a>
                </div>
                <div class="view view-sixth">
                    <a href="appointment2.php"><img src="images/2.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h4>Skin Department</h4>
                        <p>The branch of medicine that deals with the diseases of the skin.</p>
                    </div></a>
                </div>
                <div class="view view-sixth">
                    <a href="appointment3.php"><img src="images/3.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h4>ENT Department</h4>
                        <p>The branch of medicine that deals with the diseases of the ears,noses and throats .</p>
                    </div></a>
                </div>
				<div class="view view-sixth">
                    <a href="appointment4.php"><img src="images/4.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h4>Traumatology Department</h4>
                        <p>The branch of medicine that deals with the diseases or hurts on the body</p>
                    </div></a>
                </div>
                <div class="view view-sixth">
                    <a href="appointment5.php"><img src="images/5.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h4>Pediatric Department</h4>
                        <p>The branch of medicine that deals with the diseases of the children.</p>
                    </div></a>
                </div>
				<div class="view view-sixth">
                    <a href="appointment6.php"><img src="images/6.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h4>Orthopedics Department</h4>
                        <p>The branch of medicine that change patients' appearences.</p>
                    </div></a>
                </div>
				<div class="view view-sixth">
                    <a href="appointment7.php"><img src="images/7.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h4>Psychiatry Department</h4>
                        <p>The branch of medicine that deals with the mental problems.</p>
                    </div></a>
                </div>
				<div class="view view-sixth">
                    <a href="appointment8.php"><img src="images/8.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h4>Ophthalmology Department</h4>
                        <p>The branch of medicine that deals with the diseases of the eyes.</p>
                    </div></a>
                </div>
                <div class="view view-sixth">
                    <a href="appointment9.php"><img src="images/9.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h4>Stomatology Department</h4>
                        <p>The branch of medicine that deals with the problems of the mouth cavity.</p>
                    </div></a>
                </div>
                
				<div class="clearfix"></div>
	</div>
</div>
<!--gallery-ends--> 
<!-- contact -->

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