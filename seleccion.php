<!--Archivo html para realizar la selección de medición -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección</title>
    <link rel="icon" type="image/png" href="img/list.png" />
    <!--Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet">
    
</head>

<body>
    <div class="p-3 mb-3 bg-dark text-white h3 " align="center">Seleccione el tipo de medición que desea realizar</div>
    <div class="card text-center mx-auto" style="width: 25rem;" align="center">
        <div class="card-header">
            <div class="card-body ">
                <div>
                    <button type="button" type="submit" class="btn btn-success" id="1" style="font-size: 17px;"
                        onclick="cargarData(1)"><i class="fas fa-temperature-high"></i> Obtener Temperatura</button>
                </div>
                <div class="mb-3"></div>
                <div>
                    <button type="button" type="submit" class="btn btn-outline-secondary" id="2"
                        style="font-size: 17px;" onclick="cargarData(2)"><i class="fas fa-heartbeat"></i> Oximetría y
                        Pulso</button>
                </div>
                <div class="mb-3"></div>
                <div>
                    <button type="button" class="btn btn-warning" id="3" style="font-size: 17px;" id="3"
                        onclick="cargarData(3)"><i class="fas fa-weight"></i> Medición de peso</button>
                </div>
                <div class="mb-3"></div>
                <div> <button type="button" class="btn btn-dark" id="4" style="font-size: 17px;"
                        onclick="cargarData(4)"><i class="fas fa-file-medical-alt"></i> Presión Arterial</button>
                </div>
                <div class="mb-3"></div>
                <div> <button type="button" class="btn btn-outline-danger" id="5" style="font-size: 17px;"
                        onclick="cargarData(5)"> <i class="fas fa-tint"></i> Medición glucosa </button> </div>
                <div class="mb-3"></div>
                <div> <button type="button" class="btn btn-outline-secondary" id="6" style="font-size: 17px;"
                        onclick="cargarData(6)"> <i class="fas fa-times"></i> Cerrar Medición </button> </div>
            </div>
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">NOTIFICACIÓN!</h4>
                <p> Despues de obtener cualquier medición se debe presionar el boton "Cerrar Medición"</p>
            </div>
        </div>
    </div>

    <!--Scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        function cargarData(id) {
            var url = 'envio_seleccion.php';
            $.ajax({
                type: 'post',
                url: url,
                data: 'id=' + id,
                success: function (response) {
                    alert(response)
                }

            });
            if (id == 1) {
                //window.location.href = "index.php";
            //window.open("index.php", "ventana1", "width=600,height=200,scrollbars=NO")
            // window.open("temperatura.php", '_blank');
            // win.focus();
            window.location.href = "temperatura.php";
            } else if (id == 2) {
             window.location.href = "oximetria.php";

            } else if (id == 3) {
             window.location.href = "peso.php";
            } else if (id == 4) {
                window.location.href = "presion.php";
            } else if (id == 5) {
                window.location.href = "glucosa.php";
            } else if (id == 6) {

            }
        }


    </script>

</body>

</html>
