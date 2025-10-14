<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_618b68542da5a',
        'title' => 'API Keys',
        'fields' => array(
            array(
                'key' => 'field_618b68719eb14',
                'label' => 'Google Map API',
                'name' => 'google_map_api',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'AIzaSyDm9oF3WWbz0PvJoFZMXGs3KDJBo_Eb6zw',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_618b687f9eb15',
                'label' => 'GTM ID',
                'name' => 'gtm_id',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_618b68879eb16',
                'label' => 'FB Pixel',
                'name' => 'fb_pixel',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;
// Uses Filter so we can extract the value from an ACF Option
if (function_exists('get_field')): 
    if(get_field('google_map_api','option')):
        add_filter('acf/fields/google_map/api', function($api){
            $api['key'] = get_field('google_map_api','option');
            return $api;
        });
    endif;
endif;