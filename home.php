<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="container">
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"><strong>REST COUNTRIES Versión PHP</strong></a>
    <a class="navbar-brand">powered by: Carlos Monterrosa</a>
    <a class="navbar-brand" href="#">
      <img src="https://qroo.gob.mx/sites/default/files/inline-images/TecChetumal-232x300_0.png" width="90" height="105"
        alt="">
    </a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </nav>
  <!-- space------------------------------------------------------------------navbar -->
  <br>
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar"
      aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
  </div>
  <!-- space------------------------------------------------------------------progressbar -->
  <br>
  <p class="fp">El proyecto <strong>restcountries</strong> ha sido adquirido por apilayer, uno de los principales
    proveedores de microservicios API. Seguiremos apoyando los países de descanso y proporcionándola como una solución
    gratuita para los desarrolladores. Financiaremos este proyecto por completo y desactivaremos la función de
    donaciones.</p>
  <!-- space------------------------------------------------------------------paragraph -->
  <br>
  <p>
    <!-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
           
        </a> -->
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
      aria-expanded="true">
      Regiones
    </button>

  </p>
  <div class="collapse" id="collapseExample">
    <div class="card card-body">




      <form action="" method="post">

        <!-- <button type="submit" name="region" value="Africa" class="btn btn-outline-danger">Africa</button>
            <button type="submit" name="region" value="Americas" class="btn btn-outline-secondary">Americas</button>
            <button type="submit" name="region" value="Asia" class="btn btn-outline-success">Asia</button>            
            <button type="submit" name="region" value="Europe" class="btn btn-outline-warning">Europe</button>
            <button type="submit" name="region" value="Oceania" class="btn btn-outline-info">Oceania</button> -->
        <div class="container">
          <div class="row">
            <div class="col">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg>
                <h6>Seleccione la región que dese visualizar </h6>

              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="region"  value="Africa"
                  >
                <label class="form-check-label" for="exampleRadios1">
                  Africa
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="region"  value="Americas"
                  >
                <label class="form-check-label" for="exampleRadios1">
                  Americas
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="region"  value="Asia"
                >
                <label class="form-check-label" for="exampleRadios1">
                  Asia
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="region" value="Europe"
                  >
                <label class="form-check-label" for="exampleRadios1">
                  Europe
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="region"  value="Oceania"
                  >
                <label class="form-check-label" for="exampleRadios1">
                  Oceania
                </label>
              </div>

            </div>
            <div class="col">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z" />
              </svg>
              <h6>Seleccione los atributos de la región que dese visualizar</h6>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="name" value="name" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Nombre
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="capital" value="capital" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Capital
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="flag" value="flag" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Bandera
                </label>
              </div>
            </div>
          </div>
        </div>
        
        <br>
        <button type="submit" name="submit"class="btn btn-outline-success ">Visualizar </button>
      </form>
    </div>
  </div>
  </div>
  

  <?php 
              error_reporting(0);
              $opciones = array('http' =>
                array(
                     'method' => 'GET',
                     'header' => 'Content-type: application/x-www-form-urlencoded'
                     )
               );
              $contexto = stream_context_create($opciones);
              // if(isset($_POST['region']) && empty($_POST['flag']) || empty($_POST['name']) || empty($_POST['capital'])){
              if(isset($_POST['submit'])){
                      $region = $_POST['region'];  
                      $n = $_POST['name'];  
                      $c = $_POST['capital'];  
                      $f = $_POST['flag'];             
              
              // $n = '';  
              
             
             
              $resultado = file_get_contents('https://restcountries.eu/rest/v2/region/'.$region."?fields=$f;$n;$c", false, $contexto);
              // $html = htmlspecialchars($resultado);
              $search_results = json_decode($resultado, true);
              

              echo '<table style="width:100%">';
              echo '<tr><td><strong>Nombre</strong></td><td><strong>Capital</strong></td><td><strong>Bandera</strong></td></tr>';   
                foreach ($search_results as $atribute) {

                  $n = $atribute["name"];
                  $c = $atribute["capital"];
                  $f = $atribute["flag"];
                               
                  echo '<tr><td>' . $n . '</td><td>' . $c . '</td><td><img src ="'.$f.'" style="width: 18rem; margin: auto;"/></td></tr>';
                  // echo '<tr><td>' . $c . '</td></tr>';
                  // echo '<tr><td>' .$f.'</td></tr>';
                  // echo  '<svg src="'.$f.'"></svg>';
                  }
                
                echo '</table>';
              // echo $html;
                    }
               
             // $resultado = file_get_contents('https://restcountries.eu/rest/v2/region/europe?fields=name;capital;flag');

            
     ?>





  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>