<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
$server_host = "localhost";
$server_username = "root";
$server_password = "";
$database = 'dangky';
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không kết nối được CSDL");
mysqli_query($conn,"SET NAMES 'UTF8'"); //sử dụng tiếng việt
?>
</body>
</html>
