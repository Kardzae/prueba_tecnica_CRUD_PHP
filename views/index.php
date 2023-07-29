<?php 
require('../model/connection.php');
require('../controllers/delete_product.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!--- CDN BOOTSTRAP FOR STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1 class="m-4 text-center">CRUD testing for Epico Software</h1>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body bg-light"> 
                    <!-- Form for register information -->
                    <form action="../controllers/register_product.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group p-2">
                            <input type="text" class="form-control" name="name" 
                            placeholder="name"> 
                        </div>
                        <div class="form-group p-2">
                            <input type="text" class="form-control" name="category" 
                            placeholder="category"> 
                        </div>
                        <div class="form-group p-2">
                            <input type="text" class="form-control" name="cost_price" 
                            placeholder="cost price"> 
                        </div>
                        <div class="form-group p-2">
                            <input type="text" class="form-control" name="unit_price" 
                            placeholder="unit price"> 
                        </div>
                        <div class="form-group p-2">
                            <label for="pic_filename" class="m-1">Picture</label>
                            <input type="file" class="form-control" name="pic_filename" 
                            placeholder="pic_filename"> 
                        </div>
                        <center>
                            <input type="submit" class="btn btn-success btn-block" name="save"
                            value="Save Product">
                        </center>
                        
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-body bg-light">
                    <center>
                    <h3>Products</h3>
                    </center>
                    
                    <div class="row">
                        <?php 
                        // Consulta para obtener datos de la tabla en la base de datos
                        $query_sql = $connection->query("SELECT * FROM epico_items");

                        // Ciclo para cada dato de respuesta de la consulta SQL Select
                        while($data = $query_sql->fetch_object()){ ?>
                            <!-- Creación para cada elemento Card por elemento de la tabla -->
                            <div class="card m-2" style="width: 18rem;">
                            <img src="<?=$data->pic_filename?>" class="card-img-top" alt="Product image" width="250px" height="250px">
                            <div class="card-body">
                                <h3 class="card-title"><?=$data->name?></h3>
                                <p class="card-text"><strong>Category:</strong> <?=$data->category?></p>
                                <p class="card-text"><strong>Cost price:</strong> <?=$data->cost_price?></p>
                                <p class="card-text"><strong>Unit price:</strong> <?=$data->unit_price?></p>
                                <a href="update_product_form.php?p_name=<?=$data->name?>" class="btn btn-primary">Edit</a>
                                <a href="index.php?pro_name=<?=$data->name?>&filename=<?= $data->pic_filename ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                        <?php 
                        } 
                        ?>
                    </div>
                   
                </div>
            </div>
        </div>


    <!-- CDN JavaScript for interation elements -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>