<div class="container md-3">
    <br />
    <h1 class="text-center">Actividades</h1>
    <br />
    <br />
    <div class="row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3 ">
            <a href="~/Activities/Create" class="btn btn-primary btn-md text-uppercase">Añadir Nuevo</a>
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
                    Fecha inicio
                </th>
                <th>
                    Fecha Final
                </th>
                <th></th>
            </tr>

            @foreach (var item in Model)
            {
                <tr class="text-center">

                    <td>
                      
                    </td>
                    <td>
                      
                    </td>
                    <td>
                      
                    </td>
                    <td>
                   

                    </td>
                </tr>
            }

        </table>
        <br />
        <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-6 ">
        }
            </div>
        </div>


    </div>
    <br />
    <br />
</div>
<hr />
