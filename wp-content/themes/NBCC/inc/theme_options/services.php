<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
// Home Page Utility
$template_path = 'services.php';

// Text Section
Container::make('post_meta', __('Home Page Content', 'crb'))
->where('post_template',"=",$template_path)
->add_fields(array(
    Field::make('image', 'home_service_icon', 'Service Icon')->set_width(50)->set_value_type('url'),
    Field::make('text', 'home_service_icon_alt_text', 'Service ALT Value')->set_width(50),

    Field::make('textarea', 'home_page_description', 'Home Page Description'),
));

Container::make('post_meta', __('Section 1 : Service Content', 'crb'))
    ->where('post_template',"=",$template_path)

    ->add_fields(array(
        Field::make('textarea', 'content1', 'Content 1'),
        Field::make('textarea', 'content2', 'Content 2'),
    ))
    ->add_fields(array(
        Field::make('text', 'title', 'Title'),
        Field::make('textarea', 'decription', 'Description'),
    ))
    ->add_fields(array(
        Field::make('complex', 'services', 'Add Serviecs    ')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'service_icon', 'Service Icon')->set_width(50)->set_value_type('url'),
                Field::make('text', 'service_icon_alt_text', 'Service ALT Value')->set_width(50),
                Field::make('text', 'serviec_title', 'Service Title'),
                Field::make('textarea', 'service_description', 'Service Description'),
            ))
    ));

    Container::make('post_meta', __('Section 2 : Why Choose Us', 'crb'))
    ->where('post_template',"=",$template_path)
    ->add_fields(array(
        Field::make('text', 'why_title', 'Title'),
        Field::make('textarea', 'why_decription', 'Description'),
    ))
    ->add_fields(array(
        Field::make('complex', 'why_choose_us', 'Add Serviecs')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('text', 'features_title', 'Features Title'),
                Field::make('textarea', 'features_description', 'Features Description'),
            ))
    ));
