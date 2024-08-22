<?php
  include('php/sql.php');
  include('php/inpc.php');
  include('php/cn.php');

    // $inpcs = inpc::obtenertodos();
    $inpcs = inpc::obtenertodos();
    $total_inpcs = 0;
    foreach ($inpcs as $inpc) {
        $total_inpcs += 1;
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
      <h1>Tabla INPC</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item">Catalgogo</li>
          <li class="breadcrumb-item active">INPC</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Indice Nacional Precios al Consumidor</h5>

              <div class="row mb-3">

                  <label class="col-sm-2 col-form-label">Registros de INPC</label>
                  <label class="text-bg-primary p-2 col-sm-2 col-form-label">Total <strong><?= $total_inpcs; ?> </strong> INPC's </label>
                  <div class="col-8 text-end">
                     <a href="alta-inpcs.php"><button type="button" class="btn btn-secondary"><i class="bi bi-plus-lg me-1"></i> Agregar</button></a>
                  </div>
                  
                  
              </div>
        <!-- Table with stripped rows  -->
              <table class="table datatable table-striped table-hover">
                <thead class="text-danger-emphasis">
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
                    /*var_dump($inpcs); */
                    foreach ($inpcs as $inpc) {
                      echo '<tr>';
                 //     echo '<td>'.$inpc['clave'].'</td>';

                      echo '<td width="10">
                        <a href="pages-inpcs.php?id='.$inpc['id'].'">'.$inpc['anio'].' </a>
                            </td>';                      
                    
                      echo '<td width="10">'.$inpc['ene'].'</td>';
                      echo '<td width="10">'.$inpc['feb'].'</td>';
                      echo '<td width="10">'.$inpc['mar'].'</td>';
                      echo '<td width="10">'.$inpc['abr'].'</td>';
                      echo '<td width="10">'.$inpc['may'].'</td>';
                      echo '<td width="10">'.$inpc['jun'].'</td>';
                      echo '<td width="10">'.$inpc['jul'].'</td>';
                      echo '<td width="10">'.$inpc['ago'].'</td>';
                      echo '<td width="10">'.$inpc['sep'].'</td>';
                      echo '<td width="10">'.$inpc['oct'].'</td>';
                      echo '<td width="10">'.$inpc['nov'].'</td>';
                      echo '<td width="10">'.$inpc['dic'].'</td>';
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