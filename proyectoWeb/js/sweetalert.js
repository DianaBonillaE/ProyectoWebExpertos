function deleteSite() {
  swal({
    title: "Está seguro de eliminar el sitio",
    text: "Las Cruces Estación Biológica",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
    .then((willDelete) => {
      if (willDelete) {
        swal("El sitio fue eliminado correctamente", {
          icon: "success",
        });
      } else {

      }
    });
}

function login() {
  var user = document.getElementById("user").value;
  var password = document.getElementById("password").value;

  if (user == "admin" && password == "admin") {
    location.href = "index.php";
  } else {
    swal({
      title: "Datos incorrectos",
      text: "Inténtelo de nuevo",
      icon: "warning",
      dangerMode: true,
    });
  }




}