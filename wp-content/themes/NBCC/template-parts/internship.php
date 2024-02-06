<?php
/*
 * Template Name: Intership
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




<section class="contact_us_form_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-form-box m-0">
                    <h4>We are hireing Interns for Various Domain if you'r interested fill the form.</h4>
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Intership"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
