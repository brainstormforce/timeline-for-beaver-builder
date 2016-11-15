<!--heading_title-->
<<?php echo $settings->main_tag; ?> class="bb_timline_heading">
	<?php echo $settings->heading_title; ?>
</<?php echo $settings->main_tag; ?>>
<!--/.heading_title-->

<!--Left-->
<?php
if ( $settings->timeline_layout == "left" ) {
?>
	<div class="bb_tmtimeline_container">
		<ul class="bb_tmtimeline">
			<?php 
			for($i=0; $i < count($settings->timeline1); $i++) :
				if(!is_object($settings->timeline1[$i])) {
					continue;
				}
				$timeline1 = $settings->timeline1[$i];
			?>
			<li>
				<!--date-->
				<div class="bb_tmtime">
					<span><?php echo $timeline1->day; ?>/<?php echo $timeline1->month; ?>/<?php echo $timeline1->year; ?></span> 
				</div>
				<!--/.date-->

				<!--icon-->
				<div class="bb_tmicon">
					<i class="<?php echo $timeline1->icon; ?>"></i>
				</div>
				<!--/.icon-->

				<!--Timline-Content-->
				<div class="bb_tmlabel">

					<!--Timline-Title-->
					<h2><?php echo $timeline1->timeline_title; ?></h2>
					<!--/.Timline-Title-->

					<!--Timline-description-->
					<p><?php echo $timeline1->timeline_editor; ?></p>
					<!--/.Timline-description-->

				</div>
				<!--/.Timline-Content-->
			</li>
			<?php endfor; ?>
		</ul>
	</div>
<?php
}
?>
<!--/.Left-->

<!--Right-->
<?php
if ( $settings->timeline2 == "right" ) {	 
?>
timeline 2
<?php
}
?>	
<!--/.Right-->


<!--Right-->
<?php
if ( $settings->timeline3 == "both" ) {	 
?>
timeline 3
<?php
}
?>	
<!--/.Right-->