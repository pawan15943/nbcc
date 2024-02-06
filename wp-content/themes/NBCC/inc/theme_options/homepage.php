<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
// Home Page Utility
$template_path = 'home.php';

/* ======================================================================================================================
        Header Section
=======================================================================================================================*/
Container::make('post_meta', __('Section 1 : Header Section', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_1', 'Enable Header'),
        Field::make('textarea', 'header_primary_text', 'Primary Text'),
        Field::make('textarea', 'header_secondary_text', 'Secondary Text'),
        Field::make('text', 'button_link', 'Button Link'),
        Field::make('image', 'header_image', 'Header Image')->set_width(50)->set_value_type('url'),
        Field::make('text', 'header_image_alt_text', 'ALT Value')->set_width(50),
        Field::make('textarea', 'text1', 'Text 1')->set_width(25),
        Field::make('textarea', 'text2', 'Text 2')->set_width(25),
        Field::make('textarea', 'text3', 'Text 3')->set_width(25),
        Field::make('textarea', 'text4', 'Text 4')->set_width(25),
    ));

/* ======================================================================================================================*/


/* ======================================================================================================================
        Goal Section
=======================================================================================================================*/
Container::make('post_meta', __('Section 2 : Our Goal', 'crb'))
    ->show_on_template($template_path)

    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_2', 'Enable Goal Section'),
        Field::make('complex', 'our_goal', 'Add Goal Points')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'goal_icon', 'Goal Icon')->set_width(50)->set_value_type('url'),
                Field::make('text', 'goal_alt_text', 'Goal ALT Value')->set_width(50),
                Field::make('textarea', 'goal_message', 'Goal Message'),
            ))

    ));
/* ======================================================================================================================*/

/* ======================================================================================================================
        About NBCC
=======================================================================================================================*/
Container::make('post_meta', __('Section 3 : About NBCC', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_3', 'Enable About Section'),
        Field::make('text', 'about_title', 'About Title'),
        Field::make('text', 'about_sub_title', 'About Sub Title'),
    ));
/* ======================================================================================================================*/


/* ======================================================================================================================
        Key Benefits of NBCC
=======================================================================================================================*/
Container::make('post_meta', __('Section 4 : Key Benefits of NBCC', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_4', 'Enable'),
        Field::make('text', 'key_benefits_title', 'Key Benefits Title'),
        Field::make('text', 'key_benefits_sub_title', 'Key Benefits Sub Title'),
    ))
    ->add_fields(array(
        Field::make('complex', 'key_benefits', 'Add Testimonials')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'key_benefit_icon', 'Goal Icon')->set_width(50)->set_value_type('url'),
                Field::make('text', 'key_benefit_alt', 'alt value')->set_width(50),
                Field::make('textarea', 'key_benefit_name', 'Key Benefits Name'),

            ))
    ));
/* ======================================================================================================================*/


/* ======================================================================================================================
        Key Features of NBCC
=======================================================================================================================*/
Container::make('post_meta', __('Section 5 : Key Features Process', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_5', 'Enable Key Features'),
        Field::make('text', 'key_features_title', 'Key Features Title'),
        Field::make('text', 'key_features_sub_title', 'Key Features Sub Title'),
        Field::make('image', 'key_features_icon', 'Key Features Image')->set_width(50)->set_value_type('url'),
        Field::make('text', 'key_features_alt', 'alt value')->set_width(50),
    ))
    ->add_fields(array(
        Field::make('complex', 'key_features', 'Section Image')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('textarea', 'key_features_text', 'Key'),
            ))
    ));
/* ======================================================================================================================*/

/* ======================================================================================================================
        What Makes NBCC Different 
=======================================================================================================================*/
Container::make('post_meta', __('Section 6 : What Makes NBCC Different', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_6', 'Enable'),
        Field::make('text', 'wmudu_title', 'What Makes NBCC Different Title'),
        Field::make('image', 'wmudu_thumb', 'WMUD Image')->set_width(25)->set_value_type('url'),
        Field::make('text', 'wmudu_alt', 'WMUD Alt Value')->set_width(25),

    ))
    ->add_fields(array(
        Field::make('complex', 'wmudu', 'Unique Features')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('text', 'wmudu_title_text', 'Unique Features'),
            ))
    ));
/* ======================================================================================================================*/

/* ======================================================================================================================
        Our Courses
=======================================================================================================================*/
Container::make('post_meta', __('Section 7 : NBCC Course', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_7', 'Enable Course Section'),
        Field::make('text', 'course_title', 'Course Title'),
        Field::make('text', 'course_sub_title', 'Course Sub Title'),
    ));
/* ======================================================================================================================*/

/* ======================================================================================================================
        Student Success Stories
=======================================================================================================================*/
Container::make('post_meta', __('Section 8 : Student Success Stories', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_8', 'Enable'),
        Field::make('text', 'sss_title', 'Title'),
        Field::make('complex', 'sss', 'Unique Features')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'sss_profile', 'Student Image')->set_width(25)->set_value_type('url'),
                Field::make('text', 'sss_alt_text', 'Alt'),
                Field::make('text', 'sss_student_name', 'Student Name'),
                Field::make('text', 'sss_course_name', 'Student Course Name'),
                Field::make('textarea', 'sss_student_message', 'Student Feedback'),
                Field::make('text', 'sss_designation', 'Designation'),
            ))
    ));
/* ======================================================================================================================*/

/* ======================================================================================================================
        Get in Touch
=======================================================================================================================*/
Container::make('post_meta', __('Section 9 : Get in Touch', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_9', 'Enable'),
        Field::make('text', 'git_title', 'Title'),
        Field::make('text', 'git_sub_title', 'Sub Title'),
        Field::make('text', 'git_sub_cf7', 'Contact Form Shortcode'),
       
    ));
/* ======================================================================================================================*/