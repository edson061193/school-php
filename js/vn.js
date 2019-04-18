function compruebacampo(n)

{ 
    n = parseInt(n) 
       
    if ((event.keyCode < 48) || (event.keyCode > 57)) {
        event.returnValue = false;
        alert("solo ingrese Numeros :)");
    }
    else {
//      if(n>=0&&n<=20){
//       
//      }else{
//           alert("Numero no Aceptable");  
//      }
    }
}
