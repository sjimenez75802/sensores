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

$sql = "SELECT `id`, `Pulso`, `SpO2` FROM `obtencion_pulso_oxi` ORDER BY ID DESC LIMIT 1";
$resultado = $conexion->query($sql);

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        ?>
        <div>
            
            <form  class="h5" class="method=" action="" method="POST" name="form">
            <label style="color:#0000FF" > Pulso: </label> <?php echo $row['Pulso'];?> <label >
            BPM &nbsp </label>
             
        </form>

        <form  class="h5" class="method=" action="" method="POST" name="form">
            <label style="color:#322A67" >Oxígeno en la sangre: </label> <?php echo $row['SpO2'];?> <label >
            % &nbsp </label>
             
        </form>
       
        </div>
        <?php
        
    }
}
$conexion->close();

?>
