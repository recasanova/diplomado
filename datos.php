<?php include 'header.php';?>
<?php include 'menu.php';?>
<div class="container ">
	<div class="row">
		<div id="portada_img" class="col-md-3 col-md-offset-1 inline">
			<a href="#lightbox" data-toggle="modal"><img src="http://lorempixel.com/250/400/" alt=""></a>

		</div>
		<div id="datos_resumen" class="col-md-7 inline full-height">
			<h1><b>Regina Casanova Pérez</b></h1>
			<hr>
			<div id="data">
				<span>Edad: <b>25</b></span><br>
				<span>Correo: <b>regina.casanova.90@gmail.com</b> </span><br>
				<span>Teléfono: <b>+51 986 601 157</b> </span><br>
				<span>Dirección: <b>Psje Senda Dorada Block 4 Dpto 404 Pueblo Libre</b></span><br>
				<span>Intereses: <b>Ciencia, Genetica, Cine, Musica Electronica, Bioinformatica, Viajes, Leer</b></span><br>
				
			</div>
			<div id="data_map" class="text-center">
				<a id="btnPlaces" href="https://www.google.com/maps/d/edit?mid=zJnl5D_x5DNU.kzxThgLZY3vQ&usp=sharing" target="_blank">Mostrar Lugares Visitados</a>
			</div>
			

			

		</div>
	</div>

		

		
		<!-- BASADO EN EL CODIGO ENCONTRADO EN http://codepen.io/krnlde/pen/pGijB -->
		<div class="modal fade and carousel slide" id="lightbox">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-body">
			          <ol class="carousel-indicators">
			            <li data-target="#lightbox" data-slide-to="0" class="active"></li>
			            <li data-target="#lightbox" data-slide-to="1"></li>
			            <li data-target="#lightbox" data-slide-to="2"></li>
			          </ol>
			          <div class="carousel-inner">
			            <div class="item active">
			              <img src="http://placehold.it/900x600/777/" alt="First slide">
			            </div>
			            <div class="item">
			              <img src="http://placehold.it/900x500/666/" alt="Second slide">
			            </div>
			            <div class="item">
			              <img src="http://placehold.it/900x500/555/" alt="Third slide">
			              <div class="carousel-caption">
			                <p>even with captions...</p>
			              </div>
			            </div>
			          </div>
			          <!-- /.carousel-inner -->
			          <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left"></span>
			          </a>
			          <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right"></span>
			          </a>
			        </div>
			        <!-- /.modal-body -->
			      </div>
			      <!-- /.modal-content -->
			    </div>
    			<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
	</div>

	<div class="modal fade and carousel slide" id="lightbox">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <ol class="carousel-indicators">
            <li data-target="#lightbox" data-slide-to="0" class="active"></li>
            <li data-target="#lightbox" data-slide-to="1"></li>
            <li data-target="#lightbox" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://placehold.it/900x500/777/" alt="First slide">
            </div>
            <div class="item">
              <img src="http://placehold.it/900x500/666/" alt="Second slide">
            </div>
            <div class="item">
              <img src="http://placehold.it/900x500/555/" alt="Third slide">
              <div class="carousel-caption">
                <p>even with captions...</p>
              </div>
            </div>
          </div>
          <!-- /.carousel-inner -->
          <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
        <!-- /.modal-body -->
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
</div>

<?php include 'footer.php';?>