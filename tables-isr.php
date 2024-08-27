<?php
  include('php/sql.php');
  include('php/isr.php');


    // $isrs = isr::obtenertodos();
    $isrs = isr::obtenertodos();
    $total_isrs = 0;
    foreach ($isrs as $isr) {
        $total_isrs += 1;
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
      <h1>Tabla ISR</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item">Catalogo</li>
          <li class="breadcrumb-item active">ISR</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Listado Tabla Persona Fisica con Actividad Empresarial</h5>

              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Registros de ISR</label>
                  <label class="text-bg-primary p-2 col-sm-2 col-form-label">Total <strong><?= $total_isrs; ?> </strong> ISR's </label>                  
              </div>
        <!-- Table with stripped rows  -->
              <table class="table datatable table-striped table-hover">
                <thead>
                  <tr>
                    
                    <th>Ejercicio</th>
                    <th>Fila</th>
                    <th>Limite Inferior</th>
                    <th>Limite Superior</th>
                    <th>Cuota Fija</th>
                    <th>Porcetaje Excedente</th>
                    <th style="text-align: center;">Estatus</th>                   
                    
                    <!-- <th>Acciones</th> -->
                  </tr>
                </thead>
                <tbody>

                <?php 
                    /*var_dump($isrs); */
                    foreach ($isrs as $isr) {
                      echo '<tr>';
                 //     echo '<td>'.$isr['clave'].'</td>';

                      echo '<td width="10%">
                        <a href="pages-isrs.php?id='.$isr['id'].'">'.$isr['anio'].' </a>
                            </td>';                      
                    
                      echo '<td width="10%" style="text-align: center;">'.$isr['fila'].'</td>';
                      echo '<td width="10%" style="text-align: right;">'.number_format($isr['li'],2).'</td>';
                      echo '<td width="10%" style="text-align: right;">'.number_format($isr['ls'],2).'</td>';
                      echo '<td width="10%" style="text-align: right;">'.number_format($isr['cuota'],2).'</td>';
                      echo '<td width="10%" style="text-align: right;">'.$isr['por'].'</td>';
                      echo '<td width="40%" style="text-align: right;">'.$isr['estatus'].'</td>';
                      
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
              <div class="row">                
                  <div class="col-sm-12 alert alert-info alert-dismissible fade show" role="alert">Seleccionar en la columna de ejercicio para actualizar, Los datos mostrados son responsabilidad de usuario supervisor</div>
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