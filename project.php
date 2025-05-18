<!DOCTYPE html>
<html>
    <head>
        <title> Photo Gallery </title>
        <link rel="stylesheet" href="http://localhost/js/css/bootstrap.min.css">
     <script src="http://localhost/js/jquery.js"></script>
        <script src="http://localhost/js/bootstrap.min.js"></script>

</head>
<body> 
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
               <div class="navbar-brand"> Photo Gallery </div>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="">Home</a></li>
            <li><a href="">Nature Gallery</a></li>
            <li><a href="">Science Gallery</a></li>
            
    </ul>
    </div>
</nav>
        <div class="container">
            <div class="carousel slide" data-ride="carousel" id="slider">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                    <li data-target="slider" data-slide-to="3"></li>
                </ol>
</div>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="image/myimage1.jpg"/>
                    </div>
                    <div class="item">
                        <img src="image/myimage2.jpg"/>
                    </div>
                    <div class="item">
                        <img src="image/myimage3.jpg"/>
                    </div>
                    <div class="item">
                        <img src="image/myimage4.jpg"/> 
                    </div> 
</div>

</body>
</html>




