<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product-Admin Dashboard</title>
    <!--bootstrap cSS link----->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">"
    <!--font awesome link-->
    <script src="https://kit.fontawesome.com/e0279fdced.js" crossorigin="anonymous"></script>


    <link rel="stylesheet"href="style.css">

</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center"> Insert Products</h1>
        <!-----form--->
        <form action="" method="post" enctype="multipart/form-data">
            <!----title---->
        <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form-label">Product title</label>
        <input type="text" name="product_title" id="product_title" class="form-control"
        placeholder="Enter Product title" autocomplete="off" required="required">
    </div>

    <!----description----->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_description" class="form-label">Product description</label>
        <input type="text" name="product_description" id="product_description" class="form-control"
        placeholder="Enter Product description" autocomplete="off" required="required">
</div>

<!-----keyword-->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keyword" class="form-label">Product description</label>
        <input type="text" name="product_description" id="product_description" class="form-control"
        placeholder="Enter Product description" autocomplete="off" required="required">
</div>
</form>   
</div>
</body>
</html>