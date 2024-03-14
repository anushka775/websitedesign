<!----connect file--->
<?php
include("includes/connect.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <!--bootstrap cSS link----->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">"
    <!--font awesome link-->
    <script src="https://kit.fontawesome.com/e0279fdced.js" crossorigin="anonymous"></script>


    <link rel="stylesheet"href="style.css">


</head>
<body>
    <!--navbar--->
    <div class="container-fluid p-0">
        <!---first child-->

<nav class="navbar navbar-expand-lg navbar-dark bg-success ">
  <div class="container-fluid">
    <img src="photos\logoe.jpeg" alt="" class="logo">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href=""><i class="fa-solid fa-cart-shopping"></i>"<sup>1</sup></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100</a>
        </li>
        
</ul> 
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-----second child---->
<nav class="navbar navbar-expand-lg navbar-toggler bg-info.bg-gradient">
    <ul class="navbar-nav me-auto"></ul>
<li class="nav-item">
     <a class="nav-link" href="#"> Welcome Guest</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Login</a>
</li>
</ul>
</nav>


<!---third child--->
<div class ="bg-light navbar-expand-lg">
<h3 class="text-center">Lastest Updates</h3>
</div>

<!----fourth child--->
<div class="row">
    <div class="col md-10" >
        <!-----products---->
        <div class="row">
            <div class="col-md-3 mb-2">
            <div class="card">
  <img src="buy-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text 
        to build on the card title and make up 
        the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
</div>



        </div>
            <div class="col-md-3 mb-2">
            <div class="card">
  <img src="buy-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build
         on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
</div>



            <div class="col-md-3 mb-2">
            <div class="card">
  <img src="buy-3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build 
        on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
    </div>


             <div class="col-md-3 mb-2">
            <div class="card">
  <img src="buy-3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
</div>


           <div class="col-md-3 mb-2">
            <div class="card">
  <img src="buy-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
</div>


       <div class="col-md-3 mb-2">
            <div class="card">
  <img src="buy-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
</div>  
    </div>
</div>


<!----side nav--->

    <div class=" col md-2 bg-secondary p-0">
      <!--brands to be displayed--->
       <ul class="navbar-nav me-auto text-center"> 
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Brands</h4></a>
        </li>


        <?php
$select_brands="Select * from `branch`";
$select_brands=mysqli_query($con,$select_brands);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($select_brands)){
  $brand_title=$row_data["brand_title"];
  $brand_id=$row_data["brand_id"];
  echo "<li class='nav-item'>
  <a href='index.php?brand=$brand_id' class='nav-link text-light'> $brand_title </a>
  </li>";
}

?>

</ul>


    <!---categories to be displayed--->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>categories</h4></a>
        </li>

     
        <?php
$select_categories="Select * from `category`";
$select_categories=mysqli_query($con,$select_categories);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($select_categories)){
  $category_title=$row_data["category_title"];
  $category_id=$row_data["category_id"];
  echo "<li class='nav-item'>
  <a href='index.php?category=$category_id' class='nav-link text-light'> $category_title </a>
  </li>";
}

?>

</ul>   
    





<!---last child--->
<div class="bg-success p-3 text-center">
    <p>all rights reserved -designed -2024</p>
</div>
</div>
    
</body>
</html>









<!----bootsrap js link--->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>