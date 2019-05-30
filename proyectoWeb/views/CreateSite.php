<?php include 'header.php';?>
   <div class="container md-3" style="margin-top:5%;">
      <br />
      <h1 class="text-center">Ingresar un Sitio Turístico Rural</h1>
      <br />
      <br />
      <div class="panel-body">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
               <div class="form-group">
                  <h4>Nombre del sitio</h4>
                  <div class="col-md-10">
                  <textarea class="form-control" rows="3" id="comment" class="form-control"></textarea>
                  </div>
               </div>
            </div>
            <div class="col-md-5">
               <div class="form-group">
                  <h4>Dirección</h4>
                  <div class="col-sm-10">
                     <textarea class="form-control" rows="3" id="comment" class="form-control"></textarea>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
               <div class="form-group">
                  <h4>Descripción</h4>
                  <div class="col-md-10">
                     <textarea class="form-control" rows="3" id="comment" class="form-control"></textarea>
                  </div>
               </div>
            </div>
            <div class="col-md-5">
               <div class="form-group">
                  <h4>Link del video de Youtube</h4>
                  <div class="col-md-10">
                     <textarea class="form-control" rows="3" id="comment" class="form-control"></textarea>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
               <h4>Servicios</h4>
               <div class="col-sm-10">
                  <select multiple="multiple" name="services" id="services" class="form-control">
                     <option value="1">Cable TV</option>
                     <option value="2">Restaurante</option>
                     <option value="3">Tours</option>
                     <option value="4">Piscina</option>
                  </select>
               </div>
            </div>
            <div class="col-md-5">
               <div class="form-group">
                  <h4>Tipos de acceso</h4>
                  <div class="col-sm-10">
                     <select multiple="multiple" name="services" id="services" class="form-control">
                        <option value="1">Automóvil</option>
                        <option value="2">Autobús</option>
                        <option value="3">Caminata</option>
                     </select>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
               <div class="form-group">
                  <h4>Tipos de turismo</h4>
                  <div class="col-sm-10">
                     <select multiple="multiple" name="services" id="services" class="form-control">
                        <option value="1">Ecoturismo</option>
                        <option value="2">Aventura</option>
                        <option value="3">Cultural</option>
                        <option value="3">Etnoturismo</option>
                        <option value="3">Agroturimo</option>
                        <option value="3">Educativo y Activo</option>
                        <option value="3">Salud</option>
                        <option value="3">Meditación</option>
                        <option value="3">Científico</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-md-5">
               <div class="form-group">
                  <div class="col-sm-10">
                     <h4>Imagen de sitio</h4>
                     <input type="file" name="File" id="File" class="form-control"/>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-2">
         <div class="form-group">
            <a href="ListSite.php" class="btn btn-primary btn-md text-uppercase">Cancelar</a>
         </div>
      </div>
      <div class="col-md-2">
         <div class="form-group">
            <a href="ListSite.php" type="submit" class="btn btn-primary btn-md text-uppercase">Guardar</a>
         </div>
      </div>
   </div>
   <!--row buttons-->
      </div>
   </div>
   
<?php include 'footer.php';?>
