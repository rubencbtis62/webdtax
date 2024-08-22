<?php 
   class empresa extends Sql {
    private $id_em;
    private $estatus;
    private $em1;
    private $em2; 
    private $em3; 
    private $em4;
    private $em5;
    private $em6;
    private $em7;
    private $em8;
    private $em9;
    private $em10;
    private $em11;
    
    /*public function __construct($em8){
    	$this->em8 = $em8;
    }*/

/* Funcion SET */       
	public function setid_em( $id_em)
    {
    	$this->id_em = $id_em;
    }
    public function setestatus( $estatus)
    {
    	$this->estatus = $estatus;
    } 
    public function setem1( $em1)
    {
    	$this->em1 = $em1;
    } 
    public function setem2( $em2)
    {
    	$this->em2 = $em2;
    } 
    public function setem3( $em3)
    {
    	$this->em3 = $em3;
    }
    public function setem4( $em4)
    {
    	$this->em4 = $em4;
    }
    public function setem5( $em5)
    {
    	$this->em5 = $em5;
    }
    public function setem6( $em6)
    {
    	$this->em6 = $em6;
    }
    public function setem7( $em7)
    {
    	$this->em7 = $em7;
    }
        
    public function setem8( $em8)
    {
        $this->em8 = $em8;
    }
    public function setem9( $em9)
    {
        $this->em9 = $em9;
    }
    public function setem10( $em10)
    {
        $this->em10 = $em10;
    }    
	public function setem11( $em11)
    {
        $this->em11 = $em11;
    }
		
	
  /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       
  
    public function getid_em(){
    	return $this->id_em;
    }    
    public function getestatus(){
    	return $this->estatus;
    }
    public function getem1(){
    	return $this->em1;
    }    
    public function getem2(){
    	return $this->em2;
    }
    public function getem3(){
    	return $this->em3;
    }
    public function getem4(){
    	return $this->em4;
    }
    public function getem5(){
    	return $this->em5;
    }
    public function getem6(){
    	return $this->em6;
    }
    public function getem7(){
    	return $this->em7;
    } 
	public function getem8(){
    	return $this->em8;
    }    
    public function getem9(){
        return $this->em9;
     }
     public function getem10(){
        return $this->em10;
     }	     
	public function getem11(){
        return $this->em11;
     }	
	
    public static function obtenertodos(){
    	$sqlhelper = new Sql();
    	$sqlhelper->conectar();
    	$sql = "SELECT * FROM empresas ORDER BY em2";
    	$resultado = $sqlhelper->getmysqli()->query($sql);
        $empresas = array();
        while ($empresa = $resultado->fetch_assoc()){
        	array_push($empresas, $empresa);
        }
        return $empresas;
      }
    public static function obtenerporid_em($id_em){
        $sqlhelper = new Sql();
        $sqlhelper->conectar();
        $sql = "SELECT * FROM empresas WHERE id_em =".$id_em;
        $resultado = $sqlhelper->getmysqli()->query($sql);
        $empresa_arreglo = $resultado->fetch_assoc();
        $empresa = new empresa();
        
        $empresa->setid_em($empresa_arreglo['id_em']);
        $empresa->setestatus($empresa_arreglo['estatus']);
        $empresa->setem1($empresa_arreglo['em1']);
        $empresa->setem2($empresa_arreglo['em2']);
        $empresa->setem3($empresa_arreglo['em3']);
        $empresa->setem4($empresa_arreglo['em4']);
        $empresa->setem5($empresa_arreglo['em5']);
        $empresa->setem6($empresa_arreglo['em6']);
        $empresa->setem7($empresa_arreglo['em7']);
        $empresa->setem8($empresa_arreglo['em8']);
        $empresa->setem9($empresa_arreglo['em9']);
        $empresa->setem10($empresa_arreglo['em10']);
        $empresa->setem11($empresa_arreglo['em11']);      	
        
        return $empresa;
     }  
     

  /* Funcion Guardar */       
  public function guardar(){
    $this->conectar();                    
    $sql = "INSERT INTO empresas(estatus, em1, em2, em3, em4, em5, em6, em7, em8, em9, em10, em11) VALUES 
    ('ACTIVO','".$this->em1."','".$this->em2."','".$this->em3."','".$this->em4."','".$this->em5."','".$this->em6."','".$this->em7."','".$this->em8."','".$this->em9."','".$this->em10."','".$this->em11."')";
    
    $resultado = $this->mysqli->query($sql);

    $sql = $this->mysqli->close();
  //  $resultado = $this->mysqli->close();              
    }

  /* Funcion actializar empresa */       
    public function actualempresa(){
        $this->conectar();
        //$sql = "UPDATE empresas SET estatus ='INACTIVO' WHERE id = ".$this->id_em;

        $sql = "UPDATE empresas SET estatus ='".$this->estatus."', em1 ='".$this->em1."', em2 ='".$this->em2."', em3 ='".$this->em3."', em4 ='".$this->em4."', em5 ='".$this->em5."', em6 ='".$this->em6."', em7 ='".$this->em7."', em8 ='".$this->em8."', em9 ='".$this->em9."', em10 ='".$this->em10."', em11 ='".$this->em11."' WHERE id_em = ".$this->id_em;
        $resultado = $this->mysqli->query($sql);
        $sql = $this->mysqli->close();
    } 
 }
  ?>    