<?php
    require_once "db_connect.php";
    require_once "file_upload.php";

    if($_POST){
        $titel= $_POST["titel"];
        $ISBN_code = $_POST["ISBN_code"];
        $status = $_POST["status"];
        $short_description = $_POST["short_description"];
        $publish_date = $_POST["publish_date"];
        $type = $_POST["type"];
        $fname_Author = $_POST["fname_Author"];
        $lname_Author = $_POST["lname_Author"];
        $name_Publisher = $_POST["name_Publisher"];
        $address_Publisher = $_POST["address_Publisher"];
        $size_Publisher = $_POST["size_Publisher"];
        $img = file_upload($_FILES["img"]);

        $sql ="INSERT INTO media ( `titel`, `img`, `ISBN_code`, `status`, `short_description`, `publish_date`, `type`, `fname_Author`, `lname_Author`, `name_Publisher`, `address_Publisher`, `size_Publisher`) VALUES ('$titel','$img->fileName','$ISBN_code','$status','$short_description','$publish_date','$type','$fname_Author','$lname_Author','$name_Publisher','$address_Publisher','$size_Publisher')";

        if(mysqli_query($conn, $sql)){
            echo "Success <br> <a href='../index.php'>Home</a>";
        
        }else {
            echo "Error";
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
    <a class="navbar-brand" href="../index.php">Home</a>
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
            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../create.php">create</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
