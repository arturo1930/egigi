function loadBlogs() {
    var params = {
        op: "blog"
    };
    $.ajax({
        url: "../admin/app/blog/Blog.php",
        type: "post",
        data: params,
        dataType: 'json'
    }).done(function (data) {
        var table = "<table class='table table-hover table-bordered'>";
        table += "<thead><tr>";
        table += "<th>#</th>";
        table += "<th>Usuario</th>";
        table += "<th>Nombre</th>";
        table += "<th>img</th>";
        table += "<th>img alt</th>";
        table += "<th>Fecha</th>";
        table += "<th>Hora</th>";
        table += "<th>Modificar</th>";
        table += "<th>Eliminar</th>";
        table += "</tr></thead><tbody>";

        $.each(data, function (i, v) {
            table += "<tr>";
            table += "<td>" + v.idBlog + "</td>";
            table += "<td>" + v.usuario + "</td>";
            table += "<td>" + v.nombre + "</td>";
            table += "<td>" + v.img + "</td>";
            table += "<td>" + v.imgAlt + "</td>";
            table += "<td>" + v.fecha + "</td>";
            table += "<td>" + v.hora + "</td>";
            table += "<td><button onclick='eliminarContacto(" + v.idContacto + ")' class='btn btn-danger'>Modificar</button></td>";
            table += "<td><button onclick='eliminarContacto(" + v.idContacto + ")' class='btn btn-danger'>Eliminar</button></td>";
            table += "</tr>";
        });

        table += "</tbody></table>";


        $("#blogsContent").html(table);
    });
}

$(document).ready(function () {
    loadBlogs();

    $("#btnSaveBlog").click(function () {
        if ($("#nombre").val().trim() != ''
                || $("#img").val().trim() != ''
                || $("#imgAlt").val().trim() != '') {

            var params = {
                op: "addBlog",
                nombre: $("#nombre").val(),
                img: $("#img").val(),
                imgAlt: $("#imgAlt").val()
            };
            $.ajax({
                url: "../admin/app/blog/Blog.php",
                type: "post",
                data: params,
                dataType: 'json'
            }).done(function (data) {
                if (data.response == 'ok') {
                    alert("Titulo creado correctamente");
                    $("#modalBlog").modal('hide')
                    document.getElementById("frmBlog").reset();
                    loadBlogs();

                } else {
                    alert("Ocurrio un error al realizar el registro");
                }
            });

        } else {
            alert("Por favor ingrese todos los campos");
        }
    });
});