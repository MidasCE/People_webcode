<body>

<div id="wrap">
<div class = "container">

    <div class="row">
        <div class="col-md-3">
            <div class = "nav bs-sidenav">
                <ul class="nav nav-pills nav-stacked affix-top" id="sidebar" style="max-width: 300px;">
                    <li><a href="home.php"><strong><font color="black">Home</font></strong></a></li>
                    <li><a href="datalist.php?page=1"><strong><font color="black">Database list</font></strong></a></li>
                    <li><a href="about_system.php"><strong><font color="black">About system</font></strong></a></li>
                    <li class="active"><a href="#"><strong>Add Database</strong></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <?php
                $database_select = 'people';
                $mysql = mysql_connect('localhost', 'root', 'tene23t');
                mysql_query("SET NAMES UTF8");
                mysql_select_db($database_select, $mysql);
                $query_Recordset1 = "SELECT id FROM people";
                $Recordset1 = mysql_query($query_Recordset1, $mysql) or die(mysql_error());
                $row_Recordset1 = mysql_fetch_array($Recordset1);
                $totalRows_Recordset1 = mysql_num_rows($Recordset1);
            ?>

            <h2><strong><font color="#582e06">Add Database</font></strong></h2>

            <form class="form-horizontal" action="editform.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                <p><span class="error"><font color="red">* required field.</font></span></p>
                <div class="form-group">

                    <div class="col-xs-2">
                        <input  class="form-control" type="hidden" name="id" value="<?php echo $totalRows_Recordset1+=1?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Gender</label>
                    <div class="col-xs-2">
                        <select class="form-control" name="gender">
                            <option>นาย</option>
                            <option>นางสาว</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ชื่อ</label>
                    <div class="col-xs-7">
                        <input type="text" data-required="true"  class="form-control" name="name">
                    </div>
                    <font color="red"><h4>*</h4></font>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">นามสกุล</label>
                    <div class="col-xs-7">
                        <input type="text" class="form-control" name="surname">
                    </div>
                    <font color="red"><h4>*</h4></font>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ชื่อเล่น</label>
                    <div class="col-xs-7">
                        <input type="text" class="form-control" name="nickname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ภาควิชา</label>
                    <div class="col-xs-7">
                        <input type="text" class="form-control" name="major">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ชั้นปี</label>
                    <div class="col-xs-2">
                        <select class="form-control" name="year">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">เบอร์โทรศัพท์</label>
                    <div class="col-xs-7">
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">E-mail</label>
                    <div class="col-xs-7">
                        <input type="text" class="form-control" name="E-mail">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">วันเกิด</label>
                    <div class="col-xs-7">
                        <input type="text" class="form-control" name="birthday">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">จังหวัด</label>
                    <div class="col-xs-7">
                        <input type="text" class="form-control" name="province">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Picture</label>
                    <div class="col-xs-7">
                        <input type="file"  name="fileUpload">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" value="Insert record">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>
 </div>
</body>
