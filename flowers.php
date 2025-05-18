<!DOCTYPE html>
<html>
<head>
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="http://localhost/js/css/bootstrap.min.css">
    <script src="http://localhost/js/jquery.js"></script>
    <script src="http://localhost/js/bootstrap.min.js"></script>
    <style>
        .thumbnail img {
            width: 500px%;
            height: 150px;
            
        }
        </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">Photo Gallery</div>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="project.php">Home</a></li>
                <li><a href="flowers.php">Flowers</a></li>
                <li><a href="others.php">Others</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        

    <div class="page header"/>
        <h3>Photo Gallery</h3>

</div> 
  <style>
    .fixed-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
</style>

<div class="row">
    <!-- Flower 1 -->
    <div class="col-md-4">
        <a href="#m1" data-toggle="modal" class="thumbnail">
            <img src="image6.jpg" alt="Image 6" class="img-responsive fixed-img">
        </a>
        <div class="modal fade" id="m1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">Flower 1</div>
                    <div class="modal-body">
                        <img src="image6.jpg" alt="Image 6" class="img-responsive img-thumbnail">
                    </div>
                    <div class="modal-footer">Flower 1</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flower 2 -->
    <div class="col-md-4">
        <a href="#m2" data-toggle="modal" class="thumbnail">
            <img src="image7.jpg" alt="Image 7" class="img-responsive fixed-img">
        </a>
        <div class="modal fade" id="m2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">Flower 2</div>
                    <div class="modal-body">
                        <img src="image7.jpg" alt="Image 7" class="img-responsive img-thumbnail">
                    </div>
                    <div class="modal-footer">Flower 2</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flower 3 -->
    <div class="col-md-4">
        <a href="#m3" data-toggle="modal" class="thumbnail">
            <img src="image8.jpg" alt="Image 8" class="img-responsive fixed-img">
        </a>
        <div class="modal fade" id="m3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">Flower 3</div>
                    <div class="modal-body">
                        <img src="image8.jpg" alt="Image 8" class="img-responsive img-thumbnail">
                    </div>
                    <div class="modal-footer">Flower 3</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flower 4 -->
    <div class="col-md-4">
        <a href="#m4" data-toggle="modal" class="thumbnail">
            <img src="image9.jpg" alt="Image 9" class="img-responsive fixed-img">
        </a>
        <div class="modal fade" id="m4">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">Flower 4</div>
                    <div class="modal-body">
                        <img src="image9.jpg" alt="Image 9" class="img-responsive img-thumbnail">
                    </div>
                    <div class="modal-footer">Flower 4</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flower 5 -->
    <div class="col-md-4">
        <a href="#m5" data-toggle="modal" class="thumbnail">
            <img src="image1.jpg" alt="Image 1" class="img-responsive fixed-img">
        </a>
        <div class="modal fade" id="m5">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">Flower 5</div>
                    <div class="modal-body">
                        <img src="image1.jpg" alt="Image 1" class="img-responsive img-thumbnail">
                    </div>
                    <div class="modal-footer">Flower 5</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flower 6 -->
    <div class="col-md-4">
        <a href="#m6" data-toggle="modal" class="thumbnail">
            <img src="image2.jpg" alt="Image 2" class="img-responsive fixed-img">
        </a>
        <div class="modal fade" id="m6">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">Flower 6</div>
                    <div class="modal-body">
                        <img src="image2.jpg" alt="Image 2" class="img-responsive img-thumbnail">
                    </div>
                    <div class="modal-footer">Flower 6</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flower 7 -->
    <div class="col-md-4">
        <a href="#m7" data-toggle="modal" class="thumbnail">
            <img src="image3.jpg" alt="Image 3" class="img-responsive fixed-img">
        </a>
        <div class="modal fade" id="m7">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">Flower 7</div>
                    <div class="modal-body">
                        <img src="image3.jpg" alt="Image 3" class="img-responsive img-thumbnail">
                    </div>
                    <div class="modal-footer">Flower 7</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flower 8 -->
    <div class="col-md-4">
        <a href="#m8" data-toggle="modal" class="thumbnail">
            <img src="image4.jpg" alt="Image 4" class="img-responsive fixed-img">
        </a>
        <div class="modal fade" id="m8">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">Flower 8</div>
                    <div class="modal-body">
                        <img src="image4.jpg" alt="Image 4" class="img-responsive img-thumbnail">
                    </div>
                    <div class="modal-footer">Flower 8</div>
                </div>
            </div>
        </div>
    </div>
</div>



                
</div>
<footer class="navbar navbar-default navbar-fixed-bottom"> 
    <div class="container">
        <p class="text-center" style="padding: 10px;">Created by Jhoanna</p>
    </div>
</footer> 

</div>






</body>
</html>
