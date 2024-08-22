<?php

function getPlantilla($tramites)
{
$contenido ='
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
    <style>
      .clearfix.after{
       content: "";
       display: table;
       clear: both;
      }
      #logo {
       text-align: left;
       margin-bottom: 10px;
       width: 15%;
       float: left;       
      } 
      #logo img{
       width: 90px;
       float: left;
      } 

      table{
            font-family:arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-left:auto;margin-rigth:auto;
          }
          td, th {
            border: 1px solid #dddddd;
            text-align: left;
            font-size: 11px;
            padding: 8px;
            }
            tr:nth-child(even)
            {
            background-color: #dddddd;    
            }

    </style>

  </head>
  <body>
   <header class="clearfix">
      <div id="logo">
        <img src="assets/img/logo.png" witdh= "90" height="90">
      </div>
      <div align="center"><h2>Reporte de Tramites</h2></div>
      <div align="center"><h3>Departamento de Recursos </h3></div>
   </header>   
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
            <tbody>';

            foreach ($tramites as $tramite) {

                $contenido .= '             
                <tr>                                       
                  <td width="10%"> <span style ="color:#4498f8">'.$tramite['estatus'].'</span></td>
                  <td width="10%">'.$tramite['plantel'].'</td>
                  <td width="10%">'.$tramite['oficio'].'</td>
                  <td width="10%">'.$tramite['fecha'].'</td>
                  <td width="20%">'.$tramite['apellidos'].' '.$tramite['nombre'].'</td>
                  <td width="40%">'.$tramite['asunto'].'</td>
                </tr>';
            }  
   $contenido .= '              
            </tbody>
          </table>
        </div>

  </body>
  </html>
';

return $contenido;
}
?>