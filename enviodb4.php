<?php
$servidor = "localhost";
$nombreusuario = "root";
$password = "123";
$db = "mediciones";
$conexion = new mysqli($servidor, $nombreusuario, $password, $db);
 if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }

   if(isset($_POST['dato'])){
    $datos = $_POST['dato'];
    $sql ="INSERT INTO `tabla` (`id`,`dato`) VALUES (NULL, '$datos')";
    if($conexion->query($sql) === true){
//echo "Datos ingresados correctamente.";
    }else{
                    die("Error al actualizar datos: " . $conexion->error);
                }
            }
?>
