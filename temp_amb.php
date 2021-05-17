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

    $sql = "DELETE FROM tabla order by id DESC limit 5";

    if($conexion->query($sql) === true){
        
    }else{
        die("Error al actualizar datos: " . $conexion->error);
    } 
}

$sql = "SELECT `id`, `temp_a` FROM `obtencion_temperatura` ORDER BY ID DESC LIMIT 1";
$resultado = $conexion->query($sql);

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        ?>
        <div>
            
            <form  class="h6" id="pago" class="method=" action="" method="POST" name="form">
            <label > <FONT SIZE=2> Temeperatura Ambiente: </font> 
            </label> <FONT SIZE=2> <?php echo $row['temp_a'];?> </font> <label >
            <FONT SIZE=2> °C &nbsp </font> </label>
            <input type="hidden" id="uno" name="uno" value="<?php echo $row['temp_a']; ?>">    
        </form>
       
        </div>
        <?php
        
    }
}
$conexion->close();

?>
<script> 
var total = document.getElementById('uno').value;
var x= 25;
function check() {
		if ( total > 30) {
			pago.style.color = '#FF0000' ;
		} else {
			pago.style.color = '#000';
		}
	}
	pago.addEventListener('blur', check);
	check();
</script>
