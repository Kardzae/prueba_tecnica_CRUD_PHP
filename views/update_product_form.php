<?php require('../controllers/update_product.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
    <center>
    <h2 class="bg-light p-2">Update product</h2>
    </center>
    <form action="../controllers/update_product.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="name_update" value="<?= $_GET["p_name"] ?>">
        <?php 

        require('../model/connection.php');

        $name = $_GET["p_name"];
        
        $query_sql = $connection->query("SELECT * FROM epico_items WHERE name = '$name'");

        while($data = $query_sql->fetch_object()) {?>
        <div class="form-group p-2">
            <input type="text" class="form-control" name="name" 
            placeholder="name" value="<?= $data->name ?>"> 
        </div>
        <div class="form-group p-2">
            <input type="text" class="form-control" name="category" 
            placeholder="category" value="<?= $data->category ?>"> 
        </div>
        <div class="form-group p-2">
            <input type="text" class="form-control" name="cost_price" 
            placeholder="cost price" value="<?= $data->cost_price ?>"> 
        </div>
        <div class="form-group p-2">
            <input type="text" class="form-control" name="unit_price" 
            placeholder="unit price" value="<?= $data->unit_price ?>"> 
        </div>
        <?php } ?>
        <center>
            <input type="submit" class="btn btn-warning btn-block" name="update"
            value="Update Product">
            <a class="btn btn-primary" href="index.php">Home</a>
        </center>
    </form>
</div>
</div>


<!-- JavaScript CDN Bootstrap --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>