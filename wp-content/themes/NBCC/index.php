<?php
/*
 * Template Name: Blog
 * description: Website Blog Page
 */

get_header(); ?>
<section class="inner-header" style="background: url('<?php echo $thumb; ?>'); background-size:cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title text-center">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- BreadCrumb -->
<section class="pt-3 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
						<?php if(get_post_type() == 'post'): ?>
						<li class="breadcrumb-item"><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
						<?php endif; ?>
						<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>

<!-- Notice -->
<section class="d-none">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<div class="notiivation">
					<div class="info">
						<h4>New Admission are Open <br>Now to Join Now.</h4>
					</div>
					<div class="link">
						<a href="">Click Here</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Main Content -->
<div class="bg-light blog-content">
	<div class="container">
		<div class="row justify-content-center">
			<!-- Blog Posts -->
			<div class="col-lg-12 pb-4">
				<div class="row g-4">
					<!-- post -->
					<?php
					$x = 0;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 10,
						'paged' => $paged
					);

					$loop = new WP_Query($args);

					while ($loop->have_posts()) : $loop->the_post(); ?>
						<div class="col-lg-4" data-aos="fade-up" data-aos-duration="<?php echo $y = $x * 300 ?>">
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
					<?php
						$x++;
					endwhile;
					?>
				</div>
				<div class="row" data-aos="fade-up" data-aos-duration="1000">
					<div class="col-lg-12 text-center">
						<div class="pagination">
							<?php
							$big = 999999999;
							echo paginate_links(array(
								'base' => str_replace($big, '%#%', get_pagenum_link($big)),
								'format' => '?paged=%#%',
								'current' => max(1, get_query_var('paged')),
								'total' => $loop->max_num_pages,
								'prev_text' => '&laquo;',
								'next_text' => '&raquo;'
							));
							?>
						</div>
					</div>
				</div>
			</div>
			
		</div>

	</div>
</div>

<?php


get_footer();

?>