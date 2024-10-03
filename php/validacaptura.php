<?php 
  include('funciones.php');

  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $anio = $_POST['anio'];
    $id_em = $_POST['id_em'];
}else
{
    $anio = $_GET['anio'];
    $id_em = $_GET['id_em'];
}



  session_start();

  //$_SESSION['usuario']=$usuario;
  
  $mysqli = conectarbd('localhost','adti','Apcas123*','webdtax');

   
  if (valida($anio,$id_em,$mysqli))
   {
    header('location: ../index.php');    
   }else
   {

   // $divert=$row['id']."&param1=".($param1)."&param2=".($param2);

    $divert="anio=".$_POST['anio']."&id_em=".$_POST['id_em'];
    header("location: ../alta-capturanew.php?$divert");
   }


   /*if ($resultado->num_rows > 0){//acceso
      $usuario = $resultado->fetch_assoc();

      $_SESSION['usuario']= $usuario;

      header('location: captura.php');
   }else{//no ecceso
      header('location: login.php?status=0'); 
   }*/


   //$param = $_REQUEST['bcd'];
   //header("Location: abc.php/?id=$param");


    ?> 