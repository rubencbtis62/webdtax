<?php 
  include('sql.php');
  include('tramite.php');

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
	  $estatus = $_POST['estatus'];
	  $plantel = $_POST['plantel'];
	  $area = $_POST['area'];
	  $fecha = $_POST['fecha'];
	  $responsable = $_POST['responsable'];
	  $correo1 = $_POST['correo1'];
	  $oficio = $_POST['oficio'];
	  $importancia = $_POST['importancia'];
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
	  $domicilio = $_POST['domicilio'];
      $asunto = $_POST['asunto'];
	  $telefono = $_POST['telefono'];
	  $correo = $_POST['correo'];
	  
  	              
      $tramite = new tramite();

     // $tramite->setid($id);
	  $tramite->setestatus($estatus);
	  $tramite->setplantel($plantel);
	  $tramite->setarea($area);
	  $tramite->setresponsable($responsable);
	  $tramite->setcorreo1($correo1);
	  $tramite->setoficio($oficio);
	  $tramite->setimportancia($importancia);
	  $tramite->setfecha($fecha);	  
      $tramite->setnombre($nombre);
      $tramite->setapellidos($apellidos);
	  $tramite->setdomicilio($domicilio);  
	  $tramite->setasunto($asunto);
	  $tramite->settelefono($telefono);	  
	  $tramite->setcorreo($correo);

      $tramite->guardar();


	
		
		//Create an instance; passing `true` enables exceptions
		$mail = new PHPMailer(true);
		
		try {
			//Server settings
			$mail->SMTPDebug = 0;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'ruben.cbtis62@gmail.com';                     //SMTP username
			$mail->Password   = 'ygucvsuhwmhycojp';                               //SMTP password
			$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
			$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
			$mail->CharSet = PHPMailer::CHARSET_UTF8;
		
			//Recipients
			$mail->setFrom('ruben.cbtis62@gmail.com', 'Responsable de Tramites');
			$mail->addAddress($correo, $apellidos." ".$nombre);     //Add a recipient
			// $mail->addAddress('ellen@example.com');               //Name is optional
			// $mail->addReplyTo('info@example.com', 'Information');
			$mail->addCC($correo1);
			// $mail->addBCC('bcc@example.com');
		
			//Attachments
			// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
		
			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Solicitud de Tramite Administrativo';

			$mail->Body    = "<h2>Se ha geneado un tickets para tramite administrativo <b>Folio No.</b>  $oficio </h2> </br>
 							<p>Importancia : <h3><b> $importancia </b></h3> </p></br>
							<p>Estatus tramite : <b>En Tramite</b> </p></br>
							<p>Asunto : <b> $asunto </b> </p></br>
							<h3>Datos del Plantel</h3></br>
			                <p>Plantel : <b> $plantel </b> </p>
							<P>Area : <b> $area </b> </p>
							<p>Responsable Plantel : <b> $responsable </b></p>
							<p>Correo : <b> $correo1 </b> </p</br>
							<p>Oficio : <b> $oficio </b> </br>
							Con Fecha : <b> $fecha </b> </p</br>
							
							<h3>Datos del Trabajador</h3> </br>
			                <p>Trabajador : <b> $apellidos  $nombre </b> </p>
							<p>Correo : <b> $correo </b> </p>
							<p>Número de Contacto : <b> $telefono </b> </p>";


			// $mail->Body    = '<h2>Se ha geneado un tickets para tramite administrativo <b>Folio No.!</b> </h2>'.$telefono. '\n
			//                  Trabajador : <b>'.$apellidos." ".$nombre.'</b> \n
			// 				 Domicilio : <b>'.$domicilio.'</b>\n';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
			$mail->send();
			echo 'Mesaje se envio correctamente';
			} catch (Exception $e) {
			echo "Error: de envio de correo{$mail->ErrorInfo}";
	
	
	   }
	

	   echo '<script type="text/javascript">', 'alert("Correo enviado correctamente");','</script>';




  		break;
   	case 'baja':
  		 $id = $_GET['id'];
  		 $cliente = cliente::obtenerporid($id);
  		 $cliente->eliminar();
  		break;
   	case 'cargar':
/*   		 $id = $_GET['id'];
  		 $cliente = cliente::obtenerporid($id);
  		 $cliente->eliminar();
 */		  
        
/*  		$uploaddir = 'archivos/';
		$uploadfile = $uploaddir . basename($_FILES['doc1']['name']);		
		if (move_uploaded_file($_FILES['doc1']['tmp_name'], $uploadfile)) {
			echo "File is valid, and was successfully uploaded.\n";
		} else {
			echo "Possible file upload attack!\n";
		}	 */ 
		

/*         $tmp_name = $_FILES["mancumunado"]["tmp_name"];
        $name = basename($_FILES["mancumunado"]["name"]);
        move_uploaded_file($tmp_name, "archivos/$name"); */ 
		
		
		
/*         $mancumunado = $_POST['mancumunado']; */

 	    $nombre = $_FILES['doc1']['name'];
		$ruta = $_FILES['doc1']['tmp_name'];
		  /*  $destino = "archivos/".$nombre;  */
		$destino = "archivos/".$nombre;
		if ($nombre_arc !="")
		  {
			if (copy($ruta,$destino))
			{ echo "Exito";}			
		  }  
	 
  		break;	
		
	  	case 'actualizaestatus':

			$id = $_POST['id'];
			$estatus = $_POST['estatus'];
			$plantel = $_POST['plantel'];
			$area = $_POST['area'];
			$fecha = $_POST['fecha'];
			$responsable = $_POST['responsable'];
			$correo1 = $_POST['correo1'];
			$oficio = $_POST['oficio'];
			$importancia = $_POST['importancia'];
			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellidos'];
			$domicilio = $_POST['domicilio'];
			$asunto = $_POST['asunto'];
			$telefono = $_POST['telefono'];
			$correo = $_POST['correo'];
				  
			$tramite = tramite::obtenerporid($id);
	  
			$tramite->setid($id);
			$tramite->setestatus($estatus);
			$tramite->setplantel($plantel);
			$tramite->setarea($area);
			$tramite->setresponsable($responsable);
			$tramite->setcorreo1($correo1);
			$tramite->setoficio($oficio);
			$tramite->setimportancia($importancia);
			$tramite->setfecha($fecha);	  
			$tramite->setnombre($nombre);
			$tramite->setapellidos($apellidos);
			$tramite->setdomicilio($domicilio);  
			$tramite->setasunto($asunto);
			$tramite->settelefono($telefono);	  
			$tramite->setcorreo($correo);
						
			$tramite->actualestatus();



		//Create an instance; passing `true` enables exceptions
		$mailes = new PHPMailer(true);
		
		try {
			//Server settings
			$mailes->SMTPDebug = 0;                      //Enable verbose debug output
			$mailes->isSMTP();                                            //Send using SMTP
			$mailes->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			$mailes->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mailes->Username   = 'ruben.cbtis62@gmail.com';                     //SMTP username
			$mailes->Password   = 'ygucvsuhwmhycojp';                               //SMTP password
			$mailes->SMTPSecure = 'tls';            //Enable implicit TLS encryption
			$mailes->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
			$mailes->CharSet = PHPMailer::CHARSET_UTF8;
		
			//Recipients
			$mailes->setFrom('ruben.cbtis62@gmail.com', 'Responsable de Tramites');
			//$mailes->addAddress('ruben.hernandez@cbtis62.edu.mx', 'Correo de Prueba');
			$mailes->addAddress($correo, $apellidos." ".$nombre);     //Add a recipient
			// $mail->addAddress('ellen@example.com');               //Name is optional
			// $mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC($correo1);
			// $mail->addBCC('bcc@example.com');
		
			//Attachments
			// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
		
			//Content
			$mailes->isHTML(true);                                  //Set email format to HTML
			$mailes->Subject = 'Se Ha modificado estatus de Tramite Administrativo';

			$mailes->Body    = "<h2>Se ha actualizado el tramite administrativo <b>Folio No.</b>  $oficio </h2> </br>
 							<p>Importancia : <h3><b> $importancia </b></h3> </p></br>
							<p> Estatus tramite : <b> $estatus </b> </br></p></br>
							<p>Asunto : <b> $asunto </b> </br></p></br>
							<h3>Datos del Plantel</h3></br>
			                <p>Plantel : <b> $plantel </b> </P>
							<P>Area : <b> $area </b> </p>
							<p>Responsable Plantel : <b> $responsable </b></p>
							<p>Correo : <b> $correo1 </b> </p</br>
							<p>Oficio : <b> $oficio </b> </br>
							Con Fecha : <b> $fecha </b> </p</br>
							
							<h3>Datos del Trabajador</h3> </br>
			                <pTrabajador : <b> $apellidos  $nombre </b> </p</br>
							<pCorreo : <b> $correo </b> </p</br>
							<pTelefono : <b> $telefono </b> </p</br>";


			// $mail->Body    = '<h2>Se ha geneado un tickets para tramite administrativo <b>Folio No.!</b> </h2>'.$telefono. '\n
			//                  Trabajador : <b>'.$apellidos." ".$nombre.'</b> \n
			// 				 Domicilio : <b>'.$domicilio.'</b>\n';
			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
			$mailes->send();
			echo 'Mesaje se envio correctamente';
			} catch (Exception $e) {
			echo "Error: de envio de correo{$mailes->ErrorInfo}";
	
	
	   }












			break;	

	  	case 'actualizadata':

			$id = $_POST['id'];
			$estatus = $_POST['estatus'];
			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellidos'];
			$domicilio = $_POST['domicilio'];
			$telefono = $_POST['telefono'];			
			$correo = $_POST['correo'];
			
	  
			$tramite = tramite::obtenerporid($id);
	  
			$tramite->setid($id);
			$tramite->setestatus($estatus);
			$tramite->setnombre($nombre);
			$tramite->setapellidos($apellidos);
			$tramite->setdomicilio($domicilio);
			$tramite->settelefono($telefono);
			$tramite->setcorreo($correo);
			
			
			$tramite->actualdata();
			break;	


  	case 'modificacion':

      $id = $_POST['id'];
	  $tipo = $_POST['tipo'];
	  $ine = $_POST['ine'];
      $rfc = $_POST['rfc'];
      $curp = $_POST['curp'];
      $nss = $_POST['nss'];  
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
	  $fec_nac = $_POST['fec_nac'];
	  $tipodom = $_POST['tipodom'];
	  $domicilio = $_POST['domicilio'];
	  $colonia = $_POST['colonia'];
	  $municipio = $_POST['municipio'];
	  $estado = $_POST['estado'];
	  $cp = $_POST['cp'];
	  $telefono = $_POST['telefono'];
	  $movil = $_POST['movil'];
	  $email = $_POST['email']; 
      $fec_nac = $_POST['fec_nac'];
      $lugar_nac = $_POST['lugar_nac'];
      $edo_civil = $_POST['edo_civil'];
      $mancumunado = $_POST['mancumunado'];
	  
	  $edolaboral = $_POST['edolaboral'];
/* 	  $doc1 = $_POST['doc1'];
	  $doc1 = $_POST['doc2']; */
    /*  $fec_ing = $_POST['fec_ing']; */

  		
      $cliente = cliente::obtenerporid($id);

      $cliente->setid($id);
	  $cliente->settipo($tipo);
	  $cliente->setine($ine);
	  $cliente->setrfc($rfc);
  	  $cliente->setcurp($curp);	  
	  $cliente->setnss($nss);
      $cliente->setnombre($nombre);
      $cliente->setapellidos($apellidos);
	  $cliente->settipodom($tipodom);
	  $cliente->setdomicilio($domicilio);
	  $cliente->setcolonia($colonia);
	  $cliente->setmunicipio($municipio);
	  $cliente->setestado($estado);
	  $cliente->setcp($cp);
	  $cliente->settelefono($telefono);
	  $cliente->setmovil($movil);
	  $cliente->setemail($email);	  
	  $cliente->setfecnac($fec_nac);
      $cliente->setlugarnac($lugar_nac);
      $cliente->setedocivil($edo_civil);
	  $cliente->setmancumunado($mancumunado);
	  
	  $cliente->setedolaboral($edolaboral);
      /*$cliente->setfecing($fec_ing);*/
/* 	  $cliente->setdoc1($doc1);
	  $cliente->setdoc2($doc2); */


      $cliente->actualizar();
  		break;
		
  	case 'modificap2':

      $id = $_POST['id'];
	  /* datos laborales */	   
	  $edolaboral = $_POST['edolaboral'];
	  $ingresos = $_POST['ingresos'];
	  $empresa = $_POST['empresa'];	  
	  $antiguedad = $_POST['antiguedad'];
	  $puesto = $_POST['puesto'];	  
	  $domicilio2 = $_POST['domicilio2'];
	  $telefono2 = $_POST['telefono2'];


      $cliente = cliente::obtenerporid($id);

      $cliente->setid($id);
	  
	  $cliente->setedolaboral($edolaboral);
	  $cliente->setingresos($ingresos);
	  $cliente->setempresa($empresa);
	  $cliente->setantiguedad($antiguedad);	  
	  $cliente->setpuesto($puesto);
	  $cliente->setdomicilio2($domicilio2);
	  $cliente->settelefono2($telefono2);
	  
	  
	  $cliente->actualizarp2();
  	  break;
	  
	  
  	case 'modificap3':

      $id = $_POST['id'];
	  /* Datos vivienda */
	  $prototipo = $_POST['prototipo'];
	  $proyecto = $_POST['proyecto'];
	  $zona = $_POST['zona']; 
      $lote = $_POST['lote'];
      $clave = $_POST['clave'];
      $domicilio3 = $_POST['domicilio3'];  


      $cliente = cliente::obtenerporid($id);

      $cliente->setid($id);
	  
	  $cliente->setprototipo($prototipo);
	  $cliente->setproyecto($proyecto);
	  $cliente->setzona($zona);
	  $cliente->setlote($lote);
	  $cliente->setclave($clave);
	  $cliente->setdomicilio3($domicilio3);  
	  
	  $cliente->actualizarp3();
  	  break;

  	case 'modificap4':

      $id = $_POST['id'];
	  /* Datos Financieros */
	  $precio = $_POST['precio'];  
	  $letra = $_POST['letra'];
	  $enganche = $_POST['enganche'];
	  $fecapartado = $_POST['fecapartado'];
	  $pena = $_POST['pena'];
	  $fecentrega = $_POST['fecentrega'];
	  $nota = $_POST['nota'];
	  $tipo2 = $_POST['tipo2'];


      $cliente = cliente::obtenerporid($id);

      $cliente->setid($id);
	  
	  $cliente->setprecio($precio);
	  $cliente->setletra($letra);
	  $cliente->setenganche($enganche);
	  $cliente->setfecapartado($fecapartado);
	  $cliente->setpena($pena);
	  $cliente->setfecentrega($fecentrega);
	  $cliente->setnota($nota);
	  $cliente->settipo2($tipo2);
	  
	  $cliente->actualizarp4();
  	  break;

  	  


  	case 'modifidc1':

      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
      $tipoid = $_POST['tipoid'];
	  $ine = $_POST['ine'];
      $domicilio = $_POST['domicilio'];
      $colonia = $_POST['colonia'];
      $municipio = $_POST['municipio'];  
      $estado = $_POST['estado'];
      $cp = $_POST['cp'];
      $tipodom = $_POST['tipodom'];
      $telefono = $_POST['telefono'];
      $movil = $_POST['movil'];      
      $email = $_POST['email'];
      $vendedor = $_POST['vendedor'];

      $cliente = cliente::obtenerporid($id);

      $cliente->setid($id);
      $cliente->setnombre($nombre);
      $cliente->setapellidos($apellidos);
      $cliente->settipoid($tipoid);
	  $cliente->setine($ine);  
	  $cliente->setdomicilio($domicilio);
	  $cliente->setcolonia($colonia);
	  $cliente->setmunicipio($municipio);
	  $cliente->setestado($estado);
	  $cliente->setcp($cp);
	  $cliente->settipodom($tipodom);
	  $cliente->settelefono($telefono);
	  $cliente->setmovil($movil);
	  $cliente->setemail($email);
	  $cliente->setvendedor($vendedor);
	  
      $cliente->actualidc1();
      break;

  	case 'modifidc2':

      $id = $_POST['id'];
      $rfc = $_POST['rfc'];
      $curp = $_POST['curp'];
      $nss = $_POST['nss']; 
	  $fec_nac = $_POST['fec_nac'];
      $lugar_nac = $_POST['lugar_nac'];
      $nacionalidad = $_POST['nacionalidad'];
      $edo_civil = $_POST['edo_civil'];
      $mancumunado = $_POST['mancumunado'];
      $coa = $_POST['coa'];

	  $cliente = cliente::obtenerporid($id);

      $cliente->setid($id);
	  $cliente->setrfc($rfc);
  	  $cliente->setcurp($curp);	  
	  $cliente->setnss($nss);
      $cliente->setfecnac($fec_nac);
      $cliente->setlugarnac($lugar_nac);
      $cliente->setnacionalidad($nacionalidad);
      $cliente->setedocivil($edo_civil);
	  $cliente->setmancumunado($mancumunado);
	  $cliente->setcoa($coa);

      $cliente->actualidc2();
      break;

  	case 'modifidc3':

      $id = $_POST['id'];
      $connombre = $_POST['connombre'];
      $conrfc = $_POST['conrfc'];
      $concurp = $_POST['concurp'];
      $connss = $_POST['connss']; 
	  $confecnac = $_POST['confecnac'];
      $conlugarnac = $_POST['conlugarnac'];
      $conedad = $_POST['conedad'];

	  $cliente = cliente::obtenerporid($id);

      $cliente->setid($id);
	  $cliente->setconnombre($connombre);      
	  $cliente->setconrfc($conrfc);
  	  $cliente->setconcurp($concurp);	  
	  $cliente->setconnss($connss);
      $cliente->setconfecnac($confecnac);
      $cliente->setconlugarnac($conlugarnac);
      $cliente->setconedad($conedad);


      $cliente->actualidc3();
      break;

  	case 'modifidc4':

      $id = $_POST['id'];
      $coanombre = $_POST['coanombre'];
      $coarfc = $_POST['coarfc'];
      $coacurp = $_POST['coacurp'];
      $coanss = $_POST['coanss']; 
	  $coafecnac = $_POST['coafecnac'];
      $coalugarnac = $_POST['coalugarnac'];
      $coaedad = $_POST['coaedad'];

      $edolaboral2 = $_POST['edolaboral2'];
      $ingresos2 = $_POST['ingresos2'];
      $antiguedad2 = $_POST['antiguedad2'];
      $empresa2 = $_POST['empresa2'];
      $domicilio22 = $_POST['domicilio22'];
      $telefono22 = $_POST['telefono22'];
      $puesto2 = $_POST['puesto2'];

	  $cliente = cliente::obtenerporid($id);

      $cliente->setid($id);
	  $cliente->setcoanombre($coanombre);      
	  $cliente->setcoarfc($coarfc);
  	  $cliente->setcoacurp($coacurp);	  
	  $cliente->setcoanss($coanss);
      $cliente->setcoafecnac($coafecnac);
      $cliente->setcoalugarnac($coalugarnac);
      $cliente->setcoaedad($coaedad);

      $cliente->setedolaboral2($edolaboral2);
      $cliente->setingresos2($ingresos2);
      $cliente->setantiguedad2($antiguedad2);
      $cliente->setempresa2($empresa2);
      $cliente->setdomicilio22($domicilio22);
      $cliente->settelefono22($telefono22);
      $cliente->setpuesto2($puesto2);



      $cliente->actualidc4();
      break;

  	case 'modifica':

      $id = $_POST['id'];
	  $tipo = $_POST['tipo'];
	  $ine = $_POST['ine'];
      $rfc = $_POST['rfc'];
      $curp = $_POST['curp'];
      $nss = $_POST['nss'];  
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
	  
	  /* datos laborales */	   
	  $edolaboral = $_POST['edolaboral'];
	  $ingresos = $_POST['ingresos'];
	  $antiguedad = $_POST['antiguedad'];
	  $empresa = $_POST['empresa'];
	  $domicilio2 = $_POST['domicilio2'];
	  $telefono2 = $_POST['telefono2'];
	  $puesto = $_POST['puesto'];
	  
	  /* Datos vivienda */
	  $prototipo = $_POST['prototipo'];
	  $proyecto = $_POST['proyecto'];
	  $zona = $_POST['zona']; 
      $lote = $_POST['lote'];
      $clave = $_POST['clave'];
      $domicilio3 = $_POST['domicilio3'];
	  
	  /* Datos Financieros */
	  $precio = $_POST['precio'];  
	  $letra = $_POST['letra'];
	  $enganche = $_POST['enganche'];
	  $fecapartado = $_POST['fecapartado'];
	  $pena = $_POST['pena'];
	  $fecentrega = $_POST['fecentrega'];	  
	  
/* 	  $doc1 = $_POST['doc1'];
	  $doc1 = $_POST['doc2']; */
    /*  $fec_ing = $_POST['fec_ing']; */

  		
      $cliente = cliente::obtenerporid($id);

      $cliente->setid($id);
	  $cliente->settipo($tipo);
	  $cliente->setine($ine);
	  $cliente->setrfc($rfc);
  	  $cliente->setcurp($curp);	  
	  $cliente->setnss($nss);
      $cliente->setnombre($nombre);
      $cliente->setapellidos($apellidos);
	  
	  $cliente->setedolaboral($edolaboral);
	  $cliente->setingresos($ingresos);
	  $cliente->setantiguedad($antiguedad);
	  $cliente->setempresa($empresa);
	  $cliente->setdomicilio2($domicilio2);
	  $cliente->settelefono2($telefono2);
	  $cliente->setpuesto($puesto);
	  
	  $cliente->setprototipo($prototipo);
	  $cliente->setproyecto($proyecto);
	  $cliente->setzona($zona);
	  $cliente->setlote($lote);
	  $cliente->setclave($clave);
	  $cliente->setdomicilio3($domicilio3);
	  
	  $cliente->setprecio($precio);
	  $cliente->setletra($letra);
	  $cliente->setenganche($enganche);
	  $cliente->setfecapartado($fecapartado);
	  $cliente->setpena($pena);
	  $cliente->setfecentrega($fecentrega);
	 
	 
      /*$cliente->setfecing($fec_ing);*/
/* 	  $cliente->setdoc1($doc1);
	  $cliente->setdoc2($doc2); */


      $cliente->actualizar2();
  		break;

  }

    header('location: ../tables-data.php')
	
 ?>