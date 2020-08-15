	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo base_url(); ?>assets/images/cursos/background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Cursos</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">

			<div class="row course_boxes">

				<?php if (!empty($cursos)) : ?>
					<?php foreach ($cursos as $curso) : ?>

						<!-- Popular Course Item -->
						<div class="col-lg-4 course_box">
							<div class="card">
								<img class="card-img-top" src="<?php echo base_url(); ?><?php echo $curso->imagen; ?>" alt="https://unsplash.com/@kellybrito">
								<div class="card-body text-center">
									<div class="card-title"><a href="<?php echo base_url(); ?>curso/<?php echo $curso->id; ?>"><?php echo $curso->nombre; ?></a></div>
									<div class="card-text"><?php echo $curso->subtitulo; ?></div>
								</div>
								<div class="price_box d-flex flex-row align-items-center">
									<div class="course_author_image">
										<img src="<?php echo base_url(); ?><?php echo $curso->profesorImagen; ?>" alt="profesor" width="46" height="46">
									</div>
									<div class="course_author_name"><?php echo $curso->profesor; ?> <?php echo $curso->profesorApellido; ?>, <span><?php echo $curso->profesorCarrera; ?></span></div>

								</div>
							</div>
						</div>

					<?php endforeach; ?>
				<?php endif; ?>



			</div>
		</div>
	</div>