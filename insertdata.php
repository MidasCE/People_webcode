<!DOCTYPE html>
<html>
<head>
    <title>Lost Guy Identify System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="th"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
 $database_select = 'people';
$mysql = mysql_connect('localhost', 'root', 'tene23t');
mysql_select_db($database_select, $mysql);
$query_Recordset1 = "SELECT id FROM people_tb";
$Recordset1 = mysql_query($query_Recordset1, $mysql) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<form action="editform.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td width="55" align="right" nowrap="nowrap">Number:</td>
      <td width="215" colspan="2"><input type="text" name="number" value="<?php echo $totalRows_Recordset1+=1?>"size="5" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Gender</td>
      <td colspan="2"><label for="gender"></label>
        <select name="gender" id="gender">
          <option>นาย</option>
          <option>นางสาว</option>
        </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Name:</td>
      <td colspan="2"><input type="text" name="name" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Surname</td>
      <td colspan="2"><input type="text" name="surname" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Nickname</td>
      <td colspan="2"><input type="text" name="nickname" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Major:</td>
      <td colspan="2"><input type="text" name="major" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Year</td>
      <td colspan="2"><input type="int" name="year" value="" size="5" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Phone</td>
      <td colspan="2"><input type="text" name="phone" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Email</td>
      <td colspan="2"><input type="text" name="email" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">BirthDay</td>
      <td colspan="2"><input type="text" name="birthday" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Province</td>
      <td colspan="2"><input type="text" name="province" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PIC</td>
      <td colspan="2"><input type="file" name="fileUpload" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td colspan="2"><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
    
    
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd --></html>
