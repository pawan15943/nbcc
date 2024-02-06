<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'nav_menu_item', 'Menu Settings' )
    ->add_fields( array(
        Field::make( 'image', 'icon_image','Menu Image' ),
    ));

