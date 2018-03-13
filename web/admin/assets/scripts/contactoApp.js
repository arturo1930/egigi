function loadContacto() {
    var params = {
        op: "contacto"
    };
    $.ajax({
        url: "../admin/app/contacto/Contacto.php",
        type: "post",
        data: params,
        dataType: 'json'
    }).done(function (data) {
        var table = "<table class='table table-hover table-bordered'>";
        table += "<thead><tr>";
        table += "<th>#</th>";
        table += "<th>Correo</th>";
        table += "<th>Telefono</th>";
        table += "<th>Mensaje</th>";        
        table += "<th>Eliminar</th>";
        table += "</tr></thead><tbody>";

        $.each(data, function (i, v) {
            table += "<tr>";
            table += "<td>" + v.idContacto + "</td>";
            table += "<td>" + v.correo + "</td>";
            table += "<td>" + v.telefono + "</td>";
            table += "<td>" + v.mensaje + "</td>";                    
            table += "<td><button onclick='eliminarContacto("+v.idContacto+")' class='btn btn-danger'>Eliminar</button></td>";
            table += "</tr>";
        });

        table += "</tbody></table>";
 

        $("#containerApp").html(table);        
    });
}
function eliminarContacto(idContacto){
    var params = {
        op: "eliminarContacto",
        idContacto: idContacto
    };
    $.ajax({
        url: "../admin/app/contacto/Contacto.php",
        type: "post",
        data: params,
        dataType: 'json'
    }).done(function (data) {
        if(data.response == 'ok'){
            alert("Registro eliminado satisfactoriamente");
            loadContacto();
        } else {
            alert("No fue posible eliminar el registro, favor de intentarlo nuevamente");
        }
    });
    
}
$(document).ready(function(){
   loadContacto(); 
});