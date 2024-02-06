<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Home Page Utility
$template_path = 'template-parts/about-us.php';

// Advantge Section
Container::make('post_meta', __('About Us Page Content', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_about_sec', 'Enable About Section'),
        Field::make('text', 'about_small_title', 'Small'),
        Field::make('text', 'about_us_title', 'About Us Title'),
        Field::make('textarea', 'about_us_description', 'About Us Description'),
        Field::make('text', 'about_us_title_2', 'About Us Title 2'),
        Field::make('textarea', 'about_us_description_2', 'About Us Description 2'),
   
    ))
    ->add_fields(array(
        Field::make('text', 'about_process_small_title', 'Process Small Title'),
        Field::make('text', 'about_process_us_title', 'Process About Us Title'),
        Field::make('textarea', 'about_process_us_description', 'Process About Us Description'),
        Field::make('complex', 'about_process_sec', 'Process Section Image')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'about_process_icon', 'Process Icon Image')->set_width(25)->set_value_type('url'),
                Field::make('text', 'about_process_icon_alt', 'Process Alt Value')->set_width(25),
                Field::make('text', 'about_process_name', 'Process name'),
                Field::make('textarea', 'about_process_description', 'Process Description'),
            ))
    ));

    