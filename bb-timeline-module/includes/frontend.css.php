/* Heading Typography */
<?php if( !empty($settings->heading_font) && $settings->font['family'] != 'Default' ) : ?>
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-heading,
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-heading *{
	<?php FLBuilderFonts::font_css( $settings->heading_font ); ?>
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-heading,
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-heading * {
<?php if(!empty($settings->color)) : ?>
	color: #<?php echo $settings->color; ?>;
<?php endif; ?>

<?php if($settings->title_size == 'custom') : ?>
	font-size: <?php echo $settings->title_custom_size; ?>px;
<?php endif; ?>

<?php if($settings->title_line_height == 'custom') : ?>
	line-height: <?php echo $settings->title_custom_line_height; ?>px;
<?php endif; ?>

<?php if($settings->title_letter_spacing == 'custom') : ?>
	letter-spacing: <?php echo $settings->title_custom_letter_spacing; ?>px;
<?php endif; ?>

<?php if($settings->heading_align == 'custom') : ?>
	text-align: <?php echo $settings->heading_align; ?>;
<?php endif; ?>
}

.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-heading {
	margin-top: <?php echo $settings->title_margin_top; ?>px;
	margin-bottom: <?php echo $settings->title_margin_bottom; ?>px;
	padding-top: <?php echo $settings->title_padding_top; ?>px;
	padding-right: <?php echo $settings->title_padding_right; ?>px;
	padding-bottom: <?php echo $settings->title_padding_bottom; ?>px;
	padding-left: <?php echo $settings->title_padding_left; ?>px;
}

<?php if(!empty($settings->heading_bg_color)) : ?>
.fl-node-<?php echo $id; ?> .bb-timline-heading { 
	background-color: #<?php echo $settings->heading_bg_color; ?>;
	background: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($settings->heading_bg_color)) ?>, <?php echo ( $settings->heading_bg_color_opc != '' ) ? $settings->heading_bg_color_opc/100 : 100; ?>);
}
<?php endif; ?>

/* heading border */
.fl-node-<?php echo $id; ?> .bb-timline-heading {
	border:<?php echo $settings->heading_border_width; ?>px <?php echo $settings->heading_border_style; ?> #<?php echo $settings->heading_border_color; ?>;
	<?php if(!empty($settings->heading_border_radius)) : ?>	
	border-radius: <?php echo $settings->heading_border_radius; ?>px;
	-moz-border-radius: <?php echo $settings->heading_border_radius; ?>px;
	-webkit-border-radius: <?php echo $settings->heading_border_radius; ?>px;
	<?php endif; ?>	
}


/* Timeline Title Typography */
<?php if( !empty($settings->timeline_title_font) && $settings->font['family'] != 'Default' ) : ?>
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-title,
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-title *{
	<?php FLBuilderFonts::font_css( $settings->timeline_title_font ); ?>
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-title,
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-title * {
<?php if(!empty($settings->color)) : ?>
	color: #<?php echo $settings->timeline_title_color; ?>;
<?php endif; ?>

<?php if($settings->timeline_title_size == 'custom') : ?>
	font-size: <?php echo $settings->timeline_title_custom_size; ?>px;
<?php endif; ?>

<?php if($settings->timeline_title_line_height == 'custom') : ?>
	line-height: <?php echo $settings->timeline_title_custom_line_height; ?>px;
<?php endif; ?>

<?php if($settings->timeline_title_letter_spacing == 'custom') : ?>
	letter-spacing: <?php echo $settings->timeline_title_custom_letter_spacing; ?>px;
<?php endif; ?>

<?php if($timeline1->timeline_title_align == 'custom') : ?>
	text-align: <?php echo $settings->timeline_title_align; ?>;
<?php endif; ?>
}



/* Timeline Description Typography */
<?php if( !empty($settings->timeline_dec_font) && $settings->font['family'] != 'Default' ) : ?>
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-dec,
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-dec *{
	<?php FLBuilderFonts::font_css( $settings->timeline_dec_font ); ?>
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-dec,
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-timline-dec * {
<?php if(!empty($settings->color)) : ?>
	color: #<?php echo $settings->timeline_dec_color; ?>;
<?php endif; ?>

<?php if($settings->timeline_dec_size == 'custom') : ?>
	font-size: <?php echo $settings->timeline_dec_custom_size; ?>px;
<?php endif; ?>

<?php if($settings->timeline_dec_line_height == 'custom') : ?>
	line-height: <?php echo $settings->timeline_dec_custom_line_height; ?>px;
<?php endif; ?>

<?php if($settings->timeline_dec_letter_spacing == 'custom') : ?>
	letter-spacing: <?php echo $settings->timeline_dec_custom_letter_spacing; ?>px;
<?php endif; ?>

<?php if($timeline1->timeline_dec_align == 'custom') : ?>
	text-align: <?php echo $settings->timeline_dec_align; ?>;
<?php endif; ?>
}

/* Timeline Date Typography */
<?php if( !empty($settings->timeline_date_font) && $settings->font['family'] != 'Default' ) : ?>
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-tmtime,
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-tmtime *{
    <?php FLBuilderFonts::font_css( $settings->timeline_date_font ); ?>
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-tmtime,
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb-tmtime * {
<?php if(!empty($settings->color)) : ?>
    color: #<?php echo $settings->timeline_date_color; ?>;
<?php endif; ?>

<?php if($settings->timeline_date_size == 'custom') : ?>
    font-size: <?php echo $settings->timeline_date_custom_size; ?>px;
<?php endif; ?>

<?php if($settings->timeline_date_line_height == 'custom') : ?>
    line-height: <?php echo $settings->timeline_date_custom_line_height; ?>px;
<?php endif; ?>

<?php if($settings->timeline_date_letter_spacing == 'custom') : ?>
    letter-spacing: <?php echo $settings->timeline_date_custom_letter_spacing; ?>px;
<?php endif; ?>

<?php if($timeline1->timeline_date_align == 'custom') : ?>
    text-align: <?php echo $settings->timeline_date_align; ?>;
<?php endif; ?>
}