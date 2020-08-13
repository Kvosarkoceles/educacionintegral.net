	<!-- Home -->

	<!-- <div class="home"> -->

	<!-- Hero Slider -->
	<div class="hero_slider_container">
		<div class="hero_slider owl-carousel">


			<?php if (!empty($sliders)) : ?>
				<?php foreach ($sliders as $slider) : ?>
hola mundo
				<?php endforeach; ?>
			<?php endif; ?>



			<!-- Hero Slide -->
			<div class="hero_slide">
				<div class="hero_slide_background" style="background-image:url(<?php echo base_url(); ?>assets/images/1_background.jpg)"></div>
				<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
					<div class="hero_slide_content text-center">
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Obtén tu <span>Educación</span> hoy mismo!</h1>
					</div>
				</div>
			</div>

			<!-- Hero Slide -->
			<div class="hero_slide">
				<div class="hero_slide_background" style="background-image:url(<?php echo base_url(); ?>assets/images/2_background.jpg)"></div>
				<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
					<div class="hero_slide_content text-center">
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Obtén tu <span>Educación</span> hoy mismo!</h1>
					</div>
				</div>
			</div>

			<!-- Hero Slide -->
			<div class="hero_slide">
				<div class="hero_slide_background" style="background-image:url(<?php echo base_url(); ?>assets/images/3_background.jpg)"></div>
				<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
					<div class="hero_slide_content text-center">
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Obtén tu <span>Educación</span> hoy mismo!</h1>
					</div>
				</div>
			</div>

		</div>

		<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">anterior</span></div>
		<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">siguiente</span></div>
	</div>

	<!-- </div> -->

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="<?php echo base_url(); ?>assets/images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Cursos en línea</h2>
								<a href="courses.html" class="hero_box_link">ver mas</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="<?php echo base_url(); ?>assets/images/books.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Nuestra biblioteca</h2>
								<a href="courses.html" class="hero_box_link">ver mas</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="<?php echo base_url(); ?>assets/images/professor.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Nuestros profesores</h2>
								<a href="teachers.html" class="hero_box_link">ver mas</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Cursos populares</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Una guía completa de diseño</a></div>
							<div class="card-text">Guía PDF, Capa, Objetos inteligentes, etc...</div>
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

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/course_2.jpg" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Guía para principiantes de HTML</a></div>
							<div class="card-text">Guía PDF, Capa, Objetos inteligentes, etc...</div>
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

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/course_3.jpg" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Photoshop avanzado</a></div>
							<div class="card-text">Guía PDF, Capa, Objetos inteligentes, etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="<?php echo base_url(); ?>assets/images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Services -->

	<div class="services page_section">

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Nuestros servicios</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/earth-globe.svg" alt="">
					</div>
					<h3>Cursos en línea</h3>
					<p>Aquí va texto informativo, o datos que se quieran proporcionar, o en su defecto especificaciones, o ventas de este curso, también testimonios personales como características generales de lo que se quiere ofrecer, es texto simple y corto.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/exam.svg" alt="">
					</div>
					<h3>Cursos internos</h3>
					<p>Aquí va texto informativo, o datos que se quieran proporcionar, o en su defecto especificaciones, o ventas de este curso, también testimonios personales como características generales de lo que se quiere ofrecer, es texto simple y corto.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/books.svg" alt="">
					</div>
					<h3>Biblioteca asombrosa</h3>
					<p>Aquí va texto informativo, o datos que se quieran proporcionar, o en su defecto especificaciones, o ventas de este curso, también testimonios personales como características generales de lo que se quiere ofrecer, es texto simple y corto.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/professor.svg" alt="">
					</div>
					<h3>Profesores excepcionales</h3>
					<p>Aquí va texto informativo, o datos que se quieran proporcionar, o en su defecto especificaciones, o ventas de este curso, también testimonios personales como características generales de lo que se quiere ofrecer, es texto simple y corto.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/blackboard.svg" alt="">
					</div>
					<h3>Programas principales</h3>
					<p>Aquí va texto informativo, o datos que se quieran proporcionar, o en su defecto especificaciones, o ventas de este curso, también testimonios personales como características generales de lo que se quiere ofrecer, es texto simple y corto.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/mortarboard.svg" alt="">
					</div>
					<h3>Diploma de graduación</h3>
					<p>Aquí va texto informativo, o datos que se quieran proporcionar, o en su defecto especificaciones, o ventas de este curso, también testimonios personales como características generales de lo que se quiere ofrecer, es texto simple y corto.</p>
				</div>

			</div>
		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Próximos Eventos</h1>
					</div>
				</div>
			</div>

			<div class="event_items">

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">Enero</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Festival estudiantil</a></div>
									<div class="event_location">Parque central</div>
									<p>Aquí va texto informativo, o datos que se quieran proporcionar, o en su defecto especificaciones, o ventas de este curso, también testimonios personales como características generales de lo que se quiere ofrecer, es texto simple y corto.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="<?php echo base_url(); ?>assets/images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">Enero</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Jornada de puertas abiertas en el campus de la Universidad</a></div>
									<div class="event_location">Prque central</div>
									<p>Aquí va texto informativo, o datos que se quieran proporcionar, o en su defecto especificaciones, o ventas de este curso, también testimonios personales como características generales de lo que se quiere ofrecer, es texto simple y corto.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="<?php echo base_url(); ?>assets/images/event_2.jpg" alt="https://unsplash.com/@claybanks1989">
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">Enero</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Ceremonia de graduación de estudiantes</a></div>
									<div class="event_location">Parque central</div>
									<p>Aquí va texto informativo, o datos que se quieran proporcionar, o en su defecto especificaciones, o ventas de este curso, también testimonios personales como características generales de lo que se quiere ofrecer, es texto simple y corto.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="<?php echo base_url(); ?>assets/images/event_3.jpg" alt="https://unsplash.com/@juanmramosjr">
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>

		</div>
	</div>