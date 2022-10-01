<?php
    require_once "actions/db_connect.php";

    if($_GET["id"]){
        $id = $_GET["id"];
        $sql = "SELECT * FROM media WHERE id = {$id} ";
        $result = mysqli_query($conn, $sql);

        $data = mysqli_fetch_assoc($result);

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
    <a class="navbar-brand" href="index.php">create</a>
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

<style type= "text/css">
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 70% ;
           }    
           .img{
               width: 70px !important;
                height: 70px !important;
           }    
       </style>

<fieldset>

<h1 class="text-center">Are you sure you want to delete this Book (<?= $data["titel"] ?>) <img style="border-radius: 50%; width: 150px" src="img/<?= $data["img"] ?>"></h1>
   

    <div class="text-center">
        <a href="index.php" class="btn btn-danger">No</a> 
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" class="btn btn-success" value="Yes">
        </form>
    </div></fieldset>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>


