                
                    
                    <input type="hidden" name="accion" value="actualcaptura">
                    <!-- titulos -->

                    <div class="row mb-1 text-center text-success">
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
                        //var_dump($capis);
                        //var_dump($anio);
                        // echo "<br>";
                        // var_dump($capis[0][0]);
                            
                        for ($row = 0; $row < 12; $row++) {  
                            echo '<input type="hidden" name="capis['.$row.'][6]" value="'.$id_em.'">'; //id_em id empresa  
                            echo '<input type="hidden" name="capis['.$row.'][7]" value="'.$anio.'">'; //anio ejerciciio  
                            echo '<input type="hidden" name="capis['.$row.'][8]" value="i">'; //id_tipo captura
                            echo '<input type="hidden" name="capis['.$row.'][10]" value="1">'; //estatus}
                            echo '<input type="hidden" name="capis['.$row.'][11]" value="NULL">'; //estatus}
                        }
                    ?> 


                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Enero</label>
                            <input type="hidden" name="capis[0][0]" value="ene">
                            <input type="hidden" name="capis[0][9]" value="1">
                            <!-- <input type="hidden" name="capis[0][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[0][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[0][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[0][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[0][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[0][4]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[0][5]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Febrero</label>
                            <input type="hidden" name="capis[1][0]" value="feb">
                            <input type="hidden" name="capis[1][9]" value="2">
                            <!-- <input type="hidden" name="capis[1][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[1][7]" value="<?= $id_em; ?>">                                       -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[1][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[1][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[1][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[1][4]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end"  name="capis[1][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[1][5]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Marzo</label>
                            <input type="hidden" name="capis[2][0]" value="mar">
                            <input type="hidden" name="capis[2][9]" value="3">
                            <!-- <input type="hidden" name="capis[2][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[2][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[2][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[2][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[2][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[2][4]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[2][5]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Abril</label>
                            <input type="hidden" name="capis[3][0]" value="abr">
                            <input type="hidden" name="capis[3][9]" value="4">
                            <!-- <input type="hidden" name="capis[3][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[3][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[3][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[3][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[3][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[3][4]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[3][5]; ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Mayo</label>
                            <input type="hidden" name="capis[4][0]" value="may">
                            <input type="hidden" name="capis[4][9]" value="5">
                            <!-- <input type="hidden" name="capis[4][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[4][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[4][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[4][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[4][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[4][4]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[4][5]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Junio</label>
                            <input type="hidden" name="capis[5][0]" value="jun">
                            <input type="hidden" name="capis[5][9]" value="6">
                            <!-- <input type="hidden" name="capis[5][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[5][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[5][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[5][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[5][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[5][4]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[5][5]; ?>">
                        </div>
                    </div>
                    
                    

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Julio</label>
                            <input type="hidden" name="capis[6][0]" value="jul">
                            <input type="hidden" name="capis[6][9]" value="7">
                            <!-- <input type="hidden" name="capis[6][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[6][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[6][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[6][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[6][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[6][4]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[6][5]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Agosto</label>
                            <input type="hidden" name="capis[7][0]" value="ago">
                            <input type="hidden" name="capis[7][9]" value="8">
                            <!-- <input type="hidden" name="capis[7][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[7][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[7][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[7][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[7][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[7][4]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[7][5]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Septiembre</label>
                            <input type="hidden" name="capis[8][0]" value="sep">
                            <input type="hidden" name="capis[8][9]" value="9">
                            <!-- <input type="hidden" name="capis[8][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[8][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[8][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[8][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[8][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[8][4]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[8][5]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Octubre</label>
                            <input type="hidden" name="capis[9][0]" value="oct">
                            <input type="hidden" name="capis[9][9]" value="10">
                            <!-- <input type="hidden" name="capis[9][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[9][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[9][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[9][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[9][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[9][4]; ?>0">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[9][5]; ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Noviembre</label>
                            <input type="hidden" name="capis[10][0]" value="nov">
                            <input type="hidden" name="capis[10][9]" value="11">
                            <!-- <input type="hidden" name="capis[10][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[10][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">                                    
                            <input type="text" class="form-control text-end" name="capis[10][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[10][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[10][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[10][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[10][4]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[10][5]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Diciembre</label>
                            <input type="hidden" name="capis[11][0]" value="dic">
                            <input type="hidden" name="capis[11][9]" value="12">
                            <!-- <input type="hidden" name="capis[11][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[11][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][1]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[11][1]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][2]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[11][2]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][3]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[11][3]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][4]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[11][4]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][5]" placeholder="0.00" aria-describedby="Mes" VALUE="<?= $capis[11][5]; ?>">
                        </div>
                    </div>
                                              