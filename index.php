<?php 
require_once "actions/db_connect.php";

$sql = "SELECT * FROM media";
$result = mysqli_query($conn, $sql);

$body = "";

if(mysqli_num_rows($result) == 0){
    $body = "<div class='text-center h1 text-danger'>No Results</div>";
}else {
    while($row = mysqli_fetch_assoc($result)){
        $body.= "
        <div class='container'>
        <div class='card' style='width: 18rem;'>
            <img src='img/{$row["img"]}' class='card-img-top' alt='{$row["titel"]}'>
            <div class='card-body'>
              <h5 class='card-title'>{$row["titel"]}</h5>
              
              <p class='card-text'>fname_Author: {$row["fname_Author"]} </p>
              <p class='card-text'>lname_Author: {$row["lname_Author"]} </p>
              
              <a href='show-media.php?id={$row["id"]}' class='btn btn-outline-success'>show media</a>
              <a href='Publishers.php?id={$row["name_Publisher"]}' class='btn btn-outline-secondary'>show Publisher</a>
              <br> 
              <a href='delete.php?id={$row["id"]}' class='btn btn-danger center'>Delete</a>
              <a href='Update.php?id={$row["id"]}' class='btn btn-primary'>Update</a> 
               
               
            </div>
          </div>
          </div>
          
          
          ";
    } 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create.php">create</a>
          </li>
          <li class="nav-item dropdown">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<br><br>

<style >

body {
  margin: 0;
  background: #000; 
}
video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}

@media screen and (max-width: 500px) { 
  div{width:70%;} 
}
@media screen and (max-device-width: 800px) {
  html { background: url(https://thenewcode.com/assets/images/polina.jpg) #000 no-repeat center center fixed; }
  #bgvid { display: none; }
}

img{
  
  height: 150px

}

/* body {
background-image: url("https://cdn.pixabay.com/photo/2018/04/15/08/25/roses-3321098__340.jpg");
Background: "repeat No repeat;"
}
           .aa{
            border-radius: 4px; 
                margin: auto;
               margin-top: 100px;
               width: 70% ; 
               
               
           }     */
           
       </style>

<video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
  <!-- 
- Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">

</video>



<div class="container ">
        <div class="row row-cols-3 ">
            <?= $body; ?>
        </div>
    </div> 


<script>

   
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>


