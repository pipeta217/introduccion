$("#boton").click(ricardo);
function ricardo() {
var mensaje = "";
let  numero1 = Number ($("#num1").val());
let  numero2 = Number ($("#num2").val());
while (numero1 <= numero2) {
 numero1 ++;
 mensaje+=numero1+"<br>";
}

$("#mensaje").html(mensaje);






}
