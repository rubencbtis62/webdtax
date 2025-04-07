<?php
  include('php/sql.php');
  include('php/empresa.php');

  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $anio = $_POST['anio'];
    $id_em = $_POST['id_em'];
}else
{
    $anio = $_GET['anio'];
    $id_em = $_GET['id_em'];
}

  $empresa = empresa::obtenerporid_em($id_em);
  
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
                <input class="form-control" type="text" name="anio"  value="<?= $anio; ?>">
            </div>
            <div class="col-sm-7">
                <label><strong>Empresa</strong></label>
                <input class="form-control" type="text" name="em2"  value="<?= $empresa->getem2(); ?>">
                <input type="hidden" name="id_em" value="<?= $empresa->getid_em(); ?>">
            </div> 

      </div>
      <?php     var_dump($anio); ?>
      <?php   var_dump($empresa->getid_em()); ?>
  </div><!-- End Page Title -->
  <section class="section">








  </section>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include "includes/footer.php"; ?>

</body>

</html>