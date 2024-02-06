<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('theme_options', __('NBCC Options'))
    ->set_icon('dashicons-admin-settings')
    ->add_tab(__('Metafolks Footer'), array(
        Field::make('text', 'label_ft_menu_1', 'Footer Menu 1 label')->set_width(50),
        Field::make('text', 'label_ft_menu_2', 'Footer Menu 2 label')->set_width(50),
        Field::make('text', 'footer_email', 'Email Address')->set_width(50),
        Field::make('text', 'footer_phone', 'Contact Number')->set_width(50),
        Field::make('textarea', 'address_description', 'Address Description')->set_width(100),
        Field::make('complex', 'social_menu', 'Social Menu')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('text', 'social', 'Social Media')->set_width(25),
                Field::make('text', 'icon_class', 'Icon Class')->set_width(25),
                Field::make('text', 'icon_link', 'Icon link')->set_width(25),
                Field::make('checkbox', 'icon_target', 'Target Blank')->set_width(25),
            )),
        Field::make('complex', 'app_links', 'Our Apps')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'app_image', 'App Icon')->set_width(20)->set_value_type('url'),
                Field::make('text', 'app_alt', 'App Alt Value')->set_width(20),
                Field::make('text', 'app_link', 'App link')->set_width(60),
            )),
        Field::make('complex', 'payment_partners', 'Our Payment Partners')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'pp_image', 'Payment Partners Icon')->set_width(20)->set_value_type('url'),
                Field::make('text', 'pp_alt', 'Payment Partners Alt Value')->set_width(20),
                Field::make('text', 'pp_link', 'Payment Partners link')->set_width(60),
            )),
    ))

    ->add_tab(__('Manage Popup'), array(
        Field::make('text', 'enable_poup', 'Enable Popup'),
        Field::make('text', 'poup_link', 'Popup Link'),
    ))
    ->add_tab(__('Manage Service Page Banner'), array(
        Field::make('image', 'service_banner', 'Service Banner')->set_width(20)->set_value_type('url'),
        Field::make('text', 'service_banner_alt', 'Service Banner')->set_width(20),
        Field::make('text', 'banner_text', 'Banner Text'),
        Field::make('text', 'banner_link', 'Popup Link'),
    ))
    ->add_tab(__('Add FAQ`s'), array(
        Field::make('checkbox', 'enable_sec_5', 'Enable Frequently Asked Questions'),
        Field::make('complex', 'course_faq', 'Add Features')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('text', 'questions', 'Add New Question'),
                Field::make('textarea', 'answer', 'Add Answer'),
            )),
        Field::make('checkbox', 'enable_sec_6', 'Enable Get in Touch Form'),
        Field::make('text', 'gin_form_shortcode', 'Add ShortCode'),
    ));
