<!DOCTYPE html>
<?php session_start();
if (@!$_SESSION['usuario'])
{  header("Location:pages-login.html");} ?>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / F.A.Q DGETI BCS</title>
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

    <main id="main" class="main">

    <div class="pagetitle">
      <h1>Preguntas Frecuentes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item">Paginas</li>
          <li class="breadcrumb-item active">Preguntas Frecuentes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section faq">
      <div class="row">
        <div class="col-lg-6">

          <div class="card basic">
            <div class="card-body">
              <h5 class="card-title">Preguntas Basicas</h5>

              <div>
                <h6>1. Quien es el responsable del plantel?</h6>
                <p>Es la persona asignada por la dirección del plantel, para la gestión y seguimiento los tramites administrativos ante las oficinas de enlace operativo en el estado de baja california sur.</p>
              </div>

              <div class="pt-2">
                <h6>2. Porque no tengo acceso a modificar?</h6>
                <p>Una vez que se genera el ticket de tramite se genera automaticamente con estatus "EN PROCESO" y el resposable de plantel tendra el Rol de solo para consulta, el responsable de la oficina de enlace del estado en Baja California Sur tendra el Rol de administrador y solo el podrá realizar cambios de "estatus" u de "observaciones".</p>
              </div>

              <div class="pt-2">
                <h6>3. Que pasa al cambiar el "Estatus" u "Observaciones" del tramite?</h6>
                <p>Cada vez que se modifique el "Estatus" u "Observaciones" del tramite, se genera un aviso a traves del correo electronico a todas las partes: Trabajador, Responsable de plantel y responsable de ofinas de enlace.</p>
              </div>

            </div>
          </div>

          <!-- F.A.Q Group 1 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Roles del sistema</h5>

              <div class="accordion accordion-flush" id="faq-group-1">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                      Rol "Administrador"
                    </button>
                  </h2>
                  <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      <p>Es el responsable asignado por el encargado de  las  oficinas de enlace en el estado de Baja California Sur.</p>
                      <p>El rol de administrador tendra acceso al sistema para la gestion y seguimiento de la plataforma de tramites,".</p>
                      <p>Actualizar y mantener el sistema de usuarios</p>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                      Rol "Responsable DGETI"
                    </button>
                  </h2>
                  <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                    <p>Es el responsable asignado por el encargado de las oficinas de enlace en el estado de Baja California Sur.</p>
                      <p>El rol de administrador tendra acceso al sistema para la gestion y seguimiento de los tramites administrativos, con acceso a modificar el "Estatus" y campo de "Observaciones".</p>
                      <p>Actualizar el estatus de los tramites adminsitrativos</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                      Rol "Responsable Plantel"
                    </button>
                  </h2>
                  <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      <p>Es el responsable asignado por el director del plantel.</p>
                      <p>El rol de gestor tendra acceso al sistema para la gestion y seguimiento de los tramites administrativos</p>
                      <p>Crear ticket de tramites administrativos</p>
                      <p>Consultar estatus de los tickets de tramites administrativos</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse">
                      ROL "Supervisor"
                    </button>
                  </h2>
                  <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                    <p>El rol de supervisor tendra acceso al sistema solo para la consulta de informes y reportes</p>
                      <ul>                       
                        <li>Encargado de las oficinas de enlace en el estado de Baja California Sur .</li>
                        <li>Director del plantel.</li>
                        <li>Subdirector administrativo de plantel</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>

            </div>
          </div><!-- End F.A.Q Group 1 -->

        </div>

        <div class="col-lg-6">

          <!-- F.A.Q Group 2 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Significado de Avisos</h5>

              <div class="accordion accordion-flush" id="faq-group-2">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                      Que significa que haya recibido un aviso <strong> "EN PROCESO" </strong>?
                    </button>
                  </h2>
                  <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Que el responsable del plantel, <strong>registro un ticket</strong> de tramite administrativo a la oficina de enlace en el estado de Baja California Sur para su gestión.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
                      Que significa que haya recibido un aviso <strong> "EN TRAMITE" </strong>?
                    </button>
                  </h2>
                  <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Que el responsable de oficinas de enlace en el estado de Baja California Surdel plantel, <strong>envió</strong> a oficinas de la DGETI el tramite administrativo para su gestión.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse">
                      Que significa que haya recibido un aviso <strong> "EN OFICINAS DGETI" </strong>?
                    </button>
                  </h2>
                  <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Que oficinas de la DGETI <strong>recibio</strong> el tramite administrativo para su gestión.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4" type="button" data-bs-toggle="collapse">
                      Que significa que haya recibido un aviso <strong> "EN VALIDACIÓN" </strong>?
                    </button>
                  </h2>
                  <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Que oficinas de la DGETI <strong>dio tramite</strong> la solicitud del ticket para su validación.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                      Que significa que haya recibido un aviso <strong> "EN PAGOS" </strong>?
                    </button>
                  </h2>
                  <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Que oficinas de la DGETI <strong>dio tramite</strong> la solicitud del ticket para su pago.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                      Que significa que haya recibido un aviso <strong> "RECHAZO" </strong>?
                    </button>
                  </h2>
                  <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Que oficinas de la DGETI <strong>rechazo</strong> el tramite administrativo y se regresa para su subsanar inconsistencias.
                    </div>
                  </div>
                </div>


              </div>

            </div>
          </div><!-- End F.A.Q Group 2 -->

          <!-- F.A.Q Group 3 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Modulos del sistema</h5>

              <div class="accordion accordion-flush" id="faq-group-3">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button" data-bs-toggle="collapse">
                      Tablero
                    </button>
                  </h2>
                  <div id="faqsThree-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Un concentrado grafico de los estatus de los tramites administrativos.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button" data-bs-toggle="collapse">
                      Tramites
                    </button>
                  </h2>
                  <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Podra gestionar ticket de los tramites administrativos 
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-3" type="button" data-bs-toggle="collapse">
                      Tramites / Registrar
                    </button>
                  </h2>
                  <div id="faqsThree-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Este modulo es para el realizar la <strong>Alta</strong> del registro del ticket del tramite administrativo.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-4" type="button" data-bs-toggle="collapse">
                      Tramites / Consulta
                    </button>
                  </h2>
                  <div id="faqsThree-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Este modulo es para el realizar la <strong>Consulta</strong> del registro del ticket del tramite administrativo.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-5" type="button" data-bs-toggle="collapse">
                      Tramites / Actualizar
                    </button>
                  </h2>
                  <div id="faqsThree-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Este modulo es para el realizar la <strong>Actualizar</strong> el estatus u observacion del registro del ticket del tramite administrativo.
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 3 -->

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "includes/footer.php"; ?>
</body>
</html>