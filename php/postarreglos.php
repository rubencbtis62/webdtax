<?php
include('sql.php');
include('captura.php');

if ($_SERVER['REQUEST_METHOD']=='POST'){	 
     $accion = $_POST['accion'];
  }else
  { 	 
     $accion = $_GET['accion'];
  }


  switch ($accion) {
  	case 'alta':
       $capis = $_POST['capis'];
	  
       $captura = new captura();

       $captura->setcapis($capis);                    

       $captura->guardar();

       break;

        // for ($row = 0; $row < 12; $row++) {
        //   echo "<p><b>Fila número ".($row+1)." </b></p>";
        //   echo "<ul>";
        //   for ($col = 0; $col < 5; $col++) {
        //       echo "<li>" . $capis[$row][$col] . "</li>";
        //   }
        //   echo "</ul>";
          //$captura->guardar();
       // }
       // break;
      }
      header('location: ../alta-capturapf.php')  
      ?>
      <!-- <script language='javascript'>;
      let captura = "<?php //echo $em2;?>";
      alert('captura:'+captura+' modificada correctamente.');
      window.location = '../alta-capturaPF.php';
      </script>;  -->
