<html>
<body>
Welcome <?php echo $_POST["fname"]; ?>!<br>
You are <?php echo $_POST["age"]; ?> years old.
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
	echo "all input<br>";
	if(isStrLength($id,8,8)==TRUE and isNumber($id) == true)
	{}
	else{echo "wrong input of id<br>";exit('Failed <a href="javascript:history.back(-1);">back</a>');  }
	if(isNumber($phone) == true)
	{}
	else{echo "wrong input of phone<br>";exit('Failed <a href="javascript:history.back(-1);">back</a>');  }
	if(isNumber($age) == true)
	{}
	else{echo "wrong input of age<br>";exit('Failed <a href="javascript:history.back(-1);">back</a>');  }
	echo '<a href="clinic.php"><input type="button"  value = "continue" /></a>';
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
echo $passwordErr , ' ' ,$nameErr;
?>

<?php

/*$id = $_POST["fid"];
$name = $_POST["fname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$address = $_POST["faddress"];
$phone = $_POST["fphone"];
$password = $_POST["fpassword"];*/
$dbhost = 'localhost:3306';  //mysql服务器主机地址
   $dbuser = 'root';      //mysql用户名
   $dbpass = 'xiong1995';//mysql用户名密码
   $dbname = 'mydb';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO patient (id,name,age,gender,address,phone,password)
VALUES ('$id', '$name', '$age', '$gender' , '$address' , '$phone' , '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
</body>
</html> 