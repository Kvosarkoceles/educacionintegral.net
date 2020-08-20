	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo base_url(); ?>assets/images/news_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Noticias</h1>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Column -->
				<div class="col-lg-8">
					<div class="news_posts">
						<?php if (!empty($noticias)) : ?>
							<?php foreach ($noticias as $noticia) : ?>
								<!-- Noticia -->
								<div class="news_post">
									<div class="news_post_image">
										<img src="<?php echo base_url(); ?><?php echo $noticia->imagen; ?>" alt="<?php echo $noticia->titulo; ?>">
									</div>
									<div class="news_post_top d-flex flex-column flex-sm-row">
										<div class="news_post_date_container">
											<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
												<div>
													<?php
													$rest = substr($noticia->fecha, -2, 2);
													echo $rest
													?>
												</div>
												<div>
													<?php
													$rest = substr($noticia->fecha, -5, 2);
													settype($rest, 'int');
													switch ($rest) {
														case 1:
															echo "ENE";
															break;
														case 2:
															echo "FEB";
															break;
														case 3:
															echo "MAR";
															break;
														case 4:
															echo "ABR";
															break;
														case 5:
															echo "MAY";
															break;
														case 6:
															echo "JUN";
															break;
														case 7:
															echo "JUL";
															break;
														case 8:
															echo "AGO";
															break;
														case 9:
															echo "SEP";
															break;
														case 10:
															echo "OCT";
															break;
														case 11:
															echo "NOV";
															break;
														case 12:
															echo "DIC";
															break;
													}
													?>
												</div>
											</div>
										</div>
										<div class="news_post_title_container">
											<div class="news_post_title">
												<a href="<?php echo base_url(); ?>noticia/<?php echo $noticia->id; ?>"><?php echo $noticia->titulo; ?></a>
											</div>
											<div class="news_post_meta">
												<span class="news_post_author"><a href="#"><?php echo $noticia->autor; ?></a></span>

											</div>
										</div>
									</div>
									<div class="news_post_text">
										<p><?php echo $noticia->descripcion; ?></p>
									</div>
									<div class="news_post_button text-center trans_200">
										<a href="<?php echo base_url(); ?>noticia/<?php echo $noticia->id; ?>">Read More</a>
									</div>
								</div>

							<?php endforeach; ?>
						<?php endif; ?>

					</div>

					<!-- Page Nav -->

					<div class="news_page_nav">
						<ul>
							<li class="active text-center trans_200"><a href="#">01</a></li>
							<li class="text-center trans_200"><a href="#">02</a></li>
							<li class="text-center trans_200"><a href="#">03</a></li>
						</ul>
					</div>

				</div>

				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Eventos -->
					<!-- 	<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Archives</h3>
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="#">Design Courses</a></li>
								<li class="sidebar_list_item"><a href="#">All you need to know</a></li>
								<li class="sidebar_list_item"><a href="#">Uncategorized</a></li>
								<li class="sidebar_list_item"><a href="#">About Our Departments</a></li>
								<li class="sidebar_list_item"><a href="#">Choose the right course</a></li>
							</ul>
						</div> -->

						<!-- Ultimas Noticias -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Ultimas noticias</h3>
							</div>
							<div class="latest_posts">
								<?php if (!empty($utimasNoticias)) : ?>
									<?php foreach ($utimasNoticias as $ultimas) : ?>
										<!-- Latest Post -->
										<div class="latest_post">
											<div class="latest_post_image">
												<img src="<?php echo base_url(); ?><?php echo $ultimas->imagen; ?>" alt="<?php echo $ultimas->titulo; ?>">
											</div>
											<div class="latest_post_title"><a href="<?php echo base_url(); ?>noticia/<?php echo $ultimas->id; ?>"><?php echo $ultimas->titulo; ?></a></div>
											<div class="latest_post_meta">
												<span class="latest_post_author"><a href="#"><?php echo $ultimas->autor; ?></a></span>
											</div>
										</div>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						</div>

						<!-- Tags -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Tags</h3>
							</div>
							<div class="tags d-flex flex-row flex-wrap">
								<?php if (!empty($tags)) : ?>
									<?php foreach ($tags as $tag) : ?>
										<div class="tag"><a href="<?php echo base_url(); ?>noticias/tags/<?php echo $tag->id; ?>"><?php echo $tag->nombre; ?></a></div>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>