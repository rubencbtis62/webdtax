                <!-- titulos -->
                                <div class="row mb-1 text-center text-white p-2" style="background-color:#196f3d">
                                  <div class="col-sm-1">
                                    <label class="col-form-label"><strong>Mes</strong></label>
                                  </div>
                                  <div class="col-sm-2">
                                   <label class="col-form-label">Ingresos del periodo</label>
                                  </div>
                                  <div class="col-sm-2">
                                   <label class="col-form-label">Ingresos Excentos</label>
                                  </div>
                                  <div class="col-sm-2">
                                  <label class="col-form-label">Ded. Autorizadas</label>
                                  </div>
                                  <div class="col-sm-2">
                                   <label class="col-form-label">Ded. Imp. Local</label>
                                  </div>
                                  <div class="col-sm-2">
                                   <label class="col-form-label">Ded. de inversiones</label>
                                  </div>
                                  
                                </div>
                                <div class="row mb-1">
                                    <hr>
                                </div>

                                <?php
                                    for ($row = 0; $row < 12; $row++) {  
                                        echo '<input type="hidden" name="capis['.$row.'][43]" value="'.$id_em.'">'; //id_em id empresa  
                                        echo '<input type="hidden" name="capis['.$row.'][44]" value="'.$anio.'">'; //anio ejerciciio  
                                        echo '<input type="hidden" name="capis['.$row.'][45]" value="i">'; //id_tipo captura
                                        echo '<input type="hidden" name="capis['.$row.'][47]" value="1">'; //estatus}
                                        echo '<input type="hidden" name="capis['.$row.'][48]" value="NULL">'; //estatus}
                                    }
                                ?>


                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Enero</label>
                                      <input type="hidden" name="capis[0][0]" value="ene">
                                      <input type="hidden" name="capis[0][46]" value="1">
                                    </div>                                       
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[0][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[0][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[0][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[0][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[0][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>

                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Febrero</label>
                                      <input type="hidden" name="capis[1][0]" value="feb">
                                      <input type="hidden" name="capis[1][46]" value="2">
                                    </div>                                       
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[1][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[1][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[1][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[1][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end"  name="capis[1][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>

                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Marzo</label>
                                      <input type="hidden" name="capis[2][0]" value="mar">
                                      <input type="hidden" name="capis[2][46]" value="3">
                                    </div>                                       
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[2][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[2][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[2][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[2][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[2][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>

                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Abril</label>
                                      <input type="hidden" name="capis[3][0]" value="abr">
                                      <input type="hidden" name="capis[3][46]" value="4">
                                    </div>                                       
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[3][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[3][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[3][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[3][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[3][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>
                              
                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Mayo</label>
                                      <input type="hidden" name="capis[4][0]" value="may">
                                      <input type="hidden" name="capis[4][46]" value="5">
                                    </div>                                       
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[4][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[4][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[4][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[4][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[4][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>

                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Junio</label>
                                      <input type="hidden" name="capis[5][0]" value="jun">
                                      <input type="hidden" name="capis[5][46]" value="6">
                                    </div>                                       
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[5][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[5][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[5][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[5][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[5][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>
                              
                              

                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Julio</label>
                                      <input type="hidden" name="capis[6][0]" value="jul">
                                      <input type="hidden" name="capis[6][46]" value="7">
                                    </div>                                       
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[6][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[6][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[6][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[6][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[6][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>

                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Agosto</label>
                                      <input type="hidden" name="capis[7][0]" value="ago">
                                      <input type="hidden" name="capis[7][46]" value="8">
                                    </div>                                       
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[7][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[7][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[7][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[7][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[7][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>

                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Septiembre</label>
                                      <input type="hidden" name="capis[8][0]" value="sep">
                                      <input type="hidden" name="capis[8][46]" value="9">
                                    </div>                                       
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[8][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[8][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[8][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[8][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[8][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>

                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Octubre</label>
                                      <input type="hidden" name="capis[9][0]" value="oct">
                                      <input type="hidden" name="capis[9][46]" value="10">
                                    </div>                                       
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[9][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[9][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[9][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[9][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[9][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>
                              
                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Noviembre</label>
                                      <input type="hidden" name="capis[10][0]" value="nov">
                                      <input type="hidden" name="capis[10][46]" value="11">
                                    </div>                                       
                                    <div class="col-sm-2">                                    
                                        <input type="text" class="form-control text-end" name="capis[10][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[10][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[10][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[10][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[10][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>

                                <div class="row mb-1 text-danger-emphasis">
                                    <div class="col-sm-1">
                                      <label class="col-form-label">Diciembre</label>
                                      <input type="hidden" name="capis[11][0]" value="dic">
                                      <input type="hidden" name="capis[11][46]" value="12">
                                    </div>                                       
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[11][1]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[11][2]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[11][3]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[11][4]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-end" name="capis[11][5]" placeholder="0.00" aria-describedby="Mes" VALUE="0.00">
                                    </div>
                                </div>
                                                              