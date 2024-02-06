<?php
/*
 * Template Name: Home
 * description: Main pAge
 */

get_header();
$args = array(
    'post_type' => 'courses',
    'posts_per_page' => -1, // Get all posts
);
$courses = get_posts($args);
$val = get_courses_for_dropdown();
?>

<!-- Head Fold -->
<?php if (carbon_get_the_post_meta('enable_sec_1') == 'yes') { ?>

    <section class="head-fold">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1><?php echo carbon_get_the_post_meta('header_primary_text'); ?></h1>
                    <span><?php echo carbon_get_the_post_meta('header_secondary_text'); ?></span><br>
                    <a href="<?php echo carbon_get_the_post_meta('buttonlink'); ?>" class="join-now">Join Now</a>
                </div>
                <div class="col-lg-6">
                    <div class="head-content">
                        <div class="fold-1">
                            <?php echo carbon_get_the_post_meta('text1'); ?>
                        </div>
                        <div class="fold-2">
                            <?php echo carbon_get_the_post_meta('text2'); ?>
                        </div>
                        <div class="fold-3">
                            <?php echo carbon_get_the_post_meta('text3'); ?>
                        </div>
                        <div class="fold-4">
                            <?php echo carbon_get_the_post_meta('text4'); ?>
                        </div>
                        <img src="<?php echo carbon_get_the_post_meta('header_image'); ?>" alt="<?php echo carbon_get_the_post_meta('header_image_alt_text'); ?>" class="img-fluid p-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- Head Bar -->
<?php if (carbon_get_the_post_meta('enable_sec_2') == 'yes') { ?>
    <section class="head-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="flex-design">
                        <?php
                        $our_goal = carbon_get_the_post_meta('our_goal');
                        foreach ($our_goal as $our_goals) {
                        ?><div class="div align-items-center">
                                <div class="head-icon">
                                    <img src="<?php echo $our_goals['goal_icon']; ?>" alt="<?php echo $our_goals['goal_alt_text']; ?>" class="iconhead">
                                </div>
                                <div class="head-text">
                                    <h4><?php echo $our_goals['goal_message']; ?></h4>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- Our Online Reviews -->
<section class="pt-5 pb-4 border-bottom">
    <div class="container">
        <h2 class="text-center mb-4">Our Online Reviews </h2>
        <div class="row g-4">
            <div class="col-lg-4">
                <img src="http://localhost/nbcc/wp-content/uploads/2024/01/google.webp" alt="Google Reviews" class="img-fluid">
            </div>
            <div class="col-lg-4">
                <img src="http://localhost/nbcc/wp-content/uploads/2024/01/justdial.webp" alt="Google Reviews" class="img-fluid">
            </div>
            <div class="col-lg-4">
                <img src="http://localhost/nbcc/wp-content/uploads/2024/01/bsol.webp" alt="Google Reviews" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- About NBCC-->
<?php if (carbon_get_the_post_meta('enable_sec_3') == 'yes') { ?>
    <section class="about-workshop py-5">
        <div class="container">
            <div class="heading">
                <h2 class="text-center"><?php echo carbon_get_the_post_meta('about_title'); ?></h2>
                <span class="text-center"><?php echo carbon_get_the_post_meta('about_sub_title'); ?></span>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<!-- NBCC Highlighted -->
<?php if (carbon_get_the_post_meta('enable_sec_4') == 'yes') { ?>

    <section class="key-benefits py-5">
        <div class="container">
            <div class="heading">
                <h2><?php echo carbon_get_the_post_meta('key_benefits_title'); ?></h2>
                <span><?php echo carbon_get_the_post_meta('key_benefits_sub_title'); ?></span>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        <?php
                        $key_benefits = carbon_get_the_post_meta('key_benefits');
                        foreach ($key_benefits as $key_benefits) {
                        ?>
                            <li>
                                <div class="d-flex align-items-center g-2">
                                    <div class="icon">
                                        <img src="<?php echo $key_benefits['key_benefit_icon']; ?>" alt="<?php echo $key_benefits['key_benefit_alt']; ?>" class="icons">
                                    </div>
                                    <div class="content"><?php echo $key_benefits['key_benefit_name']; ?></div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<!-- NBCC Benefits -->
<?php if (carbon_get_the_post_meta('enable_sec_5') == 'yes') { ?>

    <section class="key-features py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-4">
                    <img src="<?php echo carbon_get_the_post_meta('key_features_icon'); ?>" alt="<?php echo carbon_get_the_post_meta('key_features_alt'); ?>" class="img-fluid">
                </div>
                <div class="col-lg-8 ps-5">
                    <div class="heading">
                        <h2><?php echo carbon_get_the_post_meta('key_features_title'); ?></h2>
                        <span><?php echo carbon_get_the_post_meta('key_features_sub_title'); ?></span>
                    </div>
                    <div class="row g-4">
                        <?php
                        $key_features = carbon_get_the_post_meta('key_features');
                        foreach ($key_features as $key_featuress) {
                        ?>

                            <div class="col-lg-6">
                                <p><?php echo $key_featuress['key_features_text']; ?></p>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<!-- What make NBCC Different -->
<?php if (carbon_get_the_post_meta('enable_sec_6') == 'yes') { ?>
    <section class="what-makes-us-different py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <h2 class="mb-4"><?php echo carbon_get_the_post_meta('wmudu_title'); ?></h2>
                    <?php
                    $wmudu = carbon_get_the_post_meta('wmudu');
                    foreach ($wmudu as $wmudus) {
                    ?> <div class="d-flex">
                            <i class="fa-solid fa-circle-check"></i>
                            <h4> <?php echo $wmudus['wmudu_title_text']; ?></h4>
                        </div>
                    <?php } ?>
                    <a href="<?php echo carbon_get_the_post_meta('buttonlink'); ?>" class="join-now">Join Now</a>

                </div>
                <div class="col-lg-5">
                    <img src="<?php echo carbon_get_the_post_meta('wmudu_thumb'); ?>" alt="<?php echo carbon_get_the_post_meta('wmudu_alt'); ?>" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<!-- NBCC Offerd Courses -->
<?php if (carbon_get_the_post_meta('enable_sec_7') == 'yes') { ?>

    <section class="course-highlighted py-5">
        <div class="container">
            <div class="heading align-items-center">
                <div class="left">
                    <h2><?php echo carbon_get_the_post_meta('course_title'); ?></h2>
                    <span><?php echo carbon_get_the_post_meta('course_sub_title'); ?></span>
                </div>
                <div class="right">
                    <p>Total 5 Courses offerd</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme" id="courses">

                        <?php
                        $args = array(
                            'post_type' => 'courses',
                            'order' => 'DESC'
                        );
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                        ?>
                                <div class="item">
                                    <div class="course-box">
                                        <?php echo  get_the_post_thumbnail(); ?>
                                        <h4><?php the_title(); ?></h4>
                                        <ul>
                                            <li>
                                                <span>Duration</span>
                                                <p><?php echo carbon_get_the_post_meta('course_duration'); ?></p>
                                            </li>
                                            <li>
                                                <span>for Class</span>
                                                <p><?php echo carbon_get_the_post_meta('course_classes'); ?></p>
                                            </li>
                                        </ul>
                                        <!-- <h2><span class="discounted_price"> <?php echo carbon_get_the_post_meta('course_fees'); ?></span> <span class="offer_price"><?php echo carbon_get_the_post_meta('discouned_fees'); ?></span></h2> -->
                                        <a href="<?php the_permalink(); ?>">View Details</a>
                                        <div class="category">
                                            <?php echo carbon_get_the_post_meta('course_tag'); ?>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                            wp_reset_postdata();
                        else :
                        endif;

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>



<!-- NBCC Student Feedback -->
<?php if (carbon_get_the_post_meta('enable_sec_8') == 'yes') { ?>
    <section class="success-stories py-5">
        <div class="container">
            <div class="heading text-center mb-5">
                <h2><?php echo carbon_get_the_post_meta('sss_title'); ?></h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme" id="testimonials">
                        <?php
                        $sss = carbon_get_the_post_meta('sss');
                        $x = 1;
                        foreach ($sss as $ssss) {
                        ?>

                            <div class="item">
                                <div class="testimonials">
                                    <div class="st_img">
                                        <img src="<?php echo $ssss['sss_profile']; ?>" alt="<?php echo $ssss['sss_alt_text']; ?>" class="profile">
                                    </div>
                                    <div class="story_contents">
                                        <h4 class="testimonials_title"><?php echo $ssss['sss_student_name']; ?></h4>
                                        <span class="course"><?php echo $ssss['sss_course_name']; ?></span>
                                        <div class="feedback_content">
                                            <span class="testimonials_description"><?php echo $ssss['sss_student_message']; ?></span>
                                        </div>

                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#testimonial_<?php echo $x; ?>">View Full Feedback</a>
                                        <p class="mt-3"><?php echo $ssss['sss_designation']; ?></p>
                                    </div>

                                </div>
                            </div>
                        <?php $x++;
                        } ?>

                    </div>
                    <?php
                    $sss = carbon_get_the_post_meta('sss');
                    $x = 1;
                    foreach ($sss as $ssss) {
                    ?>
                        <!-- Modal -->
                        <div class="modal fade" id="testimonial_<?php echo $x; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $ssss['sss_student_name']; ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $ssss['sss_student_message']; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $x++;
                    } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<!-- NBCC Get in Touch -->
<?php if (carbon_get_the_post_meta('enable_sec_9') == 'yes') { ?>
    <section class="suport py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 p-2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Support.webp" alt="support" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="inquiry-form">
                        <div class="heading">
                            <h2><?php echo carbon_get_the_post_meta('git_title'); ?></h2>
                            <span><?php echo carbon_get_the_post_meta('git_sub_title'); ?></span>
                        </div>
                        <?php echo do_shortcode(carbon_get_the_post_meta('git_sub_cf7')); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php } ?>



<?php
get_footer();
?>
<script>
    jQuery(document).ready(function($) {
        // Fetch course titles from the server (assuming localized script)
        var courseTitles = <?php echo json_encode(wp_list_pluck($courses, 'post_title')); ?>;

        // Update CF7 dropdown options
        var dropdown = $('[name="courses_list"]');
        $.each(courseTitles, function(index, value) {
            dropdown.append($('<option>', {
                value: value,
                text: value
            }));
        });
    });
</script>