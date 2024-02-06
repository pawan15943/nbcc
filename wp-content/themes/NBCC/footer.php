<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="logo-footer">
                    <img src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]); ?>" alt="logo" class="logo">
                </div>
            </div>
            <div class="col-lg-4 text-lg-left text-center">
                <h4 class="mb-4 mt-4 mt-lg-0"><?php echo carbon_get_theme_option('label_ft_menu_1'); ?></h4>
                <ul>
                    <!-- <li><b>Address</b> <br><?php echo carbon_get_theme_option('address_description'); ?></li> -->
                    <li><b>Mail Us :</b> <a href="mailto:<?php echo carbon_get_theme_option('footer_email'); ?>"><?php echo carbon_get_theme_option('footer_email'); ?></a></li>
                    <li><b>Call Us :</b> <a href="tel:<?php echo carbon_get_theme_option('footer_phone'); ?>"><?php echo carbon_get_theme_option('footer_phone'); ?></a></li>
                </ul>
            </div>
            <div class="col-lg-4 text-lg-left text-center">
                <h4 class="mb-4"><?php echo carbon_get_theme_option('label_ft_menu_2'); ?></h4>
                <ul class="social">
                    <?php
                    $social_menu = carbon_get_theme_option('social_menu');
                    foreach ($social_menu as $social_menus) {
                    ?>
                        <li><a href="<?php echo $social_menus['icon_link']; ?>" target="_blank"><?php echo $social_menus['icon_class']; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <h4 class="mb-3">Our Courses</h4>
                <ul class="center-list">
                    <?php
                    $args = array(
                        'post_type' => 'courses',
                        'order' => 'ASC',
                        'posts_per_page' => '4'
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                    ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                    <?php endwhile;
                        wp_reset_postdata();
                    else :
                    endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<section class="bg-dark py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="m-0 text-center text-white">Copyrights <?php echo date('Y'); ?> NBCC. All rights reserved.</p>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".char-only").on("input", function() {
            var inputValue = $(this).val();
            // Use a regular expression to check if the input contains only alphabets and a single space
            var regex = /^[A-Za-z ]*$/;

            if (!regex.test(inputValue)) {
                // If the input contains characters other than alphabets and a single space, remove them
                var sanitizedValue = inputValue.replace(/[^A-Za-z ]/g, '');
                $(this).val(sanitizedValue);
            }
        });
    });

    $(document).ready(function() {
        $(".digit-only").on("input", function() {
            var inputValue = $(this).val();
            // Use a regular expression to check if the input contains only digits (0-9)
            var regex = /^[0-9]+$/;

            if (!regex.test(inputValue)) {
                // If the input contains non-digit characters, remove them
                var sanitizedValue = inputValue.replace(/[^0-9]/g, '');
                $(this).val(sanitizedValue);
            }
        });
    });
</script>
<script>
    $('#courses').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: 40,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    $('#workshopSlider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: 15,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    $('#testimonials').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: 15,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>
<?php wp_footer(); ?>

</body>

</html>