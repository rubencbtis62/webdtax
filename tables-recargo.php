<?php
  include('php/sql.php');
  include('php/recargo.php');
  //include('php/cn.php');

    // $recargos = recargo::obtenertodos();
    $recargos = recargo::obtenertodos();
    $total_recargos = 0;
    foreach ($recargos as $recargo) {
        $total_recargos += 1;
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
      <h1>Tabla Recargo</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item">Catalogos</li>
          <li class="breadcrumb-item active">Recargos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Listado</h5>

              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Acumulados</label>
                  <label class="text-bg-success p-2 col-sm-2 col-form-label">Total <strong><?= $total_recargos; ?> </strong> Registros</label>
                  <div class="col-8 text-end">
                     <a href="alta-recargos.php"><button type="button" class="btn btn-secondary"><i class="bi bi-plus-lg me-1"></i> Agregar</button></a>
                  </div>
                  
              </div>
        <!-- Table with stripped rows  -->
              <table class="table datatable table-striped table-hover">
                <thead>
                  <tr>
                    
                    <th>Ejercicio</th>
                    <th>Ene</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>Abr</th>
                    <th>May</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Ago</th>
                    <th>Sep</th>
                    <th>Oct</th>
                    <th>Nov</th>
                    <th>Dic</th>
                    
                    <!-- <th>Acciones</th> -->
                  </tr>
                </thead>
                <tbody>

                <?php 
                    /*var_dump($recargos); */
                    foreach ($recargos as $recargo) {
                      echo '<tr>';
                 //     echo '<td>'.$recargo['clave'].'</td>';

                      echo '<td width="10">
                        <a href="pages-recargos.php?id='.$recargo['id'].'">'.$recargo['anio'].' </a>
                            </td>';                      
                    
                      echo '<td width="10">'.$recargo['ene'].'</td>';
                      echo '<td width="10">'.$recargo['feb'].'</td>';
                      echo '<td width="10">'.$recargo['mar'].'</td>';
                      echo '<td width="10">'.$recargo['abr'].'</td>';
                      echo '<td width="10">'.$recargo['may'].'</td>';
                      echo '<td width="10">'.$recargo['jun'].'</td>';
                      echo '<td width="10">'.$recargo['jul'].'</td>';
                      echo '<td width="10">'.$recargo['ago'].'</td>';
                      echo '<td width="10">'.$recargo['sep'].'</td>';
                      echo '<td width="10">'.$recargo['oct'].'</td>';
                      echo '<td width="10">'.$recargo['nov'].'</td>';
                      echo '<td width="10">'.$recargo['dic'].'</td>';
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