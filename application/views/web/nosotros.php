	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo base_url(); ?>assets/images/courses_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Nosotros</h1>
		</div>
	</div>

	<!-- Services -->

	<div class="services page_section">

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>¿Quienes somos?</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?php echo base_url(); ?>assets/images/earth-globe.svg" alt="">
					</div>
					<h3>MISIÓN</h3>
					<p>Brindar a los alumnos una propuesta educativa basada en la formación integral del alumno a distancia, apoyado de profesores certificados en su disciplina; para el cumplimiento de su objetivo educativo.</p>
				</div>
				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?php echo base_url(); ?>assets/images/earth-globe.svg" alt="">
					</div>
					<h3>VISIÓN</h3>
					<p>Formar una comunidad educativa a distancia reconocida por la confianza en su modelo educativo flexible e innovador que promueva el desarrollo de sus potencialidades del alumnado, contando con su diversidad y fomentando el espíritu de superación.</p>
				</div>
				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?php echo base_url(); ?>assets/images/earth-globe.svg" alt="">
					</div>
					<h3>OBJETIVO GENERAL</h3>
					<p>Ampliar las oportunidades y dotar a los alumnos de conocimientos generales a través de la educación, con la finalidad de impulsar valores sociales como:</p>
					<li>Compromiso</li>
					<li>Integridad</li>
					<li>Responsabilidad</li>
					<li>Vocación de Servicio</li>
				</div>

			</div>


		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title text-center">
					<h1>Cursos populares</h1>
				</div>
			</div>
		</div>

		<div class="row course_boxes">

			<?php if (!empty($populares)) : ?>
				<?php foreach ($populares as $curso) : ?>

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


	<!-- Popular -->

	<div class="popular page_section">

	</div>