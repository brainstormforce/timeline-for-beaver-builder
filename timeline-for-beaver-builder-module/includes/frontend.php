<?php
/**
 * Timeline Module for Beaver Builder
 *
 * @package  bb-timeline
 */

?>

<?php if ( 'both' != $settings->timeline_layout ) { ?> 
<!-- If Left Or Right -->
<div class="bb-tmtimeline-container bb-timeline-<?php echo $settings->timeline_layout; ?>">
	<ul class="bb-tmtimeline">
		<?php
		for ( $i = 0; $i < count( $settings->timeline1 ); $i++ ) :
			if ( ! is_object( $settings->timeline1[ $i ] ) ) {
				continue;
			}
			$timeline1 = $settings->timeline1[ $i ];
		?>
		<li class="tm-timeline-li-<?php echo $i; ?>">
			<?php if ( '' != $timeline1->day && '' != $timeline1->month && '' != $timeline1->year ) { ?>
			<!--date-->
			<div class="bb-tmtime bb-tmtime-<?php echo $settings->date_show_hide; ?>">
				<?php if ( 'rsdate' == $timeline1->timeline_date_customcontent_type ) { ?>
				<?php $current_date = $timeline1->year . '-' . $timeline1->month . '-' . $timeline1->day; ?>
				<span class="feed-date">
					<?php echo date( $settings->date_format, strtotime( $current_date ) ); ?>
				</span>

				<?php } elseif ( 'customcontent' == $timeline1->timeline_date_customcontent_type ) { ?> 
				<!--Timeline-customcontent-->
					<div class="bb-custom-content"><?php echo $timeline1->timeline_custom_content_editor; ?></div>
				<!--/.Timeline-customcontent-->
				<?php } ?>
			</div>
			<!--/.date-->

			<?php } ?>
			<!--Timline-Content-->
			<div class="tm-conatiner-main">

				<!--icon-->
				<?php if ( 'icon' == $timeline1->timeline_img_icon_type ) { ?>  
				<div class="bb-tmicon">
					<i class="<?php echo $timeline1->timeline_icon_style; ?>"></i>
				</div>
				<!--/.icon-->

				<?php } elseif ( 'photo' == $timeline1->timeline_img_icon_type ) { ?>

				<!--image-->
				<div class="bb-tm-image">
					<?php if ( '' != $timeline1->photo && isset( $timeline1->photo_src ) ) { ?> 
					   <img src="<?php echo $timeline1->photo_src; ?>"/>
					<?php } ?>
				</div>
				<!--/.image-->

				<?php } ?>

				<?php
				$hide_class = '';
				if ( 'no' != $settings->tm_animation ) {
					$hide_class = 'bb-hide-it';
				} ?>
				<div class="bb-tmlabel <?php echo $hide_class; ?>">	
					<!--Timline-Title-->
					<<?php echo $settings->tmtitle_tag; ?> class="bb-timline-title bb-tm-title-<?php echo $timeline1->timeline_title_align; ?>">
						<?php echo $timeline1->timeline_title; ?>
					</<?php echo $settings->tmtitle_tag; ?>>
					<!--/.Timline-Title-->

					<div class="tm-title-border-bottom">
						<span class="bb-tmlabel-border-bottom"></span>
					</div>

					<!--Timline-description-->
					<div class="bb-timline-dec"><?php echo $timeline1->timeline_editor; ?></div>
					<!--/.Timline-description-->
				</div>

			</div>
			
			<!--/.Timline-Content-->
		</li>
		<?php endfor; ?>
	</ul>
</div>

<?php } else { ?> 
<!-- If both -->
<div class="bb-tmtimeline-container bb-timeline-<?php echo $settings->timeline_layout; ?>">
	<ul class="bb-tmtimeline">
		<?php
		for ( $i = 0; $i < count( $settings->timeline1 ); $i++ ) :
			if ( ! is_object( $settings->timeline1[ $i ] ) ) {
				continue;
			}
			$timeline1 = $settings->timeline1[ $i ];
		?>
		<li class="tm-timeline-li-<?php echo $i; ?>">
			<?php if ( '' != $timeline1->day && '' != $timeline1->month && '' != $timeline1->year ) { ?>
			<!--date-->
			<div class="bb-tmtime bb-tmtime-<?php echo $settings->date_show_hide; ?>">
				<?php if ( 'rsdate' == $timeline1->timeline_date_customcontent_type ) { ?>
				<?php $current_date = $timeline1->year . '-' . $timeline1->month . '-' . $timeline1->day; ?>
				<span class="feed-date">
					<?php echo date( $settings->date_format, strtotime( $current_date ) ); ?>
				</span>

					<?php } elseif ( 'customcontent' == $timeline1->timeline_date_customcontent_type ) { ?> 
				<!--Timeline-customcontent-->
					<div class="bb-custom-content"><?php echo $timeline1->timeline_custom_content_editor; ?></div>
				<!--/.Timeline-customcontent-->
				<?php } ?>
			</div>
			<!--/.date-->
			<?php } ?>

			<!--icon-->
			<?php if ( 'icon' == $timeline1->timeline_img_icon_type ) { ?>  
			<div class="bb-tmicon">
				<i class="<?php echo $timeline1->timeline_icon_style; ?>"></i>
			</div>
			<!--/.icon-->
			<?php } elseif ( 'photo' == $timeline1->timeline_img_icon_type ) { ?>
			<!--image-->
			<div class="bb-tm-image">
				<?php if ( '' != $timeline1->photo && isset( $timeline1->photo_src ) ) { ?> 
				   <img src="<?php echo $timeline1->photo_src; ?>"/>
				<?php } ?>
			</div>
			<!--/.image-->
			<?php } ?>

			<!--Timline-Content-->
			<div class="tm-conatiner-main">
				<?php
					$hide_class = '';
				if ( 'no' != $settings->tm_animation ) {
					$hide_class = 'bb-hide-it';
				} ?>
				<div class="bb-tmlabel <?php echo $hide_class; ?>">
					<!--Timline-Title-->
					<<?php echo $settings->tmtitle_tag; ?> class="bb-timline-title bb-tm-title-<?php echo $timeline1->timeline_title_align; ?>">
						<?php echo $timeline1->timeline_title; ?>
					</<?php echo $settings->tmtitle_tag; ?>>
					<!--/.Timline-Title-->
					<div class="tm-title-border-bottom">
						<span class="bb-tmlabel-border-bottom"></span>
					</div>
					<!--Timline-description-->
					<div class="bb-timline-dec"><?php echo $timeline1->timeline_editor; ?></div>
					<!--/.Timline-description-->
				</div>
			</div>
			<!--/.Timline-Content-->
		</li>
		<?php endfor; ?>
	</ul>
</div>

<?php }// End if().
	?>
