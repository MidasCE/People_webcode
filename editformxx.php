<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/test1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<style type="text/css">
.kk {
	font-family: "Arial Black", Gadget, sans-serif;
	font-weight: bold;
	font-size: xx-large;
	color: #FFF;
}
</style>
</head>

<body>
<table width="100%" border="0" align="center">
  <tr>
    <td height="90" colspan="2" align="center" bgcolor="#FF6600"><strong class="kk">LOST GUY IDENTIFY SYSTEM</strong></td>
  </tr>
  <tr>
    <td width="28%" bgcolor="#FF9966"><a href="insertdata.php"><img src="button.png" width="250" height="58" /></a></td>
    <td width="72%" rowspan="4" bgcolor="#FF9966"><!-- InstanceBeginEditable name="EditRegion3" -->
	
	<?php
$editFormAction = $_SERVER['PHP_SELF'];
move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"pic\\".$_POST['number'].".jpg");
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO list (gender, name, surname, nickname, major, year, phone, email, birthday, province) VALUES (%s, %s, %s, %s,%s,%s, %s, %s, %s,%s)",
  					   GetSQLValueString($_POST['gender'], "text"),
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['surname'], "text"),
                       GetSQLValueString($_POST['nickname'], "text"),
					   GetSQLValueString($_POST['major'], "text"),
                       GetSQLValueString($_POST['year'], "int"),
                       GetSQLValueString($_POST['phone'], "text"),
					   GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['birthday'], "text"),
                       GetSQLValueString($_POST['province'], "text"));
	echo $insertSQL;

  mysql_select_db($database_select, $mysql);
  $Result1 = mysql_query($insertSQL, $mysql) or die(mysql_error());

/*
 $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
  */
}

?><!-- InstanceEndEditable --></td>
  </tr>
  <tr bgcolor="#FF9966">
    <td nowrap="nowrap"><a href="datalist.php"><img src="button1.png" width="250" height="56" /></a></td>
  </tr>
  <tr bgcolor="#FF9966">
    <td><img src="button2.png" width="250" height="56" /></td>
  </tr>
  <tr>
    <td height="250" nowrap="nowrap" bgcolor="#FF9966">&nbsp;</td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
