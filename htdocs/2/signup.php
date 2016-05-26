
<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?php
/*session_start();
if(isset($_POST['password']) && $_POST['password'] == 'admin'){
    $_SESSION['ok'] = 1;
    header('location:?');
}
if(!isset($_SESSION['ok'])){
    exit('
        <form method="post">
            密码：<input type="password" name="password" />
            <input type="submit" value="登陆" />
        </form>
		
    ');
}*/
?>



<form action="signup2.php" method="post">
ID: <input type="text" name="fid"><br>
Name: <input type="text" name="fname"><br>
Age: <input type="text" name="age"><br>
Gender:
<input type="radio" name="gender" value=1>Female
<input type="radio" name="gender" value=2>Male<br>
Address: <input type="text" name="faddress"><br>
Phone: <input type="text" name="fphone"><br>
Password: <input type="text" name="fpassword"><br>
<input type="submit" value="  Login  ">
</form>
<?php
  /* $dbhost = 'localhost:3306';  //mysql服务器主机地址
   $dbuser = 'root';      //mysql用户名
   $dbpass = 'xiong1995';//mysql用户名密码
   $dbname = 'mydb';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn )
{
  die('连接失败: ' . mysql_error());
}
echo $dbname . ' 连接成功';
mysqli_select_db( $conn, $dbname );


mysqli_close($conn);*/
?>

</body>
</html>