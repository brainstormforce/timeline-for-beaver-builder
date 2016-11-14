<?php

/**
 * @class BSFBBTimelines
 */
class BSFBBTimelines extends FLBuilderModule {
    /** 
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */  
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Timeline', 'bb-timeline'),
            'description'   => __('To create Bootstrap Card builder modules.', 'bb-timeline'),
            'category'		=> __('Advanced Modules', 'bb-timeline'),
            'dir'           => BB_TIMELINE_DIR . 'bb-timeline-module/',
            'url'           => BB_TIMELINE_URL . 'bb-timeline-module/',
            'partial_refresh'   => true
        ));
        
    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('BSFBBTimelines', 
    array(
        'general'       => array( // Tab
            'title'         => __('General', 'bb-timeline'), // Tab title
            'sections'      => array( // Tab Sections
                
                'heading'       => array( // Section
                    'title'         => __('Heading', 'bb-timeline'), // Section Title
                    'fields'        => array( // Section Fields
                        'heading_title'     => array(
                            'type'          => 'text',
                            'label'         => __('Heading Title', 'bb-timeline'),
                            'default'       => '',
                            'placeholder'   => 'Enter Heading Title',
                            'default'       => __('Heading Title', 'bb-timeline'),
                            'class'         => 'heading-title',
                            'preview'         => array(
                                'type'             => 'text',
                                'selector'         => '.bb_timline_heading'
                            )
                        ),
                        'sub_heading_title'     => array(
                            'type'          => 'text',
                            'label'         => __('Sub Heading Title', 'bb-timeline'),
                            'default'       => '',
                            'placeholder'   => 'Enter Sub Heading Title',
                            'default'       => __('Sub Heading Title', 'bb-timeline'),
                            'class'         => 'sub-heading-title',
                            'preview'         => array(
                                'type'             => 'text',
                                'selector'         => '.bb_timline_sub_heading'
                            )
                        ),

                    ) 
                ),

                'layout'       => array( // Section
                    'title'         => 'Select Layout', // Section Title
                    'fields'        => array( // Section Fields
                        'timeline_layout'       => array(
                            'type'          => 'select',
                            'label'         => __('Timeline Layouts', 'bb-timeline'),
                            'default'       => 'style1',
                            'class'         => '',
                            'options'       => array(
                                'style1'             => __('Style 1', 'bb-timeline'),
                                'style2'             => __('Style 2', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'style1'      => array(
                                    'sections'      => array( 'style1' ),
                                    'tabs'      => array( 'timeline1' ),
                                    'fields'     => array( 'layout1' )
                                ),
                                'style2'      => array(
                                    'sections'      => array( 'timeline_title_section' ),
                                    'tabs'      => array( 'timeline2' ),
                                    'fields'     => array( 'layout2' )
                                )
                            ),
                        ),
                    )
                )
            )
        ),

        'timeline1'      => array( // Tab
            'title'         => __('Timeline', 'bb-timeline'), // Tab title
            'sections'      => array( // Tab Sections
                'general'       => array( // Section
                    'title'         => '', // Section Title
                    'fields'        => array( // Section Fields
                        'timeline1'     => array(
                            'type'          => 'form',
                            'label'         => __('Timeline', 'bb-timeline'),
                            'form'          => 'timeline_form', // ID from registered form below
                            'preview_text'  => 'timeline_title', // Name of a field to use for the preview text
                            'multiple'      => true
                        ),
                    )
                )
            )
        ),

        'typography'         => array(
            'title'         => __('Typography', 'bb-timeline'),
            'sections'      => array(
                'heading_title'     => array(
                    'title'         => __('Heading', 'bb-timeline'),
                    'fields'        => array(
                        'main_tag'           => array(
                            'type'          => 'select',
                            'label'         => __( 'HTML Tag', 'bb-timeline' ),
                            'default'       => 'h2',
                            'options'       => array(
                                'h1'            =>  'h1',
                                'h2'            =>  'h2',
                                'h3'            =>  'h3',
                                'h4'            =>  'h4',
                                'h5'            =>  'h5',
                                'h6'            =>  'h6'
                            )
                        ),
                    )
                ),
                'sub_heading_title'    =>  array(
                    'title'     => __('Sub Heading', 'bb-timeline'),
                    'fields'    => array(

                        'sub_tag'           => array(
                            'type'          => 'select',
                            'label'         => __( 'HTML Tag', 'bb-timeline' ),
                            'default'       => 'h4',
                            'options'       => array(
                                'h1'            =>  'h1',
                                'h2'            =>  'h2',
                                'h3'            =>  'h3',
                                'h4'            =>  'h4',
                                'h5'            =>  'h5',
                                'h6'            =>  'h6'
                            )
                        ),

                    )
                ),
            ),
        )      
    )
);

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('timeline_form', array(
    'title' => __('Add Testimonial', 'bb-timeline'),
    'tabs'  => array(
        'general'      => array( // Tab
            'title'         => __('General', 'bb-timeline'), // Tab title
            'sections'      => array( // Tab Sections
                'timeline_title_section'       => array( // Section
                    'title'         => __('Title', 'bb-timeline'), // Section Title
                    'fields'        => array( // Section Fields
                        'timeline_title' => array(
                            'type'          => 'text',
                            'label'         => __('Timeline Title', 'bb-timeline'),
                            'default'       => 'John Doe',
                            'description'   => '',
                        )

                    ),
                ),
                'timeline1'       => array( // Section
                    'title'         => __('Timeline', 'bb-timeline'), // Section Title
                    'fields'        => array( // Section Fields
                        'testimonial'          => array(
                            'type'          => 'editor',
                            'label'         => '',
                            'default'       => 'If you are looking for some awesome, knowledgeable people to work with, these are the guys I highly recommend. Their friendliness and result-driven approach is what I love about them.',
                        ),
                    ),
                ),
            )
        ),
    )
));
