<?php 
  include('php/sql.php');
  include('php/indicador.php');

  $id = $_GET['id'];
  $indicador = indicador::obtenerporid($id);

  $tipoejercicios = ['2019','2020','2021','2022','2023','2024'];
  ?>

<!DOCTYPE html>
<?php session_start();
if (@!$_SESSION['usuario'])
{  header("Location:pages-login.html");} ?>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Módulo / Actualización - Apc Accounting Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- ======= Scripts ======= -->
  <?php include "includes/scripts.php"; ?>
</head>

<body>
  <!-- ======= Header ======= -->
  <?php include "includes/header.php"; ?>
  <!-- ======= Sidebar ======= -->
  <?php include "includes/sidebar.php"; ?>
  <!-- ======= Main ======= -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Página de Registro</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item">Catalogos</li>
          <li class="breadcrumb-item active">Actualizar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-5">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Modulo Actualización de indicadors</h5>
              <p>Este modulo permite actualizar solo al responsable de modificar indicadores.</p>
            </div>
          </div>

        </div>

        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">NOTA</h5>
              <p>Cualquier modificación se enviara un correo al Reposable de indicadors, asi como al administrador.</p>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
       <div class="col">

       <div class="card">
            <div class="card-body">
              <h5 class="card-title">Actualizar indicador</h5>

              <!-- General Form Elements -->

              <form role="form" action="php/cindicador.php" method="POST">
              <input type="hidden" name="id" value="<?= $indicador->getid(); ?>">
              <input type="hidden" name="accion" value="actualizarindicador">
         
              <div class="row mb-3">                 
                  <label class="col-sm-2 col-form-label">Ejercicio Fiscal</label>
                  <div class="col-sm-2">
                    <select class="form-select" aria-label="Default select example" name="anio">
                      <option selected>Seleccionar</option>
                      <?php 
                        foreach ($tipoejercicios as $tipoejercicio) {
                            if ($tipoejercicio == $indicador->getanio())
                                echo "<option selected>".$tipoejercicio."</option>";
                            else    
                                echo "<option>".$tipoejercicio."</option>";
                        }
                      ?>                      
                    </select>
                  </div>
              </div>
           
              <!-- <?php   //var_dump($indicador); ?> -->

              <div class="row mb-3">
                <div class="col-sm-2">
                  <label for="isrpm" class="form-label">ISR P. Moral</label>
                  <input class="form-control" type="text" name="isrpm" value="<?= $indicador->getisrpm(); ?>" >                    
                </div>               
                <div class="col-sm-2">
                <label for="tasnom" class="form-label">Tasa Nomina</label>
                  <input class="form-control" type="text" name="tasnom" value="<?= $indicador->gettasnom(); ?>" >
                </div>
                
                <div class="col-sm-2">
                <label for="tashos" class="form-label">Tasa Hospedaje</label>
                  <input class="form-control" type="text" name="tashos" value="<?= $indicador->gettashos(); ?>" >
                </div>

                <div class="col-sm-2">
                  <label for="ietu" class="form-label">IETU</label>
                  <input class="form-control" type="text" name="ietu" value="<?= $indicador->getietu(); ?>" >                    
                </div>               
                
              </div>
                            
              <div class="row mb-3">
                <hr>
              </div>

                <div class="row mb-3">
                  <div class="col-sm-4 col-form-check text-center">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck"><strong>Estoy de acuerdo </strong> que los datos son Correctos</label>
                    <div class="invalid-tooltip">
                      Debes validar casilla y datos esten correctos
                    </div>                 
                  </div>                 
                  <label class="col-sm-1 col-form-label">Actualizar</label>
                  <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                  </div>
                </div>
               
              </form><!-- End General Form Elements -->
            </div>
         </div>
       </div>
      </div>
    </section>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include "includes/footer.php"; ?>
</body>
</html>