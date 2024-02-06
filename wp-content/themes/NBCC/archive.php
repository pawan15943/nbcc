<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>




<?php
get_header();
//gt_set_post_view();
?>

<!-- BreadCrumb -->
<section class="pt-3 bg-light">
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
<div class="bg-light blog-content pb-5">
	<div class="container">
		<div class="row">

			<!-- Blog Main Content -->
			<div class="col-lg-9 justify-content-center">

				<div class="post-box mb-4">
					<div class="row g-4">
						<?php wp_reset_query();

						if (have_posts()) :
							while (have_posts()) : the_post(); ?>
								<?php
								$thumbnail_id = get_post_thumbnail_id($post->ID);
								$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
								$title = get_the_title($thumbnail_id);
								?>
								<div class="col-lg-6" data-aos="fade-up" data-aos-duration="<?php echo $y = $x * 300 ?>">
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
											<ul class="blog-home">
												<li><i class="fa fa-user-circle" aria-hidden="true"></i> ALLEN Overseas</li>
												<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_date(); ?></li>
												<li><i class="fa fa-eye" aria-hidden="true"></i> <?php echo gt_get_post_view(); ?></li>
											</ul>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
					</div>
				</div>


				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="pagination">
							<?php
							$big = 999999999;
							$current_page = max(1, get_query_var('paged'));
							echo paginate_links(array(
								'base' => str_replace($big, '%#%', get_pagenum_link($big)),
								'format' => '?paged=%#%',
								'current' => $current_page,
								'total' => $wp_query->max_num_pages,
								'prev_text' => '&laquo;',
								'next_text' => '&raquo;'
							));
							?>
						</div>
					</div>
				</div>
			<?php else : ?>

				<div class="col-md-12">
					<div class="single-post p-5">No result found with <?php echo $_GET['s'] ?></div>
				</div>
			<?php
						endif;

						wp_reset_query();
			?>
			</div>
			<!-- Main content end -->


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

<?php get_footer(); ?>