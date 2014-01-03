<body>
<style>
    #warn{
        -moz-border-radius: 10px; /* FF1+ */
        -webkit-border-radius: 10px; /* Saf3-4, iOS 1+, Android 1.5+ */
        border-radius: 10px; /* Opera 10.5, IE9, Saf5, Chrome, FF4 */
        overflow:hidden;
        min-height: 70px;
        width: 100%;
        margin-left: -20px;
        margin-right: -20px;
        padding-left: 20px;
        padding-right: 20px;
        background-color: #d2322d;
    }
</style>
<div id="wrap">
    <div class = "container">

        <div class="row">
            <div class="col-md-3">
                <div class = "nav bs-sidenav">
                    <ul class="nav nav-pills nav-stacked affix-top red" id="sidebar" style="max-width: 300px;">
                        <li><a href="home.php"><strong><font color="black">Home</font></strong></a></li>
                        <li class="active"><a href="datalist.php?page=1"><strong>Database list</strong></a></li>
                        <li><a href="about_system.php"><strong><font color="black">About system</font></strong></a></li>
                        <li><a href="insertdata.php"><strong><font color="black">Add Database</font></strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <?php
                $searchTerm = $_GET['name_search'];
                if ($searchTerm == "")
                {?>

                        <div id="warn" class="container">
                               <h2><p><center><strong><font color="white">Please enter name you are searching for.</font></strong></center></p></h2>
                            <a type="button" class="btn btn-warning" href="javascript:history.go(-1)">Go back to previous page</a>
                            <br>
                            <br>
                        </div>
                <?php
                }
                else{
                    $hostname = "localhost";
                    $user = "root";
                    $password = "tene23t";
                    $dbname = "people";
                    $tblname = "people";
                    mysql_connect($host,$user,$password);
                    mysql_query("SET NAMES UTF8");
                    mysql_query("USE $dbname");
                    $query = "SELECT * FROM $tblname WHERE name LIKE '%$searchTerm%'";

                    $results = mysql_query($query);
                    $row       = mysql_fetch_array($results, MYSQL_NUM);
                    if($row >= 1)
                    {
                        $retval = mysql_query($query);
                        while($row =  mysql_fetch_array($retval))
                        {?>
                            <div class="col-md-4">

                                <div class="alert alert-info">
                                    <?php
                                    if($row['id']<10){
                                        $showpic = "<center><img src=pic/"."k00".strval($row['id'])."-d1".".jpg class=\"img-circle\" //></center>";
                                    }else if($row['id']<100) {
                                        $showpic = "<center><img src=pic/"."k0".strval($row['id'])."-d1".".jpg class=\"img-circle\" //></center>";
                                    }else{
                                        $showpic = "<center><img src=pic/"."k".strval($row['id'])."-d1".".jpg class=\"img-circle\" //></center>";
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
                        }
                    }
                    else {?>
                        <div id="warn" class="container">
                               <h2><p><center><strong><font color="white">There was no matching record for the name <?php echo $searchTerm?></font></strong></center></p></h2>
                            <a type="button" class="btn btn-warning" href="javascript:history.go(-1)">Go back to previous page</a>
                            <br>
                            <br>
                        </div>
                    <?php
                    }
                }
                ?>
            </div>
         </div>
    </div>
</div>
</body>