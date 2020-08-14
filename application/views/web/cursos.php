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
									<div class="card-title"><a href="courses.html"><?php echo $curso->nombre; ?></a></div>
									<div class="card-text"><?php echo $curso->descripcion; ?></div>
								</div>
								<div class="price_box d-flex flex-row align-items-center">
									<div class="course_author_image">
										<img src="<?php echo base_url(); ?>assets/images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
									</div>
									<div class="course_author_name">Michael Smith, <span>Autor</span></div>
									<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
								</div>
							</div>
						</div>

					<?php endforeach; ?>
				<?php endif; ?>

				

			</div>
		</div>
	</div>