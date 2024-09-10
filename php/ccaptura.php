<?php 
  include('sql.php');
  include('captura.php');

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
	//$estatus = $_POST['estatus'];
	$em1 = $_POST['em1'];
	$em2 = $_POST['em2'];
	$em3 = $_POST['em3'];
	$em4 = $_POST['em4'];			
	$em5 = $_POST['em5'];
	$em6 = $_POST['em6'];
	$em7 = $_POST['em7'];
	$em8 = $_POST['em8'];
	$em9 = $_POST['em9'];			
	$em10 = $_POST['em10'];
	$em11 = $_POST['em11'];
	  
  	              
      $captura = new captura();

     // $tramite->setid($id);
	// $captura->setestatus($estatus);
	 $captura->setem1($em1);
	 $captura->setem2($em2);
	 $captura->setem3($em3);
	 $captura->setem4($em4);
	 $captura->setem5($em5);
	 $captura->setem6($em6);
	 $captura->setem7($em7);
	 $captura->setem8($em8);
	 $captura->setem9($em9);
	 $captura->setem10($em10);
	 $captura->setem11($em11);

      $captura->guardar();

       break;

	case 'actualizarcaptura':

		$id_em = $_POST['id_em'];
		$estatus = $_POST['estatus'];
		$em1 = $_POST['em1'];
		$em2 = $_POST['em2'];
		$em3 = $_POST['em3'];
		$em4 = $_POST['em4'];			
		$em5 = $_POST['em5'];
		$em6 = $_POST['em6'];
		$em7 = $_POST['em7'];
		$em8 = $_POST['em8'];
		$em9 = $_POST['em9'];			
		$em10 = $_POST['em10'];
		$em11 = $_POST['em11'];
  
		$captura = captura::obtenerporid_em($id_em);
  
		$captura->setid_em($id_em);
		$captura->setestatus($estatus);
		$captura->setem1($em1);
		$captura->setem2($em2);
		$captura->setem3($em3);
		$captura->setem4($em4);
		$captura->setem5($em5);
		$captura->setem6($em6);
		$captura->setem7($em7);
		$captura->setem8($em8);
		$captura->setem9($em9);
		$captura->setem10($em10);
		$captura->setem11($em11);
			
		$captura->actualcaptura();
		break;		

    }
	//header('location: ../tables-capturas.php')
?>   
	<script language='javascript'>;
	let captura = "<?php echo $em2;?>";
	alert('captura:'+captura+' modificada correctamente.');
	window.location = '../tables-capturas.php';
	</script>;

