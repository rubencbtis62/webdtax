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