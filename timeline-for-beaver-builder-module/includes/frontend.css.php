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

<?php $connector_bg_color = ( !empty($settings->connector_bg_color) ) ? $settings->connector_bg_color : '46a4da' ; ?>
.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-conatiner-main:before {
	width: <?php echo ( $settings->connector_border_width < '20' ) ? $settings->connector_border_width : '20'; ?>px;
	border-left-width: <?php echo ( $settings->connector_border_width < '20' ) ? $settings->connector_border_width : '20'; ?>px;
    border-left-style: <?php echo $settings->connector_border_style; ?>;
    border-left-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($connector_bg_color)) ?>, <?php echo ( $settings->connector_bg_color_opc != '' ) ? $settings->connector_bg_color_opc/100 : 100; ?>);
}

.fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline:before {
	width: <?php echo $settings->connector_border_width; ?>px;
	border-left-width: <?php echo $settings->connector_border_width; ?>px;
    border-left-style: <?php echo $settings->connector_border_style; ?>;
    border-left-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($connector_bg_color)) ?>, <?php echo ( $settings->connector_bg_color_opc != '' ) ? $settings->connector_bg_color_opc/100 : 100; ?>);
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
/* Timeline Title Align */
.fl-node-<?php echo $id; ?> .tm-timeline-li-<?php echo $i; ?> .bb-timline-title {
	text-align: <?php echo $item->timeline_title_align; ?>;
}

/* Timeline Connector */
<?php if($item->timeline_img_icon_type == 'icon' && $item->icon_bg_style == 'custom') : ?>
/* for icon setting */
<?php $icon_border_color = ( !empty($item->icon_border_color) ) ? $item->icon_border_color : '' ; ?>
.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-timeline-li-<?php echo $i; ?> .bb-tmicon {
	border-width: <?php echo ( $item->icon_border_width < '20' ) ? $item->icon_border_width : '20'; ?>px;
    border-style: <?php echo $item->icon_border_style; ?>;
    border-color: #<?php echo $item->icon_border_color; ?>;
    border-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($icon_border_color)) ?>, <?php echo ( $item->icon_border_color_opc != '' ) ? $item->icon_border_color_opc/100 : 100; ?>);
    box-sizing: content-box;
    box-shadow: none;
}

<?php $timeline_tmb_icon_bg_color = ( !empty($item->timeline_tmb_icon_bg_color) ) ? $item->timeline_tmb_icon_bg_color : '6CBFEE' ; ?>
.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-timeline-li-<?php echo $i; ?> .bb-tmicon {
	background-color: #<?php echo $timeline_tmb_icon_bg_color; ?>;
	background: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($timeline_tmb_icon_bg_color)) ?>, <?php echo ( $item->timeline_tmb_bg_color_opc != '' ) ? $item->timeline_tmb_bg_color_opc/100 : 100; ?>);
}

.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-timeline-li-<?php echo $i; ?> .bb-tmicon {
	<?php if(!empty($item->connector_border_radius)) : ?>	
	border-radius: <?php echo $item->connector_border_radius; ?>%;
	-moz-border-radius: <?php echo $item->connector_border_radius; ?>%;
	-webkit-border-radius: <?php echo $item->connector_border_radius; ?>%;
	<?php endif; ?>	
}
 <?php endif; ?>

/* for image setting */
<?php if($item->timeline_img_icon_type == 'photo' && $item->img_bg_style == 'imgcustom') : ?>
<?php $img_border_color = ( !empty($item->img_border_color) ) ? $item->img_border_color : '' ; ?>
.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-timeline-li-<?php echo $i; ?> .bb-tm-image {
	border-width: <?php echo ( $item->img_border_width < '20' ) ? $item->img_border_width : '20'; ?>px;
    border-style: <?php echo $item->img_border_style; ?>;
    border-color: #<?php echo $item->img_border_color; ?>;
    border-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($img_border_color)) ?>, <?php echo ( $item->img_border_color_opc != '' ) ? $item->img_border_color_opc/100 : 100; ?>);
    box-sizing: content-box;
    box-shadow: none;
}

<?php $timeline_tmb_img_bg_color = ( !empty($item->timeline_tmb_img_bg_color) ) ? $item->timeline_tmb_img_bg_color : 'ffffff' ; ?>
.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-timeline-li-<?php echo $i; ?> .bb-tm-image {
	background-color: #<?php echo $timeline_tmb_img_bg_color; ?>;
	background: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($timeline_tmb_img_bg_color)) ?>, <?php echo ( $item->timeline_tmb_img_bg_color_opc != '' ) ? $item->timeline_tmb_img_bg_color_opc/100 : 100; ?>);
}

.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-timeline-li-<?php echo $i; ?> .bb-tm-image {
	<?php if(!empty($item->img_border_radius)) : ?>	
	border-radius: <?php echo $item->img_border_radius; ?>%;
	-moz-border-radius: <?php echo $item->img_border_radius; ?>%;
	-webkit-border-radius: <?php echo $item->img_border_radius; ?>%;
	<?php endif; ?>	
}
 <?php endif; ?>


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

.fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-timeline-li-<?php echo $i; ?>:hover .bb-tmicon i {
	color: #<?php echo $item->timeline_icon_hover_colors; ?>;
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


<?php if($global_settings->responsive_enabled) { // Global Setting If started ?>

@media screen and (max-width: <?php echo $global_settings->responsive_breakpoint .'px'; ?>) {

	<?php if($settings->connector_show_hide == 'chide') : ?>
		
	.fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmicon,
    .fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmicon {
        display: none !important;
    }

    .fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tm-image,
    .fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tm-image {
        display: none !important;
    }

    .fl-node-<?php echo $id; ?> .bb-tmtimeline-container .tm-conatiner-main:before,
    .fl-node-<?php echo $id; ?> .bb-tmtimeline-container .bb-timeline-both .bb-tmtimeline:before{
    	display: none !important;
    }

    .fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmlabel,
    .fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmlabel {
	    margin: 0 0 40px 0 !important;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmtime,
	.fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li.tm-timeline-li-<?php echo $i; ?> .bb-tmtime {
    	margin-left: 0;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline:before{
		display: none !important;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-both .tm-timeline-li-<?php echo $i; ?> .bb-tmicon,
	.fl-node-<?php echo $id; ?> .bb-timeline-both .tm-timeline-li-<?php echo $i; ?> .bb-tm-image{
		display: none !important;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-both .tm-timeline-li-<?php echo $i; ?> .bb-tmtime {
	    margin-left: 0 !important;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-both .tm-timeline-li-<?php echo $i; ?> .bb-tmlabel,
    body .fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li .bb-tmlabel {
	    margin-left: 0px !important;
	}
	<?php endif; ?>	

	/*common css*/
	
    .fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li .bb-tmicon,
    .fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li .bb-tmicon,
    .fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li .bb-tmicon {
        display: block;
    }

    .fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li .bb-tm-image,
    .fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li .bb-tm-image,
    .fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li .bb-tm-image {
        display: block;
    }

    .fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li .bb-tmlabel {
        padding: 20px;
        margin-left: 40px !important;
    }

    .fl-node-<?php echo $id; ?> .bb-tmtimeline-container .bb-tmlabel .bb-timline-title {
        text-align: left !important;
    }

    .fl-node-<?php echo $id; ?> .bb-tmtimeline-container .bb-tmlabel .tm-title-border-bottom {
        text-align: left !important;
    }

    .fl-node-<?php echo $id; ?> .bb-tmtimeline-container .bb-tmlabel .bb-timline-dec p {
        text-align: left !important;
    }

    .fl-node-<?php echo $id; ?> .bb-tmtimeline-container .bb-tmlabel .bb-timline-dec img {
        margin-left: 0 !important;
    }

	/*right responsive*/
    .fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li .bb-tmicon {
        right: auto;
        left: 20px;
        margin: 0;
    }

    .fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li .bb-tm-image {
        right: auto;
        left: 20px;
        margin: 0;
    }

    .fl-node-<?php echo $id; ?> .bb-timeline-right .tm-conatiner-main:before {
        content: '';
        position: absolute;
        top: 20px;
        bottom: 0;
        right: auto;
        left: 20px;
        margin: 0;
        border-radius: 0;
        transform: translateX(-50%) !important;
    }

	.fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li .bb-tmtime {
		width: 100%;
		position: relative;
        padding: 0 0 20px 0px;
        margin-left: 65px;
        text-align: left;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li .bb-tmlabel {
		margin: 0 0 40px 40px;
		padding: 20px;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li .bb-tmlabel:after {
		right: auto;
		left: 20px;
		border-right-color: transparent;
		top: -20px;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-right .bb-tmtimeline > li:nth-child(odd) .bb-tmlabel:after {
		border-right-color: transparent;
	}

	/*left responsive*/
    .fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li .bb-tmicon{
        right: auto;
        left: 20px;
        margin: 0;
        transform: translateX(-50%) !important;
    }

    .fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li .bb-tm-image{
        right: auto;
        left: 20px;
        margin: 0;
        transform: translateX(-50%) !important;
    }

    .fl-node-<?php echo $id; ?> .bb-timeline-left .tm-conatiner-main:before {
        content: '';
        position: absolute;
        top: 20px;
        bottom: 0;
        right: auto;
        left: 20px;
        margin: 0;
        border-radius: 0;
        transform: translateX(-50%) !important;
    }

	.fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li .bb-tmtime {
	    width: auto;
	    position: relative;
	    padding: 0 0 20px 0px;
        margin-left: 65px;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li .bb-tmtime span {
	    text-align: left;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li .bb-tmlabel {
	    margin: 0 0 40px 40px;
	    padding: 20px;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li:nth-child(odd) .bb-tmlabel:after {
		border-left-color: transparent;
	}
	
    .fl-node-<?php echo $id; ?> .bb-timeline-left .bb-tmtimeline > li .bb-tmlabel:after{
		right: auto;
    	left: 20px;
    	border-left-color: transparent;
    	top: -20px;
	}

	/*both responsive*/
    .fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline:before {
        content: '';
        position: absolute;
        top: 20px;
        bottom: 0;
        right: auto;
        left: 20px;
        margin: 0;
        border-radius: 0;
        transform: translateX(-50%) !important;
    }

	.fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li .bb-tmtime {
	    width: auto;
	    position: relative;
	    padding: 0 0 20px 0px;
        margin-left: 65px;
        text-align: left;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li .bb-tmtime span {
	    text-align: left;
	}
	
	.fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li:nth-child(odd) .bb-tmlabel {
	    margin: 1px 0 40px 0;
	}

	.fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li:nth-child(odd) .bb-tmlabel:after {
	    border-left-color: transparent;
	    right: auto;
	    left: 20px;
	    top: -20px;
	}
	
    .fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li .bb-tmlabel:after{
		right: auto;
	    left: 20px;
	    border-right-color: transparent;
	    top: -20px;
	}

    .fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li .bb-tmicon {
        right: auto;
        left: 20px;
        top: 0;
        margin: 0;
        transform: translateX(-50%) !important;
    }

    .fl-node-<?php echo $id; ?> .bb-timeline-both .bb-tmtimeline > li .bb-tm-image {
        right: auto;
        left: 20px;
        top: 0;
        margin: 0;
        transform: translateX(-50%) !important;
    }

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

<?php }
}
?>