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
            'partial_refresh'   => false
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
                                    'tabs'      => array( 'timeline1' )
                                ),
                                'right'      => array(
                                    'sections'      => array( 'right' ),
                                    'tabs'      => array( 'timeline1' )
                                ),
                                'both'      => array(
                                    'sections'      => array( 'both' ),
                                    'tabs'      => array( 'timeline1' )
                                )
                            ),
                        ),
                    )
                ),
            )
        ),

        'main_heading'       => array( // Tab
            'title'         => __('Heading', 'bb-timeline'), // Tab title
            'sections'      => array( // Tab Sections

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
                                'selector'         => '.bb-timline-heading'
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

                        'heading_font'          => array(
                            'type'          => 'font',
                            'default'       => array(
                                'family'        => 'Default',
                                'weight'        => 300
                            ),
                            'label'         => __('Font Family', 'bb-timeline'),
                            'preview'         => array(
                                'type'            => 'font',
                                'selector'        => '.bb-timline-heading'
                            )
                        ),

                        'title_size'    => array(
                            'type'          => 'select',
                            'label'         => __('Font Size', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('title_custom_size')
                                )
                            )
                        ),

                        'title_custom_size' => array(
                            'type'              => 'text',
                            'label'             => __('Font Custom Size', 'bb-timeline'),
                            'default'           => '36',
                            'maxlength'         => '3',
                            'size'              => '4',
                            'description'       => 'px'
                        ),

                        'title_line_height'     => array(
                            'type'          => 'select',
                            'label'         => __('Line Height', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('title_custom_line_height')
                                )
                            )
                        ),

                        'title_custom_line_height' => array(
                            'type'          => 'text',
                            'label'         => __('Custom Line Height', 'bb-timeline'),
                            'default'       => '40',
                            'maxlength'     => '4',
                            'size'          => '4',
                            'description'   => 'px'
                        ),

                        'title_letter_spacing'     => array(
                            'type'          => 'select',
                            'label'         => __('Letter Spacing', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('title_custom_letter_spacing')
                                )
                            )
                        ),

                        'title_custom_letter_spacing' => array(
                            'type'          => 'text',
                            'label'         => __('Custom Letter Spacing', 'bb-timeline'),
                            'default'       => '0',
                            'maxlength'     => '3',
                            'size'          => '4',
                            'description'   => 'px'
                        ),
                    )
                ),

                'heading_colornback'     => array(
                    'title'         => __('Heading Color & Background', 'bb-timeline'),
                    'fields'        => array(

                        'color'    => array( 
                            'type'       => 'color',
                            'label'         => __('Text Color', 'bb-timeline'),
                            'default'    => '',
                            'show_reset' => true,
                            'preview'       => array(
                                'type' => 'css',
                                'property' => 'color',
                                'selector' => '.bb-timline-heading'
                            )
                        ),

                        'heading_bg_color' => array( 
                            'type'       => 'color',
                            'label'         => __('Background Color', 'bb-timeline'),
                            'default'    => '',
                            'show_reset' => true,
                        ),

                        'heading_bg_color_opc' => array( 
                            'type'        => 'text',
                            'label'       => __('Opacity', 'bb-timeline'),
                            'default'     => '',
                            'description' => '%',
                            'maxlength'   => '3',
                            'size'        => '5',
                        ),
                    )
                ),

                'heading_alignments'     => array(
                    'title'         => __('Heading Alignments', 'bb-timeline'),
                    'fields'        => array(
                        'heading_align'     => array(
                            'type'          => 'select',
                            'label'         => __('Heading Alignment', 'bb-timeline'),
                            'default'       => 'Left',
                            'options'       => array(
                                'left'      =>  __('Left', 'bb-timeline'),
                                'center'    =>  __('Center', 'bb-timeline'),
                                'right'     =>  __('Right', 'bb-timeline')
                            ),
                            'help'         => __('This is the alignment option and would only apply to Heading elements', 'bb-timeline'),
                        ),

                        'title_margin_top' => array(
                            'type'              => 'text',
                            'label'             => __('Margin Top', 'bb-timeline'),
                            'placeholder'       => '0',
                            'maxlength'         => '3',
                            'size'              => '4',
                            'description'       => 'px',
                            'default'    => '',
                            'preview'       => array(
                                'type' => 'css',
                                'property' => 'margin-top',
                                'selector' => '.bb-timline-heading',
                                'unit'       => 'px'
                            )
                        ),

                        'title_margin_bottom' => array(
                            'type'              => 'text',
                            'label'             => __('Margin Bottom', 'bb-timeline'),
                            'placeholder'       => '0',
                            'maxlength'         => '3',
                            'size'              => '4',
                            'description'       => 'px',
                            'default'    => '',
                            'preview'       => array(
                                'type' => 'css',
                                'property' => 'margin-bottom',
                                'selector' => '.bb-timline-heading',
                                'unit'       => 'px'
                            )
                        ),

                        'title_padding_top' => array(
                            'type'              => 'text',
                            'label'             => __('Padding Top', 'bb-timeline'),
                            'placeholder'       => '0',
                            'maxlength'         => '3',
                            'size'              => '4',
                            'description'       => 'px',
                            'default'    => '10',
                            'preview'       => array(
                                'type' => 'css',
                                'property' => 'padding-top',
                                'selector' => '.bb-timline-heading',
                                'unit'       => 'px'
                            )
                        ),

                        'title_padding_right' => array(
                            'type'              => 'text',
                            'label'             => __('Padding Right', 'bb-timeline'),
                            'placeholder'       => '0',
                            'maxlength'         => '3',
                            'size'              => '4',
                            'description'       => 'px',
                            'default'    => '10',
                            'preview'       => array(
                                'type' => 'css',
                                'property' => 'padding-right',
                                'selector' => '.bb-timline-heading',
                                'unit'       => 'px'
                            )
                        ),

                        'title_padding_bottom' => array(
                            'type'              => 'text',
                            'label'             => __('Padding Bottom', 'bb-timeline'),
                            'placeholder'       => '0',
                            'maxlength'         => '3',
                            'size'              => '4',
                            'description'       => 'px',
                            'default'    => '10',
                            'preview'       => array(
                                'type' => 'css',
                                'property' => 'padding-bottom',
                                'selector' => '.bb-timline-heading',
                                'unit'       => 'px'
                            )
                        ),

                        'title_padding_left' => array(
                            'type'              => 'text',
                            'label'             => __('Padding Left', 'bb-timeline'),
                            'placeholder'       => '0',
                            'maxlength'         => '3',
                            'size'              => '4',
                            'description'       => 'px',
                            'default'    => '10',
                            'preview'       => array(
                                'type' => 'css',
                                'property' => 'padding-left',
                                'selector' => '.bb-timline-heading',
                                'unit'       => 'px'
                            )
                        ),
                    )
                ),
                
                'heading_border'     => array(
                    'title'         => __('Heading Border', 'bb-timeline'),
                    'fields'        => array(
                        'heading_border_show'     => array(
                            'type'          => 'select',
                            'label'         => __('Show Hide border', 'bb-timeline'),
                            'default'       => 'hide',
                            'options'       => array(
                                'hide'       =>  __('Hide', 'bb-timeline'),
                                'show'        =>  __('Show', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'show'        => array(
                                    'fields'        => array('heading_border_style', 'heading_border_width', 'heading_border_color', 'heading_border_radius' )
                                )
                            )
                        ),
                        'heading_border_style'         => array(
                            'type'          => 'select',
                            'label'         => __('Border Style', 'bb-timeline'),
                            'default'       => 'solid',
                            'options'       => array(
                                'solid'         => _x( 'Solid', 'Border type.', 'bb-timeline' ),
                                'dashed'        => _x( 'Dashed', 'Border type.', 'bb-timeline' ),
                                'dotted'        => _x( 'Dotted', 'Border type.', 'bb-timeline' )
                            ),
                            'preview'       => array(
                                'type'          => 'css',
                                'selector'      => '.bb-timline-heading',
                                'property'      => 'border-style'
                            ),
                        ),
                        'heading_border_width'        => array(
                            'type'          => 'text',
                            'label'         => __('Border Width', 'bb-timeline'),
                            'default'       => '0',
                            'maxlength'     => '2',
                            'size'          => '3',
                            'description'   => 'px',
                            'preview'       => array(
                                'type'          => 'css',
                                'selector'      => '.bb-timline-heading',
                                'property'      => 'border-width',
                                'unit'          => 'px'
                            )
                        ),
                        'heading_border_color'         => array(
                            'type'          => 'color',
                            'label'         => __('Border Color', 'bb-timeline'),
                            'default'       => 'cccccc',
                            'show_reset' => true,
                            'preview'       => array(
                                'type'          => 'css',
                                'selector'      => '.bb-timline-heading',
                                'property'      => 'border-color'
                            )
                        ),
                        'heading_border_radius' => array(
                            'type'          => 'text',
                            'label'         => __('Round Corners', 'bb-timeline'),
                            'maxlength'     => '3',
                            'size'          => '4',
                            'description'   => 'px'
                        )
                    )
                ),

            )
        ),

        'timeline'      => array( // Tab
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

        'timeline_style'     => array(
            'title'         => __('Style', 'bb-timeline'),
            'sections'      => array(
                'timeline_first_sections'     => array(
                    'title'         => __('Timeline Even Sections', 'bb-timeline'),
                    'fields'        => array(

                        'odd_sections_bg_color' => array( 
                            'type'       => 'color',
                            'label'         => __('Background Color', 'bb-timeline'),
                            'default'    => '',
                            'show_reset' => true,
                        ),

                        'odd_sections_bg_color_opc' => array( 
                            'type'        => 'text',
                            'label'       => __('Opacity', 'bb-timeline'),
                            'default'     => '',
                            'description' => '%',
                            'maxlength'   => '3',
                            'size'        => '5',
                        ),
                    )
                ),

                'timeline_second_sections'     => array(
                    'title'         => __('Timeline Odd Sections', 'bb-timeline'),
                    'fields'        => array(

                        'even_sections_bg_color' => array( 
                            'type'       => 'color',
                            'label'         => __('Background Color', 'bb-timeline'),
                            'default'    => '',
                            'show_reset' => true,
                        ),

                        'even_sections_bg_color_opc' => array( 
                            'type'        => 'text',
                            'label'       => __('Opacity', 'bb-timeline'),
                            'default'     => '',
                            'description' => '%',
                            'maxlength'   => '3',
                            'size'        => '5',
                        ),

                    )
                ),

                'timeline_connector'     => array(
                    'title'         => __('Timeline Connector', 'bb-timeline'),
                    'fields'        => array(

                        'connector_bg_color' => array( 
                            'type'       => 'color',
                            'label'         => __('Background Color', 'bb-timeline'),
                            'default'    => '',
                            'show_reset' => true,
                        ),

                        'connector_bg_color_opc' => array( 
                            'type'        => 'text',
                            'label'       => __('Opacity', 'bb-timeline'),
                            'default'     => '50',
                            'description' => '%',
                            'maxlength'   => '3',
                            'size'        => '5',
                        ),

                    )
                ),
            )
        ),   

        'timeline_typography'         => array(
            'title'         => __('Typography', 'bb-timeline'),
            'sections'      => array(

                'timeline_title_typography'     => array(
                    'title'         => __('Timeline Title', 'bb-timeline'),
                    'fields'        => array(
                        'tmtitle_tag'           => array(
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

                        'timeline_title_font'          => array(
                            'type'          => 'font',
                            'default'       => array(
                                'family'        => 'Default',
                                'weight'        => 300
                            ),
                            'label'         => __('Font Family', 'bb-timeline'),
                            'preview'         => array(
                                'type'            => 'font',
                                'selector'        => '.bb-timline-title'
                            )
                        ),

                        'timeline_title_size'    => array(
                            'type'          => 'select',
                            'label'         => __('Font Size', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('timeline_title_custom_size')
                                )
                            )
                        ),

                        'timeline_title_custom_size' => array(
                            'type'              => 'text',
                            'label'             => __('Custom Font Size', 'bb-timeline'),
                            'default'           => '18',
                            'maxlength'         => '3',
                            'size'              => '4',
                            'description'       => 'px'
                        ),

                        'timeline_title_line_height'     => array(
                            'type'          => 'select',
                            'label'         => __('Line Height', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('timeline_title_custom_line_height')
                                )
                            )
                        ),

                        'timeline_title_custom_line_height' => array(
                            'type'          => 'text',
                            'label'         => __('Custom Line Height', 'bb-timeline'),
                            'default'       => '30',
                            'maxlength'     => '4',
                            'size'          => '4',
                            'description'   => 'px'
                        ),

                        'timeline_title_letter_spacing'     => array(
                            'type'          => 'select',
                            'label'         => __('Letter Spacing', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('timeline_title_custom_letter_spacing')
                                )
                            )
                        ),

                        'timeline_title_custom_letter_spacing' => array(
                            'type'          => 'text',
                            'label'         => __('Custom Letter Spacing', 'bb-timeline'),
                            'default'       => '0',
                            'maxlength'     => '3',
                            'size'          => '4',
                            'description'   => 'px'
                        ),

                        'timeline_title_color'    => array( 
                            'type'       => 'color',
                            'label'         => __('Text Color', 'bb-timeline'),
                            'default'    => '',
                            'show_reset' => true,
                            'preview'       => array(
                                'type' => 'css',
                                'property' => 'color',
                                'selector' => '.bb-timline-title'
                            )
                        ),

                        'timeline_title_align'     => array(
                            'type'          => 'select',
                            'label'         => __('Heading Alignment', 'bb-timeline'),
                            'default'       => 'Left',
                            'options'       => array(
                                'left'      =>  __('Left', 'bb-timeline'),
                                'center'    =>  __('Center', 'bb-timeline'),
                                'right'     =>  __('Right', 'bb-timeline')
                            ),
                        ),

                    )
                ),

                'timeline_description_typography'     => array(
                    'title'         => __('Timeline Description', 'bb-timeline'),
                    'fields'        => array(

                        'timeline_dec_font'          => array(
                            'type'          => 'font',
                            'default'       => array(
                                'family'        => 'Default',
                                'weight'        => 300
                            ),
                            'label'         => __('Font Family', 'bb-timeline'),
                            'preview'         => array(
                                'type'            => 'font',
                                'selector'        => '.bb-timline-dec'
                            )
                        ),

                        'timeline_dec_size'    => array(
                            'type'          => 'select',
                            'label'         => __('Font Size', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('timeline_dec_custom_size')
                                )
                            )
                        ),

                        'timeline_dec_custom_size' => array(
                            'type'              => 'text',
                            'label'             => __('Custom Font Size', 'bb-timeline'),
                            'default'           => '18',
                            'maxlength'         => '3',
                            'size'              => '4',
                            'description'       => 'px'
                        ),

                        'timeline_dec_line_height'     => array(
                            'type'          => 'select',
                            'label'         => __('Line Height', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('timeline_dec_custom_line_height')
                                )
                            )
                        ),

                        'timeline_dec_custom_line_height' => array(
                            'type'          => 'text',
                            'label'         => __('Custom Line Height', 'bb-timeline'),
                            'default'       => '30',
                            'maxlength'     => '4',
                            'size'          => '4',
                            'description'   => 'px'
                        ),

                        'timeline_dec_letter_spacing'     => array(
                            'type'          => 'select',
                            'label'         => __('Letter Spacing', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('timeline_dec_custom_letter_spacing')
                                )
                            )
                        ),

                        'timeline_dec_custom_letter_spacing' => array(
                            'type'          => 'text',
                            'label'         => __('Custom Letter Spacing', 'bb-timeline'),
                            'default'       => '0',
                            'maxlength'     => '3',
                            'size'          => '4',
                            'description'   => 'px'
                        ),

                        'timeline_dec_color'    => array( 
                            'type'       => 'color',
                            'label'         => __('Text Color', 'bb-timeline'),
                            'default'    => '',
                            'show_reset' => true,
                            'preview'       => array(
                                'type' => 'css',
                                'property' => 'color',
                                'selector' => '.bb-timline-dec'
                            )
                        ),
                    )
                ),
                
                'timeline_date_typography'     => array(
                    'title'         => __('Timeline Date Typography', 'bb-timeline'),
                    'fields'        => array(

                        'timeline_date_font'          => array(
                            'type'          => 'font',
                            'default'       => array(
                                'family'        => 'Default',
                                'weight'        => 300
                            ),
                            'label'         => __('Font Family', 'bb-timeline'),
                            'preview'         => array(
                                'type'            => 'font',
                                'selector'        => '.bb-tmtime'
                            )
                        ),

                        'timeline_date_size'    => array(
                            'type'          => 'select',
                            'label'         => __('Font Size', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('timeline_date_custom_size')
                                )
                            )
                        ),

                        'timeline_date_custom_size' => array(
                            'type'              => 'text',
                            'label'             => __('Custom Font Size', 'bb-timeline'),
                            'default'           => '18',
                            'maxlength'         => '3',
                            'size'              => '4',
                            'description'       => 'px'
                        ),

                        'timeline_date_line_height'     => array(
                            'type'          => 'select',
                            'label'         => __('Line Height', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('timeline_date_custom_line_height')
                                )
                            )
                        ),

                        'timeline_date_custom_line_height' => array(
                            'type'          => 'text',
                            'label'         => __('Custom Line Height', 'bb-timeline'),
                            'default'       => '30',
                            'maxlength'     => '4',
                            'size'          => '4',
                            'description'   => 'px'
                        ),

                        'timeline_date_letter_spacing'     => array(
                            'type'          => 'select',
                            'label'         => __('Letter Spacing', 'bb-timeline'),
                            'default'       => 'default',
                            'options'       => array(
                                'default'       =>  __('Default', 'bb-timeline'),
                                'custom'        =>  __('Custom', 'bb-timeline')
                            ),
                            'toggle'        => array(
                                'custom'        => array(
                                    'fields'        => array('timeline_date_custom_letter_spacing')
                                )
                            )
                        ),

                        'timeline_date_custom_letter_spacing' => array(
                            'type'          => 'text',
                            'label'         => __('Custom Letter Spacing', 'bb-timeline'),
                            'default'       => '0',
                            'maxlength'     => '3',
                            'size'          => '4',
                            'description'   => 'px'
                        ),

                        'timeline_date_color'    => array( 
                            'type'       => 'color',
                            'label'         => __('Text Color', 'bb-timeline'),
                            'default'    => 'bdd0db',
                            'show_reset' => true,
                            'preview'       => array(
                                'type' => 'css',
                                'property' => 'color',
                                'selector' => '.bb-tmtime'
                            )
                        ),
                    )
                ),
            )
        ),      
    )
);

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('timeline_form', array(
    'title' => __('Add Timeline', 'bb-timeline'),
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

        'timeline_date'       => array(
            'title'         => __('Timeline Date', 'bb-timeline'),
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
