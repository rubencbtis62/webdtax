<?php
  include('php/sql.php');
  include('php/tramite.php');
  include('php/cn.php');

    // $tramites = tramite::obtenertodos();
    $tramites = tramite::obtenertodos();
    $total_tramites = 0;
    foreach ($tramites as $tramite) {
        $total_tramites += 1;
    }

    if(isset($_POST["export_data"])) {
      if(!empty($tramites)) {
      $filename = "tramites.xls";
      header("Content-Type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=".$filename);
     
      $mostrar_columnas = false;
     
      foreach($tramites as $tramite) {
      if(!$mostrar_columnas) {
      echo implode("\t", array_keys($tramite)) . "\n";
      $mostrar_columnas = true;
      }
      echo implode("\t", array_values($tramite)) . "\n";
      }
     
      }else{
      echo 'No hay datos a exportar';
      }
      exit;
     }
?>


<!DOCTYPE html>
<?php session_start();
if (@!$_SESSION['usuario'])
{  header("Location:pages-login.html");} ?>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
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
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Listado</h5>

              <div class="row mb-12">
                  <label class="col-sm-2 col-form-label">Listado de Tramites</label>
                  <label class="text-bg-primary p-2 col-sm-2 col-form-label">Total <strong><?= $total_tramites; ?> </strong>Tramites </label>                 
                  <div class="d-grid d-md-flex d-md-block justify-content-md-end">
                  <a href="reporte1.php" target = "_blank" class="btn btn-warning pull-right"> Reporte PDF </a> 
                  <form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Exportar a Excel</button>
                  </form> 
                  </div>
              </div>
              
              
              <!-- Table with stripped rows  -->
              <table class="table datatable table-striped table-hover">
                <thead>
                  <tr>
                    
                    <th>Estatus</th>
                    <th>Plantel</th>
                    <th>Oficio</th>
                    <th>Fecha</th>
                    <th>Trabajador</th>
                    <th>Asunto</th>
                    
                    <!-- <th>Acciones</th> -->
                  </tr>
                </thead>
                <tbody>

                <?php 
                    /*var_dump($tramites); */
                    foreach ($tramites as $tramite) {

                      echo '<tr>';
                 //     echo '<td>'.$tramite['clave'].'</td>';
                      switch ($tramite['estatus'])
                      {
                        case 'EN PROCESO': {
                             echo '<td> <span style ="color:#4498f8">'.$tramite['estatus'].'</span></td>';
                             break;
                              }
                        case 'EN TRAMITE': {
                          echo '<td> <span style ="color:#f941e2">'.$tramite['estatus'].'</span></td>';
                          break;
                            }
                        case 'OFICINAS DGETI': {
                          echo '<td> <span style ="color:#ff771d">'.$tramite['estatus'].'</span></td>';
                          break;
                            }
                        case 'VALIDACION': {
                          echo '<td> <span style ="color:#4498f8">'.$tramite['estatus'].'</span></td>';
                          break;
                            }                            
                        case 'PAGOS': {
                          echo '<td> <span style ="color:#2eca6a">'.$tramite['estatus'].'</span></td>';
                          break;
                            }
                        case 'RECHAZADO': {
                          echo '<td> <span style ="color:#eb2012">'.$tramite['estatus'].'</span></td>';
                          break;
                            }
                        case 'ATENDIDO': {
                          echo '<td> <span style ="color:#21924c">'.$tramite['estatus'].'</span></td>';
                          break;
                            }
        
                            

                        default: {
                              echo '<td> <span style ="color:red"> SIN ESTATUS </span></td>';
                              break;      
                              }  
                          
                      }  
                      // if ($tramite['estatus'] == "EN PROCESO")
                      // {
                      //   echo '<td> <span style ="color:red">'.$tramite['estatus'].'</span></td>';
                      // }
                      
                      echo '<td>'.$tramite['plantel'].'</td>';
                      echo '<td>'.$tramite['oficio'].'</td>';
                      echo '<td>'.$tramite['fecha'].'</td>';
                      echo '<td>'.$tramite['apellidos'].' '.$tramite['nombre'].'</td>';
                      echo '<td>'.$tramite['asunto'].'</td>';
                  //     echo '<td>
                  //     <a href="datoscliente1.php?id='.$cliente['id'].'" class="btn btn-info btn-sm"><i class ="fa fa-user" data-toggle="tooltip" data-html="true" title="Actualizar Datos"></i></a>
                  // </td>';

                      echo '</tr>';
                    }

                  ?>



                  <!-- <tr>
                    <td>Theodore Duran</td>
                    <td>8971</td>
                    <td>Dhanbad</td>
                    <td>1999/04/07</td>
                    <td>97%</td>
                  </tr> -->
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

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