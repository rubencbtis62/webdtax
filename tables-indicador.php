<?php
  include('php/sql.php');
  include('php/indicador.php');
  include('php/cn.php');

    // $indicadors = indicador::obtenertodos();
    $indicadors = indicador::obtenertodos();
    $total_indicadors = 0;
    foreach ($indicadors as $indicador) {
        $total_indicadors += 1;
    }

?>

<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario'])
{
  header("Location:pages-login.html");
}
?>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tablas / Datos - Apc Accounting</title>
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
      <h1>Tabla indicador</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item">Catalogos</li>
          <li class="breadcrumb-item active">Indicadores</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                  
              <h5 class="card-title">Listado de Indicadores Fiscales</h5>
              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Indicadores</label>
                  <label class="text-bg-primary p-2 col-sm-2 col-form-label">Total <strong><?= $total_indicadors; ?> </strong> Registros </label>

                  <div class="col-sm-8 text-end">
                    <a href="alta-indicadores.php">
                      <button type="button" class="btn btn-success col-sm-2" name="agregar"><i class="ri ri-add-circle-line me-1"></i> Agregar</button>
                    </a>
                  </>
              </div>

        <!-- Table with stripped rows  -->
              <table class="table datatable table-striped table-hover">
                <thead>
                  <tr>                   
                    <th class="text-center">Ejercicio</th>
                    <th class="text-center">ISR P. Moral</th>
                    <th class="text-center">Tasa Nomina</th>
                    <th class="text-center">Tasa Hospedaje</th>
                    <th class="text-center">Tasa IETU</th>
                    <!-- <th>Acciones</th> -->
                  </tr>
                </thead>
                <tbody>
                <?php 
                    /*var_dump($indicadors); */
                    foreach ($indicadors as $indicador) {
                      echo '<tr class="text-center">';
                 //     echo '<td>'.$indicador['clave'].'</td>';
                      echo '<td width="20">
                        <a href="pages-indicadores.php?id='.$indicador['id'].'">'.$indicador['anio'].' </a>
                            </td>';                                          
                      echo '<td width="20">'.$indicador['isrpm'].'</td>';
                      echo '<td width="20">'.$indicador['tasnom'].'</td>';
                      echo '<td width="20">'.$indicador['tashos'].'</td>';
                      echo '<td width="20">'.$indicador['ietu'].'</td>';
                      
                  //     echo '<td>
                  //     <a href="datoscliente1.php?id='.$cliente['id'].'" class="btn btn-info btn-sm"><i class ="fa fa-user" data-toggle="tooltip" data-html="true" title="Actualizar Datos"></i></a>
                  // </td>';

                      echo '</tr>';
                    }
                  ?>
                    
                  </tr>                  
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