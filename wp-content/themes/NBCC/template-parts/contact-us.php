<?php
/*
 * Template Name: Contact Us
 * description: Main pAge
 */

get_header();
?>
<style>
    label {
        font-size: .9rem;
    }
</style>

<div class="image-class"></div>
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



<section class="about-page-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 p-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Support.webp" alt="support" class="img-fluid rounded-2">
            </div>
            <div class="col-lg-6">
                <div class="inquiry-form">
                    <div class="heading">
                        <h2 class="mb-4">Get in Touch?</h2>
                        <?php echo do_shortcode('[contact-form-7 id="016c9f1" title="Get in Touch"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 location">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <h2 class="mb-4">Location On Map</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.6493876802438!2d75.83498927488789!3d25.113727235077537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f85c36f29576f%3A0x173a1efae7a53a41!2sNew%20Balaji%20Computer%20Classes%2C%20Kota!5e0!3m2!1sen!2sin!4v1703525230121!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
