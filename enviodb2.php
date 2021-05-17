<?php
$servidor = "localhost";
$nombreusuario = "root";
$password = "123";
$db = "mediciones";
$conexion = new mysqli($servidor, $nombreusuario, $password, $db);
 if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }

if(isset($_POST['hr'])){
$har = $_POST['hr'];
$Sp2 = $_POST['S2'];
$sql ="INSERT INTO `obtencion_pulso_oxi` (`id`,`Pulso`,`SpO2`) VALUES (NULL, '$har','$Sp2')";
    if($conexion->query($sql) === true){
//echo "Datos ingresados correctamente.";
    }else{
                    die("Error al actualizar datos: " . $conexion->error);
                }
            }
            
?>
