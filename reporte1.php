<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
require_once 'plantilla1.php';
require_once 'consultaplantilla.php';

// Create an instance of the class:

$plantilla = getPlantilla($tramites);



$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8',
'format' => 'A4-L',
'pagenumPrefix' => 'Página número ',
'pagenumSuffix' => ' - ',
'nbpgPrefix' => ' de ',
'nbpgSuffix' => ' páginas'

]);
$mpdf->SetHeader('{PAGENO}{nbpg}');
$mpdf->SetTitle("Reporte de tramites administrativos");
$mpdf->SetWatermarkText("DGETI");
$mpdf->setFooter('{PAGENO}');
// Write some HTML code:
$mpdf->WriteHTML($plantilla);

// Output a PDF file directly to the browser
$mpdf->Output("Reporte_Tramites_Admvos","I");
   
?>