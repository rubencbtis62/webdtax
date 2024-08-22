<?php 
  include('sql.php');
  include('empresa.php');

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
	  
  	              
      $empresa = new empresa();

     // $tramite->setid($id);
	// $empresa->setestatus($estatus);
	 $empresa->setem1($em1);
	 $empresa->setem2($em2);
	 $empresa->setem3($em3);
	 $empresa->setem4($em4);
	 $empresa->setem5($em5);
	 $empresa->setem6($em6);
	 $empresa->setem7($em7);
	 $empresa->setem8($em8);
	 $empresa->setem9($em9);
	 $empresa->setem10($em10);
	 $empresa->setem11($em11);

      $empresa->guardar();

       break;

	case 'actualizarempresa':

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
  
		$empresa = empresa::obtenerporid_em($id_em);
  
		$empresa->setid_em($id_em);
		$empresa->setestatus($estatus);
		$empresa->setem1($em1);
		$empresa->setem2($em2);
		$empresa->setem3($em3);
		$empresa->setem4($em4);
		$empresa->setem5($em5);
		$empresa->setem6($em6);
		$empresa->setem7($em7);
		$empresa->setem8($em8);
		$empresa->setem9($em9);
		$empresa->setem10($em10);
		$empresa->setem11($em11);
			
		$empresa->actualempresa();
		break;		

    }
	//header('location: ../tables-empresas.php')
?>   
	<script language='javascript'>;
	let empresa = "<?php echo $em2;?>";
	alert('Empresa:'+empresa+' modificada correctamente.');
	window.location = '../tables-empresas.php';
	</script>;

