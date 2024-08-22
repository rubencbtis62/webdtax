<?php
  include('php/sql.php');
  include('php/tramite.php');
  include('php/cn.php');

    // $tramites = tramite::obtenertodos();
    $tramites = tramite::obtenertodos();
    $total_tramites = 0;
    foreach ($tramites as $tramite) {
        $total_tramites += 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table{
          font-family:arial, sans-serif;
          border-collapse: collapse;
          width: 90%;
          margin-left:auto;margin-rigth:auto;
         }
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
          }
          tr:nth-child(even)
          {
          background-color: #dddddd;    
          }

  </style>

</head>
<body>
  <div style="width: 100%;">
      <table >
        <thead>
          <tr>                   
            <th>Estatus</th>
            <th>Plantel</th>
            <th>Oficio</th>
            <th>Fecha</th>
            <th>Trabajador</th>
            <th>Asunto</th>                    
            <!-- <th>Acciones</th> -->
          </tr>
        </thead>
        <tbody>
        
          <?php 
          /*var_dump($tramites); */
          foreach ($tramites as $tramite) {
            echo '<tr>';                                       
              echo '<td> <span style ="color:#4498f8">'.$tramite['estatus'].'</span></td>';                                          
              echo '<td>'.$tramite['plantel'].'</td>';
              echo '<td>'.$tramite['oficio'].'</td>';
              echo '<td>'.$tramite['fecha'].'</td>';
              echo '<td>'.$tramite['apellidos'].' '.$tramite['nombre'].'</td>';
              echo '<td>'.$tramite['asunto'].'</td>';
            echo '</tr>';
          }
          ?>                 
        </tbody>
      </table>
    </div>
</body>
</html>

