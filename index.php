<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     
</head>
<body background="img/luces.jpg">
    
    <header class="site-header inicio">
        <div class="contenedor contenido-header contenedorrr5">
            <div class="barra">
                <div class="form-header">
                    <font class="form-tittle"><b>MK<span>Hotel's</b></span></font>
                </div>

                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/barras.svg" alt="Icono Menu">
                    </a>
                </div>

                <nav  class="navegacion">
                    <a href="index.html"><b>Inicio</b></a>
                    <a href="#nosotros"><b>Nosotros</b></a>
                    <a href="#anuncios"><b>Habitaciones</b></a>
                    <a href="#blog"><b>Eventos</b></a>
                    <a href="contacto.php"><b>Reservacion</b></a>
                </nav>

            </div>
            <h1>Hotel 5 ✭✭✭✭✭ <br>
                Quedate Con MK<span class="nombre">hotel's</span></h1>
        </div> <!-- contenedor -->
    </header>
    <scroll-container>
    <scroll-page id="nosotros">
    <div class="imagen-contacto2">
        <section class="contenedorrr">
        <div class="contenedor contenido-contacto">
            
    <br>
    <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Más Sobre Nosotros<br></h2>

        <div class="iconos-nosotros">
            <div >
    
                
            </div>

            <div class="icono">
                
               
                <p>
                El Hotel MKhotel's Miami goza de vistas hacia una playa de arena blanca y aguas turquesas, ideal para disfrutar de unos días de relax o simplemente para escaparte unas horas a nuestro centro de wellness. El hotel cuenta con el servicio de Todo Incluido 24h, por lo que podrás tomar baños de sol disfrutando de las tres piscinas y jacuzzi mientras te refrescas en los diferentes bares de la terraza.</p>
                <div>
                    <a href="nosotros.html" class="boton boton-verde">Ver mas</a>
                </div>
            </div>

            <div >
                
            </div>
        </div>
    </section><br>
    <section class="contenedor seccion">
        

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="img/icono1.png" alt="Icono Seguridad" width="80">
                
                
            </div>

            <div class="icono">
                <img src="img/icono2.png" alt="Icono Mejor Precio" width="80">
                
               
            </div>

            <div class="icono">
                <img src="img/icono3.png" alt="Icono a Tiempo" width="80">
              
                
            </div>
            <div class="icono">
                <img src="img/icono9.png" alt="Icono Seguridad" width="80">
             
            </div>

            <div class="icono">
                <img src="img/icono10.png" alt="Icono Mejor Precio" width="80">
             
            </div>

            

 </p>
            </div>
        </div>
    </section>
        </div>
    </section>
    </section>
    </div>


    </div></scroll-page>
   








<?php
echo "<table  class='table table-striped table-dark' style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservacion";

try {
  $conn2 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt2 = $conn2->prepare("SELECT * FROM categoria_habitacion");
  $stmt2->execute();

  // set the resulting array to associative
  $result2 = $stmt2->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt2->fetchAll())) as $k2=>$v2) {
    echo $v2;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn2 = null;
echo "</table>";
?>

























<table   class='table table-striped table-dark' align="center" width="100%" bgcolor="white
"><tr><td align="center"> 

<?php
echo "<table class='table table-striped table-dark'>"; 


class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
    return "<td>" . parent::current() . "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventos";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT 

    nombreEvento,
    fecha,
    hora,
    lugar,
    publico,
    descripcion FROM evento");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?></td></tr></table>
    
        
        <div class="imagen-contacto">
                <section class="contenedorrr4">
                <div class="contenedor contenido-contacto">     
            <br>
            <section>
        <div class="contenedor contenido-contacto">
            <h2><br>Reserva ahora!!</h2>
            <p>Reserva tu propia habitacion para estas vacaciones!</p>
            <a href="contacto.html" class="boton boton-amarillo">Reservar</a>
        </div>
    </section>
    </div>



            
                </div>
                </section>
               </div>

    <div class="imagen-contacto2">
        <section class="contenedorrr2">
        <div class="contenedor contenido-contacto">
            
    <br>
    <section class="contenedor seccion">
        

        <div class="iconos-nosotros"><br>
            <div class="icono"><br><br>
                <img src="img/icono1.jpeg" width="120"alt="Icono Seguridad">
                <h3>Amables, limpieza y <br>ubicación<br>✭✭✭✭✭</h3>
                <p>Pasamos excelentes días en el Hotel, todos muy amables, en especial Stephan, las habitaciones muy limpias y bonitas, la ubicación formidable.</p>
            </div>

            <div class="icono"><br><br>
                <img src="img/icono2.jpeg" width="120"alt="Icono Mejor Precio">
                <h3>Verdadero oasis para dormir con mucho silencio.<br>✭✭✭✭✭</h3>
                <p>Muy agradable, silencioso para un buen descanso, buena ubicacion.</p>
            </div>

            <div class="icono"><br><br>
                <img src="img/icono3.jpeg" width="120" = alt="Icono a Tiempo">
                <h3>Excelentes instalaciones y ubicación<br>✭✭✭✭✭</h3>
                <p>Muy recomendable, todo excelente, las habitaciónes nuevas y las camas son cómodisimas, todo cerca y la ubicación es de lo mejor.<br><br></p>
            </div>
        </div>
    </section><br><br><br>
    </section>
    </div>


    </div>
    
<table style="background-color: #f1f1f1" width="100%" >
    <tr>
        <td width="100%">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3702.014072609876!2d-102.32513348568679!3d21.895533862999898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429eeea71d40611%3A0x279a4aeace17e696!2sCBTis%20No.%20168!5e0!3m2!1ses-419!2smx!4v1585382487266!5m2!1ses-419!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""  tabindex="0"></iframe>
        </td>
    
        </table>
            </center>
        </td>
    </tr>
</table>
    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="index.html"><b>Home</b></a>
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html"><b>Suites</b></a>
                <a href="blog.html"><b>Eventos</b></a>
                <a href="contacto.php"><b>Contacto</b></a>
                <a href="empleo.php"><b>Empleo</b></a>
            </nav>
            <p class="copyright">By: Imuris Garcia, Kristina Lopez, Rafael Martinez, Ernesto Barcenas &copy; </p>
        </div>
    </footer>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>