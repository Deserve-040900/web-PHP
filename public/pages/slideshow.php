<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link type="text/css" rel="stylesheet" href="./CSS/slidebanner.css"/>
    <script type="text/javascript" src="./JS/slidebanner.js"></script>
</head>
<body>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="./Image/1.jpg" style="width:100%">
            <div class="text">slide banner 1</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="./Image/2.jpg" style="width:100%">
            <div class="text">slide banner 2</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="./Image/3.jpg" style="width:100%">
            <div class="text">slide banner 3</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="./Image/4.jpg" style="width:100%">
            <div class="text">slide banner 4</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
</body>
</html>