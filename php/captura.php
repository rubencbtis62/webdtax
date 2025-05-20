<?php 
   class captura extends Sql {
    private $id;
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
    private $capis;
    
    /*public function __construct($em8){
    	$this->em8 = $em8;
    }*/

/* Funcion SET */       
public function setcapis( $capis)
    {
    	$this->capis = $capis;
    }
	public function setid( $id)
    {
    	$this->id = $id;
    }
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
  
  public function getcapis(){
    return $this->capis;
  }    

    public function getid(){
    	return $this->id;
    }
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
        $capturas = array();
        while ($captura = $resultado->fetch_assoc()){
        	array_push($capturas, $captura);
        }
        return $capturas;
      }

      public static function obtenerporempresa($anio, $id_em){
        
        $sqlhelper = new Sql();
        $sqlhelper->conectar();   //WHERE anio =".$anio." and id_em =".$id_em
        $sql = "SELECT mes, k1,k2,k3,k4,k5,k6,k7,k8,k9,k10,k11,k12,k13,k14,k15,k16,k17,k18,k19,k20,k21,k22,k23,k24,k25,k26,k27,k28,k29,k30,k31,k32,k33,k34,k35,k36,k37,k38,k39,k40,k41,k42,id_em, anio, id_tipo, id_mes, estatus FROM captura WHERE anio =".$anio." and id_em =".$id_em;
        $resultado = $sqlhelper->getmysqli()->query($sql);
       // $captura_arreglo = $resultado->fetch_assoc();
        $capturas = array();
        while ($captura = $resultado->fetch_assoc()){
        	array_push($capturas, $captura);          
        }        
        return $capturas;
     }



    // public static function obtenerporid($id_em){
    //     $sqlhelper = new Sql();
    //     $sqlhelper->conectar();
    //     $sql = "SELECT * FROM capturas" WHERE id_em =" .$id_em;
    //     $resultado = $sqlhelper->getmysqli()->query($sql);
    //     $captura_arreglo = $resultado->fetch_assoc();
    //     $captura = new captura();
        
    //     $captura->setid_em($captura_arreglo['id_em']);
    //     $captura->setestatus($captura_arreglo['estatus']);
    //     $captura->setem1($captura_arreglo['em1']);
    //     $captura->setem2($captura_arreglo['em2']);
    //     $captura->setem3($captura_arreglo['em3']);
    //     $captura->setem4($captura_arreglo['em4']);
    //     $captura->setem5($captura_arreglo['em5']);
    //     $captura->setem6($captura_arreglo['em6']);
    //     $captura->setem7($captura_arreglo['em7']);
    //     $captura->setem8($captura_arreglo['em8']);
    //     $captura->setem9($captura_arreglo['em9']);
    //     $captura->setem10($captura_arreglo['em10']);
    //     $captura->setem11($captura_arreglo['em11']);      	
        
    //     return $captura;
    //  }  
     
  
    /* Funcion Guardar */       
    public function guardararraynpf()
    {
  
     $this->conectar();       
     // For trabajando al 100 probando el implode
  
     $json_arreglo = json_encode($this->capis);
  
     ob_flush();
     ob_start();
  
     var_dump($this->capis);
  
     file_put_contents("dump.txt", ob_get_flush());
  
     for ($row = 0; $row < 12; $row++)
      {               
          
        $sql = "INSERT INTO captura(mes,k1,k2,k3,k4,k5,k6,k7,k8,k9,k10,k11,k12,k13,k14,k15,k16,k17,k18,k19,k20,k21,k22,k23,k24,k25,k26, id_em, anio, id_tipo, id_mes, estatus) VALUES 
         ('$json_arreglo')";
      
        $resultado = $this->mysqli->query($sql);
  
      }
     
  
      unset($this->$capis);
      $sql = $this->mysqli->close();
     // $resultado = $this->mysqli->close();
                   
     } 


  /* Funcion Guardar */       
  public function guardararray()
  {

   $this->conectar();       
   // For trabajando al 100 probando el implode

   $json_arreglo = json_encode($this->capis);

   ob_flush();
   ob_start();

   var_dump($this->capis);

   file_put_contents("dump.txt", ob_get_flush());

   for ($row = 0; $row < 12; $row++)
    {               
        
      $sql = "INSERT INTO captura(mes,k1,k2,k3,k4,k5,k6,k7,k8,k9,k10,k11,k12,k13,k14,k15,k16,k17,k18,k19,k20,k21,k22,k23,k24,k25,k26, id_em, anio, id_tipo, id_mes, estatus) VALUES 
       ('$json_arreglo')";
    
      $resultado = $this->mysqli->query($sql);

    }
   

    unset($this->$capis);
    $sql = $this->mysqli->close();
   // $resultado = $this->mysqli->close();
                 
   } 


  /* Funcion Guardar */       
  public function guardarnpf()
  {

    $this->conectar();       
      // 

    //if ($this->capis[0][18] == "i") // Genera registros para ISR
    //{   
    for ($row = 0; $row < 12; $row++)
    {               
            
      $sql = "INSERT INTO captura(mes,k1,k2,k3,k4,k5,k6,k7,k8,k9,k10,k11,k12,k13,k14,k16,k17,k18,k19,k20,k21,k22,k23,k24,k25,k26,k27,k28,k29,k30,id_em, anio, id_tipo, id_mes, estatus) VALUES 
        (
      '".$this->capis[$row][0]."','".$this->capis[$row][1]."','".strval($this->capis[$row][2])."','".$this->capis[$row][3]."','".$this->capis[$row][4]."','".$this->capis[$row][5]."',
      '".$this->capis[$row][6]."','".$this->capis[$row][7]."','".$this->capis[$row][8]."','".$this->capis[$row][9]."','".$this->capis[$row][10]."','".$this->capis[$row][11]."',
      '".$this->capis[$row][12]."','".$this->capis[$row][13]."','".$this->capis[$row][14]."','".$this->capis[$row][16]."','".$this->capis[$row][17]."','".$this->capis[$row][18]."',
      '".$this->capis[$row][19]."','".$this->capis[$row][20]."','".$this->capis[$row][21]."','".$this->capis[$row][22]."','".$this->capis[$row][23]."','".$this->capis[$row][24]."',
      '".$this->capis[$row][25]."','".$this->capis[$row][27]."','".$this->capis[$row][28]."','".$this->capis[$row][29]."','".$this->capis[$row][30]."',
      '".$this->capis[$row][31]."')";
          
          $resultado = $this->mysqli->query($sql);        
    }
    //}


  unset($capis);
  // gc_collect_cycles();
  $sql = $this->mysqli->close();
  // $resultado = $this->mysqli->close();
                
  }
  
  
    /* Funcion Guardar */       
     public function guardar()
     {

      $this->conectar();       
         // For trabajando al 100 probando el implode

      if ($this->capis[0][18] == "i") // Genera registros para ISR
      {   
      for ($row = 0; $row < 12; $row++)
       {               
           
         $sql = "INSERT INTO captura(mes,k1,k2,k3,k4,k5,k6,k7,k8,k9,k10,k11,k12,k13,k14, id_em, anio, id_tipo, id_mes, estatus) VALUES 
          (
          '".$this->capis[$row][0]."','".$this->capis[$row][1]."','".$this->capis[$row][2]."','".$this->capis[$row][3]."','".$this->capis[$row][4]."',
          '".$this->capis[$row][5]."','".$this->capis[$row][6]."','".$this->capis[$row][7]."','".$this->capis[$row][8]."','".$this->capis[$row][9]."',
          '".$this->capis[$row][10]."','".$this->capis[$row][11]."','".$this->capis[$row][12]."','".$this->capis[$row][13]."','".$this->capis[$row][14]."',
          '".$this->capis[$row][16]."','".$this->capis[$row][17]."','".$this->capis[$row][18]."','".$this->capis[$row][19]."',
          '".$this->capis[$row][20]."')";
            
             $resultado = $this->mysqli->query($sql);        
       }
      }


       unset($capis);
       // gc_collect_cycles();
       $sql = $this->mysqli->close();
      // $resultado = $this->mysqli->close();
                    
      } 
  

  /* Funcion Guardar */       
  public function guardar1(){
    $this->conectar();                    
    $sql = "INSERT INTO empresas(estatus, em1, em2, em3, em4, em5, em6, em7, em8, em9, em10, em11) VALUES 
    ('ACTIVO','".$this->em1."','".$this->em2."','".$this->em3."','".$this->em4."','".$this->em5."','".$this->em6."','".$this->em7."','".$this->em8."','".$this->em9."','".$this->em10."','".$this->em11."')";
    
    $resultado = $this->mysqli->query($sql);

    $sql = $this->mysqli->close();
  //  $resultado = $this->mysqli->close();              
    }

  /* Funcion actializar empresa */       
  public function actualcap($anio, $id_em, $capis){
    
    $lanio = $anio;
    $lid_em = $id_em;

   // var_dump($lanio);
   // var_dump($lid_em);


  //  ob_flush();
  //  ob_start();

  //  var_dump($this->capis);

  //  file_put_contents("dump2.txt", ob_get_flush());




    $this->conectar();
    //$sql = "UPDATE empresas SET estatus ='INACTIVO' WHERE id = ".$this->id_em;
    for ($row = 0; $row < 12; $row++)
    {  
    $sql = "UPDATE captura SET 
     k1 ='".str_replace(",","",$this->capis[$row][1])."', 
     k2 ='".str_replace(",","",$this->capis[$row][2])."', 
     k3 ='".str_replace(",","",$this->capis[$row][3])."', 
     k4 ='".str_replace(",","",$this->capis[$row][4])."', 
     k5 ='".str_replace(",","",$this->capis[$row][5])."',
     k6 ='".str_replace(",","",$this->capis[$row][6])."', 
     k7 ='".str_replace(",","",$this->capis[$row][7])."', 
     k8 ='".str_replace(",","",$this->capis[$row][8])."', 
     k9 ='".str_replace(",","",$this->capis[$row][9])."', 
     k10 ='".str_replace(",","",$this->capis[$row][10])."',
     k11 ='".str_replace(",","",$this->capis[$row][11])."', 
     k12 ='".str_replace(",","",$this->capis[$row][12])."', 
     k13 ='".str_replace(",","",$this->capis[$row][13])."', 
     k14 ='".str_replace(",","",$this->capis[$row][14])."', 
     k15 ='".$this->capis[$row][15]."',
     k16 ='".str_replace(",","",$this->capis[$row][16])."',
     k17 ='".str_replace(",","",$this->capis[$row][17])."',
     k18 ='".str_replace(",","",$this->capis[$row][18])."',
     k19 ='".str_replace(",","",$this->capis[$row][19])."',
     k20 ='".str_replace(",","",$this->capis[$row][20])."',
     k21 ='".str_replace(",","",$this->capis[$row][21])."',
     k22 ='".str_replace(",","",$this->capis[$row][22])."',
     k23 ='".str_replace(",","",$this->capis[$row][23])."',
     k24 ='".str_replace(",","",$this->capis[$row][24])."',
     k25 ='".str_replace(",","",$this->capis[$row][25])."',
     k26 ='".$this->capis[$row][26]."',
     k27 ='".str_replace(",","",$this->capis[$row][27])."',
     k28 ='".str_replace(",","",$this->capis[$row][28])."',
     k29 ='".str_replace(",","",$this->capis[$row][29])."',
     k30 ='".str_replace(",","",$this->capis[$row][30])."',
     k31 ='".$this->capis[$row][31]."',
     k32 ='".str_replace(",","",$this->capis[$row][32])."',
     k33 ='".str_replace(",","",$this->capis[$row][33])."',
     k34 ='".str_replace(",","",$this->capis[$row][34])."',
     k35 ='".str_replace(",","",$this->capis[$row][35])."',
     k36 ='".$this->capis[$row][36]."',
     k37 ='".str_replace(",","",$this->capis[$row][37])."',
     k38 ='".str_replace(",","",$this->capis[$row][38])."',
     k39 ='".str_replace(",","",$this->capis[$row][39])."',
     k40 ='".$this->capis[$row][40]."',
     k41 ='".str_replace(",","",$this->capis[$row][41])."',
     k42 ='".$this->capis[$row][42]."'
         

     WHERE id_em = ".$lid_em." and anio = ".$lanio." and mes = '".$this->capis[$row][0]."'";
     echo "<br>";
     $resultado = $this->mysqli->query($sql);

    // var_dump($sql);
    }
    $sql = $this->mysqli->close();


     //WHERE id_em = ".$this->id_em." and anio = ".$anio." and mes =".$this->capis[$row][0];
     //$resultado = $this->mysqli->query($sql);
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