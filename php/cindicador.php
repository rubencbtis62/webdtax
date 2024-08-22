<?php 
  include('sql.php');
  include('indicador.php');

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer-master/Exception.php';
  require 'PHPMailer-master/PHPMailer.php';
  require 'PHPMailer-master/SMTP.php';


  if ($_SERVER['REQUEST_METHOD']=='POST'){
  	 $accion = $_POST['accion'];
  }else
  {
  	 $accion = $_GET['accion'];
  }
  switch ($accion) {
  	case 'alta':
    //  $id = $_POST['id'];
	$anio = $_POST['anio'];
	$isrpm = $_POST['isrpm'];
	$tasnom = $_POST['tasnom'];
	$tashos = $_POST['tashos'];
	$ietu = $_POST['ietu'];
  	              
    $indicador = new indicador();

     // $tramite->setid($id);
	 $indicador->setanio($anio);
	 $indicador->setisrpm($isrpm);
	 $indicador->settasnom($tasnom);
	 $indicador->settashos($tashos);
	 $indicador->setietu($ietu);
	 
     $indicador->guardar();

     break;

	case 'actualizarindicador':

		$id = $_POST['id'];
		$anio = $_POST['anio'];
		$isrpm = $_POST['isrpm'];
		$tasnom = $_POST['tasnom'];
		$tashos = $_POST['tashos'];
		$ietu = $_POST['ietu'];			
	
		$indicador = indicador::obtenerporid($id);
  
		$indicador->setid($id);
		$indicador->setanio($anio);
		$indicador->setisrpm($isrpm);
		$indicador->settasnom($tasnom);
		$indicador->settashos($tashos);
		$indicador->setietu($ietu);
				
		$indicador->actualindicador();
		break;		
    }
	header('location: ../tables-indicador.php')
?>    