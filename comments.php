<?php
if ( post_password_required() ) {
	return;
}
?>

<?php if ( have_comments() ) : ?>
	<div class="box-generic">
		<div class="box-content box-comment-display">
			<h2><?php _e( 'Comments and Trackbacks', 'myfirstwp' ); ?></h2>
			<ul class="comment-list">
				<?php
					wp_list_comments( array(
						'avatar_size' => 130,
						'short_ping'  => true,
					) );
				?>
			</ul>
		</div>
	</div>

<?php endif; ?>

<div class="box-generic">
	<div class="box-content box-comment-input">
		<?php comment_form(); ?>
	</div>
</div>
