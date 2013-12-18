<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php require_once('insertdata.php'); 
$editFormAction = $_SERVER['PHP_SELF'];
move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"pic_temp\\".$_POST['number'].".jpg");
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);  
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {


	$insertSQL = sprintf("INSERT INTO people (id,gender,name,surname,nickname,major,year,phone,email,birthday,province) 		values(%s,'%s','%s','%s','%s','%s',%s,'%s','%s','%s','%s')",
					$_POST['id'],
					$_POST['gender'],
					$_POST['name'],
					$_POST['surname'],
					$_POST['nickname'],
					$_POST['major'],
					$_POST['year'],
					$_POST['phone'],
					$_POST['email'],
					$_POST['birthday'],
					$_POST['province']					
					);
//echo $insertSQL;
  mysql_select_db($database_select, $mysql);
  mysql_query("SET  NAMES TIS620");
// $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());
 $insertGoTo = "datalist.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  echo $insertGoTo;
  header(sprintf("Location: %s", $insertGoTo));  
}

?>