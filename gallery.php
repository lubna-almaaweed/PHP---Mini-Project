<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Carousel</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand light" href="index.php"><img src="https://www.orange.jo/sites/Press/EN/PublishingImages/Coding-Academy-Logo.jpg" width="150" height="50" style="vertical-align:middle"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
       <?php
                function menuList($name,$link) {
                echo  ' <li class="nav-item active mr-2 "><a class="nav-link text-info" href='.$link.'>'.$name.'<span class="sr-only">(current)</span></a> </li>';
                }
                $name = array("Home", "Attendence", "Dashboard", "Gallery");
                $link=array("index.php","attendence.php","dashboard.php","gallery.php");
                array_map("menuList", $name,$link);
            ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<h1 >Students Academy Events </h1>
<div class="container-lg my-3">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
       
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.orange.jo/sites/Press/EN/PublishingImages/coding-academy-news.jpg" alt="First Slide">
            </div>
            <div class="carousel-item">
                <img src="https://pbs.twimg.com/media/EGXgfBSXUAA0i8a.jpg" alt="Second Slide">
            </div>
            <div class="carousel-item">
                <img src="https://www.orange.jo/sites/Press/EN/PublishingImages/coding-academy-photo.jpg" alt="Third Slide">
            </div>
            <div class="carousel-item">
                <img src="https://www.akhbarna.net/assets/2019-11-30/large/48084_1_1575121240.jpg" alt="First Slide">
            </div>
         
           
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    
</div>

</body>
</html>                            