<?php
if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<div class="side-column">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div>
