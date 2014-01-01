<?php
    require_once('insertdata.php');
    $t = $_POST['id'];
    if($t<10){
        move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"pic\\"."k00".strval($t)."-d1".".jpg");
    }else if($t<100) {
        move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"pic\\"."k0".strval($t)."-d1".".jpg");
    }else{
        move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"pic\\"."k".strval($t)."-d1".".jpg");
    }
?>
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel"><strong>Message.</strong></h3>
            </div>
            <div class="modal-body">
                <?php
                if (empty($_POST["name"]))
                {
                    echo "Name field is required";
                }
                else if (empty($_POST["surname"]))
                {
                    echo "Surname field is required";
                }
                else{
                    $hostname = "localhost";
                    $user = "root";
                    $password = "tene23t";
                    $dbname = "people";
                    $tblname = "people";
                    mysql_connect($host,$user,$password);
                    mysql_select_db($dbname);
                    mysql_query("SET NAMES UTF8");
                    if($objResult){
                        echo "name and surname already exists!";
                    }
                    else{
                        $strSQL = "INSERT INTO $tblname (id,gender,name,surname,nickname,major,year,phone,email,birthday,province)  VALUES ('".$_POST["id"]."','".$_POST["gender"]."','".$_POST["name"]."','".$_POST["surname"]."','".$_POST["nickname"]."','".$_POST["major"]."','".$_POST["year"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["birthday"]."','".$_POST["province"]."')";
                        $objQuery = mysql_query($strSQL);
                        echo "Completed!<br>";
                    }
                }
                ?>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-danger" href="javascript:history.go(-1)">Close</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    <script> { $('#myModal').modal('show');} </script>