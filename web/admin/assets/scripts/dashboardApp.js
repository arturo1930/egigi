//menu
function loadMenu(menu) {
    switch (menu) {
        case "contacto":
            $.ajax({
                url: "contacto.php",
                type: "get"
            }).done(function (html) {
                $("#container").html(html);
            });
            break;
        case "usuarios":
            $.ajax({
                url: "usuarios.php",
                type: "get"
            }).done(function (html) {
                $("#container").html(html);
            });
            break;
        case "blog":
            $.ajax({
                url: "blog.php",
                type: "get"
            }).done(function (html) {
                $("#container").html(html);
            });
            break;
        case "proveedores":
            $.ajax({
                url: "proveedores.php",
                type: "get"
            }).done(function (html) {
                $("#container").html(html);
            });
            break;

        default:

            break;
    }
}

$(document).ready(function () {

    loadMenu('contacto');
});

