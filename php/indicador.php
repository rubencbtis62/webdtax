<?php 
   class indicador extends Sql {
    private $id;
    private $anio;
    private $isrpm;
    private $tasnom; 
    private $tashos;
    private $ietu; 
      
    /*public function __construct($ago){
    	$this->ago = $ago;
    }*/

/* Funcion SET */       
	public function setid( $id)
    {
    	$this->id = $id;
    }
    public function setanio( $anio)
    {
    	$this->anio = $anio;
    } 
    public function setisrpm( $isrpm)
    {
    	$this->isrpm = $isrpm;
    } 
    public function settasnom( $tasnom)
    {
    	$this->tasnom = $tasnom;
    } 
    public function settashos( $tashos)
    {
    	$this->tashos = $tashos;
    }
    public function setietu( $ietu)
    {
    	$this->ietu = $ietu;
    }
  		
	
  /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       
  
    public function getid(){
    	return $this->id;
    }    
    public function getanio(){
    	return $this->anio;
    }
    public function getisrpm(){
    	return $this->isrpm;
    }    
    public function gettasnom(){
    	return $this->tasnom;
    }
    public function gettashos(){
    	return $this->tashos;
    }
    public function getietu(){
    	return $this->ietu;
    }
       
	
    public static function obtenertodos(){
    	$sqlhelper = new Sql();
    	$sqlhelper->conectar();
    	$sql = "SELECT * FROM indicadores ORDER BY anio";
    	$resultado = $sqlhelper->getmysqli()->query($sql);
        $indicadors = array();
        while ($indicador = $resultado->fetch_assoc()){
        	array_push($indicadors, $indicador);
        }
        return $indicadors;
      }
    public static function obtenerporid($id){
        $sqlhelper = new Sql();
        $sqlhelper->conectar();
        $sql = "SELECT * FROM indicadores WHERE id =".$id;
        $resultado = $sqlhelper->getmysqli()->query($sql);
        $indicador_arreglo = $resultado->fetch_assoc();
        $indicador = new indicador();
        
        $indicador->setid($indicador_arreglo['id']);
        $indicador->setanio($indicador_arreglo['anio']);
        $indicador->setisrpm($indicador_arreglo['isrpm']);
        $indicador->settasnom($indicador_arreglo['tasnom']);
        $indicador->settashos($indicador_arreglo['tashos']);
        $indicador->setietu($indicador_arreglo['ietu']);
        
        return $indicador;
     }  
     

  /* Funcion Guardar */       
  public function guardar(){
    $this->conectar(); 
    $sql = "SELECT * FROM indicadores WHERE anio = ".$this->anio; 
    $resultado = $this->mysqli->query($sql);
    $contar = mysqli_num_rows($resultado);

    if ($contar >= 1)
{
    echo "alert('Ya existe')";
}
else{
    $sql = "INSERT INTO indicadores(anio, isrpm, tasnom, tashos, ietu) VALUES 
    ('".$this->anio."','".$this->isrpm."','".$this->tasnom."','".$this->tashos."','".$this->ietu."')";  
    $resultado = $this->mysqli->query($sql);
}
    $sql = $this->mysqli->close();
  //  $resultado = $this->mysqli->close();              
    }

  /* Funcion actializar indicador */       
    public function actualindicador(){
        $this->conectar();
        //$sql = "UPDATE indicadors SET anio ='INACTIVO' WHERE id = ".$this->id_em;

        $sql = "UPDATE indicadores SET anio ='".$this->anio."', isrpm ='".$this->isrpm."', tasnom ='".$this->tasnom."', tashos ='".$this->tashos."', ietu ='".$this->ietu."' WHERE id = ".$this->id;
        $resultado = $this->mysqli->query($sql);
        $sql = $this->mysqli->close();
    } 
 }
  ?>    