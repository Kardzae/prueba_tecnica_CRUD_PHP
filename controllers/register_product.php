<?php
require('../model/connection.php');

// Validar si el botón del formulario fué presionado
if(!empty($_POST["save"])){
    // Validar que no estén vacíos los campos del formulario
    if(!empty($_POST["name"]) && !empty($_POST["category"]) && 
        !empty($_POST["cost_price"]) && !empty($_POST["unit_price"] && isset($_FILES["pic_filename"]))){
        
        //Inicialización de variables textuales:
        $product_name = $_POST["name"];
        $product_category = $_POST["category"];
        $product_cost_price = $_POST["cost_price"];
        $product_unit_price = $_POST["unit_price"];
        // Inicialización de variables de archivo
        $product_pic_file = $_FILES["pic_filename"];
        $filename = $product_pic_file["name"];
        $mimetype = $product_pic_file["type"];
        
        // Crear directorio
        if(!is_dir("../uploads")){
            // Crear el directorio y establecer permisos hacia éste
            mkdir("../uploads", 0777);
        }
        // Mover archivo a directorio
        move_uploaded_file($product_pic_file["tmp_name"], "../uploads/".$filename);

        // Consulta SQL para registrar un producto
        $query_sql = $connection->query("INSERT INTO epico_items(name, category, cost_price, unit_price, pic_filename) VALUES('$product_name', '$product_category', $product_cost_price, $product_unit_price, 'http://localhost/CRUD_TEST/uploads/$filename')");
        if($query_sql == 1){
            // Redireccionamiento a la ruta principal de la página en el caso de ser exitoso
            header("Location: http://localhost/CRUD_TEST/views/index.php");
        }else{
            echo "algo ha ocurrido";
        }
    }else{
        echo "Todo mal!";
    }
}

?>