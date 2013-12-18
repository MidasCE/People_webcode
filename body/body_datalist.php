<body>
<?php
            $hostname = "localhost";
            $user = "root";
            $password = "tene23t";
            $dbname = "people";
            $tblname = "people";

            mysql_connect($host,$user,$password);
            mysql_query("SET NAMES UTF8");
            mysql_query("USE $dbname");

          //  $sql = "SELECT * FROM $tblname";
            $sql    = "SELECT count(id) FROM $tblname ";
            $retval = mysql_query($sql);

            //$result = mysql_query($sql);
?>
<div class = "container">

    <div class="row">
        <div class="col-md-3">
            <div class = "nav bs-sidenav">
                <ul class="nav nav-pills nav-stacked affix-top" id="sidebar" style="max-width: 300px;">
                    <li class="active"><a href="#">Datalist</a></li>
                    <li><a href="about_system.php">About system</a></li>
                    <li><a href="#">Messages</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>Datalist</h2>
                </div>
                <div class="panel-body">
            <?php
            $row       = mysql_fetch_array($retval, MYSQL_NUM);
            $rec_count = $row[0];
            $rec_limit = 3;
            if($rec_count%$rec_limit == 0)
                $page_count = $rec_count/$rec_limit;
            else
                $page_count = ($rec_count/$rec_limit)+1;
          //  while() {
                if (isset($_GET{'page'})) {
                    //get the current page
                    $page   = $_GET{'page'} + 1;
                    $offset = $rec_limit * $page;
                } else {
                    // show first set of results
                    $page   = 0;
                    $offset = 0;
                }
               // $left_rec = $rec_count - ($page * $rec_limit);
               // $sql = "SELECT * FROM $tblname LIMIT $offset, $rec_limit";
                $sql = "SELECT gender,name, surname, nickname,major,year,phone,email,birthday,province FROM $tblname LIMIT $offset, $rec_limit";
                $retval = mysql_query($sql);
                $i = 1;
                while($row = mysql_fetch_array($retval)){
            ?>
            <div class="col-md-4">

                <div class="alert alert-info">
                    <?php
                    if($i<10){
                        $showpic = "<center><img src=pic/"."k00".strval($i)."-d1".".jpg class=\"img-circle\" //></center>";
                    }else if($i<100) {
                        $showpic = "<center><img src=pic/"."k0".strval($i)."-d1".".jpg class=\"img-circle\" //></center>";
                    }else{
                        $showpic = "<center><img src=pic/"."k".strval($i)."-d1".".jpg class=\"img-circle\" //></center>";
                    }
                        echo $showpic;
                    ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="alert alert-success">
                    <font color="black">
                        <h3><?php echo $row['gender']."   " ;  echo $row['name']."  ";  echo $row['surname']; ?> </h3>
                        Nickname : <?php echo $row['nickname']; ?><br>
                        Major :  <?php echo $row['major']; ?> Year :  <?php echo $row['year']; ?><br>
                        Phone :  <?php echo $row['phone']; ?> Birthday : <?php echo $row['birthday']; ?><br>
                        Email :  <?php echo $row['email']; ?> <br>
                        Province : <?php echo $row['province']; ?>
                        </font>
                </div>
            </div>
            <?php
                $i++; }
            ?>
                    <ul class="pagination">
                        <?php
                        if($page == 0){
                            echo "<li class=\"disabled\"><a href=\"#\">&laquo;</a></li>";
                        }
                        else{
                            echo "<li ><a href=\"#\">&laquo;</a></li>";
                        }
                        $j = 1;
                        for($j;$j <= $page_count;$j++){
                            if($page + 1 == $j){
                                echo "<li class=\"active\"><a href=\"#\">$j</a></li>";
                            }
                            else{
                                echo "<li><a href=\"#\">$j</a></li>";
                            }
                        }
                        ?>
                        <li><a href="#">&raquo;</a></li>
                    </ul>

        </div>
                <div class="panel-body">
        </div>
    </div>

</div>
<!--<table width="100%" border="0" align="center">
    <tr>
        <td width="28%" bgcolor="#FF9966"><a href="insertdata.php"><img src="button.png" width="250" height="58" /></a></td>
        <td width="72%" rowspan="4" bgcolor="#FF9966">

            <?php /*while($i <= $num_rows) {
                $row_Recordset1 = mysql_fetch_assoc($dbquery);  */?>
                <table width="100%" border="0">
                    <tr>
                        <td width="3%" rowspan="3"><?php
/*                            if($i<10){
                                $showpic = "<img src=pic/"."k00".$i."-d1".".jpg //>";
                            }else if($i>=10&&$i<100) {
                                $showpic = "<img src=pic/"."k0".$i."-d1".".jpg //>";
                            }else{
                                $showpic = "<img src=pic/"."k".$i."-d1".".jpg //>";
                            }
                            echo $showpic;
                            */?>
                            &nbsp;</td>
                        <td width="97%"> <?php /* echo $row_Recordset1['id'];  */?></td>
                    </tr>
                    <tr>
                        <td><a href="showlist.php<?php /* echo "?id=".$row_Recordset1['id'];  */?>"><?php /* echo $row_Recordset1['gender']."   " ;  echo $row_Recordset1['name']."  ";  echo $row_Recordset1['surname'];   */?> &nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <br />

                <?php 	// $i++; }?>
            <p>&nbsp;</p>
            </td>
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
-->

</body>