<!DOCTYPE html>
<?php session_start();
if (@!$_SESSION['usuario'])
{  header("Location:pages-login.html");} ?>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Módulo / Captura - Apc Accounting Services</title>
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
        <!-- <div class="col-lg-12">
          <div class="card">
            <div class="card-body mb-1">
              <h6 class="card-title">Modulo Registro de Tributario</h6>              
            </div>
          </div>
        </div> -->

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
              <h5 class="card-title">Captura Personas Fisicas Actividad Prof. y/o Empresarial</h5>

              <!-- General Form Elements -->
              <form role="form" action="php/cempresa.php" method="POST" class="needs-validation" novalidate>
                <input type="hidden" name="accion" value="alta">
                <!-- <div class="row"> -->

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Selecciona Impuesto</h5>
                    <ul class="nav nav-pills mb-2 d-flex" id="pills-tab" role="tablist">
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link active" id="pills-isr-tab" data-bs-toggle="pill" data-bs-target="#pills-isr" type="button" role="tab" aria-controls="pills-home" aria-selected="true">ISR</button>
                      </li>
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link" id="pills-iva-tab" data-bs-toggle="pill" data-bs-target="#pills-iva" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">IVA</button>
                      </li>
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link" id="pills-retisr-tab" data-bs-toggle="pill" data-bs-target="#pills-retisr" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Retenciones ISR</button>
                      </li>
                      <li class="nav-item flex-fill" role="presentation">
                          <button class="nav-link w-100" id="pills-retiva-tab" data-bs-toggle="pill" data-bs-target="#pills-retiva" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Retenciones IVA</button>
                        </li>                        
                        <li class="nav-item flex-fill" role="presentation">
                          <button class="nav-link w-100" id="pills-nom-tab" data-bs-toggle="pill" data-bs-target="#pills-nom" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Imp.S/ Nomina</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                          <button class="nav-link w-100" id="pills-hos-tab" data-bs-toggle="pill" data-bs-target="#pills-hos" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Imp. S/ Hospedaje</button>
                        </li>                      
                    </ul>
                    <div class="tab-content pt-2" id="myTabContent">
                      <div class="tab-pane fade show active" id="pills-isr" role="tabpanel" aria-labelledby="isr-tab">

                      <!-- Tab interno -->
                      <div class="card">
                        <div class="card-body">                          
                          <!-- Default Tabs -->
                          <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100 active" id="partei-tab" data-bs-toggle="tab" data-bs-target="#partei" type="button" role="tab" aria-controls="home" aria-selected="true">Parte I</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100" id="parteii-tab" data-bs-toggle="tab" data-bs-target="#parteii" type="button" role="tab" aria-controls="profile" aria-selected="false">Parte II</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100" id="parteiii-tab" data-bs-toggle="tab" data-bs-target="#parteiii" type="button" role="tab" aria-controls="contact" aria-selected="false">Parte III</button>
                            </li>
                          </ul>
                          <div class="tab-content pt-2" id="myTabjustifiedContent">

                            <div class="tab-pane fade show active" id="partei" role="tabpanel" aria-labelledby="partei-tab">
                              <?php include "includes/cap-isrp1.php"; ?>
                              
                                <p class="text-danger">
                                  Verificar datos sean correctos
                                <p>
                              
                            </div>
                            <div class="tab-pane fade" id="parteii" role="tabpanel" aria-labelledby="parteii-tab">

                            <?php include "includes/cap-isrp2.php"; ?>

                            </div>
                            <div class="tab-pane fade" id="parteiii" role="tabpanel" aria-labelledby="parteiii-tab">
                            
                            <?php include "includes/cap-isrp3.php"; ?>

                            </div>


                          </div><!-- End Default Tabs -->

                        </div>
                      </div>


                      </div>
                      <div class="tab-pane fade" id="pills-iva" role="tabpanel" aria-labelledby="iva-tab">
                        Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
                      </div>
                      <div class="tab-pane fade" id="pills-retisr" role="tabpanel" aria-labelledby="retisr-tab">
                        Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                      </div>
                    </div><!-- End Pills Tabs -->

                  </div>
                </div>
                  


            
                <div class="row mb-3">

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
                    <button type="submit" class="btn btn-primary" name="enviar"data-bs-toggle="tooltip" data-bs-placement="right" title="Enviar">Guardar Datos</button>
                  </div>
                  <div class="spinner-border text-primary" role="status">
                         <span class="visually-hidden">Registrando...</span>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
              <div class="row">                
                  <div class="col-sm-12 alert alert-info alert-dismissible fade show" role="alert">Los datos aquí capturados son utilizados para la base de cálculo, se recomienda verificar las tablas de índices, tasas, y factores estén actualizados, así como los datos de captura son su responsabilidad.</div>
              </div>

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