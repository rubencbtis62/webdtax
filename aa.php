<?php
  include('php/sql.php');
  include('php/empresa.php');

  $empresas = empresa::obtenertodos();

?>

<!DOCTYPE html>

<html lang="es">
 <head>
 </head>

  <body>

    <form id="filtrosForm" action="alta-capturanew.php" method = "POST">
                <div class="col-sm-2">
                    <label for="floatingSelect"><strong>Seleccionar Ejercicio</strong></label>
                    <select class="form-select" id="floatingSelect" aria-label="Ejercicio" name="anio">                 
                      <option >2024</option>
                      <option >2023</option>
                      <option >2022</option>
                      <option >2021</option>
                      <option >2020</option>
                    </select>                                      
                </div>
                <div class="col-sm-5">
                  <label for="floatingSelect"><strong>Seleccionar Empresa</strong></label>
                    <select class="form-select" aria-label="empresas" name="id_em">
                      <?php
                        foreach ($empresas as $empresa) {                     
                            echo "<option value=".$empresa['id_em'].">".$empresa['em2']."</option>";
                        }
                      ?>                      
                    </select>                   
                </div>
                <button type="submit">Buscar</button>
    </form>
 <div id="resultados"></div>
         
 <script>
 document.getElementById('filtrosForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);

    //fetch('php/procesar_filtros.php', {
    fetch('php/procesar_filtros.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('resultados').innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
});
</script>  


  </body>

</html>


