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
              <h5 class="card-title">Modulo Registro de Tramites</h5>
              <div>Solo el responsable del plantel asignado emitira un tramite a la unidad de enlace operativo del estado. <b>NOTA</b> Una vez emitida no podra realizar modificaciones al registro</div>
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
              <h5 class="card-title">Registro de Tramite</h5>

              <!-- General Form Elements -->
              <form role="form" action="php/ctramite.php" method="POST" class="needs-validation" novalidate>
                <input type="hidden" name="accion" value="alta">
                <div class="row">
                  <div class="alert alert-primary alert-dismissible fade show" role="alert">Datos Plantel</div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-1 col-form-label">Plantel</label>
                  <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example" name="plantel" required>
                      <option selected>Seleccionar</option>
                      <option>CBTIS62</option>
                      <option>CBTIS69</option>
                      <option>CETIS81</option>
                      <option>CBTIS230</option>
                      <option>CBTIS256</option>                      
                    </select>
                  </div>

                  <label class="col-sm-1 col-form-label">Area</label>
                  <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example" name="area" required>
                      <option selected>Seleccionar</option>
                      <option>RECURSOS HUMANOS</option>
                      <option>RECURSOS FINANCIEROS</option>
                      <option>RECURSOS MATERIALES</option>
                      <option>DIRECCION</option>
                      <option>OTROS</option>                      
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
                    <label for="inputText" class="col-sm-1 col-form-label">Responsable del Plantel</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control text-uppercase" name="responsable" placeholder="Nombre (s) Responsable" aria-describedby="responsable" required>
                    </div>       
                    <label for="inputText" class="col-sm-1 col-form-label">Correo Responsable</label>
                    <div class="col-sm-5">
                      <input type="email" class="form-control" name="correo1" placeholder="Email Responsable" required>
                    </div>
                                            
                </div> 

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-1 col-form-label">No. Oficio de envio</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="oficio" placeholder="Número Oficio" required>
                  </div>

                  <label for="inputDate" class="col-sm-1 col-form-label">Con Fecha</label>
                  <div class="col-sm-3">
                    <input type="date" class="form-control" name="fecha" required>
                  </div>
                </div>
               
                <div class="row">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">Datos Tramite</div>
                </div>

                <div class="row mb-3">                                     
                  <label for="inputText" class="col-sm-1 col-form-label">Nombre</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre(s) trabajador" required>
                  </div>
                  
                  <label for="inputText" class="col-sm-1 col-form-label">Apellidos(s)</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="apellidos" placeholder="Apellido(s) trabajador" required>
                  </div>                
                </div>                
                <div class="row mb-3">
                  <label for="numeric" class="col-sm-1 col-form-label">Telefono</label>
                  <div class="col-sm-5">
                    <input type="tel" class="form-control" name="telefono" placeholder="10 Digitos" required>
                  </div>

                  <label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
                  <div class="col-sm-5">
                    <input type="email" class="form-control" name="correo" placeholder="username@server" required>
                  </div>
                </div>                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-1 col-form-label">Asunto</label>
                  <div class="col-sm-11">
                    <textarea class="form-control text-uppercase" style="height: 100px" name="asunto" required></textarea>
                  </div>
                </div>              
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-1 col-form-label">File Upload</label>
                  <div class="col-sm-5">
                    <input class="form-control" type="file" id="formFile">
                  </div>

                  <label class="col-sm-1 col-form-label">Modelo 1</label>
                  <div class="col-sm-5">
                    <select class="form-select" aria-label="Default select example" name="mod1">
                      <option selected>Seleccionar</option>
                      <option value="1">Normal</option>
                      <option value="2">Media</option>
                      <option value="3">Alta</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-5">
                  <label for="inputText" class="col-sm-2 col-form-label">Observaciones</label>
                  <div class="col-sm-10">
                    <textarea class="form-control text-uppercase" style="height: 100px" name="domicilio" required></textarea>
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
                    <button type="submit" class="btn btn-primary" name="enviar">Guardar Solicitud</button>
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