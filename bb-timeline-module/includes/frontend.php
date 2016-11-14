<!--heading_title-->
<<?php echo $settings->main_tag; ?> class="bb_timline_heading">
	<?php echo $settings->heading_title; ?>
</<?php echo $settings->main_tag; ?>>
<!--/.heading_title-->

<!--sub_heading_title-->
<<?php echo $settings->sub_tag; ?> class="bb_timline_sub_heading">
	<?php echo $settings->sub_heading_title; ?>
</<?php echo $settings->sub_tag; ?>>
<!--/.sub_heading_title-->

<?php
if ( $settings->timeline_layout == "style1" ) {
?>
<h1>style1</h1>
<?php
}
if ( $settings->timeline_layout == "style2" ) {	 
?>
<h1>style2</h1>
<?php
}
?>	