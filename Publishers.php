<?php
    require_once "actions/db_connect.php";

        $id = $_GET["id"];
    
        $sql = "SELECT * FROM `media` WHERE name_Publisher = '$id' "; 
        $result = mysqli_query($conn, $sql);

        // $row = mysqli_fetch_assoc($result) ;
        $body = "";
        while($row = mysqli_fetch_assoc($result)){
            $body.= "
        
        
            <div class='container '>
            <div class='card-body'>
            <img src='img/{$row["img"]}' class='card-img-top' alt='{$row["titel"]}'>
            <div class='card-body'>
              <h5 class='card-title'>{$row["titel"]}</h5>
              <p class='card-text'>{$row["ISBN_code"]} </p>
              <p class='card-text'>{$row["status"]} </p>
              <p class='card-text'>{$row["short_description"]} </p>
              <p class='card-text'>{$row["type"]} </p>
              <p class='card-text'>{$row["fname_Author"]} </p>
              <p class='card-text'>{$row["lname_Author"]} </p>
              <p class='card-text'>{$row["publish_date"]} </p>
              <p class='card-text'>{$row["name_Publisher"]} </p>
              <p class='card-text'>{$row["address_Publisher"]} </p>
              <p class='card-text'>{$row["size_Publisher"]} </p>
              <a href='show-media.php?id={$row["id"]}' class='btn btn-Success'>show media</a> 
              <a href='Update.php?id={$row["id"]}' class='btn btn-primary'>Update</a>
              <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
              
              </div>
              </div>
          ";
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
img{
  
  height: 150px

}

body {
background-image: url("https://cdn.pixabay.com/photo/2018/04/15/08/25/roses-3321098__340.jpg") no-repeat;
Background: "repeat No repeat;"
}
           
       </style>





<div class="container ">
        <div class="row row-cols-3 ">
            <?= $body; ?>
        </div>
    </div> 




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>






