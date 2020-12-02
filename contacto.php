<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable-no,maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css">
</head>
<body BACKGROUND="img/headerr.jpg">

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div class="form-header">
                        <font class="form-tittle"><b>MK<span>Hotel's</b></span></font>
                    </div>
                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/barras.svg" alt="Icono Menu">
                    </a>
                </div>

                <nav id="navegacion" class="navegacion">
                       <a href="index.php"><b>Inicio</b></a>
                    <a href="index.php"><b>Nosotros</b></a>
                    <a href="index.php"><b>Habitaciones</b></a>
                    <a href="index.php"><b>Eventos</b></a>
                    <a href="galeria.html"><b>Galeria</b></a>
                    <a href="contacto.php"><b>Reservacion</b></a>
                </nav>
            </div>
        </div> <!-- contenedor -->
    </header>


    
    
    
    <div class="contenedorr">
        <form action="" class="form" method="post">
            <div class="form-header">
                <h1 class="form-tittle">R<span>eservación</span></h1>
            </div>

            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" id="nombre" class="form-input" placeholder="Escriba su nombre" name="nombre">

            <label for="telefono" class="form-label">Telefono:</label>
            <input type="tel" id="telefono" class="form-input" min="0" name="telefono">

            <label for="correo" class="form-label">Correo Electronico:</label>
            <input type="email" id="correo" class="form-input" placeholder="Escriba su correo electronico" name="correo">
            <label for="idCategoria" class="form-label">Tipo de habitacion</label>
            <select id="idCategoria"class="form-input" name="idCategoria">
                <option value="" disabled selected>--seleccione--</option>
                <option value="habitacion1">penthouse suite vista al mar</option>
                <option value="habitacion2">queen room con vista parcial al mar</option>
                <option value="habitacion3">king room con acceso auditivo</option>
                <option value="habitacion4">two bedroom suite con cocina vista a la ciudad</option>
                <option value="habitacion5">queen room de facil movilidad</option>
                <option value="habitacion6">premire suite frente a la ciudad</option>

            </select>
            
            <label for="entrada" class="form-label">Fecha de reservacion de entrada:</label>
            <input type="date" id="entrada" class="form-input" name="entrada">

            <label for="salida" class="form-label">Fecha de reservacion de salida:</label>
            <input type="date" id="salida" class="form-input" name="salida">

            <label for="idPago" class="form-label">Forma de pago</label>
            <select id="idPago"class="form-input" name="idPago">
                <option value="" disabled selected>--seleccione--</option>
                <option value="1">efectivo</option>
                <option value="2">Tarjeta de credito</option>
                <option value="3">Tarjeta de debito</option>
            </select>
            
            
            <input type="submit" class="btn-submit" value="Reservar" name="reservar">

        </form>
    </div>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="index.php"><b>Inicio</b></a>
                <a href="index.php"><b>Nosotros</b></a>
                <a href="index.php"><b>Habitaciones</b></a>
                <a href="index.php"><b>Eventos</b></a>
                <a href="galeria.html"><b>Galeria</b></a>
                <a href="contacto.php"><b>Reservacion</b></a>
                
            </nav>
            <p class="copyright">By: Imuris Garcia, Kristina Lopez, Ernesto Barcenas &copy; </p>
        </div>
    </footer>
    <?php
        if(isset($_POST['reservar']))
    {   
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $entrada = $_POST['entrada'];
        $salida = $_POST['salida'];
        $idCategoria=$_POST['idCategoria']
        $idPago = $_POST['idPago'];


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "reservacion";


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO reservacion (idReservacion, nombre, telefono, correo, entrada, salida,idcategoria,idPago)
        VALUES ('','$nombre', '$telefono', '$correo', '$entrada', '$salida','','')";

        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

       
</body>
</html>