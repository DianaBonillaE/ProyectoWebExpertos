<?php include 'header.php';?>
<div class="container md-3">
        <br />
        <h1 class="text-center">Ingresar un Sitio Turístico Rural</h1>
        <br />
        <br />
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-8">
                <form class="form-inline">
                    <div class="form-group">
                         <h4>Nombre</h4>
                        <div class="col-md-10">
                        <input type="text" name="name" id="name" />
                        </div>
                    </div>

                    <div class="form-group">
                    <h4>Dirección</h4>
                        <div class="col-md-10">
                        <input type="text" name="address" id="address" />
                        </div>
                    </div>

                    <div class="form-group">
                    <h4>Descripción</h4>
                        <div class="col-md-10">
                        <input type="text" name="description" id="description" />
                        </div>
                    </div>

                    <div class="form-group">
                    <h4>Link a video de Youtube</h4>
                        <div class="col-md-10">
                        <input type="text" name="link" id="link" />
                        </div>
                    </div>

                    <div class="form-group">
                    <h4>Servicios</h4>
                        <div class="col-md-10">
                        <select name="services" id="services" class="form-control">
                        <option value="1">Cable TV</option>
                        <option value="2">Restaurante</option>
                        <option value="3">Tours</option>
                        <option value="4">Piscina</option>
                    </select>
                        </div>
                    </div>

                    <div class="form-group">
                    <h4>Tipos de acceso</h4>
                        <div class="col-md-10">
                        <select name="services" id="services" class="form-control">
                        <option value="1">Automóvil</option>
                        <option value="2">Autobús</option>
                        <option value="3">Caminata</option>
                    </select>
                        </div>
                    </div>

                    <div class="form-group">
                    <h4>Tipos de acceso</h4>
                        <div class="col-md-10">
                        <select name="services" id="services" class="form-control">
                        <option value="1">Automóvil</option>
                        <option value="2">Autobús</option>
                        <option value="3">Caminata</option>
                    </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10">
                        <h4>Seleccione una foto</h4>
                            <br />
                            <input type="file" name="File" id="File" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                <a href="../index.php" class="btn btn-primary">Cancelar</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2">
                                <a type="submit" href="../index.php" class="btn btn-primary">Guardar</a>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <br />
        </div>
    </div>

    <style>

.md-3 {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
    width: 97%;
    margin-top: 10%;
}

.panel {
    border-radius: 0 !important;
    transition: box-shadow 0.5s;
    width: 55%;
}
  
 .form-group {
    margin-bottom: 25px;
  }

  .input{
    background-color:rgb(46,49,146);
    color: red;
  }

</style>