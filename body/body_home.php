<body>
<style>
    .carousel {
        border: 10px solid #FFF;
        -webkit-transform: rotate(1deg);
        -moz-transform: rotate(1deg);
        -ms-transform: rotate(1deg);
        -o-transform: rotate(1deg);
        transform: rotate(1deg);
        filter: progid:DXImageTransform.Microsoft.Matrix( M11=0.9986295347545738, M12=-0.05233595624294383, M21=0.05233595624294383, M22=0.9986295347545738, sizingMethod='auto expand');
        zoom: 1;
        -webkit-box-shadow: 10px 10px 20px #002624;
        -moz-box-shadow: 10px 10px 20px #002624;
        box-shadow: 10px 10px 20px #002624;
        overflow: hidden;
    }
    .carousel .item {
        -webkit-transition: opacity 1s;
        -moz-transition: opacity 1s;
        -ms-transition: opacity 1s;
        -o-transition: opacity 1s;
        transition: opacity 1s;
    }
    .carousel .active.left, .carousel .active.right {
        left:0;
        opacity:0;
        z-index:2;
    }
    .carousel .next, .carousel .prev {
        left:0;
        opacity:1;
        z-index:1;
    }
</style>
<script type="text/javascript">\
    $(document).ready(function() {
        $('.carousel').carousel({interval: 9000});
    });
</script>
<div id="wrap">
    <div class = "container">
        <div class="row">
            <div class="col-md-3">
                <div class = "nav bs-sidenav">
                    <ul class="nav nav-pills nav-stacked affix-top" id="sidebar" style="max-width: 300px;">
                        <li class="active"><a href="#"><strong><font color="black">Home</font></strong></a></li>
                        <li><a href="datalist.php?page=1"><strong><font color="black">Database list</font></strong></a></li>
                        <li><a href="about_system.php"><strong><font color="black">About system</font></strong></a></li>
                        <li><a href="insertdata.php"><strong><font color="black">Add Database</font></strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <br>
                <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="900x500" src="ads_pic/01.jpg">
                            <div class="carousel-caption">
                                <h3><strong><font color="black">Welcome! to lost man database.</font></strong></h3>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="900x500" src="ads_pic/02.jpg">
                            <div class="carousel-caption">
                                <h3><strong><font color="black">Made from mySQL and phpMyadmin.</font></strong></h3>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="900x500" src="ads_pic/03.jpg">
                            <div class="carousel-caption">
                                <h3><strong><font color="black">Simple and Easy.</font></strong></h3>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>