<?php
//Este Archivo sirve para subir los datos enviados desde seleccion.html a base de datos 
$servidor = "localhost";//base de datos
$nombreusuario = "root";//usuario
$password = "123";//clave
$db = "mediciones";//nombre de la base de datos
$conexion = new mysqli($servidor, $nombreusuario, $password, $db);
 if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }
if(isset($_POST['id'])){  //función isset para poder recibir el metodo POST
$llave = $_POST ['id'];
$sql ="INSERT INTO `seleccion` (`id`, `dato`) VALUES (NULL,'$llave')";
if($conexion->query($sql) === true){
    echo "LEER LA NOTIFICACIÓN DE ABAJO id =";
    echo $llave;
}else{
die("Error al actualizar datos: " . $conexion->error);
}
}

$conexion->close();
?>
