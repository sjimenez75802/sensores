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
        //echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
    }else{
        die("Error al actualizar datos: " . $conexion->error);
    } 
}

$sql = "SELECT `id`, `temp_a`, `temp_c` FROM `obtencion_temperatura` ORDER BY ID DESC LIMIT 1";
$resultado = $conexion->query($sql);

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        ?>
        <div>
            <form  class="h6" id="pago1" class="method=" action="" method="POST" name="form">
            <span class="border border-dark"> <label > <FONT SIZE=4> Temperatura Corporal: </font> 
            </label> <FONT SIZE=4> <?php echo $row['temp_c'];?> </font> <label >
            <FONT SIZE=4> °C &nbsp</font> </label> </span> 
            <input type="hidden" id="dos" name="dos" value="<?php echo $row['temp_c']; ?>">   
        </form>
       
        </div>
        <?php
        
    }
}
$conexion->close();

?>
<script> 
var total = document.getElementById('dos').value;
function check() {
		if ( total < 36) {
			pago1.style.color = '#000FF0';
		} else if (total >36.1 && total <37.5 ){
			pago1.style.color = '#32B006';
		} else if (total > 37.6){
            pago1.style.color = '#AB070C'; 
	}}
	pago1.addEventListener('blur', check);
	check();
</script>
