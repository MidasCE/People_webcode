<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/test1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<link href="file:///C|/xampp/htdocs/LC_1/show.css" rel="stylesheet" type="text/css" />
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
    <p>
      <?php 	
	    $i=$_GET['id'];
	  	$hostname = "localhost"; 
		$user = "root";
		$password = "tene23t";
		$dbname = "people";
		$tblname = "people";
		mysql_connect($hostname, $user, $password) or die("�Դ��Ͱҹ�����������");
		mysql_select_db($dbname) or die("���͡�ҹ�����������"); 
		mysql_query("SET  NAMES TIS620");
		$sql = "select * from $tblname where id = $i";
		$dbquery = mysql_db_query($dbname, $sql);
		$row_Recordset1 = mysql_fetch_assoc($dbquery);  

		 ?>	    
    </p>
    <table width="100%" border="0">
      <tr>
        <td width="26%" rowspan="6" align="center" valign="middle"><?php
				if($i<10){
						$showpic = "<img src=pic/"."k00".$i."-d1".".jpg //>";
				}else if($i>=10&&$i<100) {
						$showpic = "<img src=pic/"."k0".$i."-d1".".jpg //>";
				}else{
						$showpic = "<img src=pic/"."k".$i."-d1".".jpg //>";
						}            
						echo $showpic;
				?>          &nbsp;</td>
        <td colspan="2"><span class="show">Number :</span> <?php echo $_GET['id']; ?></td>
      </tr>
      <tr>
        <td class="show">Name :    <?php echo $row_Recordset1['gender']."   " ;  echo $row_Recordset1['name']."  ";  echo $row_Recordset1['surname']; ?> </td>
        <td><span class="show">Nickname :<?php echo $row_Recordset1['nickname']; ?></span></td>
      </tr>
      <tr>
        <td width="24%"><span class="show">Major :  <?php echo $row_Recordset1['major']; ?></span></td>
        <td width="50%"><span class="show">Year :  <?php echo $row_Recordset1['year']; ?></span></td>
      </tr>
      <tr>
        <td><span class="show">Phone :  <?php echo $row_Recordset1['phone']; ?></span></td>
        <td><span class="show">Birthday : <?php echo $row_Recordset1['birthday']; ?></span></td>
      </tr>
      <tr>
        <td colspan="2"><span class="show">Email :  <?php echo $row_Recordset1['email']; ?></span></td>
      </tr>
      <tr>
        <td colspan="2"><span class="show">Province : <?php echo $row_Recordset1['province']; ?></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp; </p>
	<!-- InstanceEndEditable --></td>
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
