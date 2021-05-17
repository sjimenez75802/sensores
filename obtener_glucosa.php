<?php

//Conexión a la BD
$servidor = "localhost";
$nombreusuario = "root";
$password = "123";
$db = "mediciones";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if($conexion->connect_error){
    die("Conexión fallida: " . $conexion->connect_error);
}

//Obtención de datos de tabla
if(isset($_POST['eliminar'])){
    $id = $_POST['eliminar'];

    $sql = "DELETE FROM obtencion_glucosa order by id DESC limit 5";

    if($conexion->query($sql) === true){
        //echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
    }else{
        die("Error al actualizar datos: " . $conexion->error);
    } 
}

$sql = "SELECT `id`, `glucosa` FROM `obtencion_glucosa` ORDER BY ID DESC LIMIT 1";
$resultado = $conexion->query($sql);

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        ?>
        <div>
            
            <form  class="h5" class="method=" action="" method="POST" name="form">
            <label style="color:#0000FF" > Glucosa </label> <?php echo $row['glucosa'];?> <label >
            °mg/dL &nbsp </label>
             
        </form>
       
        </div>
        <?php
        
    }
}
$conexion->close();

?>
