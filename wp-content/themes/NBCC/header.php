<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png">
    <title>Empower Your Future with the Best Computer Coaching in India | NBCC</title>
    <meta name="description" content="Join NBCC, your gateway to excellence in computer education in India. Elevate your skills with advanced computer courses, including web design, web development, graphic design, and AI (ChatGPT). Discover a transformative learning experience today.">
    <meta name="description" content="Computer Coaching in KOTA, Best Computer Coaching, Computer Classes for web design, computer classes for AI, Top computer Coaching">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Our Support</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Email Id : </h5>
                            <span><a href="mailto:info@gmail.com">info@gmail.com</a></span>

                            <h5 class="mt-3">Call Us :</h5>
                            <span><a href="tel:+91-9999999999">+91-9999999999</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]); ?>" alt="logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About NBCC</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Packges
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Advanced Computer Course</a></li>
                                <li><a class="dropdown-item" href="#">AI (ChatGPT)</a></li>
                                <li><a class="dropdown-item" href="#">RSCIT</a></li>
                                <li><a class="dropdown-item" href="#">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Web Development</a></li>
                                <li><a class="dropdown-item" href="#">Graphic Design</a></li>
                                <li><a class="dropdown-item" href="#">Wordpress Pro (Design + Development)</a></li>
                                <li><a class="dropdown-item" href="#">Computer for ALL Age</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>

                    </ul> -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                        'depth' => 3,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));


                    ?>

                </div>
            </div>
        </nav>
    </header>
    <!-- Slider -->