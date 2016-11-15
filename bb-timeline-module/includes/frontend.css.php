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
<?php if ( $settings->title_margin != '' || $settings->title_padding != '' ) { ?>
margin: <?php echo ( trim($settings->title_margin) != '' ) ? $settings->title_margin : '0'; ?>px;
padding: <?php echo ( trim($settings->title_padding) != '' ) ? $settings->title_padding : '0'; ?>px;
<?php } ?>
}

<?php if(!empty($settings->heading_bg_color)) : ?>
.fl-node-<?php echo $id; ?> .bb-timline-heading { 
	background-color: #<?php echo $settings->heading_bg_color; ?>;
	background: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($settings->heading_bg_color)) ?>, <?php echo ( $settings->heading_bg_color_opc != '' ) ? $settings->heading_bg_color_opc/100 : 100; ?>);
}
<?php endif; ?>



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

