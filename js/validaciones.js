function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) {
     event.returnValue = false;
     alert("solo ingrese Numeros :)");
 }
else{
     
 }
  
    
}
function txNombres() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122)){
     event.returnValue = false;
        alert("solo ingrese Texto :)");
 }else{
     
 }
  
}
