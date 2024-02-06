<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
// Home Page Utility
$template_path = 'single-courses.php';

/* ======================================================================================================================
        Course Header Section
=======================================================================================================================*/
Container::make('post_meta', __('Section 0 : Course Info', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('text', 'course_fees', 'Course Fee')->set_width(50),
        Field::make('text', 'discouned_fees', 'Discounted Fee')->set_width(50),
        Field::make('text', 'course_duration', 'Course Duration')->set_width(50),
        Field::make('text', 'course_classes', 'Course Classes')->set_width(50),
        Field::make('text', 'course_tag', 'Course Tag'),
    ));

/* ======================================================================================================================*/

/* ======================================================================================================================
        Course Header Section
=======================================================================================================================*/
Container::make('post_meta', __('Section 1 : Course Header Section', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_1', 'Enable Header'),
    ));

/* ======================================================================================================================*/


/* ======================================================================================================================
        Course Features
=======================================================================================================================*/
Container::make('post_meta', __('Section 2 : Course Features', 'crb'))
    ->show_on_template($template_path)

    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_2', 'Enable Course Features'),
        Field::make('complex', 'course_features', 'Add Features')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'coruse_features_icon', 'Features Icon')->set_width(50)->set_value_type('url'),
                Field::make('text', 'coruse_features__alt_text', 'Features ALT Value')->set_width(50),
                Field::make('textarea', 'coruse_features_name', 'Features Message'),
            ))

    ));
/* ======================================================================================================================*/

/* ======================================================================================================================
        Schedule and Syllabus
=======================================================================================================================*/
Container::make('post_meta', __('Section 3 : Course Schedule & Syllabus', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_3', 'Enable Schedule & Syllabus'),
        Field::make('rich_text', 'course_schedule', 'Course Schedule'),
        Field::make('file', 'course_syllabus', 'Upload Syllabus'),
        Field::make('text', 'course_special_note', 'Special Not'),
    ));
/* ======================================================================================================================*/


/* ======================================================================================================================
        Course Fees
=======================================================================================================================*/
Container::make('post_meta', __('Section 4 : Course Fees', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_4', 'Enable'),
        Field::make('rich_text', 'course_fee', 'Course Fees'),
    ));
/* ======================================================================================================================*/
