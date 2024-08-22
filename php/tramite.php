<?php 
   class tramite extends Sql {
    private $id;
    private $estatus;
    private $plantel;
    private $area; 
    private $fecha;
    private $responsable;
    private $correo1;
    private $oficio;
    private $importancia;
    private $nombre;
    private $apellidos;
    private $domicilio;
    private $asunto;
	private $telefono;
	private $correo;	

    
    /*public function __construct($nombre){
    	$this->nombre = $nombre;
    }*/

/* Funcion SET */       
	public function setid( $id)
    {
    	$this->id = $id;
    }
    public function setestatus( $estatus)
    {
    	$this->estatus = $estatus;
    } 
    public function setplantel( $plantel)
    {
    	$this->plantel = $plantel;
    } 
    public function setarea( $area)
    {
    	$this->area = $area;
    } 
    public function setfecha( $fecha)
    {
    	$this->fecha = $fecha;
    }
    public function setresponsable( $responsable)
    {
    	$this->responsable = $responsable;
    }
    public function setcorreo1( $correo1)
    {
    	$this->correo1 = $correo1;
    }
    public function setoficio( $oficio)
    {
    	$this->oficio = $oficio;
    }
    public function setimportancia( $importancia)
    {
    	$this->importancia = $importancia;
    }
        
    public function setnombre( $nombre)
    {
        $this->nombre = $nombre;
    }
    public function setapellidos( $apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function setdomicilio( $domicilio)
    {
        $this->domicilio = $domicilio;
    }    
	public function setasunto( $asunto)
    {
        $this->asunto = $asunto;
    }
	public function settelefono( $telefono)
    {
        $this->telefono = $telefono;
    }
	public function setcorreo( $correo)
    {
        $this->correo = $correo;
    }
		
	
  /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       
  
    public function getid(){
    	return $this->id;
    }    
    public function getestatus(){
    	return $this->estatus;
    }
    public function getplantel(){
    	return $this->plantel;
    }    
    public function getarea(){
    	return $this->area;
    }
    public function getfecha(){
    	return $this->fecha;
    }
    public function getresponsable(){
    	return $this->responsable;
    }
    public function getcorreo1(){
    	return $this->correo1;
    }
    public function getoficio(){
    	return $this->oficio;
    }
    public function getimportancia(){
    	return $this->importancia;
    } 
	public function getnombre(){
    	return $this->nombre;
    }    
    public function getapellidos(){
        return $this->apellidos;
     }
     public function getdomicilio(){
        return $this->domicilio;
     }	     
	public function getasunto(){
        return $this->asunto;
     }	
	public function gettelefono(){
    	return $this->telefono;
    }	
	public function getcorreo(){
    	return $this->correo;
    }
    


  /* Funcion Guardar */       
    public function guardar(){
        $this->conectar();                    
        $sql = "INSERT INTO tramite(estatus, plantel, area, fecha, responsable, correo1, oficio, importancia, nombre,apellidos,asunto,telefono,correo) VALUES ('EN PROCESO','".$this->plantel."','".$this->area."','".$this->fecha."','".$this->responsable."','".$this->correo1."','".$this->oficio."','".$this->importancia."','".$this->nombre."','".$this->apellidos."','".$this->asunto."','".$this->telefono."','".$this->correo."')";
        
        $resultado = $this->mysqli->query($sql);

        $sql = $this->mysqli->close();
        $resultado = $this->mysqli->close();              

    }




    public function actualdata(){
        $this->conectar();

        $sql = "UPDATE tramite SET estatus ='".$this->estatus."',plantel ='".$this->plantel."', area ='".$this->area."',  nombre ='".$this->nombre."',apellidos ='".$this->apellidos."',domicilio ='".$this->domicilio."',asunto ='".$this->asunto."',telefono ='".$this->telefono."',correo ='".$this->correo."' WHERE id = ".$this->id;

        $resultado = $this->mysqli->query($sql);     
    } 

    public function actualestatus(){
        $this->conectar();

        $sql = "UPDATE tramite SET estatus ='".$this->estatus."' WHERE id = ".$this->id;

        $resultado = $this->mysqli->query($sql);     
    } 


    public static function obtenertodos(){
    	$sqlhelper = new Sql();
    	$sqlhelper->conectar();
    	$sql = "SELECT * FROM tramite ORDER BY apellidos";
    	$resultado = $sqlhelper->getmysqli()->query($sql);
        $tramites = array();
        while ($tramite = $resultado->fetch_assoc()){
        	array_push($tramites, $tramite);
        }
        return $tramites;
      }

      public static function obtenerporid($id){
        $sqlhelper = new Sql();
        $sqlhelper->conectar();
        $sql = "SELECT * FROM tramite WHERE id =".$id;
        $resultado = $sqlhelper->getmysqli()->query($sql);
        $tramite_arreglo = $resultado->fetch_assoc();
        $tramite = new tramite();
        
        $tramite->setid($tramite_arreglo['id']);
        $tramite->setestatus($tramite_arreglo['estatus']);
        $tramite->setplantel($tramite_arreglo['plantel']);
        $tramite->setarea($tramite_arreglo['area']);
        $tramite->setfecha($tramite_arreglo['fecha']);
        $tramite->setresponsable($tramite_arreglo['responsable']);       
        $tramite->setcorreo1($tramite_arreglo['correo1']);
        $tramite->setoficio($tramite_arreglo['oficio']);
        $tramite->setimportancia($tramite_arreglo['importancia']);    
        $tramite->setnombre($tramite_arreglo['nombre']);
        $tramite->setapellidos($tramite_arreglo['apellidos']);
        $tramite->setdomicilio($tramite_arreglo['domicilio']);
		$tramite->setasunto($tramite_arreglo['asunto']);
		$tramite->settelefono($tramite_arreglo['telefono']);		
		$tramite->setcorreo($tramite_arreglo['correo']);
		
        
        return $tramite;

     }

/////
/////
/////
/////
/////
//////////
/////
//////////
/////
//////////
/////
/////






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

    public static function obtenertodos123(){
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
     public static function obtenerporid123($id){
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