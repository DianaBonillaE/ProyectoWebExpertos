<?php include 'header.php';?>
<div class="container md-5" style="margin-top:8%;">
   <br />
   <h1 class="text-center">Sitios Turísticos Rurales</h1>
   <br />
   <br />
   <div class="row">
      <div class="col-sm-9"></div>
      <div class="col-sm-3 ">
         <a href="createSite.php" class="btn btn-primary btn-md text-uppercase">Añadir Nuevo</a>
      </div>
   </div>

   
      <br />
      <table class="table ">
         <tr class="text-center">
            <th>
               Nombre
            </th>
            <th>
               Dirección
            </th>
            <th></th>
           
         </tr>
         <tr>
            <td>
               Las Cruces Estación Biológica
            </td>
            <td>
            San Vito, San Vito De Coto Brus, Puntarenas, Coto Brus
            </td>
            <td>
            <a href="editSite.php" class=" btn-link ">Editar</a>|
            <a href="detailSite.php" class=" btn-link ">Detalles</a>|
            <a style="color:blue;" onclick="deleteSite()" class=" btn-link ">Eliminar</a>
            </td>
         </tr>
      </table>
      <br />
      <div class="row">
         <div class="col-sm-5"></div>
         <div class="col-sm-6 ">
         </div>
      </div>
   </div>
   <br />
   <br />
</div>
<script src="../js/sweetalert.js">
</script>
<style>

#mainNav{
   background-color: #00cc00;
}
</style>
<?php include 'footer.php';?>