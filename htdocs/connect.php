<?php

   $dbhost = 'localhost:3306';  //mysql������������ַ
   $dbuser = 'root';      //mysql�û���
   $dbpass = 'xiong1995';//mysql�û�������
   $dbname = 'mydb';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn )
{
  die('����ʧ��: ' . mysql_error());
}
echo "<br>";
?>