<?php
/*
 * Template Name: Our Portfolio
 * description: Main pAge
 */

get_header();
$thumb = get_the_post_thumbnail_url(); ?>

<div class="image-class"></div>
<section class="header-inner" style="background: url('<?php echo $thumb; ?>'); background-size:cover;">
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



<?php if (carbon_get_the_post_meta('enable_portfolio') == 'yes') { ?>
<section class="portfolio ">
        <div class="container ">
            <div class="row ">
                <?php
                    $x = 1;
                    $portfolios = carbon_get_the_post_meta('portfolio_content_main');
                    foreach ($portfolios as $portfolio) {
                        
                ?>
                <div class="col-lg-4 mb-4 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-duration="400">
                    <div class="portfolio-box">
                        <img src="<?php echo $portfolio['portfolio_thumb_main'];?>" alt="<?php echo $portfolio['portfolio_alt_main'];?>" class="img-fluid">
                        <h4><?php echo $portfolio['portfolio_name_main'];?></h4>
                        <span><?php echo $portfolio['portfolio_description_main'];?></span>
                    </div>
                </div>

                <?php } ?>


                
            </div>

        </div>
    </section>
<?php } else { }?>
<?php
get_footer();
