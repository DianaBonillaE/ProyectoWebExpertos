  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
          <br>
          <br>
        <h1 class="mx-auto my-0 text-uppercase"><Table><Table>Turismo rural comunitario</Table></Table></h1>
        <br>
        <br>
        <a href="#projects" class="btn btn-primary js-scroll-trigger">Buscar</a>
      </div>
    </div>
  </header>

<!-- Search Section -->
<section id="projects" class="projects-section bg-light">
   <div class="row">
      <div class="col-md-5">
         <div class="container md-5">
            <div class="panel panel-default">
               <br>
               <div class="panel-heading ">
                  <h4 class="text-center">Criterios de búsqueda</h4>
               </div>
               <hr>
               <div class="panel-body">
                  <br>
                  <h4>Tipo de turismo comunal</h4>
                  <br>
                  <form class="check">
                  <select name="type" id="type" class="form-control">
                        <option value="1">Ecoturismo</option>
                        <option value="2">Aventura</option>
                        <option value="3">Cultural</option>
                        <option value="4">Etnoturismo</option>
                        <option value="5">Agroturismo</option>
                        <option value="6">Educativo</option>
                        <option value="7">Salud</option>
                        <option value="8">Meditacion</option>
                        <option value="9">Científico</option>
                    </select>
                  </form>
                  <br>
                  <h4>Servicios</h4>
                  <br>
                  <form class="check">
                  <select name="services" id="services" class="form-control">
                        <option value="1">Observación de la naturaleza</option>
                        <option value="2">Cabalgatas</option>
                        <option value="3">Artesanías</option>
                        <option value="4">Visitas a Fincas</option>
                        <option value="5">Actividades de campo</option>
                        <option value="6">Medicina natural</option>
                        <option value="7">Comunidad indigena</option>
                        <option value="8">Idiomas</option>
                        <option value="9">Baños termales</option>
                        <option value="10">Caminatas</option>
                        <option value="11">Cannopy y otros</option>
                    </select>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-7">
         <div class="container">
            <div class="panel panel-default">
               <div class="panel-body">
                  <div class="row">
                     <div class="col-md-5">
                        <br>
                        <h4>Estadía</h4>
                        <select name="stay" id="stay" class="form-control">
                           <option value="EC">Estadía Corta</option>
                           <option value="EL">Estadía Larga</option>
                        </select>
                     </div>
                     <div class="col-md-5">
                        <br>
                        <h4>Acceso</h4>
                        <select name="transport" id="transport" class="form-control">
                           <option value="A">Automovíl</option>
                           <option value="B">Autobus</option>
                           <option value="C">Caminata</option>
                        </select>
                     </div>
                     <div class="col-md-2">
                     <div class="form-group">
                       <br>
                       <br>
            <button id="btn3"  type="button" class="btn btn-primary btn-md text-uppercase" onclick="search()">Buscar</button>
           
         </div>
                     </div>
                  </div>
                  <br>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
