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
<body background="img/lucess.jpg">
    
    <header class="site-header inicio">
        <div class="contenedor contenido-header ">
            <div class="barra">
                <div class="form-header">
                    <font class="form-tittle"><b>MK<span >Hotel's</b></span></font>
                </div>

                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/barras.svg" alt="Icono Menu">
                    </a>
                </div>

                <nav  class="navegacion">
                    <a href="index.php"><b>Inicio</b></a>
                    <a href="#nosotros"><b>Nosotros</b></a>
                    <a href="#anuncios"><b>Habitaciones</b></a>
                    <a href="#blog"><b>Eventos</b></a>
                    <a href="galeria.html"><b>Galeria</b></a>
                    <a href="contacto.php"><b>Reservacion</b></a>
                    
                    
                </nav>

            </div>
            <h1 style="font-size: 4rem;">Hotel 5 ✭✭✭✭✭ <br>
                Quedate Con MK<span class="nombre">hotel's</span></h1>
        </div> <!-- contenedor -->
    </header>
    <scroll-container>
    <scroll-page id="nosotros">
    <div style="background:white;">
        <section class="contenedorrr">
        <div class=" contenido-contacto">
    <br>
    <section class="seccion">
        <h2 class="fw-300 centrar-texto"style="font-size: 5rem; color: white;"><br>Más Sobre Nosotros<br><br></h2>

        <div class="iconos-nosotros">
            <div >
    
                
            </div>

            <div class="icono" style="color: white;">
                
               
                <p>
                El Hotel MKhotel's Miami goza de vistas hacia una playa de arena blanca y aguas turquesas, ideal para disfrutar de unos días de relax o simplemente para escaparte unas horas a nuestro centro de wellness. El hotel cuenta con el servicio de Todo Incluido 24h, por lo que podrás tomar baños de sol disfrutando de las tres piscinas y jacuzzi mientras te refrescas en los diferentes bares de la terraza.</p>
                <div>
                    <a href="#" class="boton boton-verde">Ver mas</a>
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
             
            </div><br>

            

 </p>
            </div>
        </div><br><br><br><br>
    </section>
        </div>
    </section>
    </section>
    </div>


    </div></scroll-page>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="imagen1" data-slide-to="0" class="active"></li>
    <li data-target="imagen2" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/nosotros.jpg" class="d-block w-100" alt="imagen1" height="300px">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/nosotros.jpg" class="d-block w-100" alt="imagen2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<scroll-page id="anuncios">
    <div style="background: white">
        <div class="contenedorrr3">
<h2 class="fw-300 centrar-texto" style="font-size: 5rem; color: white;"><br>Habitaciones<br><br></h2>


<?php

class Cards extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<center>".parent::current()."<br></center>";
  }

  function beginChildren() {
    echo "<div class='card text-white bg-dark' style='width:31.3%; margin:1%; '><br>
    <h1 style='font:Lato; font-size:20px;'>";
  }

  function endChildren() {
    echo "</h1>
    
    <center><a href='contacto.php'style='width:80%; height:35px; font-size:15px;' class='btn btn-primary'><b>Reservar</a></b></center><br>
</div><br>";
  }
}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservacion";

try {
  $conn2 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt2 = $conn2->prepare("SELECT tipoHabitacion,camas,banos,tamano,precio FROM categoria_habitacion");
  $stmt2->execute();

  // set the resulting array to associative
  $result2 = $stmt2->setFetchMode(PDO::FETCH_ASSOC);
  echo "<div class='d-flex flex-wrap'>";

  foreach(new Cards(new RecursiveArrayIterator($stmt2->fetchAll())) as $k2=>$v2) {
    echo $v2;
  }
  echo "</div>";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn2 = null;
echo "</table>";
?></div></div>


  <div class="imagen-contacto">
                <section class="contenedorrr4">
                <div class="contenedor contenido-contacto">     
            <br>
            <section>
        <div class="contenedor contenido-contacto">
            <h2 style="font-size: 3rem; color: white;"><br>Reserva ahora!!</h2>
            <p>Reserva tu propia habitacion para estas vacaciones!</p>
            <a href="contacto.php" class="boton boton-amarillo">Reservar</a>
        </div>
    </section>
    </div></scroll-page>



            
                </div>
                </section>
               </div>

<div style="background: white; height: 64rem;">
   
<table   class=' contenedorrr6' align="center" width="100%" style="height: 64rem;"><tr><td align="center"> 
    <scroll-page id="blog">
<h2 class="fw-300 centrar-texto" style="font-size: 5rem; color: white;"><br>Eventos<br><br></h2>

  

 
 
   


<?php




class TableRows extends RecursiveIteratorIterator {
 function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<center>".parent::current()."<br></center>";
  }

  function beginChildren() {
    echo "<div class='card text-white bg-dark' style='width:31.3%; margin:1%; '><br>
    <h1 style='font:Lato; font-size:20px;'>";
  }

  function endChildren() {
    echo "<br></h1>
    
    </div><br><br>";
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
    publico FROM evento");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo "<div class='d-flex flex-wrap'>";

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
     echo "</div>";
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?><br><br><br><br></td></tr></table></scroll-page></div>
    
                 
  

  
 


<br><br>

        
      

    <div class="imagen-contacto2">
        <section class="contenedorrr2" style="height: 60rem">
        <div class="contenedor contenido-contacto">
            
    <br><br><br><br><br><br><br><br>
    <section class="contenedor">
        

        <div class="iconos-nosotros"><br>
            <div class="icono">
                <img src="img/icono1.jpeg" width="120"alt="Icono Seguridad">
                <h3><br>Amables, limpieza y <br>ubicación<br><br>✭✭✭✭✭<br></h3>
                <p><br>Pasamos excelentes días en el Hotel, todos muy amables, en especial Stephan, las habitaciones muy limpias y bonitas, la ubicación formidable.</p><br><br>
            </div>

            <div class="icono">
                <img src="img/icono2.jpeg" width="120"alt="Icono Mejor Precio">
                <h3><br>Verdadero oasis para dormir con mucho silencio.<br><br>✭✭✭✭✭<br></h3>
                <p><br>Muy agradable, silencioso para un buen descanso, buena ubicacion.</p>
            </div>

            <div class="icono">
                <img src="img/icono3.jpeg" width="120" = alt="Icono a Tiempo">
                <h3><br>Excelentes instalaciones y ubicación<br><br>✭✭✭✭✭<br></h3>
                <p><br>Muy recomendable, todo excelente, las habitaciónes nuevas y las camas son cómodisimas, todo cerca y la ubicación es de lo mejor.<br><br></p>
            </div>
        </div><br><br>
    </section><br><br><br>
    </section><br><br>

    </div><br><br>



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
                <a href="index.php"><b>Inicio</b></a>
                <a href="#nosotros"><b>Nosotros</b></a>
                <a href="#anuncios"><b>Habitaciones</b></a>
                <a href="#blog"><b>Eventos</b></a>
                <a href="galeria.html"><b>Galeria</b></a>
                <a href="contacto.php"><b>Reservacion</b></a>
                
            </nav>
            <p class="copyright">By: Imuris Garcia, Kristina Lopez, Ernesto Barcenas &copy; </p>
        </div>
    </footer>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>