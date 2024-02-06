<?php
/*
 * Template Name: About Us
 * description: Main pAge
 */

get_header();
?>

<div class="image-class"></div>
<section class="inner-header">
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
<section class="pt-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav aria-label="breadcrumb bg-white">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>



    <section class="about-page-section py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
