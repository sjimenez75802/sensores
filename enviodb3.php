<?php
$servidor = "localhost";
$nombreusuario = "root";
$password = "123";
$db = "mediciones";
$conexion = new mysqli($servidor, $nombreusuario, $password, $db);
 if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }

   if(isset($_POST['peso'])){
    $peso = $_POST['peso'];
    $sql ="INSERT INTO `obtencion_peso` (`id`,`peso`) VALUES (NULL, '$peso')";
    if($conexion->query($sql) === true){
//echo "Datos ingresados correctamente.";
    }else{
                    die("Error al actualizar datos: " . $conexion->error);
                }
            }
            
?>