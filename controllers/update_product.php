<?php
require('../model/connection.php');
// Validar que se haya presionado el botón de actualizar del formulario
if(!empty($_POST["update"])){
    // Validar que los campos no estén vacíos
    if(!empty($_POST["name"]) && !empty($_POST["category"]) && !empty($_POST["cost_price"]) && !empty($_POST["unit_price"])){
        // Obtener el campo name para actualizar el registro por medio de WHERE
        $pro_update_name = $_POST["name_update"];
        // Incialización de variables del producto para actualizar
        $pro_name = $_POST["name"];
        $pro_category = $_POST["category"];
        $pro_cost_price = $_POST["cost_price"];
        $pro_unit_price = $_POST["unit_price"];
        // Consulta sql para actualizar un registro de 
        $query_sql = $connection->query("UPDATE epico_items SET name='$pro_name', category='$pro_category', cost_price=$pro_cost_price, unit_price=$pro_unit_price WHERE name='$pro_update_name'");
        
        // validación de éxito de consulta
        if($query_sql==1){
            header("Location: http://localhost/CRUD_TEST/views/index.php");
        }else{
            echo("Algo ha ido mal");
        }
    }else{
        echo "No puede dejar campos vacíos en el formulario";
    }
}

?>