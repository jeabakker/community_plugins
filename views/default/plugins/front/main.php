<?php
/**
 * Front page main area - welcome and search
 */
?>
<div id="plugins_front_welcome">
	<h2><?php echo elgg_echo('plugins:front:welcome'); ?>.</h2>
	<?php echo elgg_view('plugins/download_count'); ?>
	<h3><?php echo elgg_echo('plugins:front:intro:title'); ?></h3>
	<div id="plugins_welcome_text">
		<?php echo autop(elgg_echo('plugins:front:intro:text')); ?>
	</div>
<?php
if (elgg_is_logged_in()) {
	$url = elgg_get_site_url() . 'plugins/new/project/' . elgg_get_logged_in_user_entity()->username;
?>
	<a class="upload_plugin" href="<?php echo $url; ?>"><?php echo elgg_echo('plugins:upload:new'); ?></a>
<?php
}
?>
</div>
