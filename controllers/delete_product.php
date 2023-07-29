<?php 

if(!empty($_GET["pro_name"]) && !empty($_GET["filename"])){
    $product_name = $_GET["pro_name"];
    $filename_path = $_GET["filename"];
    // Separar la ruta de imagen del servidor en un array de posiciones por medio del delimitador "/"
    $filename = explode("/", $filename_path);
    // Consulta SQL para borrar el registro de un producto
    $query_sql = $connection->query("DELETE FROM epico_items WHERE name = '$product_name'");

    // Borrar archivo de imagen de la ruta del servidor
    unlink("../uploads/".$filename[5]);
    // Validar si la consulta SQL tuvo éxito
    if($query_sql==1){
        // Redireccionamiento a la ruta principal en caso de ser exitoso
        header("Location: http://localhost/CRUD_TEST/views/index.php");
    }else{
        echo "Algo ha ocurrido";
    }
}


?>