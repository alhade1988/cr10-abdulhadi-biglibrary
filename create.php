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



<div class="container">
        <h1>Add Product</h1>
        <form action="actions/a_create.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="titel" class="form-label">titel</label>
                <input type="text" class="form-control" id="titel" aria-describedby="emailHelp" name="titel" placeholder="Type product titel">
            </div>
            <div class="mb-3">
                <label for="fname_Author" class="form-label">fname_Author</label>
                <input type="text" class="form-control" id="fname_Author" aria-describedby="emailHelp" name="fname_Author" placeholder="Type product fname_Author">
            </div> 
            <div class="mb-3">
                <label for="lname_Author" class="form-label">lname_Author</label>
                <input type="text" class="form-control" id="lname_Author" aria-describedby="emailHelp" name="lname_Author" placeholder="Type product lname_Author">
            </div> 
            <div class="mb-3">
                <label for="name_Publisher" class="form-label">name_Publisher</label>
                <input type="text" class="form-control" id="name_Publisher" aria-describedby="emailHelp" name="name_Publisher" placeholder="Type product name_Publisher">
            </div> 
            <div class="mb-3">
                <label for="address_Publisher" class="form-label">address_Publisher</label>
                <input type="text" class="form-control" id="address_Publisher" aria-describedby="emailHelp" name="address_Publisher" placeholder="Type product address_Publisher">
            </div> 
            <div class="mb-3">
                <label for="short_description" class="form-label">short_description</label>
                <input type="text" class="form-control" id="short_description" aria-describedby="emailHelp" name="short_description" placeholder="Type product short_description">
            </div> 
            <div class="mb-3" >
            
                <label for="publish_date" class="form-label">publish_date</label>
                <input type="date" class="form-control" id="publish_date" aria-describedby="emailHelp" name="publish_date" placeholder="Type product publish_date">
            </div> 
            <div class="mb-3">
            <p>status</p>
            <select name="status" id="status">
            <option value="">--select--</option>
            <option value="available">available</option>
            <option value="reserved">reserved</option>
            </select>
          </div> 

<div class="mb-3">
            <p>type</p>

            <select name="type" id="type">
            <option value="">--select--</option>
            <option value="book">book</option>
            <option value="CD">CD</option>
            <option value="DVD">DVD</option>
            </select>

</div> 

<div class="mb-3">
            <p>size_Publisher</p>

            <select name="size_Publisher" id="size_Publisher">
            <option value="">--select--</option>
            <option value="big">big</option>
            <option value="medium">medium</option>
            <option value="small">small</option>
            </select>
</div> 

   <div class="mb-3">
                <label for="ISBN_code" class="form-label">ISBN_code</label>
                <input type="number" class="form-control" id="ISBN_code" name="ISBN_code" placeholder="Type the ISBN_code">
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">img</label>
                <input type="file" class="form-control" id="img" name="img">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>