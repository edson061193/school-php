
    
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="../css/general_style.css" type="text/css" rel="stylesheet">
<style>
    body{
        background-image: url(../img/Index.jpg);
        width: 100%;
        padding: 0%;
          margin: 0%;
    }
    .fondoC{
          /*padding: 20px;*/
          width: 100%;
          padding: 0%;
          margin: 0%;
    background: -moz-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.47) 89%, rgba(0,0,0,0.47) 93%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(0,0,0,0.65)), color-stop(89%,rgba(0,0,0,0.47)), color-stop(93%,rgba(0,0,0,0.47))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.47) 89%,rgba(0,0,0,0.47) 93%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.47) 89%,rgba(0,0,0,0.47) 93%); /* Opera 11.10+ */
    background: -ms-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.47) 89%,rgba(0,0,0,0.47) 93%); /* IE10+ */
    background: linear-gradient(135deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.47) 89%,rgba(0,0,0,0.47) 93%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#78000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

    }
</style>
<div>

    <div style="padding: 50px;">
        <center>
            <img src="../img/logo.png">
        </center>
    </div>
    <div  class="fondoC">
        <center>
            <div style="width: 40%">
                <form class="form-inline" action="../CONTROLADOR/validacion.php" method="POST">
                    <div class="form-group">
                        <br>
                        <div class="input-group">
                            <div class="input-group-addon"><img src="../img/user.png"></div>
                            <input type="text" class="form-control" id="exampleInputAmount" name="txt_usuario" required="" placeholder="Ingrese Ide usuario">
                        </div>
                        <br><div class="input-group">
                            <div class="input-group-addon"><img src="../img/clave.png"></div>
                            <input type="password" class="form-control" id="exampleInputAmount"  name="txt_clave"  required="" placeholder="Ingrese contraseña">
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success" style="width: 100%"><img src="../img/chaeck.png"></button>
                    <br>
                    <br>
                    <br>
                    <a href="#" style="color: white;  font: oblique 120% sans-serif bold; "> olvide la clave</a>
                </form> 
            </div>

        </center>


    </div>

</div>
    

