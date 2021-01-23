<?php include 'array.php' ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
<style>
body {
  font-family: "Lato", sans-serif;
}


.sidenav {
  height: 100%;
  width: 23%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div>
<div class="sidenav bg-dark sidenav-light">
<?php
function menuList($name,$link) {
    echo  ' <li class="nav-item active mr-2 "><a class="nav-link text-info" href='.$link.'>'.$name.'<span class="sr-only">(current)</span></a> </li>';
}
$name = array( "Dashboard","Home", "Attendence", "Gallery");
$link=array("dashboard.php","index.php","attendence.php","gallery.php");
array_map("menuList", $name,$link);

?>
</div>


<div class="container">
<h1 class=" heading text-right text-light p-5">All Students</h1>
<div class="container">
<table class="table">
  <thead>
    <tr class="table-light">
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col"></th>

    <th scope="col">Number</th>
      <th scope="col"> Name</th>
      <th scope="col">Projects</th>
    </tr>
  </thead>
  <tbody>

  <?php

 for($i=0;$i<count($classA);$i++){ 
   
   for($j=0;$j<count($classA[$i]['attendance']);$j++){
      $name=array($classA[$i]['name']);
      $id=array($classA[$i]['id']);
      $check_in=array($classA[$i]['attendance'][$j]['check_in']);
      $project_name=array($classA[$i]['projects'][$j]['project_name']);
      $check_out=array($classA[$i]['attendance'][$j]['check_out']);
   //hour diff
      $chechIn=$classA[$i]['attendance'][$j]['check_in'];
      $chechOut=$classA[$i]['attendance'][$j]['check_out'];
      $hourdiff = round((strtotime($chechOut) - strtotime($chechIn))/3600, 1);


      if($hourdiff>=8)
      { 
         echo '<tr class="table-active">';
         foreach($name  as $k  => $v){
          echo '<th scope="row"></th>';
           } 
           foreach($name  as $k  => $v){
            echo '<th scope="row"></th>';
             } 
             foreach($name  as $k  => $v){
              echo '<th scope="row"></th>';
               } 
               foreach($name  as $k  => $v){
                echo '<th scope="row"></th>';
                 } 
             foreach($id  as $k  => $v){
              echo '<th scope="row">'.$v.'</th>';
               } 
         foreach($name  as $k  => $v){
           echo '<th scope="row">'.$v.'</th>';
            }  
            foreach($project_name  as $k  => $v){
              echo '<th scope="row">'.$v.'</th>';
             } 
      
      
      }
      elseif($hourdiff<8){
         echo '<tr class="table-active">';
         foreach($name  as $k  => $v){
          echo '<th scope="row"></th>';
           } 
           foreach($name  as $k  => $v){
            echo '<th scope="row"></th>';
             } 
             foreach($name  as $k  => $v){
              echo '<th scope="row"></th>';
               } 
               foreach($name  as $k  => $v){
                echo '<th scope="row"></th>';
                 } 
               foreach($id  as $k  => $v){
              echo '<th scope="row"></th>';
               } 
               foreach($id  as $k  => $v){
                echo '<th scope="row"></th>';
                 } 
        foreach($project_name  as $k  => $v){
          echo '<th scope="row">'.$v.'</th>';
         } 
   
          
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
</div>
</body>
</html> 