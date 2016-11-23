(function($) {

	$(document).ready(function() {
	
		<?php foreach( $settings->timeline1 as $i => $item ) { ?>
		new Animation({
			id: '<?php echo $id ?>',
			timeline: <?php echo $i; ?>,
			animation_delay: '<?php echo ( $settings->timeline1[$i]->tm_animation_delay != '' && $settings->timeline1[$i]->tm_animation_delay != '0' ) ? $settings->timeline1[$i]->tm_animation_delay : ''; ?>',
			animation: '<?php echo ( $settings->timeline1[$i]->tm_animation == 'no' ) ? 'no' : 'animated '.$settings->timeline1[$i]->tm_animation; ?>',
			viewport_position: '<?php echo ( $settings->timeline1[$i]->tm_viewport_position != '' ) ? $settings->timeline1[$i]->tm_viewport_position : '90'; ?>'
		});
		<?php } ?>
	});
	
})(jQuery);