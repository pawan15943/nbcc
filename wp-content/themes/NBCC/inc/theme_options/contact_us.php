<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Home Page Utility
$template_path = 'single-gallery.php';

// Advantge Section
Container::make('post_meta', __('Section 1 : Add Gallery Images Here', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_gallery_images_1', 'Enable Gallery Image Section'),
        Field::make('text', 'gallery_title', 'Gallery Title'),
        Field::make('complex', 'gallery_images', 'Add Images to Video')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'gallery_image', 'Gallery Image')->set_width(50)->set_value_type('url'),
                Field::make('text', 'gallery_image_alt', 'Alt Value')->set_width(50),
            ))
    ));

Container::make('post_meta', __('Section 2 : Add Gallery Videos Here', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_gallery_video_2', 'Enable Gallery Video Section'),
        Field::make('text', 'gallery_video_title', 'Gallery Video Title'),
        Field::make('complex', 'gallery_videos', 'Add Images to Video')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'gallery_video_thumb', 'Student Image')->set_width(30)->set_value_type('url'),
                Field::make('text', 'gallery_video_alt', 'Alt Value')->set_width(30),
                Field::make('text', 'gallery_video_link', 'Link')->set_width(30),
            ))
    ));
