<?php
/*
 * Template Name: Services
 * description: Services Page
 */

get_header();
$thumb = get_the_post_thumbnail_url(); ?>

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

    <!-- Service Content -->
    <section class="service-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sticky-top">
                        <ul class="service-list">
                        <?php
                        $blog_args = array(
                            'post_type' => 'page',
                            'order' => 'asc',
                            'cat' => 3,
                        );

                        $blog_posts = new WP_Query($blog_args);
                        if ($blog_posts->have_posts()) : while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?> <i class="las la-arrow-right"></i></a></li>
                            <?php endwhile;
                            wp_reset_postdata();
                        else : ?>
                            <p>Sorry</p>
                        <?php endif; ?>
                            
                         
                        </ul>
                        <div class="card-main mt-4">
                            <img src="<?php echo carbon_get_theme_option('service_banner'); ?>" alt="<?php echo carbon_get_theme_option('service_banner_alt'); ?>" class="service-box-new img-fluid">
                            <div class="content-main">
                                <h5><?php echo carbon_get_theme_option('banner_text'); ?></h5>
                                <a <?php echo carbon_get_theme_option('banner_link'); ?>><i class="las la-envelope"></i> Email Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <p><?php echo carbon_get_the_post_meta('content1'); ?></p>
                    <p><?php echo carbon_get_the_post_meta('content1'); ?></p>
                    <h2><?php echo carbon_get_the_post_meta('title'); ?></h2>
                    <p><?php echo carbon_get_the_post_meta('decription'); ?></p>
                    <ul class="service-content-list">
                    <?php
                        $services = carbon_get_the_post_meta('services');
                        foreach ($services as $service) {
                    ?>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="icon">
                                    <img src="<?php echo $service['service_icon']; ?>" alt="<?php echo $service['service_icon_alt_text']; ?>" class="icons">
                                </div>
                                <div class="desscription">
                                    <h4><?php echo $service['serviec_title']; ?></h4>
                                    <p><?php echo $service['service_description']; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="box-service">
                        <h2 class="section-2-heading"><?php echo carbon_get_the_post_meta('why_title'); ?></h2>
                        <p><?php echo carbon_get_the_post_meta('why_decription'); ?></p>
                        <div class="row">
                        <?php
                        $why_choose_us = carbon_get_the_post_meta('why_choose_us');
                        foreach ($why_choose_us as $wch) {
                            ?>
                            <div class="col-lg-6">
                                <h4><i class="las la-angle-right"></i> <?php echo $wch['features_title']; ?></h4>
                                <p><?php echo $wch['features_description']; ?></p>
                            </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>