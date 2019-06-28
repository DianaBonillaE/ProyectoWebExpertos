<?php include 'headerAdmin.php';?>
<?php
   $mysqli = new mysqli("163.178.173.144", "multi-paraiso", "multimedios.rp.2017", "TURISMORURALCR");
   $sql = "Select * from Sitio";
   $result = mysqli_query($mysqli,$sql);
?>
<div class="container md-3" style="margin-top:8%;">
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
   <thead>
      <tr class="text-center">
      <th>
            ID
         </th>
         <th>
            Nombre
         </th>
         <th>
            Dirección
         </th>
         <th></th>
      </tr>
</thead>
<tbody>
      <? php    
$fila = array("hola","hola2");
    //  while ($fila) {

      ?>
      <tr>
         <td><? php echo $fila[0] ?></td>
         <td>
            
         </td>
         <td>
            
         </td>
         <td>
          <a style="color:blue;" onclick="delet()" class=" btn-link ">Eliminar</a>
         </td>
      </tr>
      </tbody>
      <? php
//}
      ?>
   </table>
   <div class="col-sm-3 ">
      <a href="./admin.php" class="btn btn-primary btn-md text-uppercase">Regresar</a>
   </div>
   <br />
</div>
  
</div>
<br />

<script src="../js/sweetalert.js"></script>
<style>
   #mainNav{
   background-color: #8EC100;
   }
</style>
<?php include 'footer.php';?>
