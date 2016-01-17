<?php include 'header.php';?>
<?php include 'menu.php';?>
<div class="container ">
	<div class="row">
		<div id="portada_img" class="col-md-3 col-md-offset-1 inline">
			<a href="#lightbox" data-toggle="modal"><img src="http://lorempixel.com/250/400/" alt=""></a>

		</div>
		<div id="portada_resumen" class="col-md-7 inline text-center full-height">
			<h1><b>Regina Casanova Pérez</b></h1>
			<h3>FrontEnd Developer, User Experience Assistant, Bioinformático Junior</h3>
			<hr id="separador">
			<p class="text-justify">Bachiller en Ingeniería Informática con experiencia en docencia, Bioinformática, Desarrollo web especializada en Desarrollo FrontEnd y Experiencia del Usuario. Con muchos deseos de superación y altas ambiciones para el futuro. Auto-didacta, amante de la música y series de TV, Fotógrafo amateur y amante de la tecnología.</p>
		</div>
	</div>
	<div class="row">
		<div id="portada_bottom" class="col-md-10 col-md-offset-1 inline">
			<div class="row">
				<div id="portada_social" class="pull-left col-md-4">
					<a href="https://github.com/recasanova"><i class="fa fa-github"></i></a>
					<a href="https://www.facebook.com/reggix.casanova"><i class="fa fa-facebook-square"></i></a>
					<a href="https://twitter.com/ReCasanova90"><i class="fa fa-twitter"></i></a>
					<a href="https://pe.linkedin.com/in/regina-casanova-5831a3b1"><i class="fa fa-linkedin"></i></a>
				</div>
				<div id="portada_correo" class="text-right col-md-4">
					<span class="text-center"><i class="fa fa-envelope"></i> regina.casanova.90@gmail.com</span>
				</div>
				
				<div id="portada_download" class="col-md-4 text-right">
					<input id="btn_download" type="button" value="Descargar CV en PDF" onClick="window.open('cv_recasanova.pdf');">
					<br>
					
				</div>
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