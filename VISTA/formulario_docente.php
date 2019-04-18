<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['codigo'])) {
    ?>
    <html>

        <meta charset="utf-8">
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/validaciones.js" type="text/javascript"></script>
        <link href="../css/formulario.css"  type="text/css" rel="stylesheet">
        <?php
        require_once '../VISTA/header_director.php';
        ?>
        <body>
            <?php ?>

            <ul>
                <li>
                    <h2>Registrar Docente</h2>
                </li>
            </ul>
            <br>
            <br>
            <div  align="center" >
                <div class="colorhead "style="height: 40px;width: 100%;border-radius: 10px 10px 0px 0px;">
                </div>


                <div class="contact_form_2">
                    <form method="POST" action="../CONTROLADOR/registrar_docente.php" enctype="multipart/form-data" >
                        <table class="table" style="background-color: #fff">

                            <tr>

                                <td>Apellidos </td>
                                <td><input type="text"  class="form-control" required=""name="txt_apellidos" placeholder="ingrese apellidos del Docente"onkeypress="txNombres()" ></td>
                                <td>Nombres </td>
                                <td><input type="text"  class="form-control" required="" name="txt_nombres" placeholder="ingrese Nombres del Docente"onkeypress="txNombres()" ></td>

                            </tr>
                            <tr>
                                <td>DNI Docente </td>
                                <td><input type="text" class="form-control" name="txt_dni" placeholder="ingrese DNI del Docente" maxlength="8" onkeypress="ValidaSoloNumeros()" required=""></td>

                                <td>Dirección </td>
                                <td><input type="text"  class="form-control" name="txt_direccion" placeholder="ingrese Dirección del Docente"onkeypress="txNombres()" ></td>
                            </tr>
                            <tr>
                                <td>Celular </td>
                                <td><input type="text"  class="form-control"  name="txt_celular" maxlength="9"placeholder="ingrese Celular del Docente"onkeypress="ValidaSoloNumeros()"></td>
                                <!--                            </tr>
                                                            <tr>-->
                                <td>Email </td>
                                <td><input type="email"  class="form-control" name="txt_mail" placeholder="ingrese correo electronico del Docente" ></td>
                            </tr>
                            <tr >
                                <td>Foto </td>
                                <td><input class="btn btn-default"  type="file" name="foto" ></td>
                                <!--                            </tr>
                                
                                                            <tr>-->
                                <td >Fecha Contrato </td>
                                <td><input type="date" class="form-control" required="" name="date_fingreso" ></td>
                            </tr>
                            <tr>
                                <td>Sexo </td>
                                <td>
                                    <input type="radio" name="rbSexo" value="M" checked="checked" />Masculino
                                    <input type="radio" name="rbSexo" value="F" checked="checked" />Femenino
                                </td>
                                <!--                            </tr>
                                                            <tr>-->
                                <td>Tipo </td>
                                <td>
                                    <select name="cboTipo"  required=""class="btn btn-info">
                                        <option>DIRECTOR</option>
                                        <option>PROFESOR</option>
                                     
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <td class="h6">Horas Dictadas </td>
                                <td>
                                    <input type="number" name="txtHras" class="form-control"  onkeypress="ValidaSoloNumeros()"/>

                                </td>
                                <td colspan="2"align="center" float="right"> <button class="submit" type="submit">REGISTRAR</button> </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>  
        </body>
    </html>
    <?php
} else {
    header("Location: ../cerrar_session.php");
}
?>

