<?php
get_header();
gt_set_post_view();
?>

<!-- BreadCrumb -->
<section class="pt-3 bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 ">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<?php
						$parent_id = get_the_ID();
						//echo $parent_id;
						while (wp_get_post_parent_id($parent_id)) {
							$parent_id = wp_get_post_parent_id($parent_id);
						}
						$getCountryName = strtolower(get_the_title($parent_id));
						if (get_post_type() == 'post') {
							$getCountryName = 'blog';
						}
						?>
						<li class="breadcrumb-item"><a href="<?php
																if ((
																	$getCountryName == 'bahrain' ||
																	$getCountryName == 'kuwait' ||
																	$getCountryName == 'blog' ||
																	$getCountryName == 'oman' ||
																	$getCountryName == 'qatar' ||
																	$getCountryName == 'saudi-arabia' ||
																	$getCountryName == 'uae') && $getCountryName !== "") {
																	echo home_url() . "/" . $getCountryName . "/";
																} else {
																	echo home_url();
																}
																?>">Home</a></li>
						<?php if (get_post_type() == 'post') : ?>
							<li class="breadcrumb-item"><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
						<?php endif; ?> <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- Main Content -->
<div class="bg-light post-info-details pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<!-- Blog Main Content -->
			<div class="col-lg-9">
				<div class="post-box shadow-0">
					<?php $tags = get_the_category($post->ID); ?>
					<ul class="category">
						<?php foreach ($tags as $tag) { ?>
							<li><a class="tag-green-btn" href="<?php echo get_category_link($tag->term_id); ?> " rel="tag"><?php echo $tag->cat_name; ?></a></li>
						<?php } ?>
					</ul>
					<h2 class="mt-3"><?php the_title(); ?></h2>
					<ul class="secondary-part-blog">
						<li><i class="fa fa-user-circle"></i> <?php echo get_the_author_meta('display_name', $post->post_author); ?></li>
						<li><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></li>
						<li><i class="fa fa-eye"></i> Views <?php echo gt_get_post_view(); ?></li>
					</ul>
					<?php
					$thumbnail_id = get_post_thumbnail_id($post->ID);
					$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
					$title = get_the_title($thumbnail_id);
					?>

					<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="img-fluid mt-3 rounded">

					<div class="description mt-3">
						<?php the_content(); ?>
					</div>

					<div class="tags">
						<?php $tags = wp_get_post_tags($post->ID); ?>
						<h3 class="mb-3">Populer Tags</h3>
						<ul class="category-keyword">
							<?php foreach ($tags as $tag) { ?>
								<li>
									<a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
								</li>
							<?php } ?>

						</ul>

					</div>
					<div class="mt-5">
						<?php if (is_single()) : ?>

							<?php comments_template(); ?>

						<?php endif; // close to check single.php 
						?>
					</div>
				</div>
			</div>
			<!-- Main content end -->
			<!-- Sidebar -->
			<div class="col-lg-3">
				<?php echo get_search_form(); ?>
				<!-- Populer Tags -->
				<div class="populertags-box my-4 side-box d-none">
					<h4 class="mb-3">Populer Tags</h4>
					<ul class="class-blog-tags">
						<?php
						$args = array(
							'orderby' => 'name',
							'parent' => 0
						);
						$tags = get_tags($args);
						foreach ($tags as $tag) { ?>
							<li><a href="<?php echo get_tag_link($tag); ?>"> <?php echo  $tag->name ?></a></li>
						<?php

						}
						?>
					</ul>
				</div>


				<!-- Sticky Top -->
				<div class="side-box mt-4 popular_post_sticky mb-4">
					<!-- Populer Posts -->
					<h4 class="mb-3">Populer Posts</h4>
					<ul class="populer-blog-posts">
						<?php
						$x = 0;
						$recent_posts = wp_get_recent_posts(array(
							'numberposts' => 4, // Number of recent posts thumbnails to display
							'post_status' => 'publish' // Show only the published posts
						));
						foreach ($recent_posts as $post_item) : ?>
							<li data-aos="fade-up" data-aos-duration="<?php echo $y = $x * 300 ?>">
								<a href="<?php echo get_permalink($post_item['ID']) ?>">
									<div class="d-flex">
										<div class="image-blog">
											<?php echo get_the_post_thumbnail($post_item['ID'], '', array('class' => 'post_thumb d-inline img-fluid')); ?>
										</div>
										<div class="sidebar-blog-content">
											<h6><?php echo $post_item['post_title'] ?></h6>
											<ul class="blog-home">
												<?php
												$current_post_id = get_the_ID();
												// Get the publish date of the current post
												$publish_date = get_the_date('F j, Y', $current_post_id);
												?>
												<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $publish_date; ?></li>
											</ul>

										</div>
									</div>
								</a>
							</li>
						<?php
							$x++;
						endforeach;
						wp_reset_postdata(); ?>
					</ul>
					<!-- Subscribe and Newsletter  -->
					<?php echo do_shortcode('[contact-form-7 id="0a5f53e" title="Subscribe and Newsletter"]'); ?>
				</div>
			</div>


		</div>

	</div>
</div>

<?php

get_footer();
?>