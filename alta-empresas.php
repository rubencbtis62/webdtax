<!DOCTYPE html>
<?php session_start();
if (@!$_SESSION['usuario'])
{  header("Location:pages-login.html");} ?>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
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
          <li class="breadcrumb-item">Pagina</li>
          <li class="breadcrumb-item active">Registro</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Modulo Registro de Tributario</h5>
              <div>Solo el responsable supervisor asignado, creará registro de personas Fisicas o Morales en el regimen fiscal y actividad asignado e importancia </div>
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
              <h5 class="card-title">Registro Personas Fisicas o Morales</h5>

              <!-- General Form Elements -->
              <form role="form" action="php/cempresa.php" method="POST" class="needs-validation" novalidate>
                <input type="hidden" name="accion" value="alta">
                <div class="row">
                  <div class="alert alert-primary alert-dismissible fade show" role="alert">Datos Fiscales</div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-1 col-form-label">Tributario</label>
                  <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example" name="em7" required>
                      <option selected>Seleccionar</option>
                      <option>Personas Fisicas Prof.</option>
                      <option>Personas Fisicas Intermedio</option>
                      <option>Personas Fisicas de Arredamiento</option>
                      <option>Personas Fisicas RIF</option>
                      <option>Personas Fisicas ReSiCo</option>
                      <option>Personas Morales Titulo II</option>
                      <option>Personas Morales ReSiCo</option>
                    </select>
                  </div>
                  <label class="col-sm-2 col-form-label">Ejercicio Fiscal</label>
                  <div class="col-sm-2">
                    <select class="form-select" aria-label="Default select example" name="em11" required>
                      <option selected>Seleccionar</option>
                      <option>2019</option>
                      <option>2020</option>
                      <option>2021</option>
                      <option>2022</option>
                      <option>2023</option>
                      <option>2024</option>
                    </select>
                  </div>
                  <label class="col-sm-1 col-form-label">Importancia</label>
                  <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example" name="importancia">
                      <option selected>Seleccionar</option>
                      <option>NORMAL</option>
                      <option>MEDIA</option>
                      <option>ALTA</option>
                    </select>
                  </div>                 
                </div>
              
                <div class="row mb-3">                   
                    <label for="inputText" class="col-sm-2 col-form-label">Representante legal</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control text-uppercase" name="em8" placeholder="Representante Legal" aria-describedby="responsable" required>
                    </div>       
                    <label for="inputText" class="col-sm-2 col-form-label">RFC Responsable</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="em9" placeholder="RFC representante Legal" required>
                    </div>
                                            
                </div> 

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-1 col-form-label">Actividad</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="em6" placeholder="Descripcion de la actividad" required>
                  </div>

                  <label for="inputDate" class="col-sm-2 col-form-label">Fecha Ingreso</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="em10" required>
                  </div>
                </div>
               
                <div class="row">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">Datos Tributario</div>
                </div>

                <div class="row mb-3">                                     
                  <label for="inputText" class="col-sm-1 col-form-label">RFC</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="em1" placeholder="Registro Federal de Causante" required>
                  </div>
                  
                  <label for="inputText" class="col-sm-1 col-form-label">Razón Social</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="em2" placeholder="Sin anotar regimen" required>
                  </div>                
                </div>                
                <div class="row mb-3">
                  <label for="numeric" class="col-sm-1 col-form-label">Telefono</label>
                  <div class="col-sm-3">
                    <input type="tel" class="form-control" name="em4" placeholder="10 Digitos" required>
                  </div>

                  <label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" name="em5" placeholder="username@server" required>
                  </div>
                </div>                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Domicilio Fiscal</label>
                  <div class="col-sm-10">
                    <textarea class="form-control text-uppercase" style="height: 100px" name="em3" required></textarea>                     
                  </div>
                </div>              
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-1 col-form-label">File Upload</label>
                  <div class="col-sm-5">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-5">
                  <label for="inputText" class="col-sm-2 col-form-label">Observaciones</label>
                  <div class="col-sm-10">
                    <textarea class="form-control text-uppercase" style="height: 100px" name="em" required></textarea>
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
                    <button type="submit" class="btn btn-primary" name="enviar">Guardar Empresa</button>
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