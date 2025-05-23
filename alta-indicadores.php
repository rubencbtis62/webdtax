<!DOCTYPE html>
<?php session_start();
if (@!$_SESSION['usuario'])
{  header("Location:pages-login.html");} ?>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registro / INPC - Apc Accounting Services</title>
  <meta content="" name="descripcion">
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
          <li class="breadcrumb-item active">Registro</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Modulo Registro de IPNC</h5>
              <div>Solo el responsable supervisor asignado, creará registro de INPC del periodo o ejercicio fiscal, la gestión y su mantenimiento.</div>
              <div>El Índice Nacional de Precios al Consumidor (INPC) es un indicador económico, que tiene como objetivo medir la evolución en el tiempo del nivel general de los precios de los bienes y servicios que consumen los hogares del país</div>
            </div>
          </div>

        </div>

        <!-- <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Example Card</h5>
              <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
            </div>
          </div>

        </div> -->
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Registro de Indicadores Fiscales</h5>

              <!-- General Form Elements -->
              <form role="form" action="php/cinpc.php" method="POST" class="needs-validation" novalidate>
                <input type="hidden" name="accion" value="alta">
                <div class="row">
                  <div class="alert alert-primary alert-dismissible fade show" role="alert">Tasas</div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-1 col-form-label">Ejercicio Fiscal</label>
                  <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example" name="anio" required>
                      <option selected></option>
                      <option>2025</option>
                      <option>2024</option>
                      <option>2023</option>
                      <option>2022</option>
                      <option>2021</option>
                      <option>2020</option>
                      <option>2019</option>
                      <option>2018</option>
                    </select>
                  </div>               
                </div>
              

                <div class="row mb-3">                                     
                    <div class="col-sm-2">
                    <label for="inputText" class="form-label text-right">ISR P. Moral</label>
                      <input type="text" class="form-control" name="isrpm" placeholder="0.0" aria-describedby="Tasa" VALUE="0.0">
                    </div>
                    <div class="col-sm-2">
                    <label for="inputText" class="form-label">Tasa Nomina</label>
                      <input type="text" class="form-control" name="tasnom" placeholder="0.0" aria-describedby="Tasa" VALUE="0.0">
                    </div>
                    <div class="col-sm-2">
                    <label for="inputText" class="form-label">Tasa Hospedaje</label>
                      <input type="text" class="form-control" name="tashos" placeholder="0.0" aria-describedby="Tasa" VALUE="0.0">
                    </div>
                    <div class="col-sm-2">
                    <label for="inputText" class="form-label">IETU</label>
                      <input type="text" class="form-control" name="ietu" placeholder="0.0" aria-describedby="Tasa" VALUE="0.0">
                    </div>
                    
                </div> 

 
                <div class="row mb-3">
                  <div class="col-sm-4 col-form-check text-center">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck"><strong>Estoy de acuerdo </strong> que los datos son Correctos</label>
                    <div class="invalid-tooltip">
                      Debes validar casilla y datos esten correctos
                    </div>                 
                  </div>
                  <!-- <label class="col-sm-2 col-form-label"></label> -->
                  <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary" name="enviar">Guardar Inidicadores</button>
                  </div>
                  <div class="spinner-border text-primary" role="status">
                         <span class="visually-hidden">Registrando...</span>
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