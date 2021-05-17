<?php
$servidor = "localhost";
$nombreusuario = "root";
$password = "123";
$db = "mediciones";
$conexion = new mysqli($servidor, $nombreusuario, $password, $db);
 if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }

   if(isset($_POST['glucosa'])){
    $glucosa= $_POST['glucosa'];
    $sql ="INSERT INTO `obtencion_glucosa` (`id`,`glucosa`) VALUES (NULL, '$glucosa')";
    if($conexion->query($sql) === true){
//echo "Datos ingresados correctamente.";
    }else{
                    die("Error al actualizar datos: " . $conexion->error);
                }
            }
?>
