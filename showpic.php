<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

$x = $_GET['id'];
//$x = $_POST['id';

if($x<10){
$showpic = "<img src=pic/"."k00".$x."-d1".".jpg //>";
}else{
$showpic = "<img src=pic/"."k0".$x."-d1".".jpg //>";
}


echo $showpic;



?>
</body>
</html>
