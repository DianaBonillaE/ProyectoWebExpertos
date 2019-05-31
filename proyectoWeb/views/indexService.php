<?php include 'headerAdmin.php';?>

<div class="container md-3" style="margin-top:6%;">
    <br />
    <h1 class="text-center">Servicios</h1>
    <br />
    <br />
    <div class="row">
        <div class="col-sm-9"></div>
            <div class="col-sm-3 ">
            <a href="createService.php" class="btn btn-primary btn-md text-uppercase">Anadir Nuevo</a>
            </div>
        </div>
        <div class="panel-body">
        <br />
        <table class="table ">
            <tr class="text-center">
                <th>
                Nombre
                </th>
                <th>
                Descripcion
                </th>
		        <th>
                Acciones
                </th>
                <th></th>
            </tr>
            
            <tr class="text-center">
                    <td>
                    Artesanias
                    </td>
                    <td>
                    Venta de Artesanias en Madera
                    </td>
                    <td>
                    
                    <a href="./EditService.php" class="btn-link">Editar</a>
                    
                 
                    </td>
            </tr>
            
        </table>
        <br />
            <div class="row">
                <div class="col-sm-5"></div>
                    <div class="col-sm-6 ">

                    </div>
                </div>
                <div class="col-sm-3 ">
                <a href="./admin.php" class="btn btn-primary btn-md text-uppercase">Regresar</a>
                </div>

            </div>
            <br />
            <br />
        </div>
    </div>
</div>
<hr />

<style>
   #mainNav{
   background-color: #8EC100;
   }
</style>

<?php include 'footer.php';?>