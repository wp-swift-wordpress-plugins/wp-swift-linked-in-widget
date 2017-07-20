<?php
$widget_id = "widget_" . $args["widget_id"];
$url = '#';
$button_text = 'View Profile';
if( get_field('name', $widget_id) ) {
    $name = get_field('name', $widget_id);
}
if( get_field('title', $widget_id) ) {
    $title = get_field('title', $widget_id);
}
if( get_field('message', $widget_id) ) {
    $message = get_field('message', $widget_id);
}
if( get_field('url', $widget_id) ) {
    $url = get_field('url', $widget_id);
}
if( get_field('image', $widget_id) ) {
    $image = get_field('image', $widget_id);
    $style = ' style="background-image: url('.$image['sizes']['medium_large'].');"';
}
?>
<div class="wp-swift-linked-in-widget">

	<div class="wrapper">
		<div class="wrapper-top"<?php echo $style; ?>>
			<div class="overlay">

				<?php if (isset($name)): ?>
					<h5><?php echo $name ?></h5>
				<?php endif ?>

				<?php if (isset($title)): ?>
					<h6><?php echo $title ?></h6>
				<?php endif ?>


				<?php if (isset($message)): ?>
					<p><?php echo $message ?></p>
				<?php endif ?>

				<div class="buttons">
					<a href="<?php echo $url ?>" class="button"><?php echo $button_text ?></a>
				</div>

			</div>
		</div>
		<div class="wrapper-bottom">
			
			<img class="logo" src="<?php echo plugin_dir_url(dirname(__FILE__)); ?>img/linkedin-logo-white.svg" alt="Linked In">
		</div>
	</div>


</div><!-- @end .wp-swift-linked-in-widget -->