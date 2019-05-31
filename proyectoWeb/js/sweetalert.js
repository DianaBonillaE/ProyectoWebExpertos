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