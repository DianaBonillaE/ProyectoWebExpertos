<?php include 'headerAdmin.php';?>
<div class="container md-3" style="margin-top:6%;">
	<br />
    <h1 class="text-center">Modificar Servicio</h1>
    <br />
	<div class="panel-body">
	 	<div class="row">
        	<div class="col-md-3"></div>
            	<div class="col-md-8">
               		<div class="form-group">
                    <h4>Nombre</h4>
                        <div class="col-md-10">
                        <input type="text" name="name" id="name" />
                        </div>
					<h4>Descripción</h4>
                    	<div class="col-md-10">
                    	</div>
                    	<textarea  class="form-control" name="descripcion" id="descripcion" ></textarea>
						</div>
			
					</div>
				
				</div>
			</div>
		<br>
			<div class="row justify-content-center">
                <div class="col-md-1">
                </div>
                <div class="form-group">
                    <div class="col-md-2">
                    <a href="./indexService.php" class="btn btn-primary btn-md text-uppercase">Cancelar</a>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                    <input type="submit" value=Editar class="btn btn-primary btn-md text-uppercase" />
                    </div>
	
				</div>
			</div>
		</div>
	</div>
</div>
<br />
<style>

#mainNav{
   background-color: #8EC100;
}
</style>
<?php include 'footer.php';?>
