<?php
  include('php/sql.php');
  include('php/empresa.php');
  include('php/cn.php');

    // $empresas = empresa::obtenertodos();
    $empresas = empresa::obtenertodos();
    $total_empresas = 0;
    foreach ($empresas as $empresa) {
        $total_empresas += 1;
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
  <title>Tablas / Datos - DGETI BCS</title>
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

              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Listado de empresas</label>
                  <label class="text-bg-primary p-2 col-sm-2 col-form-label">Total <strong><?= $total_empresas; ?> </strong>empresas </label>
                  
              </div>
        <!-- Table with stripped rows  -->
              <table class="table datatable table-striped table-hover">
                <thead>
                  <tr>
                    
                    <th>Estatus</th>
                    <th>RFC</th>
                    <th>Razón Social</th>
                    <th>Actividad</th>
                    <th>Regimen Fiscal</th>
                    <th>Ejercicio</th>
                    
                    <!-- <th>Acciones</th> -->
                  </tr>
                </thead>
                <tbody>

                <?php 
                    /*var_dump($empresas); */
                    foreach ($empresas as $empresa) {
                      echo '<tr>';
                 //     echo '<td>'.$empresa['clave'].'</td>';

                      echo '<td>
                        <a href="pages-empresas.php?id_em='.$empresa['id_em'].'">'.$empresa['estatus'].' </a>
                            </td>';                      
                    
                      echo '<td>'.$empresa['em1'].'</td>';
                      echo '<td>'.$empresa['em2'].'</td>';
                      echo '<td>'.$empresa['em6'].'</td>';
                      echo '<td>'.$empresa['em7'].'</td>';
                      echo '<td>'.$empresa['em11'].'</td>';
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