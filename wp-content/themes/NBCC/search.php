<?php
/*
 * Template Name: Blog Search
 * description: Website Blog Page
 */


get_header(); ?>

<!-- BreadCrumb -->
<section class="pt-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 justify-content-center">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>


<!-- Main Content -->
<div class="section">
	<div class="container">
		<div class="row justify-content-center">
			<!-- Blog Posts -->
			<div class="col-lg-9 pb-4">
				<div class="row g-4">
					<!-- post -->
					<?php

					$paged = (get_query_var('page')) ? get_query_var('page') : 1;
					if (is_search()) {
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					}

					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 6,
						'paged' => $paged,
						's' => isset($_GET['s']) ?  esc_attr($_GET['s']) : ""
					);

					$loop = new WP_Query($args);
					if ($loop->have_posts()) :
						while ($loop->have_posts()) : $loop->the_post(); ?>
							<div class="col-lg-6">
								<div class="blog-home-post">
									<?php the_post_thumbnail('wp-post-image', array('class' => 'img-fluid blog-img')); ?>
									<div class="post-home-content">
										<ul class="category-blog-home">

											<?php
											$categories = get_the_category();
											if (!empty($categories)) {
												foreach ($categories as $category) { ?>
													<li><a href="<?php echo get_category_link($category->term_id); ?>" class="tag-green-btn"><?php echo $category->name ?></a></li>
											<?php }
											}
											?>
										</ul>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<ul class="blog-home mb-4">
											<li><i class="fa fa-user-circle" aria-hidden="true"></i> ALLEN Overseas</li>
											<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?></li>
											<li><i class="fa fa-eye" aria-hidden="true"></i> <?php echo gt_get_post_view(); ?></li>
										</ul>
									</div>
								</div>
							</div>
						<?php
						endwhile;
						?>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="pagination">
							<?php
							$big = 999999999; // An arbitrary large number used for the 'base' parameter
							$current_page = max(1, get_query_var('page')); // Get the current page number

							// Adjust current page for search results
							if (is_search()) {
								$current_page = max(1, get_query_var('paged'));
							}

							// Output pagination links
							echo $loop->max_num_pages;

							echo paginate_links(array(
								'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))), // URL structure with %#% as a placeholder for the page number
								'format' => '?paged=%#%', // URL format for each page
								'current' => $current_page, // Current page number
								'total' => $loop->max_num_pages, // Total number of pages
								'prev_text' => '&laquo;', // Text for the previous page link
								'next_text' => '&raquo;' // Text for the next page link
							));
							?>
						</div>
					</div>
				</div>
			<?php else : ?>
				<div class="row">
					<div class="col-md-4">
						<div class="single-post p-5">No result found with <?php echo $_GET['s'] ?></div>
					</div>
				</div>
			<?php endif; ?>
			</div>

			<!-- Sidebar -->
			<div class="col-lg-3">
				<?php echo get_search_form(); ?>
				<div class="socail-links-box">
					<h4 class="mb-3">Social Links</h4>
					<ul>
						<li><a href=""><i class="fab fa-facebook"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>

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