/* Timeline Title Typography */
<?php if( !empty($settings->timeline_title_font) && $settings->timeline_title_font['family'] != 'Default' ) : ?>
.fl-node-<?php echo $id; ?> .bb-timline-title {
	<?php FLBuilderFonts::font_css( $settings->timeline_title_font ); ?>
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> .bb-timline-title {
	font-size: <?php echo $settings->timeline_title_custom_size; ?>px;
	line-height: <?php echo $settings->timeline_title_custom_line_height; ?>px;
	color: #<?php echo $settings->timeline_title_color; ?>;
	text-align: <?php echo $settings->timeline_title_align; ?>;
}

.fl-node-<?php echo $id; ?> .bb-timline-title {
	margin-top: <?php echo $settings->timeline_title_margin_top; ?>px;
	margin-bottom: <?php echo $settings->timeline_title_margin_bottom; ?>px;
}

/* Timeline Description Typography */
<?php if( !empty($settings->timeline_dec_font) && $settings->timeline_dec_font['family'] != 'Default' ) : ?>
.fl-node-<?php echo $id; ?> .bb-timline-dec {
	<?php FLBuilderFonts::font_css( $settings->timeline_dec_font ); ?>
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> .bb-timline-dec {
	color: #<?php echo $settings->timeline_dec_color; ?>;
	font-size: <?php echo $settings->timeline_dec_custom_size; ?>px;
	line-height: <?php echo $settings->timeline_dec_custom_line_height; ?>px;
}

.fl-node-<?php echo $id; ?> .bb-timline-dec {
	margin-top: <?php echo $settings->timeline_dec_margin_top; ?>px;
	margin-bottom: <?php echo $settings->timeline_dec_margin_bottom; ?>px;
}

/* Timeline Date Typography */
<?php if( !empty($settings->timeline_date_font) && $settings->timeline_date_font['family'] != 'Default' ) : ?>
.fl-node-<?php echo $id; ?> .bb-tmtime {
    <?php FLBuilderFonts::font_css( $settings->timeline_date_font ); ?>
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> .bb-tmtime {
    color: #<?php echo $settings->timeline_date_color; ?>;
    font-size: <?php echo $settings->timeline_date_custom_size; ?>px;
    line-height: <?php echo $settings->timeline_date_custom_line_height; ?>px;
    letter-spacing: <?php echo $settings->timeline_date_custom_letter_spacing; ?>px;
}

/* Timeline Connector */

<?php $timeline_icon_border_bg_color = ( !empty($settings->timeline_icon_border_bg_color) ) ? $settings->timeline_icon_border_bg_color : '6CBFEE' ; ?>
.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .bb-tmtimeline > li .bb-tmicon {
	background-color: #<?php echo $timeline_icon_border_bg_color; ?>;
}

<?php $connector_bg_color = ( !empty($settings->connector_bg_color) ) ? $settings->connector_bg_color : '46a4da' ; ?>
.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .bb-tmtimeline > li .bb-tmicon {
	border-width: <?php echo ( $settings->connector_border_width < '20' ) ? $settings->connector_border_width : '20'; ?>px;
    border-style: <?php echo $settings->connector_border_style; ?>;
    border-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($connector_bg_color)) ?>, <?php echo ( $settings->connector_bg_color_opc != '' ) ? $settings->connector_bg_color_opc/100 : 100; ?>);
    box-sizing: content-box;
    box-shadow: none;
}

.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-conatiner-main:before {
	width: <?php echo ( $settings->connector_border_width < '20' ) ? $settings->connector_border_width : '20'; ?>px;
	border-left-width: <?php echo ( $settings->connector_border_width < '20' ) ? $settings->connector_border_width : '20'; ?>px;
    border-left-style: <?php echo $settings->connector_border_style; ?>;
    border-left-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($connector_bg_color)) ?>, <?php echo ( $settings->connector_bg_color_opc != '' ) ? $settings->connector_bg_color_opc/100 : 100; ?>);
}

.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .bb-tmicon, .fl-node-<?php echo $id; ?> .bb-tmtimeline-container .bb-tmtimeline > li .bb-tmicon img{
	<?php if(!empty($settings->connector_border_radius)) : ?>	
	border-radius: <?php echo $settings->connector_border_radius; ?>%;
	-moz-border-radius: <?php echo $settings->connector_border_radius; ?>%;
	-webkit-border-radius: <?php echo $settings->connector_border_radius; ?>%;
	<?php endif; ?>	
}

.fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline:before {
	width: <?php echo $settings->connector_border_width; ?>px;
	border-left-width: <?php echo $settings->connector_border_width; ?>px;
    border-left-style: <?php echo $settings->connector_border_style; ?>;
    border-left-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($connector_bg_color)) ?>, <?php echo ( $settings->connector_bg_color_opc != '' ) ? $settings->connector_bg_color_opc/100 : 100; ?>);
}

.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .bb-tmtimeline > li .bb-tmicon {
	top: -<?php echo ( $settings->connector_border_width < '20' ) ? $settings->connector_border_width : '20'; ?>px;
}

/* Animation CSS */
.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .animated {
	-webkit-animation-duration:  <?php echo $settings->tm_animation_duration; ?>s;
	animation-duration: <?php echo $settings->tm_animation_duration; ?>s;
}

/* foreach child section*/
<?php
	foreach( $settings->timeline1 as $i => $item ) {
?>
/* Timeline Title border */
.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-timeline-li-<?php echo $i; ?> .bb-tmlabel-border-bottom {
	border-bottom-width: <?php echo $item->timeline_title_border_width; ?>px;
    border-bottom-style: <?php echo $item->timeline_title_border_style; ?>;
    border-bottom-color: #<?php echo $item->timeline_title_border_color; ?>;
    width : <?php echo ( $item->timeline_title_seperator_width < '100' ) ? $item->timeline_title_seperator_width : '100'; ?>%;
}

.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-timeline-li-<?php echo $i; ?> .tm-title-border-bottom {
    text-align: <?php echo $item->timeline_title_border_align; ?>;
}

.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-timeline-li-<?php echo $i; ?> .bb-tmicon i {
	color: #<?php echo $item->timeline_icon_colors; ?>;
}

/* Timeline Sections */
<?php $sections_bg_color = ( !empty($item->sections_bg_color) ) ? $item->sections_bg_color : '6cbfee' ; ?>

.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-timeline-li-<?php echo $i; ?> .bb-tmlabel {
	background-color: #<?php echo $sections_bg_color; ?>;
	background: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($sections_bg_color)) ?>, <?php echo ( $item->sections_bg_color_opc != '' ) ? $item->sections_bg_color_opc/100 : 100; ?>);
}
.fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmlabel:after {
    border-right-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($sections_bg_color)) ?>, <?php echo ( $item->sections_bg_color_opc != '' ) ? $item->sections_bg_color_opc/100 : 100; ?>);
    border-left-color: transparent;
}
.fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmlabel:after {
    border-left-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($sections_bg_color)) ?>, <?php echo ( $item->sections_bg_color_opc != '' ) ? $item->sections_bg_color_opc/100 : 100; ?>);
    border-right-color: transparent;
}
.fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmlabel:after {
    border-left-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($sections_bg_color)) ?>, <?php echo ( $item->sections_bg_color_opc != '' ) ? $item->sections_bg_color_opc/100 : 100; ?>);
    border-right-color: transparent;
}

.fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?>:nth-child(even) .bb-tmlabel:after {
    border-right-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($sections_bg_color)) ?>, <?php echo ( $item->sections_bg_color_opc != '' ) ? $item->sections_bg_color_opc/100 : 100; ?>);
    border-left-color: transparent;
}

@media screen and (max-width: 980px) {
	/* Connector */
	.fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmlabel:after {
	    border-bottom-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($sections_bg_color)) ?>, <?php echo ( $item->sections_bg_color_opc != '' ) ? $item->sections_bg_color_opc/100 : 100; ?>);
	    border-left-color: transparent;
	    border-right-color: transparent;
	}
	.fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmlabel:after {
	    border-bottom-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($sections_bg_color)) ?>, <?php echo ( $item->sections_bg_color_opc != '' ) ? $item->sections_bg_color_opc/100 : 100; ?>);
	    border-right-color: transparent;
	    border-left-color: transparent;
	}
	.fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmlabel:after {
	    border-bottom-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($sections_bg_color)) ?>, <?php echo ( $item->sections_bg_color_opc != '' ) ? $item->sections_bg_color_opc/100 : 100; ?>);
	    border-right-color: transparent;
	    border-left-color: transparent;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?>:nth-child(even) .bb-tmlabel:after  {
	    border-bottom-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($sections_bg_color)) ?>, <?php echo ( $item->sections_bg_color_opc != '' ) ? $item->sections_bg_color_opc/100 : 100; ?>);
	    border-left-color: transparent;
	    border-right-color: transparent;
	}

}

<?php
}
?>