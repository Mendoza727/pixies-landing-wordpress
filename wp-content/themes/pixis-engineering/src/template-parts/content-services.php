<section id="services">
	<div class="service-area style-two">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h5  class="section-sub-title">Nuestros servicios</h5>
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<?php for ($i = 1; $i <= 4; $i++):
					$title = get_theme_mod("pixis_service_{$i}_title");
					$desc  = get_theme_mod("pixis_service_{$i}_desc");
					$icon  = get_theme_mod("pixis_service_{$i}_icon");

					if ($title || $desc || $icon):
				?>
						<div class="col-lg-5 col-xl-5 col-md-6 col-sm-12 mb-5">
							<div class="single-service-box">
								<div class="service-box-inner">
									<div class="service-content">
										<h4 class="service-title"><?= esc_html($title); ?></h4>
										<p class="service-des"><?= esc_html($desc); ?></p>
									</div>
									<div class="service-icon">
										<?php if ($icon): ?>
											<img src="<?= esc_url($icon); ?>" alt="icon-home" loading="lazy">
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
				<?php endif;
				endfor; ?>
			</div>
		</div>
	</div>
</section>