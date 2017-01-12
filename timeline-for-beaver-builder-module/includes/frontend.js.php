(function($) {
	
	$(document).ready(function() {
	
		<?php if ($settings->tm_animation != 'no') { 
			foreach( $settings->timeline1 as $i => $item ) { ?>
				new BBTimelineAnimation({
					id: '<?php echo $id ?>',
					timeline: <?php echo $i; ?>,
					mobile_screen: '<?php echo $settings->anim_mobile_on_off; ?>',
					animation_delay: '<?php echo ( $settings->tm_animation_delay != '' && $settings->tm_animation_delay != '0' ) ? $settings->tm_animation_delay : ''; ?>',
					animation: '<?php echo ( $settings->tm_animation == 'no' ) ? 'no' : 'animated '.$settings->tm_animation; ?>',
					viewport_position: '<?php echo ( $settings->tm_viewport_position != '' ) ? $settings->tm_viewport_position : '90'; ?>'
				});
		<?php }
		} ?>
	});
	
})(jQuery);