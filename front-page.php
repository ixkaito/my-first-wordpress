<?php get_header(); ?>

<div class="hero">
</div>
<div class="content-area has-side-col">
	<div class="main-column">

		<?php for ( $i = 1; $i <= 5; $i++ ) : ?>

			<?php if ( get_theme_mod( 'panel_' . $i ) ) :

				$post = get_post( get_theme_mod( 'panel_' . $i ) );
				setup_postdata( $post );
				set_query_var( 'panel', $i ); ?>

				<h2 class="box-heading"><?php the_title(); ?></h2>

				<div class="box-content">
					<?php the_content(); ?>
				</div>

				<?php wp_reset_postdata(); ?>

			<?php endif; ?>

		<?php endfor; ?>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer();
