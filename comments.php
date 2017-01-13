<?php
if ( post_password_required() ) {
	return;
}
?>

<?php if ( have_comments() ) : ?>
	<div class="box-generic">
		<div class="box-content box-comment-display">
			<h2><?php _e( 'Comments' ); ?></h2>
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
			<h2>コメントをどうぞ</h2>
			<p>メールアドレスが公開されることはありません。</p>
			<form action="#" class="comment-form">
				<p class="comment-notes">

				</p>
			</form>
		</div>
	</div>