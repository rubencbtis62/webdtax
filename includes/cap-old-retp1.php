                
                    
                    <!-- Aqui empieza la captura Old P1 >
                    titulos -->

                    <div class="row mb-1 text-center" style="background-color:#58bed9">
                        <div class="col-sm-1">
                            <label class="col-form-label"><strong>Mes</strong></label>
                        </div>
                        <div class="col-sm-2 ">
                            <label class="col-form-label fw-b">ISS Impuesto s/Salario</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="col-form-label">ISR Asimilable%</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="col-form-label">10% Servicios Profesionales</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="col-form-label">10% Arrendamiento</label>
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
                            echo '<input type="hidden" name="capis['.$row.'][28]" value="'.$anio.'">'; //anio ejerciciio  
                            echo '<input type="hidden" name="capis['.$row.'][29]" value="i">'; //id_tipo captura
                            echo '<input type="hidden" name="capis['.$row.'][31]" value="1">'; //estatus}
                            echo '<input type="hidden" name="capis['.$row.'][21]" value="NULL">'; //estatus}                            
                        }
                            */
                    ?> 


                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Enero</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][27]"  VALUE="<?= number_format($lcapis[0][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][28]" VALUE="<?= number_format($lcapis[0][28], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][29]" VALUE="<?= number_format($lcapis[0][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][30]" VALUE="<?= number_format($lcapis[0][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[0][31]" VALUE="<?= $lcapis[0][31]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Febrero</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][27]" VALUE="<?= number_format($lcapis[1][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][28]" VALUE="<?= number_format($lcapis[1][28], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][29]" VALUE="<?= number_format($lcapis[1][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][30]" VALUE="<?= number_format($lcapis[1][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end"  name="capis[1][31]" VALUE="<?= $lcapis[1][31]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Marzo</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][27]" VALUE="<?= number_format($lcapis[2][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][28]" VALUE="<?= number_format($lcapis[2][28], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][29]" VALUE="<?= number_format($lcapis[2][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][30]" VALUE="<?= number_format($lcapis[2][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[2][31]" VALUE="<?= $lcapis[2][31]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Abril</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][27]" VALUE="<?= number_format($lcapis[3][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][28]" VALUE="<?= number_format($lcapis[3][28], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][29]" VALUE="<?= number_format($lcapis[3][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][30]" VALUE="<?= number_format($lcapis[3][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[3][31]" VALUE="<?= $lcapis[3][31]; ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Mayo</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][27]" VALUE="<?= number_format($lcapis[4][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][28]" VALUE="<?= number_format($lcapis[4][28], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][29]" VALUE="<?= number_format($lcapis[4][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][30]" VALUE="<?= number_format($lcapis[4][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[4][31]" VALUE="<?= $lcapis[4][31]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Junio</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][27]" VALUE="<?= number_format($lcapis[5][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][28]" VALUE="<?= number_format($lcapis[5][28], 2, '.', ','); ?>">
                        </div>    
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][29]" VALUE="<?= number_format($lcapis[5][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][30]" VALUE="<?= number_format($lcapis[5][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[5][31]" VALUE="<?= $lcapis[5][31]; ?>">
                        </div>
                    </div>
                    
                    

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Julio</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][27]" VALUE="<?= number_format($lcapis[6][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][28]" VALUE="<?= number_format($lcapis[6][28], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][29]" VALUE="<?= number_format($lcapis[6][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][30]" VALUE="<?= number_format($lcapis[6][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[6][31]" VALUE="<?= $lcapis[6][31]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Agosto</label>
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][27]" VALUE="<?= number_format($lcapis[7][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][28]" VALUE="<?= number_format($lcapis[7][28], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][29]" VALUE="<?= number_format($lcapis[7][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][30]" VALUE="<?= number_format($lcapis[7][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[7][31]" VALUE="<?= $lcapis[7][31]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Septiembre</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][27]" VALUE="<?= number_format($lcapis[8][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][28]" VALUE="<?= number_format($lcapis[8][28], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][29]" VALUE="<?= number_format($lcapis[8][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][30]" VALUE="<?= number_format($lcapis[8][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[8][31]" VALUE="<?= $lcapis[8][31]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Octubre</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][27]" VALUE="<?= number_format($lcapis[9][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][28]" VALUE="<?= number_format($lcapis[9][28], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][29]" VALUE="<?= number_format($lcapis[9][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][30]" VALUE="<?= number_format($lcapis[9][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[9][31]" VALUE="<?= $lcapis[9][31]; ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Noviembre</label>

                        </div>                                       
                        <div class="col-sm-2">                                    
                            <input type="text" class="form-control text-end" name="capis[10][27]" VALUE="<?= number_format($lcapis[10][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][28]" VALUE="<?= number_format($lcapis[10][28], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][29]" VALUE="<?= number_format($lcapis[10][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][30]" VALUE="<?= number_format($lcapis[10][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[10][31]" VALUE="<?= $lcapis[10][31]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Diciembre</label>
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][27]" VALUE="<?= number_format($lcapis[11][27], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][28]" VALUE="<?= number_format($lcapis[11][28], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][29]" VALUE="<?= number_format($lcapis[11][29], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][30]" VALUE="<?= number_format($lcapis[11][30], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control text-end" name="capis[11][31]" VALUE="<?= $lcapis[11][31]; ?>">
                        </div>
                    </div>
                                              