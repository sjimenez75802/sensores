<?php
$enlace = mysqli_connect("localhost", "root", "123",
"mediciones");
/* verificar la conexión */
if (mysqli_connect_errno()) {
 printf("Conexión fallida: %s\n", mysqli_connect_error());
 exit();
}
$consulta = "SELECT dato FROM seleccion ORDER by id DESC LIMIT 0,1";
if ($resultado = mysqli_query($enlace, $consulta)) {
 /* obtener array asociativo */
 while ($row = mysqli_fetch_assoc($resultado)) {
 printf ("%s%s%d%s\n","*","datos=", $row["dato"],";");
 }
 /* liberar el conjunto de resultados */
mysqli_free_result($resultado);
}

/* cerrar la conexión de base de datos */
mysqli_close($enlace);
