<!----connect file--->
<?php
include("includes/connect.php");
include("functions/common_function.php");
session_start();


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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i>"<sup>1</sup></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: <?php  total_cart_price(); ?> /-</a>
        </li>
        
</ul> 
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search"
         aria-label="Search" name="search_data">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-----second child---->
<nav class="navbar navbar-expand-lg navbar-toggler bg-info.bg-gradient">
    <ul class="navbar-nav me-auto"></ul>
    <?php
    if(!isset($_SESSION['username'])) {
echo"<li class='nav-item'>
     <a class='nav-link' href='#'> Welcome Guest</a>
</li>";
 
    }else{
echo"<li class='nav-item'>
<a class='nav-link' href='#'>Welcome" .$_SESSION['username']."</a>
</div>";
    }



if(!isset($_SESSION['username'])) {
 echo" <li class='nav-item'>
    <a class='nav-link' href='./users_area/user_login.php'>Login</a>
</li>";

}else{
    echo" <li class='nav-item'>
       <a class='nav-link' href='./users_area/logout.php'>Logout</a>
   </li>";

}

?>


</ul>
</nav>


<!---third child--->
<div class ="bg-light navbar-expand-lg">
<h3 class="text-center">Lastest Updates</h3>
</div>

<!----fourth child--->
<div class="row px-1">
    <div class="col-md-10" >
        <!-----products---->
        <div class="row">

        <!-----recommended system----->





        

<!----fetching products---->



        <?php

        //calling function
        get_all_products();
       get_unique_categories();
       get_unique_brands();
        
        
        ?>

        
        


           <!--- <div class="col-md-3 mb-2">
            <div class="card">
  <img src="./photos/buy-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text 
        to build on the card title and make up 
        the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
     </div>
       </div> --->
    

      <!-----row end--->
    </div>
    <!----column end---->
  </div>
            



           




           
       

<!----side nav--->

    <div class=" col md-2 bg-secondary p-0">
      <!--brands to be displayed--->
       <ul class="navbar-nav me-auto text-center"> 
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Brands</h4></a>
        </li>


        <?php
getbrands();

?>
       </ul>




<div class=" col md-2 bg-secondary p-0">
    <!---categories to be displayed--->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
        </li>

     
        <?php
getcategories() ;

?>

</ul>   
    
    </div>
</div>




<!---last child--->
<!----include footer--->
<?php include('includes/footer.php')?>

</div>








<!----bootsrap js link--->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>

</body>
</html>