
<html>
<body>
<?php
	header("Content-Type: text/html; charset=utf-8");
   $dbhost = 'localhost:3306';  //mysql������������ַ
   $dbuser = 'root';      //mysql�û���
   $dbpass = 'xiong1995';//mysql�û�������
   $dbname = 'mydb';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn )
{
  die('����ʧ��: ' . mysql_error());
}
echo $dbname . " connected successfully <br>";

	$id = htmlspecialchars($_POST['username']);
	$pwd = $_POST["password"];
	$sql = 'SELECT *
        FROM patient WHERE id = $id';
		/*echo $id .'   '. $pwd;*/
$check_query = mysqli_query($conn,"select name from patient where id='$id' and password='$pwd' limit 1");  
if($result = mysqli_fetch_array($check_query)){  
    //��¼�ɹ�  
    session_start();  
    $_SESSION['id'] = $id;  
    $_SESSION['name'] = $result['name'];  
	echo 'Hello    ' . $_SESSION['id'] . ' '. $_SESSION['name'] . '<br>';
    echo '<a href="clinic.php"><input type="button"  value = "continue" /></a>';
    exit;  
} else {  
    exit('Failed <a href="javascript:history.back(-1);">back</a>');  
}  
 


$conn->close();
?>

</body>
</html>