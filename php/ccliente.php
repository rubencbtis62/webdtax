<?php 
  include('sql.php');
  include('cliente.php');

  if ($_SERVER['REQUEST_METHOD']=='POST'){
  	 $accion = $_POST['accion'];
  }else
  {
  	 $accion = $_GET['accion'];
  }
  switch ($accion) {
  	case 'alta':
      $id = $_POST['id'];
      $codigo = $_POST['codigo'];
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

  	              

/*	  $tipo = $_POST['tipo'];
  	  $rfc = $_POST['rfc'];
  	  $curp = $_POST['curp'];
  	  $nss = $_POST['nss'];	  
      $fec_nac = $_POST['fec_nac'];
      $lugar_nac = $_POST['lugar_nac'];
      $edo_civil = $_POST['edo_civil'];
      $mancumunado = $_POST['mancumunado'];
*/


      $cliente = new cliente();

      $cliente->setid($id);
      $cliente->setcodigo($codigo);
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
	  
            
    
   //    $cliente->settipo($tipo);
  	//   $cliente->setrfc($rfc);
  	//   $cliente->setcurp($curp);	  
	  // $cliente->setnss($nss);	  
	  // $cliente->setfecnac($fec_nac);
   //    $cliente->setlugarnac($lugar_nac);
   //    $cliente->setedocivil($edo_civil);
	  // $cliente->setmancumunado($mancumunado);

      $cliente->guardar();

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