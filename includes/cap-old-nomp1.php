                
                    
                    <!-- Aqui empieza la captura Old P1 >
                    titulos -->

                    <div class="row mb-1 text-center" style="background-color:#4391f0; color:#FFFFFF">
                        <div class="col-sm-1">
                            <label class="col-form-label"><strong>Mes</strong></label>
                        </div>
                        <div class="col-sm-2 ">
                            <label class="col-form-label fw-b">Sueldos y Salarios</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="col-form-label">Asimilables a salarios</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="col-form-label">Otros Conceptos</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="col-form-label">Fecha Presentación</label>
                        </div>                            
                    </div>
                    <div class="row mb-1">
                        <hr>
                    </div>

                    <?php /*
                        //var_dump($capis);
                        //var_dump($anio);
                        // echo "<br>";
                        // var_dump($capis[0][0]);
                            
                        for ($row = 0; $row < 12; $row++) {  
                            echo '<input type="hidden" name="capis['.$row.'][16]" value="'.$id_em.'">'; //id_em id empresa  
                            echo '<input type="hidden" name="capis['.$row.'][38]" value="'.$anio.'">'; //anio ejerciciio  
                            echo '<input type="hidden" name="capis['.$row.'][39]" value="i">'; //id_tipo captura
                            echo '<input type="hidden" name="capis['.$row.'][40]" value="1">'; //estatus}
                            echo '<input type="hidden" name="capis['.$row.'][21]" value="NULL">'; //estatus}                            
                        }
                            */
                    ?> 


                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Enero</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][37]"  VALUE="<?= number_format($lcapis[0][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][38]" VALUE="<?= number_format($lcapis[0][38], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][39]" VALUE="<?= number_format($lcapis[0][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[0][40]" VALUE="<?= $lcapis[0][40]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Febrero</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][37]" VALUE="<?= number_format($lcapis[1][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][38]" VALUE="<?= number_format($lcapis[1][38], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][39]" VALUE="<?= number_format($lcapis[1][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end"  name="capis[1][40]" VALUE="<?= $lcapis[1][40]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Marzo</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][37]" VALUE="<?= number_format($lcapis[2][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][38]" VALUE="<?= number_format($lcapis[2][38], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][39]" VALUE="<?= number_format($lcapis[2][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[2][40]" VALUE="<?= $lcapis[2][40]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Abril</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][37]" VALUE="<?= number_format($lcapis[3][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][38]" VALUE="<?= number_format($lcapis[3][38], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][39]" VALUE="<?= number_format($lcapis[3][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[3][40]" VALUE="<?= $lcapis[3][40]; ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Mayo</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][37]" VALUE="<?= number_format($lcapis[4][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][38]" VALUE="<?= number_format($lcapis[4][38], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][39]" VALUE="<?= number_format($lcapis[4][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[4][40]" VALUE="<?= $lcapis[4][40]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Junio</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][37]" VALUE="<?= number_format($lcapis[5][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][38]" VALUE="<?= number_format($lcapis[5][38], 2, '.', ','); ?>">
                        </div>    
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][39]" VALUE="<?= number_format($lcapis[5][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[5][40]" VALUE="<?= $lcapis[5][40]; ?>">
                        </div>
                    </div>
                    
                    

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Julio</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][37]" VALUE="<?= number_format($lcapis[6][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][38]" VALUE="<?= number_format($lcapis[6][38], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][39]" VALUE="<?= number_format($lcapis[6][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[6][40]" VALUE="<?= $lcapis[6][40]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Agosto</label>
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][37]" VALUE="<?= number_format($lcapis[7][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][38]" VALUE="<?= number_format($lcapis[7][38], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][39]" VALUE="<?= number_format($lcapis[7][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[7][40]" VALUE="<?= $lcapis[7][40]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Septiembre</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][37]" VALUE="<?= number_format($lcapis[8][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][38]" VALUE="<?= number_format($lcapis[8][38], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][39]" VALUE="<?= number_format($lcapis[8][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[8][40]" VALUE="<?= $lcapis[8][40]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Octubre</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][37]" VALUE="<?= number_format($lcapis[9][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][38]" VALUE="<?= number_format($lcapis[9][38], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][39]" VALUE="<?= number_format($lcapis[9][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[9][40]" VALUE="<?= $lcapis[9][40]; ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Noviembre</label>

                        </div>                                       
                        <div class="col-sm-2">                                    
                            <input type="text" class="form-control text-end" name="capis[10][37]" VALUE="<?= number_format($lcapis[10][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][38]" VALUE="<?= number_format($lcapis[10][38], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][39]" VALUE="<?= number_format($lcapis[10][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[10][40]" VALUE="<?= $lcapis[10][40]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Diciembre</label>
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][37]" VALUE="<?= number_format($lcapis[11][37], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][38]" VALUE="<?= number_format($lcapis[11][38], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][39]" VALUE="<?= number_format($lcapis[11][39], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[11][40]" VALUE="<?= $lcapis[11][40]; ?>">
                        </div>
                    </div>
                                              