<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presion Arterial</title>
    <link rel="icon" type="image/png" href="img/presion-arterial" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet"> 
    <!-- Estilos -->
    <link rel="stylesheet" href="css/style.css" >
    </head>
<body>
<div class="container">
    <div class="card text-center">
    <div class="card-header">
    <div class="card-body"> 
    <div class="p-3 mb-2 bg-dark text-white h2"   align="center">Obtención de presión arterial</div>
    <div class="container">
  <div class="row">
    <div class="col-sm">
 <!-- aqui poner texto -->
 <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Consejo 1</div>
  <div class="card-body">
    <h5 class="card-title">Antes de medir la presión</h5>
    <p class="card-text">Se debe eliminar cualquier registro con el boton "Eliminar" para evitar cualquier lectura erronea. </p>
  </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="card text-dark bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Consejo 2</div>
  <div class="card-body">
    <h5 class="card-title">Uso del tensiómetro</h5>
    <p class="card-text">Se debe esperar alrededor de 50 segundos hasta que le tensiómetro de un valor.</p>
  </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header">Información</div>
  <div class="card-body">
    <h5 class="card-title">Consejo 3</h5>
    <p class="card-text"> Para iniciar el tensiómetro el paciente  debe presionar el boton On/Off</p>
  </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header">Información</div>
  <div class="card-body">
    <h5 class="card-title">Consejo 4</h5>
    <p class="card-text"> Cuando el tensiómetro muestre los datos en la pantalla lcd del propio LCD se debe presionar nuevamente para ver las medidas en esta página</p>
  </div>
</div>
    </div>


  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    <div class="col-sm">
    <div id="todolist">
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

                $sql = "DELETE FROM tabla";

                if($conexion->query($sql) === true){
                    //echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                }else{
                    die("Error al actualizar datos: " . $conexion->error);
                } 
            }

       
                    ?>
                    
                    <div id="div2" aria-label="Basic example"></div> 
                                 
                    <form method="POST" id="form_eliminar_" action="presion.php">
                    <div class="btn-group" role="group">
                    <button class="btn btn-danger" type="submit"  name="eliminar" >Eliminar</button>
                   <!-- <button type="button" class="btn btn-success"  onClick="document.location.reload();" >Actualizar</button>-->
                 </div>
                 </form>
                    <?php
                    
              
            $conexion->close();
        ?>
</div>

<div id="div_refresh" aria-label="Basic example"></div>
<script type="text/javascript" >
var d = new Date();
var m2 = d.getMonth() + 1;
var mesok = (m2 < 10) ? '0' + m2 : m2;
var mesok=new Array(12);
mesok[0]="Enero";
mesok[1]="Febrero";
mesok[2]="Marzo";
mesok[3]="Abril";
mesok[4]="Mayo";
mesok[5]="Junio";
mesok[6]="Julio";
mesok[7]="Agosto";
mesok[8]="Septiembre";
mesok[9]="Octubre";
mesok[10]="Noviembre";
mesok[11]="Diciembre";
var dia=new Array(7);
dia[0]="Domingo";
dia[1]="Lunes";
dia[2]="Martes";
dia[3]="Miercoles";
dia[4]="Jueves";
dia[5]="Viernes";
dia[6]="Sabado";

document.write('Fecha: '+dia[d.getDay()],', '+d.getDate(),' de '+mesok[d.getMonth()],' de '+d.getFullYear());
</script>
    </div>
    <div class="col-sm">
      <!-- aqui se ubica la tercera columna de la página -->
      <div class="card-header">
            <div class="card-body ">
                <div> <h5> Páginas de interes</h5></div>
                <div>
                    <button type="button" type="submit" class="btn btn-success" id="1" style="font-size: 17px;"
                        onclick="cargarData(1)"><i class="fas fa-file-pdf"></i> Manual de uso</button>
                </div>
                <div class="mb-3"></div>
                <div>
                    <button type="button" type="submit" class="btn btn-outline-warning" id="2"
                        style="font-size: 17px;" onclick="cargarData(2)"><i class="far fa-file-image"></i> Galeria de imágenes</button>
                </div>
                <div class="mb-3"></div>
                <div>
                    <button type="button" class="btn btn-info" id="3" style="font-size: 17px;" id="3"
                        onclick="cargarData(3)"><i class="fas fa-clipboard-list"></i> Tomar otra medida</button>
                </div>
                        </div>
        </div>

    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<!-- FOOTER -->
<div class="mt-4 pt-4 pb-4 footer">
<div class="container">
  <div class="row">
      <div class="col-lg-5 col-xs-12 about-company">
      <h4>Contexto</h4>
      <p class="pr-5 text-white-50"> Esta página adquiere el valor de la presión de un paciente</p>
      <p><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i>   </a><a href="#"><i class="fab fa-linkedin"></i></a></p>
    </div>
    
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Enlaces</h4>
        <ul class="m-0 p-0">
         <i class="fas fa-info-circle"></i><button type="button" onclick="cargarData(1)" class="btn btn-link">Acerca del Teleconsultorio</button>

        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Locaclización</h4>
      <p>Izamba Av Indoamerica</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(593) 962786608</p>
      <p><i class="fas fa-envelope"></i></i> sjimenez75802@gmail.com</p>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col copyright">
      <p class=""><small class="text-white-60 ">2021-Universidad Técnica de Ambato</small></p>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
        function cargarData(id) {
            if (id == 1) {
            window.location.href = "seleccion.html";
            } 
            
        }


    </script>

<SCRIPT>
function aReload() {
location.reload(true);
}
function startReload() {
setTimeout("aReload()", 1000);
}
</SCRIPT>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
		 $("#div_refresh").load("hora.php");
        setInterval(function() {
            $("#div_refresh").load("hora.php");
        }, 1000);
    });
 
</script>
<script>
    $(document).ready(function(){
		 $("#div2").load("obtener10.php");
        setInterval(function() {
            $("#div2").load("obtener10.php");
        }, 1000);
    });
 
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script type="text/javascript">
        function cargarData(id) {
            if (id == 1) {
                //window.location.href = "seleccion.php";
            //window.open("index.php", "ventana1", "width=600,height=200,scrollbars=NO")
            window.open("pdf.php", '_blank');
            win.focus();
            } else if (id == 2) {
                window.location.href = "temperatura.php";

            } else if (id == 3) {
                
                window.location.href="seleccion.php"; 
                alert('Cuando ingrese a la página de selección presione el boton "Cerrar Medición"'); 
            } 
        }


    </script>

</body>
</html>
