$(document).ready(function(){
   //Funcion que despliega un alert para confirmar el borrado
    $("a#borrar").click(function(){ 
        return (confirm("¿Está seguro que desea borrar este paciente?"));
    });
});
