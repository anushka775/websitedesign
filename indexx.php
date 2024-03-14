<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailspage</title>
    <!-----bootstrap css link---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">"
    <!--font awesome link-->
    <script src="https://kit.fontawesome.com/e0279fdced.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">
<style>
    .footer{
       position: absolute;   
    }
    </style>


</head>
<body>
<!--navbar--->
<div class="container-fluid p-0">

<nav class="navbar navbar-expand-lg navbar-dark bg-success ">
  <div class="container-fluid">
    <img src="../photos/logoe.jpeg" alt="" class="logo2" height="3%" width="3%">
    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href=""class="nav-link"> Welcome Guest</a>
</li>
        </ul>
    </nav>
</div>
</nav>

<!----second child--->
<div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>

<!---third child--->
<div class="row">
<div class="col-md-12 bg-transparent p-1 d-flex align-items-center">
    <div class="p-3 p-2">
    <a href="#" ><img src="../photos/buy-1.jpg"
     alt="" class="admin_image" height="120px" width="150px"></a>  
<p class="text-dark text-center">Admin Name</p>
    </div>
    <div class="button text-center ">
        <!----button*10>a.nav-link.text-light.bg-info.my-1--->
        <button class="my-3"><a href="" class="nav-link text-dark bg-warning my-1">Insert Products</a></button>
        <button><a href="" class="nav-link text-dark bg-warning my-1">View Products</a></button>
        <button><a href="index.php?insert_categories" class="nav-link text-dark bg-warning my-1">Insert Categories</a></button>
        <button><a href="" class="nav-link text-dark bg-warning my-1">View Categories</a></button>
        <button><a href="index.php?insert_brands" class="nav-link text-dark bg-warning my-1">Insert Brands</a></button>
        <button><a href="" class="nav-link text-dark bg-warning my-1">View Brands</a></button>
        <button><a href="" class="nav-link text-dark bg-warning my-1">All orders</a></button>
        <button><a href="" class="nav-link text-dark bg-warning my-1">All payments</a></button>
        <button><a href="" class="nav-link text-dark bg-warning my-1">List Users</a></button>
        <button><a href="" class="nav-link text-dark bg-warning my-1">Logout</a></button>
    </div>
</div>

</div>
</div>



<!-----fourth child--->
<div class="container my-5">
    <?php
    if(isset($_GET["insert_categories"])){
        include('insert_categories.php');
    }

    if(isset($_GET["insert_brands"])){
        include('insert_brands.php');
    }
    ?>
</div>





<!---last child--->
<div class="bg-success p-3 text-center footer">
    <p>all rights reserved -designed -2024</p>
</div>
</div>
    


<!----bootsrap js link--->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>
    
</body>
</html>