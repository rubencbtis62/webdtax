                
                    
                    <!-- Aqui empieza la captura Old P1 >
                    titulos 
                    <div class="row mb-1 text-center text-bg-success p-2">
                    -->

                    <div class="row mb-1 text-center text-white p-2" style="background-color:#196f3d">
                        <div class="col-sm-1">
                            <label class="col-form-label fs-6"><strong>Mes</strong></label>
                        </div>
                        <div class="col-sm-2 ">
                            <label class="col-form-label fs-6">Ingresos del periodo</label>
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
                            echo '<input type="hidden" name="capis['.$row.'][37]" value="'.$id_em.'">'; //id_em id empresa  
                            echo '<input type="hidden" name="capis['.$row.'][38]" value="'.$anio.'">'; //anio ejerciciio  
                            echo '<input type="hidden" name="capis['.$row.'][39]" value="i">'; //id_tipo captura
                            echo '<input type="hidden" name="capis['.$row.'][41]" value="1">'; //estatus}
                            echo '<input type="hidden" name="capis['.$row.'][42]" value="NULL">'; //estatus}
                            
                        }
                    ?> 


                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Enero</label>
                            <input type="hidden" name="capis[0][0]" value="ene">
                            <input type="hidden" name="capis[0][30]" value="1">
                            <!-- <input type="hidden" name="capis[0][1]" value="<?= $lcapis[0][1]; ?>"> -->
                            <!-- <input type="hidden" name="capis[0][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[0][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][1]"  VALUE="<?= number_format($lcapis[0][1], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][2]" VALUE="<?= number_format($lcapis[0][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][3]" VALUE="<?= number_format($lcapis[0][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][4]" VALUE="<?= number_format($lcapis[0][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[0][5]" VALUE="<?= number_format($lcapis[0][5], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Febrero</label>
                            <input type="hidden" name="capis[1][0]" value="feb">
                            <input type="hidden" name="capis[1][30]" value="2">
                            <!-- <input type="hidden" name="capis[1][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[1][7]" value="<?= $id_em; ?>">                                       -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][1]" VALUE="<?= number_format($lcapis[1][1], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][2]" VALUE="<?= number_format($lcapis[1][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][3]" VALUE="<?= number_format($lcapis[1][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[1][4]" VALUE="<?= number_format($lcapis[1][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end"  name="capis[1][5]" VALUE="<?= number_format($lcapis[1][5], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Marzo</label>
                            <input type="hidden" name="capis[2][0]" value="mar">
                            <input type="hidden" name="capis[2][30]" value="3">
                            <!-- <input type="hidden" name="capis[2][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[2][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][1]" VALUE="<?= number_format($lcapis[2][1], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][2]" VALUE="<?= number_format($lcapis[2][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][3]" VALUE="<?= number_format($lcapis[2][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][4]" VALUE="<?= number_format($lcapis[2][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[2][5]" VALUE="<?= number_format($lcapis[2][5], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Abril</label>
                            <input type="hidden" name="capis[3][0]" value="abr">
                            <input type="hidden" name="capis[3][30]" value="4">
                            <!-- <input type="hidden" name="capis[3][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[3][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][1]" VALUE="<?= number_format($lcapis[3][1], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][2]" VALUE="<?= number_format($lcapis[3][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][3]" VALUE="<?= number_format($lcapis[3][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][4]" VALUE="<?= number_format($lcapis[3][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[3][5]" VALUE="<?= number_format($lcapis[3][5], 2, '.', ','); ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Mayo</label>
                            <input type="hidden" name="capis[4][0]" value="may">
                            <input type="hidden" name="capis[4][30]" value="5">
                            <!-- <input type="hidden" name="capis[4][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[4][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][1]" VALUE="<?= number_format($lcapis[4][1], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][2]" VALUE="<?= number_format($lcapis[4][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][3]" VALUE="<?= number_format($lcapis[4][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][4]" VALUE="<?= number_format($lcapis[4][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[4][5]" VALUE="<?= number_format($lcapis[4][5], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Junio</label>
                            <input type="hidden" name="capis[5][0]" value="jun">
                            <input type="hidden" name="capis[5][30]" value="6">
                            <!-- <input type="hidden" name="capis[5][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[5][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][1]" VALUE="<?= number_format($lcapis[5][1], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][2]" VALUE="<?= number_format($lcapis[5][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][3]" VALUE="<?= number_format($lcapis[5][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][4]" VALUE="<?= number_format($lcapis[5][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[5][5]" VALUE="<?= number_format($lcapis[5][5], 2, '.', ','); ?>">
                        </div>
                    </div>
                    
                    

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Julio</label>
                            <input type="hidden" name="capis[6][0]" value="jul">
                            <input type="hidden" name="capis[6][30]" value="7">
                            <!-- <input type="hidden" name="capis[6][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[6][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][1]" VALUE="<?= number_format($lcapis[6][1], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][2]" VALUE="<?= number_format($lcapis[6][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][3]" VALUE="<?= number_format($lcapis[6][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][4]" VALUE="<?= number_format($lcapis[6][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[6][5]" VALUE="<?= number_format($lcapis[6][5], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Agosto</label>
                            <input type="hidden" name="capis[7][0]" value="ago">
                            <input type="hidden" name="capis[7][30]" value="8">
                            <!-- <input type="hidden" name="capis[7][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[7][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][1]" VALUE="<?= number_format($lcapis[7][1], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][2]" VALUE="<?= number_format($lcapis[7][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][3]" VALUE="<?= number_format($lcapis[7][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][4]" VALUE="<?= number_format($lcapis[7][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[7][5]" VALUE="<?= number_format($lcapis[7][5], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Septiembre</label>
                            <input type="hidden" name="capis[8][0]" value="sep">
                            <input type="hidden" name="capis[8][30]" value="9">
                            <!-- <input type="hidden" name="capis[8][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[8][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][1]" VALUE="<?= number_format($lcapis[8][5], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][2]" VALUE="<?= number_format($lcapis[8][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][3]" VALUE="<?= number_format($lcapis[8][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][4]" VALUE="<?= number_format($lcapis[8][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[8][5]" VALUE="<?= number_format($lcapis[8][5], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Octubre</label>
                            <input type="hidden" name="capis[9][0]" value="oct">
                            <input type="hidden" name="capis[9][30]" value="10">
                            <!-- <input type="hidden" name="capis[9][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[9][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][1]" VALUE="<?= number_format($lcapis[9][1], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][2]" VALUE="<?= number_format($lcapis[9][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][3]" VALUE="<?= number_format($lcapis[9][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][4]" VALUE="<?= number_format($lcapis[9][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[9][5]" VALUE="<?= number_format($lcapis[9][5], 2, '.', ','); ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Noviembre</label>
                            <input type="hidden" name="capis[10][0]" value="nov">
                            <input type="hidden" name="capis[10][30]" value="11">
                            <!-- <input type="hidden" name="capis[10][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[10][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">                                    
                            <input type="text" class="form-control text-end" name="capis[10][1]" VALUE="<?= number_format($lcapis[10][1], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][2]" VALUE="<?= number_format($lcapis[10][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][3]" VALUE="<?= number_format($lcapis[10][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][4]" VALUE="<?= number_format($lcapis[10][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[10][5]" VALUE="<?= number_format($lcapis[10][5], 2, '.', ','); ?>">
                        </div>
                    </div>

                    <div class="row mb-1 text-danger-emphasis">
                        <div class="col-sm-1">
                            <label class="col-form-label">Diciembre</label>
                            <input type="hidden" name="capis[11][0]" value="dic">
                            <input type="hidden" name="capis[11][30]" value="12">
                            <!-- <input type="hidden" name="capis[11][6]" value="<?= $anio; ?>"> -->
                            <!-- <input type="hidden" name="capis[11][7]" value="<?= $id_em; ?>"> -->
                        </div>                                       
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][1]" VALUE="<?= number_format($lcapis[11][1], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][2]" VALUE="<?= number_format($lcapis[11][2], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][3]" VALUE="<?= number_format($lcapis[11][3], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][4]" VALUE="<?= number_format($lcapis[11][4], 2, '.', ','); ?>">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-end" name="capis[11][5]" VALUE="<?= number_format($lcapis[11][5], 2, '.', ','); ?>">
                        </div>
                    </div>
                                              