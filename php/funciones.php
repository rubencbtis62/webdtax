<?php 
   function conectarBD($servidor,$usuario,$pwd,$bd){

   $mysqli = new mysqli($servidor,$usuario,$pwd,$bd);
   if ($mysqli->connect_errno) {
   	  echo "Error conectar error en la base de datos";
   	  echo "Error no.". $mysqli->connect_errno."<br/>";
   	  echo "Error". $mysqli->connect_error."<br/>";
   	  return null;
   }
   return $mysqli;
	}

	function login($usuario,$pwd,$mysqli){

    $sql = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' AND  password= '".$pwd."'";

    $resultado = $mysqli->query($sql); 
     if ($resultado->num_rows > 0)
     {//acceso  
       session_start();   
        $f = $resultado->fetch_assoc();
        
        $_SESSION['usuario']= $f['usuario'];
        $_SESSION['nombre']= $f['nombre'];
        $_SESSION['imagen']= $f['imagen'];
        $_SESSION['id_cargo']= $f['id_cargo'];
        $_SESSION['lastaccess']= time();

        return true;
     }
     return false;
   
	}

	function valida($anio,$id_em,$mysqli){

      $sql = "SELECT * FROM captura WHERE anio = '".$anio."' AND  id_em= '".$id_em."'";
  
      $resultado = $mysqli->query($sql); 
       if ($resultado->num_rows > 0)
       {// Existe registro en captura                
          return true;
       }
       return false;
     
     }




   function  desconectar()
   {
   session_start();
   if  ($_SESSION['usuario'])
    {
     session_destroy();
     header("Location: ../pages-login.html");
   
    }
    else
    {
     header("Location: ../pages-login.html");
    }
   }
?>