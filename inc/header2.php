<link href="./css/dheader.css" type="text/css"  rel="stylesheet">
<!--<link href="./css/bootstrap.css" type="text/css"  rel="stylesheet">-->
<div style="background-color: #fff; width: 100%;padding: 0%;margin: 0% ;">
    <div style=" width: 100%;height: 380px; padding: 0%;margin: 0%">
        <div  id="slider"style="display: inline-block;vertical-align: top">
            <div><img class="imgp"src="img/img1.jpg"></div>
            <div><img class="imgp"src="img/img2.jpg"></div>
            <div><img class="imgp"src="img/img3.jpg"></div>
            <div><img class="imgp"src="img/img4.jpg"></div>
            <div><img class="imgp"src="img/img5.jpg"></div>          
        </div>
    </div> 
</div>  
<div style="background-color: #e6e6e6;width:100% ">
    <center>
        <div style="display: inline-block;vertical-align: top;width: 100%">

            <a href="./pag/login.php"> <button class="btnDisen" type="button">
                    <img src="./img/01.png"> <span class="badge"><br><h1 class="texth1">Intranet</h1></span>
            </button></a>
            <a> <button class="btnDisen" type="button">
                    <img src="./img/02.png"> <span class="badge"><br><h1 class="texth1">R.Humanos</h1></span>
            </button></a>
            
            <a> <button class="btnDisen" type="button">
                    <img src="./img/03.png"> <span class="badge"><br><h1 class="texth1">Evaluación</h1></span>
            </button></a>
           
            <a> <button class="btnDisen color" type="button">
                    <img src="./img/p.png"> <span class="badge"><br><h1 class="texth1">Politica</h1></span>
            </button></a>
            <a> <button class="btnDisen color" type="button">
                    <img src="./img/pr.png"> <span class="badge"><br><h1 class="texth1">Proyectos</h1></span>
            </button></a>
           
           
            
            
            
           


        </div>
    </center>


</div>
<!--</div>-->


<script type="text/javascript">
    $(function () {
        $('#slider div:gt(0)').hide();
        setInterval(function () {
            $('#slider div:first-child').fadeOut(1000)
                    .next('div').fadeIn(1000)
                    .end().appendTo('#slider');
        }, 4000);
    });
</script>