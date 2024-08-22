<?php 
  include('php/sql.php');
  include('php/empresa.php');

  $id_em = $_GET['id_em'];
  $empresa = empresa::obtenerporid_em($id_em);

  $tipoestatuss = ['ACTIVO','INACTIVO'];
  $tiporegimens = ['Personas Fisicas Prof.','Personas Fisicas Intermedio','Personas Fisicas de Arredamiento','Personas Fisicas RIF','Personas Fisicas ReSiCo','Personas Morales Titulo II','Personas Morales ReSiCo'];
  $tipoejercicios = ['2019','2020','2021','2022','2023','2024'];
  $tipoimportnacias = ['NORMAL','MEDIA','ALTA'];

  ?>

<!DOCTYPE html>
<?php session_start();
if (@!$_SESSION['usuario'])
{  header("Location:pages-login.html");} ?>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Módulo / Actualización - APC Accounting Services</title>
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
              <h5 class="card-title">Modulo Actualización de Empresas</h5>
              <p>Este modulo permite actualizar solo al responsable de la Empresa.</p>
            </div>
          </div>

        </div>

        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">NOTA</h5>
              <p>Cualquier modificación se enviara un correo al Reposable de empresas, asi como al administrador.</p>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
       <div class="col">

       <div class="card">
            <div class="card-body">
              <h5 class="card-title">Actualizar Empresa</h5>

              <!-- General Form Elements -->

              <form role="form" action="php/cempresa.php" method="POST">
              <input type="hidden" name="id_em" value="<?= $empresa->getid_em(); ?>">
              <input type="hidden" name="accion" value="actualizarempresa">

             
                 <div class="row mb-3">                 
                   <label class="col-sm-1 col-form-label">Estatus</label>
                   <div class="col-sm-2">
                    <select class="form-select" aria-label="Default select example" name="estatus">
                     <?php 
                        foreach ($tipoestatuss as $tipoestatus) {
                            if ($tipoestatus == $empresa->getestatus())
                              echo "<option selected>".$tipoestatus."</option>";
                            else    
                              echo "<option>".$tipoestatus."</option>";
                        }
                    ?> 
                    
                    </select>
                  </div> 

                  <label class="col-sm-2 col-form-label">Regimen Tributario</label>
                  <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example" name="em7">
                    <?php 
                        foreach ($tiporegimens as $tiporegimen) {
                            if ($tiporegimen == $empresa->getem7())
                              echo "<option selected>".$tiporegimen."</option>";
                            else    
                              echo "<option>".$tiporegimen."</option>";
                        }
                    ?>                    
                    </select>
                  </div>

                  <label class="col-sm-2 col-form-label">Ejercicio Fiscal</label>
                  <div class="col-sm-2">
                    <select class="form-select" aria-label="Default select example" name="em11">
                      <option selected>Seleccionar</option>
                      <?php 
                        foreach ($tipoejercicios as $tipoejercicio) {
                            if ($tipoejercicio == $empresa->getem11())
                                echo "<option selected>".$tipoejercicio."</option>";
                            else    
                                echo "<option>".$tipoejercicio."</option>";
                        }
                      ?>                      
                    </select>
                  </div>
              </div>


                 <!-- <?php   //var_dump($empresa); ?> -->

              <div class="row mb-3">
                <label for="responsable" class="col-sm-1 col-form-label">RFC</label>
                <div class="col-sm-2">
                  <input class="form-control" type="text" name="em1" value="<?= $empresa->getem1(); ?>" >                    
                </div>

                <label for="correo1" class="col-sm-1 col-form-label">Razón Social</label>
                <div class="col-sm-8">
                  <input class="form-control" type="text" name="em2" value="<?= $empresa->getem2(); ?>" >
                </div>               
              </div>
              
              <div class="row mb-3">
                <label for="oficio" class="col-sm-2 col-form-label">Domicilio Fiscal</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="em3" value="<?= $empresa->getem3(); ?>" >                    
                </div>                             
              </div>

              <div class="row mb-3">
                <hr>
              </div>
               
                <div class="row mb-3">
                  <label for="telefono" class="col-sm-2 col-form-label">Telefono/Móvil</label>
                  <div class="col-sm-3">
                    <input class="form-control" type="text" name="em4" value="<?= $empresa->getem4(); ?>" >
                  </div>
                  <label for="correo" class="col-sm-1 col-form-label">Email</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="email" name="em5" value="<?= $empresa->getem5(); ?>" >
                  </div>

                </div>                

                <div class="row mb-3">
                  <label for="asunto" class="col-sm-2 col-form-label">Actividad</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="em6" value="<?= $empresa->getem6(); ?>" >
                  </div>
                </div>
                
                <div class="row mb-3">
                <label for="domicilio" class="col-sm-2 col-form-label">RFC Representante Legal</label>
                  <div class="col-sm-2">
                    <input class="form-control" type="text" name="em9" value="<?= $empresa->getem9(); ?>" >
                  </div>
                  <label for="domicilio" class="col-sm-2 col-form-label">Representante Legal</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="text" name="em8" value="<?= $empresa->getem8(); ?>" >
                  </div>
                </div>  
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Constancia Situación Fiscal</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                
                  <label for="inputDate" class="col-sm-1 col-form-label">Date</label>
                  <div class="col-sm-3">
                    <input type="date" class="form-control" name="em10" value="<?= $empresa->getem10(); ?>" >
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