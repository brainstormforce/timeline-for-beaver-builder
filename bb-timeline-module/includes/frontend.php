<!--Heading_Title-->
<div class="header-title bb-heading-<?php echo $settings->heading_align; ?>">
<<?php echo $settings->main_tag; ?> class="bb-timline-heading">
	<?php echo $settings->heading_title; ?>
</<?php echo $settings->main_tag; ?>>	
</div>
<!--/.Heading_Title-->

<div class="bb-tmtimeline-container bb-timeline-<?php echo $settings->timeline_layout; ?>">
	<ul class="bb-tmtimeline">
		<?php 
		for($i=0; $i < count($settings->timeline1); $i++) :
			if(!is_object($settings->timeline1[$i])) {
				continue;
			}
			$timeline1 = $settings->timeline1[$i];
		?>
		<li>
			<!--date-->
			<div class="bb-tmtime">
				<span><?php echo $timeline1->day; ?>/<?php echo $timeline1->month; ?>/<?php echo $timeline1->year; ?></span> 
			</div>
			<!--/.date-->

			<!--icon-->
			<div class="bb-tmicon">
				<i class="<?php echo $timeline1->icon; ?>"></i>
			</div>
			<!--/.icon-->

			<!--Timline-Content-->
			<div class="bb-tmlabel">

			<!--Timline-Title-->
			<<?php echo $settings->tmtitle_tag; ?> class="bb-timline-title bb-tm-title-<?php echo $settings->timeline_title_align; ?>">
				<?php echo $timeline1->timeline_title; ?>
			</<?php echo $settings->tmtitle_tag; ?>>
			<!--/.Timline-Title-->

			<!--Timline-description-->
			<div class="bb-timline-dec"><?php echo $timeline1->timeline_editor; ?></div>
			<!--/.Timline-description-->

			</div>
			<!--/.Timline-Content-->
		</li>
		<?php endfor; ?>
	</ul>
</div>