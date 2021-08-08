<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="shortcut icon" href="logo-mywebsite-urian-viera.svg"/>

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="css/material.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <style type="text/css">
  .btn-flotante {
    font-size: 16px;
    text-transform: uppercase;
    font-weight: bold;
    color: #ffffff;
    border-radius: 5px;
    background-color: #cecece;
    padding: 2px;
    position: fixed;
    bottom: 10px;
    right: 10px;
    transition: all 300ms ease 0ms;
    box-shadow: 0px 8px 15px rgb(0 0 0 / 10%);
    z-index: 99;
}
.btn-flotante:hover {
  background-color: #2c2fa5; /* Color de fondo al pasar el cursor */
  box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
  transform: translateY(-7px);
}
h3{
  font-weight: 800;
  font-size: 35px;
}
    </style>
    <title>Como forzar la descargar de una imagen o cualquier archivo con PHP :: Webdeveloper Urian Viera </title>
  </head>
  <body>

<nav class="navbar navbar-light" style="background-color: #55468c !important;">
  <a class="navbar-brand" href="#">
   <strong style="color: #fff">WebDeveloper</strong>
  </a>
</nav>

<div class="container mt-5"> 

  
  <h3 class="text-center mb-5">
    Cómo forzar la Descargar de una Imagen o cualquier <strong> Archivo </strong> con PHP 
    <hr>
  </h3>

  
  <div class="row text-center">
    <div class="col-md-3">
      <p style="font-size:20px;">Imagen
        <i class="zmdi zmdi-camera"></i>
        <br>
        <img src="archivos/royalCanin.png">
      </p>
      
      <!--
      <a href="archivos/royalCanin.png" download="img">Descargar</a>
    -->
      <br>
      <a href="descargarFile.php?file=royalCanin.png" class="btn btn-info btn-block">Descargar</a>
    </div>

    <div class="col-md-3">
      <p style="font-size:20px;">PDF
        <i class="zmdi zmdi-collection-pdf"></i>
        <br>
          <embed src="archivos/CVURIANVIERA.pdf" type="application/pdf" style="width: 100% !important;" height="300px"/>
      </p>
      <a href="descargarFile.php?file=CVURIANVIERA.pdf" class="btn btn-info btn-block">Descargar</a>
    </div>

    <div class="col-md-3">
      <p style="font-size:20px;">Word
        <i class="zmdi zmdi-view-subtitles"></i>
        <br>
       <img src="archivos/word.png">
      </p>
      <a href="descargarFile.php?file=demoWord.docx" class="btn btn-info btn-block">Descargar</a>
    </div>

     <div class="col-md-3">
      <p style="font-size:20px;">Musica
        <i class="zmdi zmdi-collection-music"></i>
        <br>
        <audio src="archivos/Farruko_Pepas.mp3" controls></audio>
      </p>
      <a href="descargarFile.php?file=Farruko_Pepas.mp3" class="btn btn-info btn-block">Descargar</a>
    </div>

  </div>


<a href="#" class="btn-flotante">
  <img src="perfil.jpeg" style="width: 80px;" class="img-fluid">
</a>

</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="js/material.min.js"></script>

  </body>
</html>