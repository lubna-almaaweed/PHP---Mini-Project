<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
  
    <title>Class A</title>
    <style>
body{
 background-color: white;
}
.prof{
  background-color: GREY;
  color:#e7f1f2;
}
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
<div class="container">
<h1 class="text-center p-5">Class "A" Trainees</h1>
<div class="container-fluid">
  <div class="row">
  
<?php include 'array.php'; 
for($i=0;$i<count($classA);$i++){
 $image=array($classA[$i]['image']);
 $name=array($classA[$i]['name']);
 $birthday=array($classA[$i]['birthday']);
 $linkedin=array($classA[$i]['linkedin']);
 $github=array($classA[$i]['github']);
 echo '<div class="col-7 col-md-5 col-lg-4 mb-2"><div class="card mx-auto text-center">';

foreach($image  as $k  => $v){
 echo '<a href="#url"><img class="card-img-top " src="'.$v.'" alt="Sample Title"></a>';
}
foreach($name  as $k  => $v){
 echo '<div class="card-body">';
 echo '<h5 class="card-title">'.$v.'</h5>';
} 
foreach($linkedin  as $k  => $v){
echo '<i class="fab fa-linkedin"></i>';
} 
foreach($github  as $k  => $v){
echo '<i class="fab fa-github"></i>';
}
foreach($birthday as $k  => $v){
 echo '<p class="card-text">'.$v.'</p>'; 
 echo '<a href="profile.php?id='.$i.'" class="btn prof">Profile </a>';
 echo '</div></div>';
}
echo '</div>';
}

?>
      </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>