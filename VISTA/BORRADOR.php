<div class="contenedor_principal_p" align="center" >
            <br>
            
            <!--<div class="align_perfil" style="width: 30px;height: 300px;"></div>-->
            <div class="align_perfil" >
                <div style=" border: 1px solid #008000; border-radius: 10px 10px 10px 10px">
                    <table class="table">
                        <tr>
                            <td>DNI:</td>
                            <td><?php echo $dni ?></td>
                        </tr>
                        <tr>
                            <td>Apellidos:</td>
                            <td><?php echo $apellidos ?></td>
                        </tr>
                        <tr >
                            <td>Nombres:</td>
                            <td><?php echo $nombres ?></td>
                        </tr>
                        <tr >
                            <td>fecha nacimiento:</td>
                            <td><?php echo $fechaNacimiento ?></td>
                        </tr>
                        <tr >
                            <td>fecha Ingreso:</td>
                            <td><?php echo $fechaIngreso ?></td>
                        </tr>
                        <tr >
                            <td>Sexo:</td>
                            <td><?php
                                $vSex = "";
                                if ($sexo == 'M') {
                                    $vSex = "MASCULINO";
                                } else {
                                    $vSex = "FEMENINO";
                                } echo $vSex;
                                ?></td>
                        </tr>
                        <td>Apoderado:</td>
                        <td><?php echo $apoderado ?></td>
                        </tr>
                    </table> 
                </div>
                <br><br>
                <div style=" border: 1px solid red; border-radius: 10px 10px 10px 10px;padding: 10px">
                    <form>
                        <table>
                            <tr>
                            <tr>
                                <td>ID usuario:</td>
                                <td><?php echo '<label>' . $usuario . '</label>' ?></td>
                            </tr>
                            <tr class="active">
                                <td>Actual contraseña :</td>
                                <td><?php echo '<input class="form-control" type="password" name="clave_actual"' ?></td>
                            </tr>
                            <tr class="active">
                                <td>Nueva contraseña:</td>
                                <td><?php echo '<input class="form-control" type="password" name="nueva_clave" ' ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><br><button class="btn btn-warning">NUEVA CLAVE</button></td>
                            </tr>
                        </table>
                    </form>                    
                </div>  
                <br>
            </div>
        </div>