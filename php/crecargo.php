<?php 
  include('sql.php');
  include('recargo.php');

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
	$ene = $_POST['ene'];
	$feb = $_POST['feb'];
	$mar = $_POST['mar'];
	$abr = $_POST['abr'];			
	$may = $_POST['may'];
	$jun = $_POST['jun'];
	$jul = $_POST['jul'];
	$ago = $_POST['ago'];
	$sep = $_POST['sep'];			
	$oct = $_POST['oct'];
	$nov = $_POST['nov'];
	$dic = $_POST['dic'];
	  
  	              
      $recargo = new recargo();

     // $tramite->setid($id);
	 $recargo->setanio($anio);
	 $recargo->setene($ene);
	 $recargo->setfeb($feb);
	 $recargo->setmar($mar);
	 $recargo->setabr($abr);
	 $recargo->setmay($may);
	 $recargo->setjun($jun);
	 $recargo->setjul($jul);
	 $recargo->setago($ago);
	 $recargo->setsep($sep);
	 $recargo->setoct($oct);
	 $recargo->setnov($nov);
	 $recargo->setdic($dic);

      $recargo->guardar();

       break;

	case 'actualizarrecargo':

		$id = $_POST['id'];
		$anio = $_POST['anio'];
		$ene = $_POST['ene'];
		$feb = $_POST['feb'];
		$mar = $_POST['mar'];
		$abr = $_POST['abr'];			
		$may = $_POST['may'];
		$jun = $_POST['jun'];
		$jul = $_POST['jul'];
		$ago = $_POST['ago'];
		$sep = $_POST['sep'];			
		$oct = $_POST['oct'];
		$nov = $_POST['nov'];
		$dic = $_POST['dic'];
  
		$recargo = recargo::obtenerporid($id);
  
		$recargo->setid($id);
		$recargo->setanio($anio);
		$recargo->setene($ene);
		$recargo->setfeb($feb);
		$recargo->setmar($mar);
		$recargo->setabr($abr);
		$recargo->setmay($may);
		$recargo->setjun($jun);
		$recargo->setjul($jul);
		$recargo->setago($ago);
		$recargo->setsep($sep);
		$recargo->setoct($oct);
		$recargo->setnov($nov);
		$recargo->setdic($dic);
			
		$recargo->actualrecargo();
		break;		

    }
	header('location: ../tables-recargo.php')
?>    