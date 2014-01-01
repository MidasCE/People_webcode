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

<div id="wrap">
<div class = "container">

    <div class="row">
        <div class="col-md-3">
            <div class = "nav bs-sidenav">
                <ul class="nav nav-pills nav-stacked affix-top red" id="sidebar" style="max-width: 300px;">
                    <li><a href="home.php"><strong><font color="black">Home</font></strong></a></li>
                    <li class="active"><a href="#"><strong>Database list</strong></a></li>
                    <li><a href="about_system.php"><strong><font color="black">About system</font></strong></a></li>
                    <li><a href="insertdata.php"><strong><font color="black">Add Database</font></strong></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <?php
            $row       = mysql_fetch_array($retval, MYSQL_NUM);
            $rec_count = $row[0];
            $rec_limit = 4;
            if($rec_count%$rec_limit == 0)
                $page_count = $rec_count/$rec_limit;
            else
                $page_count = (int)($rec_count/$rec_limit)+1;
            //  while() {
            if (isset($_GET{'page'})) {
                $offset = ($rec_limit * $page)-4;
                $i = ($rec_limit * $page)-3;
                $before = $page-1;
                $page   = $_GET{'page'} + 1;
            }
            // $left_rec = $rec_count - ($page * $rec_limit);
            // $sql = "SELECT * FROM $tblname LIMIT $offset, $rec_limit";
            $sql = "SELECT gender,name, surname, nickname,major,year,phone,email,birthday,province FROM $tblname LIMIT $offset, $rec_limit";
            $retval = mysql_query($sql);
            if($_GET{'page'} > $page_count || $_GET{'page'} < 1){
                echo "<div class=\"alert alert-danger\"><h2><strong><center>Sorry :(</center></strong></h2><br><center>Can't find the page that you looking for.</center>";
                echo "<a type=\"button\" class=\"btn btn-danger\" href=\"javascript:history.go(-1)\">Go back to previous page</a></div>";
            }
            else{
            ?>


                    <h2><strong><font color="#582e06">Database list</font></strong></h2><br>


            <?php  while($row = mysql_fetch_array($retval)){?>
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
                <div class="col-md-6">
                    <ul class="pagination">
                        <?php
                        $num_page = 5;
                        if($page == 2 || !isset($_GET{'page'})){
                            echo "<li class=\"disabled\"><a href=\"#\">&laquo;</a></li>";
                            echo "<li class=\"disabled\"><a href=\"#\"><</a></li>";
                        }
                        else{
                            echo "<li ><a href=\"$_PHP_SELF?page=1\">&laquo;</a></li>";
                            echo "<li ><a href=\"$_PHP_SELF?page=$before\")><</a></li>";
                        }

                        if($page > 3 && $page < $page_count-2){
                            $j = $page-3;

                        }
                        else{
                            if($page >= $page_count-2)
                                $j = $page_count-4;
                            else
                                $j = 1;
                        }
                        $count = 1;
                        for($j;$j <= $page_count && $count <= 5;$count++,$j++){
                            if($page - 1== $j){
                                echo "<li class=\"active\"><a href=\"#\">$j</a></li>";
                            }
                            else{
                                echo "<li><a href=\"$_PHP_SELF?page=$j\">$j</a></li>";
                            }
                        }
                        if($page == $page_count+1){
                            echo "<li class=\"disabled\"><a href=\"#\">></a></li>";
                            echo "<li class=\"disabled\"><a href=\"#\">&raquo;</a></li>";
                        }
                        else{
                            echo "<li ><a href=\"$_PHP_SELF?page="."$page"."\">></a></li>";
                            echo "<li ><a href=\"$_PHP_SELF?page="."$page_count"."\">&raquo;</a></li>";
                        }
                        ?>
                    </ul>
                    <form id="pageForm" role="form">
                        <div class="form-group" action="" method="get" >
                            <label>Go to page <?php echo "(Max : ".$page_count.") "?></label>
                            <input type="text" name="page" placeholder="Enter page number">
                            <button type="submit" class="btn btn-primary" onclick="submitForm1('datalist.php?page=page')">Go!</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <br>
                    <form id="searchForm" role="form">
                        <div class="form-group" action="" method="get" >
                            <label>Search by Name :</label>
                            <input type="text" name="name_search" placeholder="Enter Name">
                            <button type="submit" class="btn btn-success" onclick="submitForm2('showlist.php')">Search</button>
                        </div>
                    </form>
                </div>
                    <?php }?>
        </div>


    </div>
</div>

</div>
<script type="text/javascript">
    function submitForm1(action) {
        form = document.getElementById('pageForm');
        form.action = action;
        form.submit();
    }
    function submitForm2(action) {
        form = document.getElementById('searchForm');
        form.action = action;
        form.submit();
    }
</script>
</body>