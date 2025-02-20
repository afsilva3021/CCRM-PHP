$(document).ready(function () {
  $("#loginForm").submit(function (event) {
    event.preventDefault(); // Impede o recarregamento da página

    $.ajax({
      url: "/login", // Envia para o AuthController
      type: "POST",
      data: {
        email: $("#email").val(),
        password: $("#password").val()
      },
      dataType: "json",
      success: function (response) {
        if (response.success) {
          window.location.href = "/dashboard"; // Redireciona se o login for bem-sucedido
        } else {
          $("#message").text(response.message).css("color", "red");
        }
      },
      error: function () {
        $("#message").text("Erro na requisição AJAX.").css("color", "red");
      }
    });
  });
});