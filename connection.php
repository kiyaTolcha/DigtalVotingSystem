<?php
error_reporting(1);
$host='localhost';
$user='root';
$pass='';
$conn=mysqli_connect($host,$user, $pass);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db(mysqli_connect('localhost', 'root', ''),'voteDB') or die(mysql_error());

?>