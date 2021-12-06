<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Safety</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid" style="max-width: 99.9%;max-height: 99.9%; position:absolute ;" >
    <div id="myCarousel" class="carousel slide">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/mainfloor_alarm1.jpg" alt="First slide"  >
                <div class="carousel-caption">Smoke Detector1 In Main Floor</div>
            </div>
            <div class="item">
                <img src="img/mainfloor_alarm2.jpg" alt="Second slide">
                <div class="carousel-caption">Smoke Detector2 In Main Floor</div>
            </div>
            <div class="item">
                <img src="img/basement_alarm1.jpg" alt="Third slide">
                <div class="carousel-caption">Smoke Detector3 In Basement</div>
            </div>
            <div class="item">
                <img src="img/basement_alarm2.jpg" alt="Four slide">
                <div class="carousel-caption">Smoke Detector4 In Basement</div>
            </div>
            <div class="item">
                <img src="img/mainfloor_f1.jpg" alt="five slide">
                <div class="carousel-caption">Fire Extinguisher1 In Main Floor</div>
            </div>
            <div class="item">
                <img src="img/bm_f1.jpg" alt="six slide">
                <div class="carousel-caption">Fire Extinguisher2 In Basement</div>
            </div>
            <div class="item">
                <img src="img/bm_f2.jpg" alt="seven slide">
                <div class="carousel-caption">Fire Extinguisher3 In Basement</div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
</body>
</html>