<?php session_start(); ?>
<html>
<head>
<title>Sign up</title>
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
// define variables and set to empty values
$nameErr = $idErr = $genderErr = $addressErr = $phoneErr = $ageErr = $passwordErr = 0;
$name = $id = $gender = $address = $phone = $age = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["fname"]))
     {$nameErr = 1;}
   else
     {$name = test_input($_POST["fname"]);}
  
   if (empty($_POST["fid"]))
     {$idErr = 1;}
   else
     {$id = test_input($_POST["fid"]);}
    
   if (empty($_POST["faddress"]))
     {$addressErr = "";}
   else
     {$address = test_input($_POST["faddress"]);}

   if (empty($_POST["fphone"]))
     {$phoneErr = 1;}
   else
     {$phone = test_input($_POST["fphone"]);}

   if (empty($_POST["gender"]))
     {$genderErr = 1;}
   else
     {$gender = test_input($_POST["gender"]);}
 
   if (empty($_POST["age"]))
     {$ageErr = 1;}
   else
     {$age = test_input($_POST["age"]);}
 
   if (empty($_POST["fpassword"]))
     {$passwordErr = 1;}
   else
     {$password = test_input($_POST["fpassword"]);}
} 
if($nameErr + $idErr + $genderErr +  $phoneErr + $ageErr + $passwordErr != 0)
{
	echo "Some input cann't be null<br>";
	exit('Failed <a href="javascript:history.back(-1);">back</a>');  
}
else
{
	if(isStrLength($id,8,8)==TRUE and isNumber($id) == true)
	{}
	else{echo "<h2>Wrong input of id<br></h2>";exit('Your Signup Failed <a href="javascript:history.back(-1);"><h2>BACK</h2></a>');  }
	if(isNumber($phone) == true)
	{}
	else{echo "<h2>Wrong input of phone<br></h2>";exit('Your Signup Failed <a href="javascript:history.back(-1);"><h2>BACK</h2></a>');  }
	if(isNumber($age) == true)
	{}
	else{echo "<h2>Wrong input of age<br></h2>";exit('Your Signup Failed <a href="javascript:history.back(-1);"><h2>BACK</h2></a>');  }
	include ("connect.php");
	$sql0 = 'SELECT *
        FROM patient WHERE id = $id';
		/*echo $id .'   '. $pwd;*/
$check_query = mysqli_query($conn,"select name from patient where id='$id'");  
if($result = mysqli_fetch_array($check_query)){ 
	echo "<h2>You have Signed up before.<br></h2>";exit('Your Signup Failed <a href="javascript:history.back(-1);"><h2>BACK</h2></a>');
	$conn->close();		}	
else
{	echo '<a href="clinic.php"><input type="button"  value = "continue" /></a>';
	$conn->close();}
}


function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
  function isStrLength($val, $min, $max) 
  { 
    $theelement= trim($val); 
    if(preg_match("/^[a-zA-Z0-9]{".$min.",".$max."}$/",$val)) 
      return true; 
    return false; 
  } 
    function isNumber($val) 
  { 
    if(preg_match("/^[0-9]+$/", $val)) 
      return true; 
    return false; 
  } 
   function isEnglish($theelement) 
  { 
    if( preg_match("/[\x80-\xff]./",$theelement) ) 
    { 
      Return false; 
    } 
    Return true; 
  } 
?>

<?php
include ("connect.php");
$sql = "INSERT INTO patient (id,name,age,gender,address,phone,password)
VALUES ('$id', '$name', '$age', '$gender' , '$address' , '$phone' , '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Sign up successfully";
	$_SESSION['id'] = $id;
	$_SESSION['name'] = $name;
	$_SESSION['request'] = -1;
	
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
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