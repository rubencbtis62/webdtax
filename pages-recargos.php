<?php 
  include('php/sql.php');
  include('php/recargo.php');

  $id = $_GET['id'];
  $recargo = recargo::obtenerporid($id);

 
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
          <li class="breadcrumb-item">Pagina</li>
          <li class="breadcrumb-item active">Actualizar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-5">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Modulo Actualización de recargos</h5>
              <p>Este modulo permite actualizar solo al responsable de modificar indicadores.</p>
            </div>
          </div>

        </div>

        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">NOTA</h5>
              <p>Cualquier modificación se enviara un correo al Reposable de recargos, asi como al administrador.</p>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
       <div class="col">

       <div class="card">
            <div class="card-body">
              <h5 class="card-title">Actualizar recargo</h5>

              <!-- General Form Elements -->

              <form role="form" action="php/crecargo.php" method="POST">
              <input type="hidden" name="id" value="<?= $recargo->getid(); ?>">
              <input type="hidden" name="accion" value="actualizarrecargo">

            

              <div class="row mb-3">                 
                  <label class="col-sm-2 col-form-label">Ejercicio Fiscal</label>
                  <div class="col-sm-2">
                    <select class="form-select" aria-label="Default select example" name="anio">
                      <option selected>Seleccionar</option>
                      <?php 
                        foreach ($tipoejercicios as $tipoejercicio) {
                            if ($tipoejercicio == $recargo->getanio())
                                echo "<option selected>".$tipoejercicio."</option>";
                            else    
                                echo "<option>".$tipoejercicio."</option>";
                        }
                      ?>                      
                    </select>
                  </div>
              </div>

               
              <!-- <?php   //var_dump($recargo); ?> -->

              <div class="row mb-3">
                
                <div class="col-sm-2">
                  <label for="ene" class="form-label">Enero</label>
                  <input class="form-control" type="text" name="ene" value="<?= $recargo->getene(); ?>" >                    
                </div>               
                <div class="col-sm-2">
                <label for="feb" class="form-label">Febrero</label>
                  <input class="form-control" type="text" name="feb" value="<?= $recargo->getfeb(); ?>" >
                </div>
                
                <div class="col-sm-2">
                <label for="mar" class="form-label">Marzo</label>
                  <input class="form-control" type="text" name="mar" value="<?= $recargo->getmar(); ?>" >
                </div>

                <div class="col-sm-2">
                  <label for="abr" class="form-label">Abril</label>
                  <input class="form-control" type="text" name="abr" value="<?= $recargo->getabr(); ?>" >                    
                </div>               
                <div class="col-sm-2">
                <label for="may" class="form-label">Mayo</label>
                  <input class="form-control" type="text" name="may" value="<?= $recargo->getmay(); ?>" >
                </div>
                
                <div class="col-sm-2">
                <label for="jun" class="form-label">Junio</label>
                  <input class="form-control" type="text" name="jun" value="<?= $recargo->getjun(); ?>" >
                </div>
              </div>


              <div class="row mb-3">
                
                <div class="col-sm-2">
                  <label for="jul" class="form-label">Julio</label>
                  <input class="form-control" type="text" name="jul" value="<?= $recargo->getjul(); ?>" > 
                </div>               
                <div class="col-sm-2">
                <label for="ago" class="form-label">Agosto</label>
                  <input class="form-control" type="text" name="ago" value="<?= $recargo->getago(); ?>" >
                </div>
                
                <div class="col-sm-2">
                <label for="sep" class="form-label">Septiembre</label>
                  <input class="form-control" type="text" name="sep" value="<?= $recargo->getsep(); ?>" >
                </div>

                <div class="col-sm-2">
                  <label for="oct" class="form-label">Octubre</label>
                  <input class="form-control" type="text" name="oct" value="<?= $recargo->getoct(); ?>" >                    
                </div>               
                <div class="col-sm-2">
                <label for="nom" class="form-label">Noviembre</label>
                  <input class="form-control" type="text" name="nov" value="<?= $recargo->getnov(); ?>" >
                </div>
                
                <div class="col-sm-2">
                <label for="dic" class="form-label">Diciembre</label>
                  <input class="form-control" type="text" name="dic" value="<?= $recargo->getdic(); ?>" >
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