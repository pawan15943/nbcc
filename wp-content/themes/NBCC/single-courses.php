<?php
/*
Template Name: Course Page
Template Post Type: courses
 */
get_header();
?>
<section class="course-header">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9">
				<ul>
					<li><a href="#courseDescription">Course Description</a></li>
					<li><a href="#courseFeatures">Features</a></li>
					<li><a href="#courseSchedule">Schedule</a></li>
					<li><a href="#courseFee">Fee Info</a></li>
					<li><a href="#courseFAQ">FAQ</a></li>
					<li><a href="#courseSupport">Support</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="courseheader">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="text-center m-0 py-5"><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>


<!-- Course Sections -->
<section class="pb-5 course-page">
	<div class="container">

		<div class="row justify-content-center">
			<div class="col-lg-9">

				<?php if (carbon_get_the_post_meta('enable_sec_1') == 'yes') { ?>
					<!-- Course Description -->
					<div class="coursebox" id="courseDescription">
						<div class="courses-navigation mb-4">
							<div class="img-box">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid rounded">
							</div>
							<ul>
								<li><a href="#courseDescription">Course Description</a></li>
								<li><a href="#courseFeatures">Features</a></li>
								<li><a href="#courseSchedule">Schedule</a></li>
								<li><a href="#courseFee">Fee Info</a></li>
								<li><a href="#courseFAQ">FAQ</a></li>
								<li><a href="#courseSupport">Support</a></li>
							</ul>
						</div>
						<h4>Course Description</h4>
						<?php the_content(); ?>
					</div>
				<?php } ?>


				<!-- Course Features -->
				<?php if (carbon_get_the_post_meta('enable_sec_2') == 'yes') { ?>
					<div class="coursebox" id="courseFeatures">
						<h4>Course Features</h4>
						<div class="row g-4">
							<?php
							$course_features = carbon_get_the_post_meta('course_features');
							foreach ($course_features as $course_feature) {
							?>
								<div class="col-lg-6">
									<div class="d-flex">
										<i class="fa-solid fa-circle-check"></i> <?php echo $course_feature['coruse_features_name']; ?>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>

				<!-- Course Schedule -->
				<?php if (carbon_get_the_post_meta('enable_sec_3') == 'yes') { ?>
					<div class="coursebox" id="courseSchedule">
						<h4>Course Schedule & Syllabus</h4>
						<p><?php echo carbon_get_the_post_meta('course_schedule'); ?></p>
						<a href="<?php carbon_get_the_post_meta('course_syllabus'); ?>">Download</a>
						<b>Special Note</b>
						<small><?php echo carbon_get_the_post_meta('course_special_note'); ?></small>
					</div>
				<?php } ?>

				<!-- Course Fee -->
				<?php if (carbon_get_the_post_meta('enable_sec_4') == 'yes') { ?>
					<div class="coursebox" id="courseFee">
						<h4>Course Fees</h4>
						<?php echo carbon_get_the_post_meta('course_fee'); ?>

					</div>
				<?php } ?>

				<!-- Course FAQs -->
				<?php if (carbon_get_theme_option('enable_sec_5') == 'yes') { ?>
					<div class="coursebox" id="courseFAQ">
						<h4>Frequently Asked Questions </h4>
						<div class="accordion accordion-flush" id="accordionFlushExample">
							<?php
							$x = 1;
							$faq = carbon_get_theme_option('course_faq');
							foreach ($faq as $faqs) {
							?>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-<?php echo $x; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
											Qus <?php echo $x; ?> : <?php echo $faqs['questions']; ?>
										</button>
									</h2>
									<div id="flush-<?php echo $x; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											Ans : <?php echo $faqs['answer']; ?>
										</div>
									</div>
								</div>
							<?php $x++;
							} ?>

						</div>
					</div>
				<?php } ?>

				<!-- Get in Touch -->
				<?php if (carbon_get_theme_option('enable_sec_6') == 'yes') { ?>
					<div class="coursebox" id="courseSupport">
						<h4>Get in Touch</h4>
						<?php echo do_shortcode(carbon_get_theme_option('gin_form_shortcode')); ?>
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script>
	$(document).ready(function() {
		// Add the "added-class" when the page is scrolled
		$('.course-header').hide();
		$('.courses-navigation ul').show();

		$(window).scroll(function() {
			if ($(this).scrollTop() > 500) {
				// Change 500 to the scroll position where you want the class to be added
				$('.courses-navigation ul').fadeOut(200); // 200 is the duration of the fadeOut animation in milliseconds
				$('.course-header').fadeIn(200); // 200 is the duration of the fadeIn animation in milliseconds
			} else {
				$('.courses-navigation ul').fadeIn(200);
				$('.course-header').fadeOut(200);
			}
		});
	});

	$(document).ready(function() {
		// Add smooth scroll to anchor links
		$('a[href^="#"]').on('click', function(event) {
			event.preventDefault();

			// Remove active class from all anchor links
			$('a[href^="#"]').removeClass('active');

			// Add active class to the clicked anchor link
			$(this).addClass('active');

			var target = $($(this).attr('href'));

			if (target.length) {
				$('html, body').stop().animate({
					scrollTop: target.offset().top - 155 // Adjust the value to add space from the top
				}, 300); // Adjust the duration of the scroll animation (in milliseconds)
			}
		});
	});
</script>