<?php 
   class inpc extends Sql {
    private $id;
    private $anio;
    private $ene;
    private $feb;
    private $mar;
    private $abr; 
    private $may;
    private $jun;
    private $jul;
    private $ago;
    private $sep;
    private $oct;
    private $nov;
    private $dic;
    
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
    public function setene( $ene)
    {
    	$this->ene = $ene;
    } 
    public function setfeb( $feb)
    {
    	$this->feb = $feb;
    } 
    public function setmar( $mar)
    {
    	$this->mar = $mar;
    }
    public function setabr( $abr)
    {
    	$this->abr = $abr;
    }
    public function setmay( $may)
    {
    	$this->may = $may;
    }
    public function setjun( $jun)
    {
    	$this->jun = $jun;
    }
    public function setjul( $jul)
    {
    	$this->jul = $jul;
    }
        
    public function setago( $ago)
    {
        $this->ago = $ago;
    }
    public function setsep( $sep)
    {
        $this->sep = $sep;
    }
    public function setoct( $oct)
    {
        $this->oct = $oct;
    }    
	public function setnov( $nov)
    {
        $this->nov = $nov;
    }
    public function setdic( $dic)
    {
        $this->dic = $dic;
    }
		
	
  /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       /* Funcion GET */       
  
    public function getid(){
    	return $this->id;
    }    
    public function getanio(){
    	return $this->anio;
    }
    public function getene(){
    	return $this->ene;
    }    
    public function getfeb(){
    	return $this->feb;
    }
    public function getmar(){
    	return $this->mar;
    }
    public function getabr(){
    	return $this->abr;
    }
    public function getmay(){
    	return $this->may;
    }
    public function getjun(){
    	return $this->jun;
    }
    public function getjul(){
    	return $this->jul;
    } 
	public function getago(){
    	return $this->ago;
    }    
    public function getsep(){
        return $this->sep;
     }
     public function getoct(){
        return $this->oct;
     }	     
	public function getnov(){
        return $this->nov;
     }
  public function getdic(){
      return $this->dic;
   }	     
	
    public static function obtenertodos(){
    	$sqlhelper = new Sql();
    	$sqlhelper->conectar();
    	$sql = "SELECT * FROM inpc ORDER BY anio";
    	$resultado = $sqlhelper->getmysqli()->query($sql);
        $inpcs = array();
        while ($inpc = $resultado->fetch_assoc()){
        	array_push($inpcs, $inpc);
        }
        return $inpcs;
      }
    public static function obtenerporid($id){
        $sqlhelper = new Sql();
        $sqlhelper->conectar();
        $sql = "SELECT * FROM inpc WHERE id =".$id;
        $resultado = $sqlhelper->getmysqli()->query($sql);
        $inpc_arreglo = $resultado->fetch_assoc();
        $inpc = new inpc();
        
        $inpc->setid($inpc_arreglo['id']);
        $inpc->setanio($inpc_arreglo['anio']);
        $inpc->setene($inpc_arreglo['ene']);
        $inpc->setfeb($inpc_arreglo['feb']);
        $inpc->setmar($inpc_arreglo['mar']);
        $inpc->setabr($inpc_arreglo['abr']);
        $inpc->setmay($inpc_arreglo['may']);
        $inpc->setjun($inpc_arreglo['jun']);
        $inpc->setjul($inpc_arreglo['jul']);
        $inpc->setago($inpc_arreglo['ago']);
        $inpc->setsep($inpc_arreglo['sep']);
        $inpc->setoct($inpc_arreglo['oct']);
        $inpc->setnov($inpc_arreglo['nov']);
        $inpc->setdic($inpc_arreglo['dic']);
        
        return $inpc;
     }  
     

  /* Funcion Guardar */       
  public function guardar(){
    $this->conectar(); 
    $sql = "SELECT * FROM inpc WHERE anio = ".$this->anio; 
    $resultado = $this->mysqli->query($sql);
    $contar = mysqli_num_rows($resultado);

    if ($contar >= 1)
{
    echo "alert('Ya existe')";
}
else{
    $sql = "INSERT INTO inpc(anio, ene, feb, mar, abr, may, jun, jul, ago, sep, oct, nov, dic) VALUES 
    ('".$this->anio."','".$this->ene."','".$this->feb."','".$this->mar."','".$this->abr."','".$this->may."','".$this->jun."','".$this->jul."','".$this->ago."','".$this->sep."','".$this->oct."','".$this->nov."','".$this->dic."')";  
    $resultado = $this->mysqli->query($sql);
}
    $sql = $this->mysqli->close();
  //  $resultado = $this->mysqli->close();              
    }

  /* Funcion actializar inpc */       
    public function actualinpc(){
        $this->conectar();
        //$sql = "UPDATE inpcs SET anio ='INACTIVO' WHERE id = ".$this->id_em;

        $sql = "UPDATE inpc SET anio ='".$this->anio."', ene ='".$this->ene."', feb ='".$this->feb."', mar ='".$this->mar."', abr ='".$this->abr."', may ='".$this->may."', jun ='".$this->jun."', jul ='".$this->jul."', ago ='".$this->ago."', sep ='".$this->sep."', oct ='".$this->oct."', nov ='".$this->nov."', dic ='".$this->dic."' WHERE id = ".$this->id;
        $resultado = $this->mysqli->query($sql);
        $sql = $this->mysqli->close();
    } 
 }
  ?>    