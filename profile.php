<?php include 'array.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
  <!-- Using Icon Laibrary(font awesome) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA=="
    crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Class A</title>
   <style>
       
</style> 
</head>
<body>

<div >
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

<div class="container">
<h1 class="text-center text-primary p-5">Profile</h1>

<?php 
$id = $_GET['id'];
echo '<div class="content">';
echo '<div class="container">';
echo '<div class="row">';

echo '<!-- end col -->';
echo '</div>';
echo '<!-- end row -->';
echo '<div class="row">';
echo '<div class="col-lg-4">';
echo '<div class="text-center card-box">';
echo '<div class="member-card pt-2 pb-2">';
echo '<div class="thumb-lg member-thumb mx-auto">  <img src="'.$classA[$id]['image'].'" style="height:150px;width:150px;border-radius:50%" ></div>';
echo '<div class="">';
echo '<h1>'.$classA[$id]['name'].'</h1>';
echo '<p class="text-muted">@Founder <span>| </span><span><a href="#" class="text-pink">websitename.com</a></span></p>';
echo '</div>';
echo ' <div class="soctal">';
 echo ' <a href="'.$classA[$id]['linkedin'].'" target="_blank"><i class="fab fa-linkedin"></i></a>';
 echo '<a href="'.$classA[$id]['github'].'" target="_blank"><i class="fab fa-github"></i></a>';
 echo '</div>';
echo '<button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Message Now</button>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

for($j=0;$j<count($classA[$id]['projects']);$j++){
    if($classA[$id]['projects'][$j]['is_compleated']=='yes'|| $classA[$id]['projects'][$j]['is_compleated']=='yes')
    {  
      $project=array($classA[$id]['projects'][$j]['project_name']);
        foreach($project as $k  => $v){
        echo '<h4> *Finished projects : '.$v.'</h4>';
        }
       }
   else{
     echo '<h4></h4>';
   }
    }
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>