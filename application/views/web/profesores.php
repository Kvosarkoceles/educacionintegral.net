	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo base_url(); ?>assets/images/profesores/background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Profesores</h1>
		</div>
	</div>

	<!-- Teachers -->

	<div class="teachers page_section">
		<div class="container">
			<div class="row">

				<?php if (!empty($profesores)) : ?>
					<?php foreach ($profesores as $profesor) : ?>
						<div class="col-lg-4 teacher">
							<div class="card">
								<div class="card_img">
									<div class="card_plus trans_200 text-center"><a href="#"></a></div>
									<img class="card-img-top trans_200" src="<?php echo base_url(); ?><?php echo $profesor->imagen; ?>" alt="<?php echo $profesor->nombre; ?>">
								</div>
								<div class="card-body text-center">
									<div class="card-title"><a href="<?php echo base_url(); ?>profesor/<?php echo $profesor->id; ?>"><?php echo $profesor->nombre; ?> <?php echo $profesor->primerApellido; ?> </a></div>
									<div class="card-text"><?php echo $profesor->carrera; ?></div>
								</div>
							</div>
						</div>

					<?php endforeach; ?>
				<?php endif; ?>



			</div>
		</div>
	</div>