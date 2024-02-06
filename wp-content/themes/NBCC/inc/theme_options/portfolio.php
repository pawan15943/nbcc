<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
// Home Page Utility
$template_path = 'template-parts/portfolio.php';

// Metafolks Portfolio
Container::make('post_meta', __('Metafolks Portfolio', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_portfolio', 'Enable'),
        Field::make('text', 'portfolio_small_title', 'Portfolio Small Title'),
        Field::make('text', 'portfolio_title', 'Portfolio Title'),
        Field::make('textarea', 'portfolio_description', 'Portfolio Description'),
    ))
    ->add_fields(array(
        Field::make('complex', 'portfolio_content_main', 'Section Image')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'portfolio_thumb_main', 'Portfolio Image')->set_width(25)->set_value_type('url'),
                Field::make('text', 'portfolio_alt_main', 'Portfolio Alt Value')->set_width(25),
                Field::make('text', 'portfolio_name_main', 'Portfolio name'),
                Field::make('textarea', 'portfolio_description_main', 'Portfolio Description'),
                Field::make('text', 'portfolio_page_link_main', 'Portfolio Link'),
            ))
    ));

