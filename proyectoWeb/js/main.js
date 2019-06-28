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
         
            swal("El sitio recomendado: " + response, "", {
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

function create() {
    var name = document.getElementById("name").value;
    var link = document.getElementById("address").value;
    var description = document.getElementById("description").value;
    var address = document.getElementById("address").value;

    
    $.ajax({
        url: '../controllers/createController.php',
        type: 'GET',
        dataType: 'json',
        data: { name: name, link: link, description:description, address:address}
    })
    
        .done(function (response) {
            console.log("Transacción realizada con exito. Respuesta: " + response);
            $('#fail').hide();

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

function delet() {
  var ID = parseInt($("#ID").text());

    $.ajax({
        url: '../controllers/deleteController.php',
        type: 'GET',
        dataType: 'json',
        data: { ID:ID}
    })
    
        .done(function (response) {
            console.log("Transacción realizada con exito. Respuesta: " + response);
            $('#fail').hide();
            swal("Se elimino el Sitio con el " +ID, "", {
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