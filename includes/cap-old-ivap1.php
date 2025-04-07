                
                    
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
                            <input type="text" class="form-control text-end" name="capis[0][16]"  VALUE="<?= $lcapis[0][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][17]" VALUE="<?= $lcapis[0][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][18]" VALUE="<?= $lcapis[0][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][19]" VALUE="<?= $lcapis[0][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][20]" VALUE="<?= $lcapis[0][20]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Febrero</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][16]" placeholder="0.00"   VALUE="<?= $lcapis[1][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][17]" placeholder="0.00"   VALUE="<?= $lcapis[1][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][18]" placeholder="0.00"   VALUE="<?= $lcapis[1][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][19]" placeholder="0.00"   VALUE="<?= $lcapis[1][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end"  name="capis[1][20]" placeholder="0.00"   VALUE="<?= $lcapis[1][20]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Marzo</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][16]" placeholder="0.00"   VALUE="<?= $lcapis[2][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][17]" placeholder="0.00"   VALUE="<?= $lcapis[2][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][18]" placeholder="0.00"   VALUE="<?= $lcapis[2][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][19]" placeholder="0.00"   VALUE="<?= $lcapis[2][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][20]" placeholder="0.00"   VALUE="<?= $lcapis[2][20]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Abril</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][16]" placeholder="0.00"   VALUE="<?= $lcapis[3][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][17]" placeholder="0.00"   VALUE="<?= $lcapis[3][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][18]" placeholder="0.00"   VALUE="<?= $lcapis[3][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][19]" placeholder="0.00"   VALUE="<?= $lcapis[3][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][20]" placeholder="0.00"   VALUE="<?= $lcapis[3][20]; ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Mayo</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][16]" placeholder="0.00"   VALUE="<?= $lcapis[4][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][17]" placeholder="0.00"   VALUE="<?= $lcapis[4][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][18]" placeholder="0.00"   VALUE="<?= $lcapis[4][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][19]" placeholder="0.00"   VALUE="<?= $lcapis[4][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][20]" placeholder="0.00"   VALUE="<?= $lcapis[4][20]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Junio</label>


                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][16]" placeholder="0.00"   VALUE="<?= $lcapis[5][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][17]" placeholder="0.00"   VALUE="<?= $lcapis[5][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][18]" placeholder="0.00"   VALUE="<?= $lcapis[5][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][19]" placeholder="0.00"   VALUE="<?= $lcapis[5][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][20]" placeholder="0.00"   VALUE="<?= $lcapis[5][20]; ?>">
                        </div>
                    </div>
                    
                    

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Julio</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][16]" placeholder="0.00"   VALUE="<?= $lcapis[6][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][17]" placeholder="0.00"   VALUE="<?= $lcapis[6][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][18]" placeholder="0.00"   VALUE="<?= $lcapis[6][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][19]" placeholder="0.00"   VALUE="<?= $lcapis[6][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][20]" placeholder="0.00"   VALUE="<?= $lcapis[6][20]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Agosto</label>
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][16]" placeholder="0.00"   VALUE="<?= $lcapis[7][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][17]" placeholder="0.00"   VALUE="<?= $lcapis[7][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][18]" placeholder="0.00"   VALUE="<?= $lcapis[7][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][19]" placeholder="0.00"   VALUE="<?= $lcapis[7][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][20]" placeholder="0.00"   VALUE="<?= $lcapis[7][20]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Septiembre</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][16]" placeholder="0.00"   VALUE="<?= $lcapis[8][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][17]" placeholder="0.00"   VALUE="<?= $lcapis[8][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][18]" placeholder="0.00"   VALUE="<?= $lcapis[8][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][19]" placeholder="0.00"   VALUE="<?= $lcapis[8][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][20]" placeholder="0.00"   VALUE="<?= $lcapis[8][20]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Octubre</label>

                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][16]" placeholder="0.00"   VALUE="<?= $lcapis[9][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][17]" placeholder="0.00"   VALUE="<?= $lcapis[9][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][18]" placeholder="0.00"   VALUE="<?= $lcapis[9][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][19]" placeholder="0.00"   VALUE="<?= $lcapis[9][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][20]" placeholder="0.00"   VALUE="<?= $lcapis[9][20]; ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Noviembre</label>

                        </div>                                       
                        <div class="col-sm-2">                                    
                            <input type="text" class="form-control text-end" name="capis[10][16]" placeholder="0.00"   VALUE="<?= $lcapis[10][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][17]" placeholder="0.00"   VALUE="<?= $lcapis[10][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][18]" placeholder="0.00"   VALUE="<?= $lcapis[10][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][19]" placeholder="0.00"   VALUE="<?= $lcapis[10][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][20]" placeholder="0.00"   VALUE="<?= $lcapis[10][20]; ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Diciembre</label>
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][16]" placeholder="0.00"   VALUE="<?= $lcapis[11][16]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][17]" placeholder="0.00"   VALUE="<?= $lcapis[11][17]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][18]" placeholder="0.00"   VALUE="<?= $lcapis[11][18]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][19]" placeholder="0.00"   VALUE="<?= $lcapis[11][19]; ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][20]" placeholder="0.00"   VALUE="<?= $lcapis[11][20]; ?>">
                        </div>
                    </div>
                                              