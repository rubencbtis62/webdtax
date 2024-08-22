  <?php 
  include('funciones.php');

  $usuario = $_POST['usuario'];
  $pwd = $_POST['pwd'];

  session_start();

  //$_SESSION['usuario']=$usuario;
  
  $mysqli = conectarbd('localhost','adti','Apcas123*','webdtax');

   
  if (login($usuario,$pwd,$mysqli))
   {
     header('location: ../index.php');   	
   }else
   {
      
   	 header('location: ../pages-login.html'); 
   }


   /*if ($resultado->num_rows > 0){//acceso
      $usuario = $resultado->fetch_assoc();

      $_SESSION['usuario']= $usuario;

      header('location: captura.php');
   }else{//no ecceso
      header('location: login.php?status=0'); 
   }*/


    ?> 