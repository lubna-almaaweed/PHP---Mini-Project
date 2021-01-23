<?php include 'array.php' ?>
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
<h1 class="text-center text-light p-5">Attendance Page</h1>
<div class="container">
<table class="table">
  <thead>
    <tr class="table-light">
      <th scope="col">Student Name</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Hours</th>
    </tr>
  </thead>
  <tbody>

  <?php

 for($i=0;$i<count($classA);$i++){ 
   
   for($j=0;$j<count($classA[$i]['attendance']);$j++){
      $name=array($classA[$i]['name']);
      $check_in=array($classA[$i]['attendance'][$j]['check_in']);
      $check_out=array($classA[$i]['attendance'][$j]['check_out']);
   //hour diff
      $chechIn=$classA[$i]['attendance'][$j]['check_in'];
      $chechOut=$classA[$i]['attendance'][$j]['check_out'];
      $hourdiff = round((strtotime($chechOut) - strtotime($chechIn))/3600, 1);


      if($hourdiff>=8)
      { 
         echo '<tr class="table-success">';
         foreach($name  as $k  => $v){
           echo '<th scope="row">'.$v.'</th>';
            }  
         foreach($check_in as $k  => $v){
            echo '<td  scope="row">'.$v.'</td>';
          }
         foreach($check_out as $k  => $v){
           echo '<td  scope="row">'.$v.'</td>';
         }
           echo '<td  scope="row">'.$hourdiff.' hours </td>';
          echo '</tr>';
      }
      elseif($hourdiff<8){
         echo '<tr class="table-danger">';
        foreach($name  as $k  => $v){
         echo '<th scope="row">'.$v.'</th>';
        }  
        foreach($check_in as $k  => $v){
         echo '<td  scope="row">'.$v.'</td>';
        }
        foreach($check_out as $k  => $v){
         echo '<td  scope="row">'.$v.'</td>';
        }
             echo '<td  scope="row">'.$hourdiff.' hours </td>';
         echo '</tr>';
      }
    }
  }
  ?>
</tbody>
</table>
</div>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>