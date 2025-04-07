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
      {
       $capis = $_POST['capis'];  
       $captura = new captura();
       $captura->setcapis($capis);   
       
       var_dump($capis);                 
       //$captura->guardar();
       $captura->guardarnpf();
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


      case 'actualcaptura':{

         $id_em = $_POST['id_em'];
         $anio = $_POST['anio'];
         $capis = $_POST['capis']; 

         //$capturauno = $_POST['capturauno'];
         
         //var_dump($capis);
         
         //$captura = captura::obtenerporempresa($anio, $id_em);
         $captura = new captura();
         $captura->setcapis($capis);
         $captura->actualcap($anio, $id_em, $capis);
         break;
       }
  }
      header('location: ../alta-capturapf.php');  
  
      ?>

     <?php    echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>';  ?>
           <script language='javascript'>
            Swal.fire({
              icon: "sucess",
              title: 'Mensaje de Sistema',
              text: "Captura, Modificada correctamente",
              footer: '<b>Web Dtax Ver 1.0</b>',
              allowOutsideClick: false,
              allowEscapekey: false,
              allowEnterkey: false,
              stopKeydownPropagation: false
            });
            window.location = '../alta-capturaPF.php';
          </script>; 

      <!--
     <script language='javascript'>;
      let captura = "<?php //echo $em2;?>";
      alert('captura:'+captura+' modificada correctamente.');
      window.location = '../alta-capturaPF.php';
      </script>;   -->
