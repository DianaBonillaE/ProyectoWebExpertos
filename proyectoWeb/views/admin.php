<?php include 'headerAdmin.php';?>
<div class="container" style=" margin-top:8%;">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100 " >
            <div class="card-body text-center"  >
             <img src="../img/tiposTurismo.jpg"  width="200" height="225">
              <hr class="my-4">
              
              <h4>Tipos de Turismo</h4>
              <br>
              <a href="indexTypeTurism.php" class="btn btn-primary js-scroll-trigger" style="background-color:gray;">Ver más</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100" style="width:350px;">
            <div class="card-body text-center">
              <img src="../img/sitiosTuristicos.jpg"  width="200" height="225">
              <hr class="my-4">
              <h4>Sitio Turístico</h4>
              <br>
              <a href="listSite.php" class="btn btn-primary js-scroll-trigger" style="background-color:gray;">Ver más</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100" style="width:350px;">
            <div class="card-body text-center">
            <img src="../img/servicios.jpg"  width="200" height="225">
              <hr class="my-4">
              <h4>Servicios</h4>
              <br>
              <a href="indexService.php" class="btn btn-primary js-scroll-trigger" style="background-color:gray;">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
    </div>

    <style>   
    
    #mainNav {
        background-color: #8EC100;
    }

    #mainNav.navbar-shrink {
      background-color:##8EC100;
      
    }
    #mainNav.navbar-shrink .navbar-brand {
        color: white;
    }
    #mainNav.navbar-shrink .nav-link {
        color: white;
    }</style>
<?php include 'footer.php';?>