<?php 
  include('sql.php');
  include('inpc.php');

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
	  
  	              
      $inpc = new inpc();

     // $tramite->setid($id);
	 $inpc->setanio($anio);
	 $inpc->setene($ene);
	 $inpc->setfeb($feb);
	 $inpc->setmar($mar);
	 $inpc->setabr($abr);
	 $inpc->setmay($may);
	 $inpc->setjun($jun);
	 $inpc->setjul($jul);
	 $inpc->setago($ago);
	 $inpc->setsep($sep);
	 $inpc->setoct($oct);
	 $inpc->setnov($nov);
	 $inpc->setdic($dic);

      $inpc->guardar();

       break;

	case 'actualizarinpc':

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
  
		$inpc = inpc::obtenerporid($id);
  
		$inpc->setid($id);
		$inpc->setanio($anio);
		$inpc->setene($ene);
		$inpc->setfeb($feb);
		$inpc->setmar($mar);
		$inpc->setabr($abr);
		$inpc->setmay($may);
		$inpc->setjun($jun);
		$inpc->setjul($jul);
		$inpc->setago($ago);
		$inpc->setsep($sep);
		$inpc->setoct($oct);
		$inpc->setnov($nov);
		$inpc->setdic($dic);
			
		$inpc->actualinpc();
		break;		

    }
	header('location: ../tables-inpc.php')
?>    