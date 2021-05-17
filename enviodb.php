<?php
$servidor = "localhost";
$nombreusuario = "root";
$password = "123";
$db = "mediciones";
$conexion = new mysqli($servidor, $nombreusuario, $password, $db);
 if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }

   if(isset($_POST['temp_a'])){
    $temp = $_POST['temp_a'];
    $temp1 = $_POST['temp_c'];
    $sql ="INSERT INTO `obtencion_temperatura` (`id`,`temp_a`,`temp_c`) VALUES (NULL, '$temp','$temp1')";
    if($conexion->query($sql) === true){
//echo "Datos ingresados correctamente.";
    }else{
                    die("Error al actualizar datos: " . $conexion->error);
                }
            }
?>
