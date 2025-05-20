                
                    
                    <!-- Aqui empieza la captura Old P1 >
                    titulos -->

                    <div class="row mb-1 text-center" style="background-color:#ffb007">
                        <div class="col-sm-1">
                            <label class="col-form-label"><strong>Mes</strong></label>
                        </div>
                        <div class="col-sm-2 ">
                            <label class="col-form-label fw-b">Compras y/o gastos 16%</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="col-form-label">Compras y/o gastos 11%</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="col-form-label">Compras y/o Gastos Estimulo RFN 8%</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="col-form-label">Pagos Importación 16%</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="col-form-label">Pagos Importación 11%</label>
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
                            echo '<input type="hidden" name="capis['.$row.'][17]" value="'.$anio.'">'; //anio ejerciciio  
                            echo '<input type="hidden" name="capis['.$row.'][18]" value="i">'; //id_tipo captura
                            echo '<input type="hidden" name="capis['.$row.'][20]" value="1">'; //estatus}
                            echo '<input type="hidden" name="capis['.$row.'][21]" value="NULL">'; //estatus}                            
                        }
                            */
                    ?> 


                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Enero</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][16]"  VALUE="<?= number_format($lcapis[0][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][17]" VALUE="<?= number_format($lcapis[0][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][18]" VALUE="<?= number_format($lcapis[0][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][19]" VALUE="<?= number_format($lcapis[0][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][20]" VALUE="<?= number_format($lcapis[0][20], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Febrero</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][16]" VALUE="<?= number_format($lcapis[1][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][17]" VALUE="<?= number_format($lcapis[1][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][18]" VALUE="<?= number_format($lcapis[1][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][19]" VALUE="<?= number_format($lcapis[1][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end"  name="capis[1][20]" VALUE="<?= number_format($lcapis[1][20], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Marzo</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][16]" VALUE="<?= number_format($lcapis[2][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][17]" VALUE="<?= number_format($lcapis[2][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][18]" VALUE="<?= number_format($lcapis[2][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][19]" VALUE="<?= number_format($lcapis[2][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][20]" VALUE="<?= number_format($lcapis[2][20], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Abril</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][16]" VALUE="<?= number_format($lcapis[3][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][17]" VALUE="<?= number_format($lcapis[3][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][18]" VALUE="<?= number_format($lcapis[3][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][19]" VALUE="<?= number_format($lcapis[3][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][20]" VALUE="<?= number_format($lcapis[3][20], 2, '.', ','); ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Mayo</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][16]" VALUE="<?= number_format($lcapis[4][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][17]" VALUE="<?= number_format($lcapis[4][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][18]" VALUE="<?= number_format($lcapis[4][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][19]" VALUE="<?= number_format($lcapis[4][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][20]" VALUE="<?= number_format($lcapis[4][20], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Junio</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][16]" VALUE="<?= number_format($lcapis[5][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][17]" VALUE="<?= number_format($lcapis[5][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][18]" VALUE="<?= number_format($lcapis[5][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][19]" VALUE="<?= number_format($lcapis[5][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][20]" VALUE="<?= number_format($lcapis[5][20], 2, '.', ','); ?>">
                        </div>
                    </div>
                    
                    

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Julio</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][16]" VALUE="<?= number_format($lcapis[6][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][17]" VALUE="<?= number_format($lcapis[6][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][18]" VALUE="<?= number_format($lcapis[6][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][19]" VALUE="<?= number_format($lcapis[6][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][20]" VALUE="<?= number_format($lcapis[6][20], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Agosto</label>
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][16]" VALUE="<?= number_format($lcapis[7][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][17]" VALUE="<?= number_format($lcapis[7][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][18]" VALUE="<?= number_format($lcapis[7][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][19]" VALUE="<?= number_format($lcapis[7][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][20]" VALUE="<?= number_format($lcapis[7][20], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Septiembre</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][16]" VALUE="<?= number_format($lcapis[8][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][17]" VALUE="<?= number_format($lcapis[8][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][18]" VALUE="<?= number_format($lcapis[8][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][19]" VALUE="<?= number_format($lcapis[8][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][20]" VALUE="<?= number_format($lcapis[8][20], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Octubre</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][16]" VALUE="<?= number_format($lcapis[9][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][17]" VALUE="<?= number_format($lcapis[9][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][18]" VALUE="<?= number_format($lcapis[9][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][19]" VALUE="<?= number_format($lcapis[9][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][20]" VALUE="<?= number_format($lcapis[9][20], 2, '.', ','); ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Noviembre</label>

                        </div>                                       
                        <div class="col-sm-2">                                    
                            <input type="text" class="form-control text-end" name="capis[10][16]" VALUE="<?= number_format($lcapis[10][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][17]" VALUE="<?= number_format($lcapis[10][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][18]" VALUE="<?= number_format($lcapis[10][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][19]" VALUE="<?= number_format($lcapis[10][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][20]" VALUE="<?= number_format($lcapis[10][20], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Diciembre</label>
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][16]" VALUE="<?= number_format($lcapis[11][16], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][17]" VALUE="<?= number_format($lcapis[11][17], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][18]" VALUE="<?= number_format($lcapis[11][18], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][19]" VALUE="<?= number_format($lcapis[11][19], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][20]" VALUE="<?= number_format($lcapis[11][20], 2, '.', ','); ?>">
                        </div>
                    </div>
                                              