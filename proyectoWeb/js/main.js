function search() {
    var type = parseInt(document.getElementById("type").value);
    var services = parseInt(document.getElementById("services").value);
    var stay = document.getElementById("stay").value;
    var transport = document.getElementById("transport").value;

    $.ajax({
        url: '../controllers/searchController.php',
        type: 'GET',
        dataType: 'json',
        data: { type: type, services: services, stay: stay, transport: transport }
    })

        .done(function (response) {
            console.log("Transacción realizada con exito. Respuesta: " + response);
            $('#fail').hide();
         
            swal("La categoria: " + response, "", {
                icon: "success",
            });
            $('#answer').text(response);
            $('#success').show();
        })
        .fail(function () {
            console.log("Transacción fallida.");
            swal("Problemas en la consulta. Intenta nuevamente", "", {
                icon: "warning",
            });
            $('#success').hide();
            $('#answerFail').text("Problemas en la consulta. Intenta nuevamente");
            $('#fail').show();
        });
}