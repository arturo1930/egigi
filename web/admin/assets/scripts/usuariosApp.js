function loadUsuarios() {
    var params = {
        op: "usuarios"
    };
    $.ajax({
        url: "../admin/app/usuarios/Usuarios.php",
        type: "post",
        data: params,
        dataType: 'json'
    }).done(function (data) {
        console.log(data);
        var table = "<table class='table table-hover table-bordered'>";
        table += "<thead><tr>";      
        table += "<th>Nombre</th>";
        table += "<th>Correo</th>";
        table += "<th>Modificar</th>";        
        table += "<th>Eliminar</th>";
        table += "</tr></thead><tbody>";

        $.each(data, function (i, v) {
            table += "<tr>";
            table += "<td>" + v.nombre + "</td>";
            table += "<td>" + v.correo + "</td>";
            table += "<td><button class='btn btn-link'>Modificar</button></td>";          
            table += "<td><button onclick='eliminarUsuario("+v.idUsuario+")' class='btn btn-danger'>Eliminar</button></td>";
            table += "</tr>";
        });

        table += "</tbody></table>";
 

        $("#containerApp").html(table);        
    });
}
function eliminarUsuario(idUsuario){
    var params = {
        op: "eliminarUsuario",
        idusuario: idUsuario
    };
    $.ajax({
        url: "../admin/app/usuarios/Usuarios.php",
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
   alert("AS");
    loadUsuarios();
   
});