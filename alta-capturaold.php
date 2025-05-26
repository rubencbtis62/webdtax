<?php
  include('php/sql.php');
  include('php/empresa.php');
  include('php/captura.php');

  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $anio = $_POST['anio'];
    $id_em = $_POST['id_em'];
}else
{
    $anio = $_GET['anio'];
    $id_em = $_GET['id_em'];
}

// $anio ="2024";
// $id_em = "1";


  $empresa = empresa::obtenerporid_em($id_em);
  $captura = captura::obtenerporempresa($anio, $id_em);

?>

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
     <div class="row"> 
      <div class="col-sm-3">
        <h3>Página de Captura</h3>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
            <li class="breadcrumb-item">Captura</li>
            <li class="breadcrumb-item active">Personas Fisicas</li>
          </ol>
        </nav>
       </div>
       
        <div class="col-sm-2">
          <label><strong>Ejercicio</strong></label>
          <input class="form-control" type="text" name="anio"  value="<?= $anio; ?>" disabled>
        </div>
        <div class="col-sm-7">
          <label><strong>Empresa</strong></label>
          <input class="form-control" type="text" name="em2"  value="<?= $empresa->getem2(); ?>" disabled>
          <input type="hidden" name="id_em" value="<?= $empresa->getid_em(); ?>">
        </div> 

      </div>
      <?php //  var_dump($anio); ?>
      <?php  // var_dump($empresa->getid_em()); 
      
      //var_dump($captura);

     // var_dump($captura->getcapis());

      $sw=true;
      unset($lcapis);

      foreach ($captura as $fila) {
      if ($sw)
      { $lcapis = array(array($fila['mes'],$fila['k1'],$fila['k2'],$fila['k3'],$fila['k4'],$fila['k5'],
        $fila['k6'],$fila['k7'],$fila['k8'],$fila['k9'],$fila['k10'],
        $fila['k11'],$fila['k12'],$fila['k13'],$fila['k14'],$fila['k15'],
        $fila['k16'],$fila['k17'],$fila['k18'],$fila['k19'],$fila['k20'],
        $fila['k21'],$fila['k22'],$fila['k23'],$fila['k24'],$fila['k25'],
        $fila['k26'],$fila['k27'],$fila['k28'],$fila['k29'],$fila['k30'],
        $fila['k31'],$fila['k32'],$fila['k33'],$fila['k34'],$fila['k35'],
        $fila['k36'],$fila['k37'],$fila['k38'],$fila['k39'],$fila['k40'],
        $fila['k41'],$fila['k42']

      ));
        $sw = false; }
      else 
      {  $lcapis[]=array($fila['mes'],$fila['k1'],$fila['k2'],$fila['k3'],$fila['k4'],$fila['k5'],
        $fila['k6'],$fila['k7'],$fila['k8'],$fila['k9'],$fila['k10'],
        $fila['k11'],$fila['k12'],$fila['k13'],$fila['k14'],$fila['k15'],
        $fila['k16'],$fila['k17'],$fila['k18'],$fila['k19'],$fila['k20'],
        $fila['k21'],$fila['k22'],$fila['k23'],$fila['k24'],$fila['k25'],
        $fila['k26'],$fila['k27'],$fila['k28'],$fila['k29'],$fila['k30'],
        $fila['k31'],$fila['k32'],$fila['k33'],$fila['k34'],$fila['k35'],
        $fila['k36'],$fila['k37'],$fila['k38'],$fila['k39'],$fila['k40'],
        $fila['k41'],$fila['k42']
      ); }
      
      //array_push($capis, $fila['mes'],$fila['k1'],$fila['k2'],$fila['k3'],$fila['k4'],$fila['k5']);
      }

      //var_dump($lcapis);
      // for ($row = 0; $row < 12; $row++)
      // {               
           
      //   $capis[0][] =   

      //    $sql = "INSERT INTO captura(mes, k1, k2, k3, k4, k5, id_em, anio, id_tipo, id_mes, estatus) VALUES 
      //     ('".$this->capis[$row][0]."' ,'".$this->capis[$row][1]."','".$this->capis[$row][2]."','".$this->capis[$row][3]."','".$this->capis[$row][4]."','".$this->capis[$row][5]."','".$this->capis[$row][6]."','".$this->capis[$row][7]."','".$this->capis[$row][8]."','".$this->capis[$row][9]."','".$this->capis[$row][10]."')";
            
      //        $resultado = $this->mysqli->query($sql);        
      //  }



      ?>
   


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
              <div class="col-sm-5">
                <h5 class="card-title">Captura Personas Fisicas Actividad Prof. y/o Empresarial</h5>
                </div>
                <!-- General Form Elements    action="php/ccaptura.php"     -->
                <form role="form" action="php/postarreglos.php" method="POST" class="needs-validation" novalidate>
                <input type="hidden" name="accion" value="actualcaptura">
                <input type="hidden" name="anio" value="<?= $anio; ?>">
                <input type="hidden" name="id_em" value="<?= $empresa->getid_em(); ?>"> 
                <!-- <div class="row"> -->

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Selecciona Impuesto</h5>
                    <ul class="nav nav-pills mb-2 d-flex" id="pills-tab" role="tablist">
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link active" id="pills-isr-tab" data-bs-toggle="pill" data-bs-target="#pills-isr" type="button" role="tab" aria-controls="pills-isr" aria-selected="true">ISR</button>
                      </li>
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link" id="pills-iva-tab" data-bs-toggle="pill" data-bs-target="#pills-iva" type="button" role="tab" aria-controls="pills-iva" aria-selected="false">IVA</button>
                      </li>
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link" id="pills-retisr-tab" data-bs-toggle="pill" data-bs-target="#pills-retisr" type="button" role="tab" aria-controls="pills-retisr" aria-selected="false">Retenciones ISR / IVA</button>
                      </li>
<!--                       <li class="nav-item flex-fill" role="presentation">
                          <button class="nav-link w-100" id="pills-retiva-tab" data-bs-toggle="pill" data-bs-target="#pills-retiva" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Retenciones IVA</button>
                        </li>   -->                      
                        <li class="nav-item flex-fill" role="presentation">
                          <button class="nav-link w-100" id="pills-nom-tab" data-bs-toggle="pill" data-bs-target="#pills-nom" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Otros Impuestos</button>
                        </li>
<!--                         <li class="nav-item flex-fill" role="presentation">
                          <button class="nav-link w-100" id="pills-hos-tab" data-bs-toggle="pill" data-bs-target="#pills-hos" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Imp.S/ Hospedaje</button>
                        </li>  -->                     
                    </ul>
                    <div class="tab-content pt-2" id="myTabContent">
                      <div class="tab-pane fade show active" id="pills-isr" role="tabpanel" aria-labelledby="isr-tab">

                      <!-- Tab interno de ISR-->
                      <div class="card">
                        <div class="card-body">                          
                          <!-- Default Tabs -->
                          <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100 active text-bg-success" id="partei-tab" data-bs-toggle="tab" data-bs-target="#partei" type="button" role="tab" aria-controls="home" aria-selected="true">Parte I</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100 text-bg-success" id="parteii-tab" data-bs-toggle="tab" data-bs-target="#parteii" type="button" role="tab" aria-controls="profile" aria-selected="false">Parte II</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100 text-bg-success" id="parteiii-tab" data-bs-toggle="tab" data-bs-target="#parteiii" type="button" role="tab" aria-controls="contact" aria-selected="false">Parte III</button>
                            </li>
                          </ul>
                          <div class="tab-content pt-0" id="myTabjustifiedContent">

                            <div class="tab-pane fade show active" id="partei" role="tabpanel" aria-labelledby="partei-tab">
                              <?php include "includes/cap-old-isrp1.php"; // Captura de ISR ?>
                            </div>
                            <div class="tab-pane fade" id="parteii" role="tabpanel" aria-labelledby="parteii-tab">

                            <?php include "includes/cap-old-isrp2.php"; // Captura de ISR ?>

                            </div>
                            <div class="tab-pane fade" id="parteiii" role="tabpanel" aria-labelledby="parteiii-tab">
                            
                            <?php include "includes/cap-old-isrp3.php"; // Captura de ISR ?>

                            </div>

                          </div><!-- End Default Tabs -->

                        </div>
                      </div>

                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle me-1"></i>
                            Verificar que los datos sean correctos!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      </div>

<!-- Tab interno de IVA-->
                    <div class="tab-pane fade" id="pills-iva" role="tabpanel" aria-labelledby="iva-tab">                    
                      <div class="card">
                        <div class="card-body">                          
                            <!-- Default Tabs -->
                            <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                              <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active text-bg-warning" id="partev-tab" data-bs-toggle="tab" data-bs-target="#partev" type="button" role="tab" aria-controls="home" aria-selected="true">Parte I</button>
                              </li>
                              <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 text-bg-warning" id="partevv-tab" data-bs-toggle="tab" data-bs-target="#partevv" type="button" role="tab" aria-controls="profile" aria-selected="false">Parte II</button>
                              </li>
                              <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 text-bg-warning" id="partevvv-tab" data-bs-toggle="tab" data-bs-target="#partevvv" type="button" role="tab" aria-controls="contact" aria-selected="false">Parte III</button>
                              </li>
                            </ul>
                            <div class="tab-content pt-0" id="myTabjustifiedContent">
                              <div class="tab-pane fade show active" id="partev" role="tabpanel" aria-labelledby="partev-tab">
                                 <?php include "includes/cap-old-ivap1.php"; ?>
                              </div>
                              <div class="tab-pane fade" id="partevv" role="tabpanel" aria-labelledby="partevv-tab">
                                <?php include "includes/cap-old-ivap2.php"; ?>
                              </div>
                              <div class="tab-pane fade" id="partevvv" role="tabpanel" aria-labelledby="partevvv-tab">                           
                                <?php include "includes/cap-old-ivap3.php"; ?>
                              </div>
                            </div><!-- End Default Tabs -->
                         </div>
                      </div>

                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <i class="bi bi-exclamation-triangle me-1"></i>
                          Verificar que los datos sean correctos!
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>

<!-- Tab interno de RET-->
                      <div class="tab-pane fade" id="pills-retisr" role="tabpanel" aria-labelledby="retisr-tab">

                        <div class="card">
                            <div class="card-body">                          
                                <!-- Default Tabs -->
                                <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                                  <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100 active text-bg-info" id="parter-tab" data-bs-toggle="tab" data-bs-target="#parter" type="button" role="tab" aria-controls="home" aria-selected="true">Parte I</button>
                                  </li>
                                  <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100 text-bg-info" id="parterr-tab" data-bs-toggle="tab" data-bs-target="#parterr" type="button" role="tab" aria-controls="profile" aria-selected="false">Parte II</button>
                                  </li>
                                </ul>
                                <div class="tab-content pt-0" id="myTabjustifiedContent">
                                  <div class="tab-pane fade show active" id="parter" role="tabpanel" aria-labelledby="parter-tab">
                                    <!-- <?php include "includes/cap-old-retp1.php"; ?>                                                               -->
                                  </div>
                                  <div class="tab-pane fade" id="parterr" role="tabpanel" aria-labelledby="parterr-tab">
                                    <?php include "includes/cap-old-retp2.php"; ?>
                                  </div>                              
                                </div><!-- End Default Tabs -->
                            </div>
                        </div>

                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <i class="bi bi-exclamation-triangle me-1"></i>
                          Verificar que los datos sean correctos!
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <p>
                          Las personas obligadas a contribuir son todas aquellas que residan en México, radiquen en el extranjero y que tengan algún establecimiento en el país, así como todos los residentes en el extranjero que perciben ingresos de fuentes de riqueza en México. 
                        </p>  
                        </p>
                          El porcentaje de retención se mide de acuerdo con las ganancias de cada contribuyente; por lo tanto, la retención por mes va desde 1.92%, hasta 35% al mes. El Servicio de Administración Tributaria (SAT) cuenta con una tabla de retenciones del impuesto sobre la renta. 
                        </p>
                      </div>


<!-- Tab interno de otros Impuestos-->
                      <div class="tab-pane fade" id="pills-nom" role="tabpanel" aria-labelledby="nom-tab">

                      <div class="card">
                          <div class="card-body">                          
                              <!-- Default Tabs -->
                              <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                                <li class="nav-item flex-fill" role="presentation">
                                  <button class="nav-link w-100 active text-bg-primary" id="parten-tab" data-bs-toggle="tab" data-bs-target="#parten" type="button" role="tab" aria-controls="home" aria-selected="true">Impuestos Nomina</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                  <button class="nav-link w-100 text-bg-primary" id="parterr-tab" data-bs-toggle="tab" data-bs-target="#partenn" type="button" role="tab" aria-controls="profile" aria-selected="false">Impuestos Hospedaje</button>
                                </li>
                              </ul>
                              <div class="tab-content pt-0" id="myTabjustifiedContent">
                                <div class="tab-pane fade show active" id="parten" role="tabpanel" aria-labelledby="parten-tab">
                                  <!-- <?php include "includes/cap-old-nomp1.php"; ?>                                                               -->
                                </div>
                                <div class="tab-pane fade" id="partenn" role="tabpanel" aria-labelledby="partenn-tab">
                                  <?php include "includes/cap-old-nomp2.php"; ?>
                                </div>                              
                              </div><!-- End Default Tabs -->
                          </div>
                      </div>

                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-triangle me-1"></i>
                        Verificar que los datos sean correctos!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      <p>
                        Las personas obligadas a contribuir son todas aquellas que residan en México, radiquen en el extranjero y que tengan algún establecimiento en el país, así como todos los residentes en el extranjero que perciben ingresos de fuentes de riqueza en México. 
                      </p>  
                      </p>
                        El porcentaje de retención se mide de acuerdo con las ganancias de cada contribuyente; por lo tanto, la retención por mes va desde 1.92%, hasta 35% al mes. El Servicio de Administración Tributaria (SAT) cuenta con una tabla de retenciones del impuesto sobre la renta. 
                      </p>
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
                <div class="spinner-grow text-warning" role="status">
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