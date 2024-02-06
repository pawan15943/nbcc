<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', __('Slider Settings'))
    ->set_icon('dashicons-slides')
    ->add_fields(array(
        Field::make('complex', 'website_slides')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('checkbox', 'home', 'Home Page')->set_width(10),
                Field::make('checkbox', 'bahrain', 'Bahrain')->set_width(15),
                Field::make('checkbox', 'kuwait', 'Kuwait')->set_width(15),
                Field::make('checkbox', 'oman', 'Oman')->set_width(15),
                Field::make('checkbox', 'qatar', 'Qatar')->set_width(15),
                Field::make('checkbox', 'saudi-arabia', 'Saudi Arabia')->set_width(15),
                Field::make('checkbox', 'uae', 'UAE')->set_width(15),
                Field::make('image', 'desktop-image', 'Desktop Image')->set_width(20)->set_value_type('url'),
                Field::make('image', 'mobile-image', 'Mobile Image')->set_width(20)->set_value_type('url'),
                Field::make('checkbox', 'target-blank', 'Enable Target Blank')->set_width(20),
                Field::make('text', 'alt-name', 'Alt Name')->set_width(50),
                Field::make('text', 'link', 'Slider Link')->set_width(50),
                Field::make('date', 'start_date', 'Start Date')->set_width(50),
                Field::make('date', 'end_date', 'End Date')->set_width(50),
                Field::make('text', 'utm_source', 'Enter UTM parameter'),
                Field::make('checkbox', 'always_on', 'Always On'),
            ))
    ));
