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
                'layout'       => array( // Section
                    'title'         => 'Select Layout', // Section Title
                    'fields'        => array( // Section Fields
                        'timeline_layout'       => array(
                            'type'          => 'select',
                            'label'         => __('Timeline Layouts', 'bb-timeline'),
                            'default'       => 'left',
                            'class'         => '',
                            'options'       => array(
                                'left'             => __('Left', 'bb-timeline'),
                                'right'             => __('Right', 'bb-timeline'),
                                'both'             => __('Both Side', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'left'      => array(
                                    'sections'      => array( 'left' ),
                                    'tabs'      => array( 'timeline1' ),
                                    'fields'     => array( 'layout1' )
                                ),
                                'right'      => array(
                                    'sections'      => array( 'right' ),
                                    'tabs'      => array( 'timeline2' ),
                                    'fields'     => array( 'layout2' )
                                ),
                                'both'      => array(
                                    'sections'      => array( 'both' ),
                                    'tabs'      => array( 'timeline3' ),
                                    'fields'     => array( 'layout3' )
                                )
                            ),
                        ),
                    )
                ),

                'heading'       => array( // Section
                    'title'         => __('Heading', 'bb-timeline'), // Section Title
                    'fields'        => array( // Section Fields
                        'heading_title'     => array(
                            'type'          => 'text',
                            'label'         => __('Heading Text', 'bb-timeline'),
                            'default'       => '',
                            'placeholder'   => 'Enter Heading Text',
                            'default'       => __('Timeline', 'bb-timeline'),
                            'class'         => 'heading-title',
                            'preview'         => array(
                                'type'             => 'text',
                                'selector'         => '.bb_timline_heading'
                            )
                        ),
                    ) 
                ),
                'heading_typo'     => array(
                    'title'         => __('Heading Typography', 'bb-timeline'),
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

        'timeline_typography'         => array(
            'title'         => __('Typography', 'bb-timeline'),
            'sections'      => array(
                'timeline_typography'     => array(
                    'title'         => __('Timeline Title', 'bb-timeline'),
                    'fields'        => array(


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
                            'default'       => 'Title of section',
                            'description'   => '',
                        )

                    ),
                ),
                'timeline_editor_section'       => array( // Section
                    'title'         => __('Timeline', 'bb-timeline'), // Section Title
                    'fields'        => array( // Section Fields
                        'timeline_editor'          => array(
                            'type'          => 'editor',
                            'label'         => '',
                            'default'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.',
                        ),
                    ),
                ),
            )
        ),

        'date_time'       => array(
            'title'         => __('Date & Time', 'bb-timeline'),
            'sections'      => array(
                'date'       => array(
                    'title'         => __( 'Date', 'bb-timeline' ),
                    'fields'        => array(
                        'day'          => array(
                            'type'          => 'text',
                            'label'         => __('Day', 'bb-timeline'),
                            'default'       => date( 'j' ),
                            'maxlength'     => '2',
                            'size'          => '5',
                            'preview'      => array(
                                'type'         => 'none'
                            )
                        ),
                        'month'         => array(
                            'type'          => 'text',
                            'label'         => __('Month', 'bb-timeline'),
                            'default'       => date( 'n' ),
                            'maxlength'     => '2',
                            'size'          => '5',
                            'preview'      => array(
                                'type'         => 'none'
                            )
                        ),
                        'year'          => array(
                            'type'          => 'text',
                            'label'         => __('Year', 'bb-timeline'),
                            'default'       => date( 'Y' ),
                            'maxlength'     => '4',
                            'size'          => '5',
                            'preview'      => array(
                                'type'         => 'none'
                            )
                        ),
                    )
                ),
            ),
        ),

        'timeline_icon'       => array(
            'title'         => __('Timeline Icon', 'bb-timeline'),
            'sections'      => array(
                'icon'       => array(
                    'title'         => __( 'Select Icon', 'bb-timeline' ),
                    'fields'        => array(
                        'icon'          => array(
                            'type'          => 'icon',
                            'label'         => __('Icon', 'bb-timeline')
                        )
                    )
                ),
            ),
        ),    
    )
));
