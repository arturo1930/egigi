$(document).ready(function () {

    $("#btnLogin").click(function (event) {
        params = {
            op: "login",
            principal: $("#email").val(),
            credencial: $("#password").val()
        };
        $.ajax({
            url: "../admin/app/login/Login.php",
            type: "post",
            data: params,
            dataType: 'json'
        }).done(function (data) {
            console.log(data);

            if (data.response == 'ok') {
                location.href = 'dashboard.php';
            } else {
                $("#email, #password").val("");
            }
        });
    });
});