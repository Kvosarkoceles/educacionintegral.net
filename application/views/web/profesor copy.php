



	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo base_url(); ?>assets/images/profesores/background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1><?php echo $profesor->nombre; ?></h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">

		<div class ="rov">
		<?php echo $profesor->imagen; ?>
		</div>
			<div class="row course_boxes">
			
			
            <?php echo $profesor->curriculum; ?>

			</div>
		</div>
	</div>