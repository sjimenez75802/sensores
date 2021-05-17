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
$sql = "SELECT `id`, `dato` FROM `tabla` ORDER BY ID DESC LIMIT 8";
//$sql = "SELECT * from tabla LIMIT 10";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado -> fetch_assoc()) {
       
        $a[] = $row["dato"];
    }
    $resultado -> free_result();
  } 
       $conexion->close();?>
<div>
<form  class="h5" class="method=" action="" method="POST" name="form">
<label style="color:#0000FF" > Presión Sistólica </label> <?php  echo $a=112;?> <label >
°mm/Hg &nbsp </label>
</form>
</div>
<div>
<form  class="h5" class="method=" action="" method="POST" name="form">
<label style="color:#0000FF" > Presión Diastólica </label> <?php  echo $b=92;?> <label >
°mm/Hg &nbsp </label>
</form>
</div>
<div>
<form  class="h5" class="method=" action="" method="POST" name="form">
<label style="color:#0000FF" > Pulso </label> <?php  echo $c=80;?> <label >
°PUL/min &nbsp </label>
</form>
</div>    
<?php  
?>
