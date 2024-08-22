<?php 
   class cliente extends Sql {
    private $id;
    private $codigo;
	private $tipo;
    private $tipoid;
	private $ine;
	private $rfc;
	private $curp;    
	private $nss;
    private $nombre;
    private $apellidos;
	private $tipodom;
    private $domicilio;
    private $colonia;
    private $municipio;	
	private $estado;
	private $cp;
	private $telefono;
	private $movil;
	private $email;	
    private $fec_nac;
    private $lugar_nac;
    private $nacionalidad;
    private $edo_civil;
    private $mancumunado;
    private $coa;
/*mancumunado*/
    private $connombre;
    private $conrfc;
    private $concurp; 
    private $connss;
    private $confecnac;
    private $conlugarnac;
    private $conedad;
/*coacreditado*/
    private $coanombre;
    private $coarfc;
    private $coacurp; 
    private $coanss;
    private $coafecnac;
    private $coalugarnac;
    private $coaedad;

	private $doc1;
    private $doc2;
	private $doc3;
    private $doc4;	
	private $doc5;	
	
	private $edolaboral;
	private $ingresos;
	private $antiguedad;
	private $empresa;
	private $domicilio2;
	private $telefono2;
	private $puesto;

    private $edolaboral2;
    private $ingresos2;
    private $antiguedad2;
    private $empresa2;
    private $domicilio22;
    private $telefono22;
    private $puesto2;
	
	private $modelo;
	private $proyecto;
	private $zona;
	private $lote;
	private $clave;
	private $domicilio3;
	
	private $precio;
	private $letra;
	private $enganche;
	private $fecapartado;
	private $pena;
	private $fecentrega;
    private $tipo2;     
    private $nota;
    private $vendedor;

    
    /*public function __construct($nombre){
    	$this->nombre = $nombre;
    }*/

/* Funcion SET */       
	public function setid( $id)
    {
    	$this->id = $id;
    }
    public function setcodigo( $codigo)
    {
        $this->codigo = $codigo;
    }    
	public function settipo( $tipo)
    {
        $this->tipo = $tipo;
    }
    public function settipoid( $tipoid)
    {
        $this->tipoid = $tipoid;
    }    
	public function setine( $ine)
    {
        $this->ine = $ine;
    }	
	public function setrfc( $rfc)
    {
        $this->rfc = $rfc;
    }
	public function setcurp( $curp)
    {
        $this->curp = $curp;
    }
	public function setnss( $nss)
    {
        $this->nss = $nss;
    }	
    public function setnombre( $nombre)
    {
        $this->nombre = $nombre;
    }
    public function setapellidos( $apellidos)
    {
        $this->apellidos = $apellidos;
    }
	public function settipodom( $tipodom)
    {
        $this->tipodom = $tipodom;
    }		
	public function setdomicilio( $domicilio)
    {
        $this->domicilio = $domicilio;
    }
	public function setcolonia( $colonia)
    {
        $this->colonia = $colonia;
    }
	public function setmunicipio( $municipio)
    {
        $this->municipio = $municipio;
    }
	public function setestado( $estado)
    {
        $this->estado = $estado;
    }
	public function setcp( $cp)
    {
        $this->cp = $cp;
    }
	public function settelefono( $telefono)
    {
        $this->telefono = $telefono;
    }
	public function setmovil( $movil)
    {
        $this->movil = $movil;
    }
	public function setemail( $email)
    {
        $this->email = $email;
    }
    public function setfecnac($fec_nac)
    {
        $this->fec_nac = $fec_nac;
    }
    public function setlugarnac($lugar_nac)
    {
        $this->lugar_nac = $lugar_nac;
    }
    public function setnacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    }
    public function setedocivil( $edo_civil)
    {
        $this->edo_civil = $edo_civil;
    }
    public function setgrupo( $grupo)
    {
        $this->grupo = $grupo;
    }   
    public function setmancumunado( $mancumunado)
    {
    	$this->mancumunado = $mancumunado;
    }
    public function setcoa( $coa)
    {
        $this->coa = $coa;
    }
    public function setconnombre( $connombre)
    {
        $this->connombre = $connombre;
    }
    public function setconrfc( $conrfc)
    {
        $this->conrfc = $conrfc;
    }
    public function setconcurp( $concurp)
    {
        $this->concurp = $concurp;
    }
    public function setconnss( $connss)
    {
        $this->connss = $connss;
    }
    public function setconfecnac($confecnac)
    {
        $this->confecnac = $confecnac;
    }
    public function setconlugarnac($conlugarnac)
    {
        $this->conlugarnac = $conlugarnac;
    }
    public function setconedad( $conedad)
    {
        $this->conedad = $conedad;
    }
    public function setcoanombre( $coanombre)
    {
        $this->coanombre = $coanombre;
    }
    public function setcoarfc( $coarfc)
    {
        $this->coarfc = $coarfc;
    }
    public function setcoacurp( $coacurp)
    {
        $this->coacurp = $coacurp;
    }
    public function setcoanss( $coanss)
    {
        $this->coanss = $coanss;
    }
    public function setcoafecnac($coafecnac)
    {
        $this->coafecnac = $coafecnac;
    }
    public function setcoalugarnac($coalugarnac)
    {
        $this->coalugarnac = $coalugarnac;
    }
    public function setcoaedad( $coaedad)
    {
        $this->coaedad = $coaedad;
    }      
    public function setdoc1( $doc1)
    {
        $this->doc1 = $doc1;
    }   
    public function setdoc2( $doc2)
    {
        $this->doc2 = $doc2;
    }   
    public function setdoc3( $doc3)
    {
        $this->doc3 = $doc3;
    }   
    public function setdoc4( $doc4)
    {
        $this->doc4 = $doc4;
    } 
	public function setdoc5( $doc5)
    {
        $this->doc5 = $doc5;
    } 
	/*  Laboral */
	
	public function setedolaboral( $edolaboral)
    {
        $this->edolaboral = $edolaboral;
    }
	public function setingresos( $ingresos)
    {
        $this->ingresos = $ingresos;
    }
    public function setantiguedad( $antiguedad)
    {
        $this->antiguedad = $antiguedad;
    }
    public function setempresa( $empresa)
    {
        $this->empresa = $empresa;
    }
    public function setdomicilio2( $domicilio2)
    {
        $this->domicilio2 = $domicilio2;
    }
    public function settelefono2( $telefono2)
    {
        $this->telefono2 = $telefono2;
    }
    public function setpuesto( $puesto)
    {
        $this->puesto = $puesto;
    }

    /*  Laboral coacreditado*/
    
    public function setedolaboral2( $edolaboral2)
    {
        $this->edolaboral2 = $edolaboral2;
    }
    public function setingresos2( $ingresos2)
    {
        $this->ingresos2 = $ingresos2;
    }
    public function setantiguedad2( $antiguedad2)
    {
        $this->antiguedad2 = $antiguedad2;
    }
    public function setempresa2( $empresa2)
    {
        $this->empresa2 = $empresa2;
    }
    public function setdomicilio22( $domicilio22)
    {
        $this->domicilio22 = $domicilio22;
    }
    public function settelefono22( $telefono22)
    {
        $this->telefono22 = $telefono22;
    }
    public function setpuesto2( $puesto2)
    {
        $this->puesto2 = $puesto2;
    }


	
	/* Vivienda */
    public function setmodelo( $modelo)
    {
        $this->modelo = $modelo;
    }
    public function setproyecto( $proyecto)
    {
        $this->proyecto = $proyecto;
    }
    public function setzona( $zona)
    {
        $this->zona = $zona;
    }
    public function setlote( $lote)
    {
        $this->lote = $lote;
    }
    public function setclave( $clave)
    {
        $this->clave = $clave;
    }
    public function setdomicilio3( $domicilio3)
    {
        $this->domicilio3 = $domicilio3;
    }
	
	/* Financietro */
	
    public function setprecio( $precio)
    {
        $this->precio = $precio;
    }
    public function setletra( $letra)
    {
        $this->letra = $letra;
    }
    public function setenganche( $enganche)
    {
        $this->enganche = $enganche;
    }
    public function setfecapartado( $fecapartado)
    {
        $this->fecapartado = $fecapartado;
    }
    public function setpena( $pena)
    {
        $this->pena = $pena;
    }
    public function setfecentrega( $fecentrega)
    {
        $this->fecentrega = $fecentrega;
    }
    public function settipo2( $tipo2)
    {
        $this->tipo2 = $tipo2;
    }
    public function setnota( $nota)
    {
        $this->nota = $nota;
    }
     public function setvendedor( $vendedor)
    {
        $this->vendedor = $vendedor;
    }   
		
	



  /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       
  
    public function getid(){
    	return $this->id;
    }
    public function getcodigo(){
        return $this->codigo;
    }
	public function gettipo(){
    	return $this->tipo;
    }
    public function gettipoid(){
        return $this->tipoid;
    }
	public function getine(){
    	return $this->ine;
    }	
	public function getrfc(){
    	return $this->rfc;
    }
    public function getcurp(){
        return $this->curp;
     }
	public function getnss(){
    	return $this->nss;
    }	
	public function getnombre(){
    	return $this->nombre;
    }
    public function getapellidos(){
        return $this->apellidos;
     }
	public function gettipodom(){
    	return $this->tipodom;
    } 
	public function getdomicilio(){
        return $this->domicilio;
     }
	public function getcolonia(){
    	return $this->colonia;
    }
	public function getmunicipio(){
    	return $this->municipio;
    }
	public function getestado(){
    	return $this->estado;
    }
	public function getcp(){
    	return $this->cp;
    }
	public function gettelefono(){
    	return $this->telefono;
    }
	public function getmovil(){
    	return $this->movil;
    }
	public function getemail(){
    	return $this->email;
    }
    public function getfecnac(){
        return $this->fec_nac;
    }
    public function getlugarnac(){
        return $this->lugar_nac;
    }
    public function getnacionalidad(){
        return $this->nacionalidad;
    }
    public function getedocivil(){
        return $this->edo_civil;
    }
    public function getmancumunado(){
        return $this->mancumunado;
    }
    public function getcoa(){
        return $this->coa;
    }
    public function getconnombre(){
        return $this->connombre;
    }
    public function getconrfc(){
        return $this->conrfc;
    }
    public function getconcurp(){
        return $this->concurp;
     }
    public function getconnss(){
        return $this->connss;
    }
    public function getconfecnac(){
        return $this->confecnac;
    }
    public function getconlugarnac(){
        return $this->conlugarnac;
     }
    public function getconedad(){
        return $this->conedad;
    }
    public function getcoanombre(){
        return $this->coanombre;
    }
    public function getcoarfc(){
        return $this->coarfc;
    }
    public function getcoacurp(){
        return $this->coacurp;
     }
    public function getcoanss(){
        return $this->coanss;
    }
    public function getcoafecnac(){
        return $this->coafecnac;
    }
    public function getcoalugarnac(){
        return $this->coalugarnac;
     }
    public function getcoaedad(){
        return $this->coaedad;
    }         
    public function getdoc1(){
        return $this->doc1;
    }	
	public function getdoc2(){
        return $this->doc2;
    }	
    public function getdoc3(){
        return $this->doc3;
    }	
	public function getdoc4(){
        return $this->doc4;
    }
	public function getdoc5(){
        return $this->doc5;
    }
	
	/* Datos laborales */
	public function getedolaboral(){
        return $this->edolaboral;
    }
	public function getingresos(){
        return $this->ingresos;
    }
	public function getantiguedad(){
        return $this->antiguedad;
    }
	public function getempresa(){
        return $this->empresa;
    }
	public function getdomicilio2(){
        return $this->domicilio2;
    }
	public function gettelefono2(){
        return $this->telefono2;
    }	
	public function getpuesto(){
        return $this->puesto;
    }
    /* Datos laborales coacreditado */
    public function getedolaboral2(){
        return $this->edolaboral2;
    }
    public function getingresos2(){
        return $this->ingresos2;
    }
    public function getantiguedad2(){
        return $this->antiguedad2;
    }
    public function getempresa2(){
        return $this->empresa2;
    }
    public function getdomicilio22(){
        return $this->domicilio22;
    }
    public function gettelefono22(){
        return $this->telefono22;
    }   
    public function getpuesto2(){
        return $this->puesto2;
    }


    /* Datos vivienda */
	public function getmodelo(){
        return $this->modelo;
    }
	public function getproyecto(){
        return $this->proyecto;
    }
	public function getzona(){
        return $this->zona;
    }
	public function getlote(){
        return $this->lote;
    }
	public function getclave(){
        return $this->clave;
    }	
	public function getdomicilio3(){
        return $this->domicilio3;
    }
	/* datos financieros */
	public function getprecio(){
        return $this->precio;
    }	
	public function getletra(){
        return $this->letra;
    }
	public function getenganche(){
        return $this->enganche;
    }
	public function getfecapartado(){
        return $this->fecapartado;
    }
	public function getpena(){
        return $this->pena;
    }
	public function getfecentrega(){
        return $this->fecentrega;
    }
    public function gettipo2(){
        return $this->tipo2;
    }
    public function getnota(){
        return $this->nota;
    }
     public function getvendedor(){
        return $this->vendedor;
    }   


  /* Funcion Guardar */       
    public function guardar(){
/*        $ruta = "../archivos/".$this->rfc;  
        if (!file_exists($ruta))
            {
                mkdir($ruta, 0777);
            }
*/
        $this->conectar();

        
              
        $sql = "INSERT INTO clientes(codigo,nombre,apellidos,tipoid,ine,tipodom,domicilio,colonia,municipio,estado,cp,telefono,movil,email,vendedor) VALUES ('".$this->codigo."','".$this->nombre."','".$this->apellidos."','".$this->tipoid."','".$this->ine."','".$this->tipodom."','".$this->domicilio."','".$this->colonia."','".$this->municipio."','".$this->estado."','".$this->cp."','".$this->telefono."','".$this->movil."','".$this->email."','".$this->vendedor."')";
        
        $resultado = $this->mysqli->query($sql);

        $sql = $this->mysqli->close();
        $resultado = $this->mysqli->close();
       
        
/*        $conexion = mysqli_connect("localhost", "root", "Apcas123", "cadevi");

        $sql = "SELECT id FROM clientes order by id ASC limit 1";
        $resultado = $conexion->query($sql);

        $ids = $resultado;
        $resultado = $this->mysqli->close();
        $conexion = $this->mysqli->close();
        


                    $num = $result->num_rows;
                    $i=0;
                    while ($i < $num) {
                      $ids=$this->mysqli->mysql_result($result,$i,"id");
                      $i++;
                      } 
        
        $this->conectar();
        
        $sql1 = "INSERT INTO vivienda(id,clave) VALUES ('".$ids."','Error')";
        
        $resultado = $this->mysqli->query($sql1); 

        $sql1 = $this->mysqli->close();
        $resultado = $this->mysqli->close();*/
    }


  /* Funcion Guardar */       
    public function guardar_ok(){
        $ruta = "../archivos/".$this->rfc;	
        if (!file_exists($ruta))
			{
				mkdir($ruta, 0777);
			}

    	$this->conectar();
		
		
	/*	$sql = "INSERT INTO clientes(tipo,ine,rfc,curp,nss,nombre,apellidos,tipodom,domicilio,colonia,municipio,estado,cp,telefono,movil,email,fec_nac,lugar_nac,edo_civil,mancumunado,doc1,doc2,doc3,doc4,doc5) VALUES ('".$this->tipo."','".$this->ine."','".$this->rfc."','".$this->curp."','".$this->nss."','".$this->nombre."','".$this->apellidos."','".$this->tipodom."','".$this->domicilio."','".$this->colonia."','".$this->municipio."','".$this->estado."','".$this->cp."','".$this->telefono."','".$this->movil."','".$this->email."','".$this->fec_nac."','".$this->lugar_nac."','".$this->edo_civil."','".$this->mancumunado."','','','','','')";*/
		
		$sql = "INSERT INTO clientes(tipo,ine,rfc,curp,nss,nombre,apellidos,tipodom,domicilio,colonia,municipio,estado,cp,telefono,movil,email,fec_nac,lugar_nac,edo_civil,mancumunado,doc1,doc2,doc3,doc4,doc5,edolaboral,ingresos,antiguedad,empresa,domicilio2,telefono2,puesto,modelo,proyecto,zona,lote,clave,domicilio3,precio,letra,enganche,fecapartado,pena,fecentrega) VALUES ('".$this->tipo."','".$this->ine."','".$this->rfc."','".$this->curp."','".$this->nss."','".$this->nombre."','".$this->apellidos."','".$this->tipodom."','".$this->domicilio."','".$this->colonia."','".$this->municipio."','".$this->estado."','".$this->cp."','".$this->telefono."','".$this->movil."','".$this->email."','".$this->fec_nac."','".$this->lugar_nac."','".$this->edo_civil."','".$this->mancumunado."','','','','','','','','','','','','','','','','','','','','','','2019/01/01','','2019/01/01')";
		/*$sql = "INSERT INTO clientes(tipo,ine,rfc,curp,nss,nombre,apellidos,tipodom,domicilio,colonia,municipio,estado,cp,telefono,movil,email,fec_nac,lugar_nac,edo_civil,mancumunado,doc1,doc2,doc3,doc4,doc5) VALUES ('".$this->tipo."','".$this->ine."','".$this->rfc."','".$this->curp."','".$this->nss."','".$this->nombre."','".$this->apellidos."','".$this->tipodom."','".$this->domicilio."','".$this->colonia."','".$this->municipio."','".$this->estado."','".$this->cp."','".$this->telefono."','".$this->movil."','".$this->email."','".$this->fec_nac."','".$this->lugar_nac."','".$this->edo_civil."','".$this->mancumunado."','','','','','')";*/
		
		/*$sql = "INSERT INTO clientes(tipo,ine,rfc,curp,nss,nombre,apellidos,tipodom,domicilio,colonia,municipio,estado,cp,telefono,movil,email,fec_nac,lugar_nac,edo_civil,mancumunado,doc1,doc2,doc3,doc4,doc5) VALUES ('',)";  ) */
    	
		/*$sql = "INSERT INTO clientes(nombre,apellidos,no_control,especialidad,turno,grupo,semestre,fec_ing,edad) VALUES ('".$this->nombre."','".$this->apellidos."','".$this->no_control."','".$this->especialidad."','".$this->turno."','".$this->grupo."','".$this->semestre."','".$this->fec_ing."',".$this->edad.")";
		/* $sql = "INSERT INTO clientes(nombre,apellidos,no_control,especialidad,turno,grupo,semestre,fec_ing,edad)  VALUES ('".$this->nombre."','".$this->apellidos."','".$this->no_control."','".$this->especialidad."','".$this->turno."','".$this->grupo."','".$this->semestre."','".$this->fec_ing."',".$this->edad.")"; */
/* 		echo $sql; 
		sleep(8);  */
		$resultado = $this->mysqli->query($sql); 

    }

    public static function obtenertodos(){
    	$sqlhelper = new Sql();
    	$sqlhelper->conectar();
    	$sql = "SELECT * FROM clientes ORDER BY apellidos";
    	$resultado = $sqlhelper->getmysqli()->query($sql);
        $clientes = array();
        while ($cliente = $resultado->fetch_assoc()){
        	array_push($clientes, $cliente);
        }
        return $clientes;
      }

    public static function obtenerfiltro($filtro,$tipofiltro){
        $sqlhelper = new Sql();
        $sqlhelper->conectar();
        $campo = $tipofiltro;

        switch ($campo) {
          case 'proyecto':
             $sql = "SELECT * FROM clientes where proyecto='".$filtro."' ORDER BY apellidos";
             break;
          case 'vendedor':
             $sql = "SELECT * FROM clientes where vendedor='".$filtro."' ORDER BY apellidos";   
             break;
         }


        // if ($tipofiltro='proyecto'){
        //  $sql = "SELECT * FROM clientes where proyecto='".$filtro."' ORDER BY apellidos";
        // }
        // if ($tipofiltro='vendedor'){
        //   $sql = "SELECT * FROM clientes where vendedor='".$filtro."' ORDER BY apellidos";   
        //  }
        $resultado = $sqlhelper->getmysqli()->query($sql);
        $clientes = array();
        while ($cliente = $resultado->fetch_assoc()){
            array_push($clientes, $cliente);
        }
        return $clientes;
      }      
    public static function obtenerfiltrov($filtro){
        $sqlhelper = new Sql();
        $sqlhelper->conectar();
        $sql = "SELECT * FROM clientes where proyecto='".$filtro."' ORDER BY apellidos";
        $resultado = $sqlhelper->getmysqli()->query($sql);
        $clientes = array();
        while ($cliente = $resultado->fetch_assoc()){
            array_push($clientes, $cliente);
        }
        return $clientes;
      }      
     public static function obtenerporid($id){
        $sqlhelper = new Sql();
        $sqlhelper->conectar();
        $sql = "SELECT * FROM clientes WHERE id =".$id;
        $resultado = $sqlhelper->getmysqli()->query($sql);
        $cliente_arreglo = $resultado->fetch_assoc();
        $cliente = new cliente();
        
        $cliente->setid($cliente_arreglo['id']);
        $cliente->setcodigo($cliente_arreglo['codigo']);
		$cliente->settipo($cliente_arreglo['tipo']);
        $cliente->settipoid($cliente_arreglo['tipoid']);
		$cliente->setine($cliente_arreglo['ine']);
        $cliente->setrfc($cliente_arreglo['rfc']);
		$cliente->setcurp($cliente_arreglo['curp']);
        $cliente->setnss($cliente_arreglo['nss']);		
        $cliente->setnombre($cliente_arreglo['nombre']);
        $cliente->setapellidos($cliente_arreglo['apellidos']);
		$cliente->settipodom($cliente_arreglo['tipodom']);
		$cliente->setdomicilio($cliente_arreglo['domicilio']);
		$cliente->setcolonia($cliente_arreglo['colonia']);
		$cliente->setmunicipio($cliente_arreglo['municipio']);
		$cliente->setestado($cliente_arreglo['estado']);
		$cliente->setcp($cliente_arreglo['cp']);
		$cliente->settelefono($cliente_arreglo['telefono']);
		$cliente->setmovil($cliente_arreglo['movil']);
		$cliente->setemail($cliente_arreglo['email']);
		$cliente->setfecnac($cliente_arreglo['fec_nac']);
        $cliente->setlugarnac($cliente_arreglo['lugar_nac']);
        $cliente->setnacionalidad($cliente_arreglo['nacionalidad']);
        $cliente->setedocivil($cliente_arreglo['edo_civil']);
        $cliente->setmancumunado($cliente_arreglo['mancumunado']);
        $cliente->setcoa($cliente_arreglo['coa']);
        
        $cliente->setconnombre($cliente_arreglo['connombre']);
        $cliente->setconrfc($cliente_arreglo['conrfc']);
        $cliente->setconcurp($cliente_arreglo['concurp']);
        $cliente->setconnss($cliente_arreglo['connss']);
        $cliente->setconfecnac($cliente_arreglo['confecnac']);
        $cliente->setconlugarnac($cliente_arreglo['conlugarnac']);
        $cliente->setconedad($cliente_arreglo['conedad']);

        $cliente->setcoanombre($cliente_arreglo['coanombre']);
        $cliente->setcoarfc($cliente_arreglo['coarfc']);
        $cliente->setcoacurp($cliente_arreglo['coacurp']);
        $cliente->setcoanss($cliente_arreglo['coanss']);
        $cliente->setcoafecnac($cliente_arreglo['coafecnac']);
        $cliente->setcoalugarnac($cliente_arreglo['coalugarnac']);
        $cliente->setcoaedad($cliente_arreglo['coaedad']);

		$cliente->setdoc1($cliente_arreglo['doc1']);
		$cliente->setdoc2($cliente_arreglo['doc2']);
		$cliente->setdoc3($cliente_arreglo['doc3']);
		$cliente->setdoc4($cliente_arreglo['doc4']);
		$cliente->setdoc5($cliente_arreglo['doc5']);
		
		$cliente->setedolaboral($cliente_arreglo['edolaboral']);
		$cliente->setingresos($cliente_arreglo['ingresos']);
		$cliente->setantiguedad($cliente_arreglo['antiguedad']);
		$cliente->setempresa($cliente_arreglo['empresa']);
		$cliente->setdomicilio2($cliente_arreglo['domicilio2']);
		$cliente->settelefono2($cliente_arreglo['telefono2']);
		$cliente->setpuesto($cliente_arreglo['puesto']);

        $cliente->setedolaboral2($cliente_arreglo['edolaboral2']);
        $cliente->setingresos2($cliente_arreglo['ingresos2']);
        $cliente->setantiguedad2($cliente_arreglo['antiguedad2']);
        $cliente->setempresa2($cliente_arreglo['empresa2']);
        $cliente->setdomicilio22($cliente_arreglo['domicilio22']);
        $cliente->settelefono22($cliente_arreglo['telefono22']);
        $cliente->setpuesto2($cliente_arreglo['puesto2']);
		
		$cliente->setmodelo($cliente_arreglo['modelo']);
		$cliente->setproyecto($cliente_arreglo['proyecto']);
		$cliente->setzona($cliente_arreglo['zona']);
		$cliente->setlote($cliente_arreglo['lote']);
		$cliente->setclave($cliente_arreglo['clave']);
		$cliente->setdomicilio3($cliente_arreglo['domicilio3']);
		
		$cliente->setprecio($cliente_arreglo['precio']);
		$cliente->setletra($cliente_arreglo['letra']);
		$cliente->setenganche($cliente_arreglo['enganche']);
		$cliente->setfecapartado($cliente_arreglo['fecapartado']);
		$cliente->setpena($cliente_arreglo['pena']);
		$cliente->setfecentrega($cliente_arreglo['fecentrega']);
        $cliente->setpena($cliente_arreglo['pena']);
        $cliente->setfecentrega($cliente_arreglo['fecentrega']);
        $cliente->settipo2($cliente_arreglo['tipo2']);
        $cliente->setnota($cliente_arreglo['nota']);
        $cliente->setvendedor($cliente_arreglo['vendedor']);
        
		
        
        return $cliente;

     }



/*    function delDir($path)
    {
        if(is_dir($path) == TRUE)
        {
            $rootFolder = scandir($path);
            if(sizeof($rootFolder) > 2)
               {
                 foreach($rootFolder as $folder)
                     {
                            if($folder != "." && $folder != "..")
                            {
        //Pass the subfolder to function
                                delDir($path."/".$folder);
                            }
                      }
        //On the end of foreach the directory will be cleaned, and you will can use rmdir, to remove it
                        rmdir($path);
                }
              else{
                    if(file_exists($path) == TRUE)
                    {
                        unlink($path);
                    }
                  }
        }          
    }   */           




     public function eliminar() {

        $ruta = "../archivos/".$this->rfc; 
        $dir = $ruta;
           

        if (!empty($dir) && is_dir($dir)) 
          {
          $files = glob( $dir . '*', GLOB_MARK );
                foreach( $files as $file )
                {
                    if (substr( $file, -1 ) == '/')
                    {}
                    else {   
                      unlink( $file );
                    }
                  } 
                rmdir( $dir );            
            }
            



/*        if(is_dir($ruta) == TRUE)
        {
            $files = glob( $ruta . '*', GLOB_MARK );
            foreach( $files as $file ){
                if( substr( $file, -1 ) == '/' )
                    delTree( $file );
                else
                    unlink( $file );
            }
            rmdir($ruta);           
        } */

         
     	$this->conectar();
     	$sql = "DELETE FROM clientes WHERE id = ".$this->id;
     	$resultado = $this->mysqli->query($sql);  
     } 

//This is one example to delete full directory with all files inside there


   


     public function actualizar(){
     	$this->conectar();

		$sql = "UPDATE clientes SET tipo ='".$this->tipo."',ine ='".$this->ine."',rfc ='".$this->rfc."',curp ='".$this->curp."',nss ='".$this->nss."',nombre ='".$this->nombre."',apellidos ='".$this->apellidos."',tipodom ='".$this->tipodom."',domicilio ='".$this->domicilio."',colonia ='".$this->colonia."',municipio ='".$this->municipio."',estado ='".$this->estado."',cp ='".$this->cp."',telefono ='".$this->telefono."',movil ='".$this->movil."',email ='".$this->email."',fec_nac='".$this->fec_nac."',lugar_nac='".$this->lugar_nac."',edo_civil='".$this->edo_civil."',mancumunado ='".$this->mancumunado."' WHERE id = ".$this->id;
		/*$sql = "UPDATE clientes SET tipo ='Casado',rfc ='AAAA99999999XXX',curp ='AAAA99999999XXX999X99',nss ='9876543210',nombre ='ADRIAN RODOLFO',apellidos ='HERNANDEZ GRIJALVA', fec_nac='01/01/2019', lugar_nac='California',edo_civil ='Casado',mancumunado ='SI' WHERE id = ".$this->id;*/
		/*$sql = "UPDATE clientes SET tipo ='".$this->tipo."',rfc ='".$this->rfc."',curp ='".$this->curp."',nss ='".$this->nss."',nombre ='".$this->nombre."',apellidos ='".$this->apellidos."',fec_nac='".$this->fec_nac."', lugar_nac='".$this->lugar_nac."',edo_civil ='".$this->edo_civil."',mancumunado ='".$this->mancumunado."' WHERE id = ".$this->id;*/
     	/*$sql = "UPDATE clientes SET nombre ='".$this->nombre."',apellidos ='".$this->apellidos."', no_control='".$this->no_control."', especialidad='".$this->especialidad."',turno ='".$this->turno."',grupo ='".$this->grupo."',semestre ='".$this->semestre."',fec_ing ='".$this->fec_ing."',edad ='".$this->edad."'  WHERE id = ".$this->id;  */
        
     	$resultado = $this->mysqli->query($sql);
     }
	 
    public function actualidc1(){
        $this->conectar();

        $sql = "UPDATE clientes SET nombre ='".$this->nombre."',apellidos ='".$this->apellidos."',tipoid ='".$this->tipoid."',ine ='".$this->ine."',domicilio ='".$this->domicilio."',colonia ='".$this->colonia."',municipio ='".$this->municipio."',estado ='".$this->estado."',cp ='".$this->cp."',tipodom ='".$this->tipodom."',telefono ='".$this->telefono."',movil ='".$this->movil."',email ='".$this->email."',vendedor ='".$this->vendedor."' WHERE id = ".$this->id;

        $resultado = $this->mysqli->query($sql);     
    } 

    public function actualidc2(){

        $ruta = "../archivos/".$this->rfc;  
        if (!file_exists($ruta))
            {
                mkdir($ruta, 0777);
            }
        $this->conectar();

        $sql = "UPDATE clientes SET rfc ='".$this->rfc."',curp ='".$this->curp."',nss ='".$this->nss."',fec_nac ='".$this->fec_nac."',lugar_nac ='".$this->lugar_nac."',nacionalidad ='".$this->nacionalidad."',edo_civil ='".$this->edo_civil."',mancumunado ='".$this->mancumunado."',coa ='".$this->coa."' WHERE id = ".$this->id;

        $resultado = $this->mysqli->query($sql);     
    }

    public function actualidc3(){
        $this->conectar();
                // $sql = "UPDATE clientes SET connombre = 'MARIA DOLORES' WHERE id = ".$this->id;

        $sql = "UPDATE clientes SET connombre ='".$this->connombre."',conrfc ='".$this->conrfc."',concurp ='".$this->concurp."',connss ='".$this->connss."',confecnac ='".$this->confecnac."',conlugarnac ='".$this->conlugarnac."',conedad ='".$this->conedad."' WHERE id = ".$this->id;

        $resultado = $this->mysqli->query($sql);     
    }  
    public function actualidc4(){
        $this->conectar();
        //$sql = "UPDATE clientes SET coanombre = 'DOLORES' WHERE id = ".$this->id;               
        $sql = "UPDATE clientes SET coanombre ='".$this->coanombre."',coarfc ='".$this->coarfc."',coacurp ='".$this->coacurp."',coanss ='".$this->coanss."',coafecnac ='".$this->coafecnac."',coalugarnac ='".$this->coalugarnac."',coaedad ='".$this->coaedad."',edolaboral2 ='".$this->edolaboral2."',ingresos2 ='".$this->ingresos2."',antiguedad2 ='".$this->antiguedad2."',empresa2 ='".$this->empresa2."',domicilio22 ='".$this->domicilio22."',telefono22 ='".$this->telefono22."',puesto2 ='".$this->puesto2."' WHERE id = ".$this->id;

        $resultado = $this->mysqli->query($sql);     
    }    
    public function actualizar2(){
     	$this->conectar();
		
		$sql = "UPDATE clientes SET edolaboral ='".$this->edolaboral."',ingresos ='".$this->ingresos."',antiguedad ='".$this->antiguedad."',empresa ='".$this->empresa."',domicilio2 ='".$this->domicilio2."',telefono2 ='".$this->telefono2."',puesto ='".$this->puesto."',modelo ='".$this->modelo."',proyecto ='".$this->proyecto."',zona ='".$this->zona."',lote ='".$this->lote."',clave ='".$this->clave."',domicilio3 ='".$this->domicilio3."',precio ='".$this->precio."',letra='".$this->letra."',enganche='".$this->enganche."',fecapartado='".$this->fecapartado."',pena ='".$this->pena."',fecentrega='".$this->fecentrega."' WHERE id = ".$this->id;
		
        /*$sql = "UPDATE clientes SET tipo ='".$this->tipo."',edolaboral ='".$this->edolaboral."',ingresos =".$this->ingresos.",antiguedad ='".$this->antiguedad."',empresa ='".$this->empresa."',domicilio2 ='".$this->domicilio2."',telefono2 ='".$this->telefono2."',puesto ='".$this->puesto."',prototipo ='".$this->prototipo."',proyecto ='".$this->proyecto."',zona ='".$this->zona."',lote ='".$this->lote."',clave ='".$this->clave."',domicilio3 ='".$this->domicilio3."',precio ='".$this->precio."',letra='".$this->letra."',enganche='".$this->enganche."',fecapartado='".$this->fecapartado."',pena ='".$this->pena."',fecentrega='".$this->fecentrega."' WHERE id = ".$this->id;*/
		/*$sql = "UPDATE clientes SET tipo ='".$this->tipo."',edolaboral ='Empleado',ingresos =3600,antiguedad ='3 meses',empresa ='Hoteles maria',domicilio2 ='Conocido 2',telefono2 ='123456789',puesto ='Jardinero',prototipo ='Albaca',proyecto ='Mejoricito',zona ='Centro',lote ='Lote 2',clave ='Clave 2',domicilio3 ='Domicilio 3',precio ='2,000,000',letra='Doc millones de pesos',enganche='30,000',fecapartado='01/01/2019',pena ='20,0000',fecentrega='01/01/2019' WHERE id = ".$this->id;*/
			   
     	$resultado = $this->mysqli->query($sql);
     }

     public function actualizarp2(){
     	$this->conectar();
		
		$sql = "UPDATE clientes SET edolaboral ='".$this->edolaboral."',ingresos ='".$this->ingresos."',antiguedad ='".$this->antiguedad."',empresa ='".$this->empresa."',domicilio2 ='".$this->domicilio2."',telefono2 ='".$this->telefono2."',puesto ='".$this->puesto."' WHERE id = ".$this->id;
		
        /*$sql = "UPDATE clientes SET tipo ='".$this->tipo."',edolaboral ='".$this->edolaboral."',ingresos =".$this->ingresos.",antiguedad ='".$this->antiguedad."',empresa ='".$this->empresa."',domicilio2 ='".$this->domicilio2."',telefono2 ='".$this->telefono2."',puesto ='".$this->puesto."',prototipo ='".$this->prototipo."',proyecto ='".$this->proyecto."',zona ='".$this->zona."',lote ='".$this->lote."',clave ='".$this->clave."',domicilio3 ='".$this->domicilio3."',precio ='".$this->precio."',letra='".$this->letra."',enganche='".$this->enganche."',fecapartado='".$this->fecapartado."',pena ='".$this->pena."',fecentrega='".$this->fecentrega."' WHERE id = ".$this->id;*/
		/*$sql = "UPDATE clientes SET tipo ='".$this->tipo."',edolaboral ='Empleado',ingresos =3600,antiguedad ='3 meses',empresa ='Hoteles maria',domicilio2 ='Conocido 2',telefono2 ='123456789',puesto ='Jardinero',prototipo ='Albaca',proyecto ='Mejoricito',zona ='Centro',lote ='Lote 2',clave ='Clave 2',domicilio3 ='Domicilio 3',precio ='2,000,000',letra='Doc millones de pesos',enganche='30,000',fecapartado='01/01/2019',pena ='20,0000',fecentrega='01/01/2019' WHERE id = ".$this->id;*/
			   
     	$resultado = $this->mysqli->query($sql);
     }
	 
     public function actualizarp3(){
     	$this->conectar();
		
		$sql = "UPDATE clientes SET edolaboral =modelo ='".$this->modelo."',proyecto ='".$this->proyecto."',zona ='".$this->zona."',lote ='".$this->lote."',clave ='".$this->clave."',domicilio3 ='".$this->domicilio3."' WHERE id = ".$this->id;
		
			   
     	$resultado = $this->mysqli->query($sql);
     }

     public function actualizarp4(){
     	$this->conectar();
		
		$sql = "UPDATE clientes SET tipo ='".$this->tipo."',precio ='".$this->precio."',letra='".$this->letra."',enganche='".$this->enganche."',fecapartado='".$this->fecapartado."',pena ='".$this->pena."',fecentrega='".$this->fecentrega."',tipo2='".$this->tipo2."',nota ='".$this->nota."' WHERE id = ".$this->id;
		
		   
     	$resultado = $this->mysqli->query($sql);
	 
	 }
   }

 
 ?>