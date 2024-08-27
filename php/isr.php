<?php 
   class isr extends Sql {
    private $id;
    private $anio;
    private $fila;
    private $li;
    private $ls;
    private $cuota; 
    private $por;
    private $estatus;
    
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
    public function setfila( $fila)
    {
    	$this->fila = $fila;
    } 
    public function setli( $li)
    {
    	$this->li = $li;
    } 
    public function setls( $ls)
    {
    	$this->ls = $ls;
    }
    public function setcuota( $cuota)
    {
    	$this->cuota = $cuota;
    }
    public function setpor( $por)
    {
    	$this->por = $por;
    }
    public function setestatus( $estatus)
    {
    	$this->estatus = $estatus;
    }
		
	
  /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       
  
    public function getid(){
    	return $this->id;
    }    
    public function getanio(){
    	return $this->anio;
    }
    public function getfila(){
    	return $this->fila;
    }    
    public function getli(){
    	return $this->li;
    }
    public function getls(){
    	return $this->ls;
    }
    public function getcuota(){
    	return $this->cuota;
    }
    public function getpor(){
    	return $this->por;
    }
    public function getestatus(){
    	return $this->estatus;
    }
	
    public static function obtenertodos(){
    	$sqlhelper = new Sql();
    	$sqlhelper->conectar();
    	$sql = "SELECT * FROM tabla_isr ORDER BY anio+fila";
    	$resultado = $sqlhelper->getmysqli()->query($sql);
        $isrs = array();
        while ($isr = $resultado->fetch_assoc()){
        	array_push($isrs, $isr);
        }
        return $isrs;
      }
    public static function obtenerporid($id){
        $sqlhelper = new Sql();
        $sqlhelper->conectar();
        $sql = "SELECT * FROM tabla_isr WHERE id =".$id;
        $resultado = $sqlhelper->getmysqli()->query($sql);
        $isr_arreglo = $resultado->fetch_assoc();
        $isr = new isr();
        
        $isr->setid($isr_arreglo['id']);
        $isr->setanio($isr_arreglo['anio']);
        $isr->setfila($isr_arreglo['fila']);
        $isr->setli($isr_arreglo['li']);
        $isr->setls($isr_arreglo['ls']);
        $isr->setcuota($isr_arreglo['cuota']);
        $isr->setpor($isr_arreglo['por']);
        $isr->setestatus($isr_arreglo['estatus']);
             
        return $isr;
     }  
     

  /* Funcion Guardar */       
  public function guardar(){
    $this->conectar(); 
    $sql = "SELECT * FROM tabla_isr WHERE anio = ".$this->anio; 
    $resultado = $this->mysqli->query($sql);
    $contar = mysqli_num_rows($resultado);

    if ($contar >= 1)
{
    echo "alert('Ya existe')";
}
else{
    $sql = "INSERT INTO tabla_isr(anio, fila, li, ls, cuota, por, estatus, jul, ago, sep, oct, nov, dic) VALUES 
    ('".$this->anio."','".$this->fila."','".$this->li."','".$this->ls."','".$this->cuota."','".$this->por."','".$this->estatus."')";  
    $resultado = $this->mysqli->query($sql);
}
    $sql = $this->mysqli->close();
  //  $resultado = $this->mysqli->close();              
    }

  /* Funcion actializar isr */       
    public function actualisr(){
        $this->conectar();
        //$sql = "UPDATE isrs SET anio ='INACTIVO' WHERE id = ".$this->id_em;

        $sql = "UPDATE tabla_isr SET li ='".$this->li."', ls ='".$this->ls."', cuota ='".$this->cuota."', por ='".$this->por."', estatus ='".$this->estatus."' WHERE id = ".$this->id;
        $resultado = $this->mysqli->query($sql);
        $sql = $this->mysqli->close();
    } 
 }

  //  anio ='".$this->anio."', fila ='".$this->fila."',
  ?>    