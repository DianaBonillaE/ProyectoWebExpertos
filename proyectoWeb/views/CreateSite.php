<?php include 'headerAdmin.php';?>
   <div class="container md-3" style="margin-top:8%;">
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
         </div>
         <div class="row">
            <div class="col-md-2"></div>
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
   <style>

#mainNav{
   background-color: #8EC100;
}
</style>
<?php include 'footer.php';?>
