<?php get_header(); ?>

<div class="hero">
</div>
<div class="content-area has-side-col">
	<div class="main-column">

		<?php for ( $i = 1; $i <= 5; $i++ ) :

			if ( is_a( $partial, 'WP_Customize_Partial' ) ) {
				$id = str_replace( 'panel_', '', $partial->id );
			}

			$post = get_post( get_theme_mod( 'panel_' . $id ) );
			setup_postdata( $post );
			set_query_var( 'panel', $id ); ?>

			<h2 class="box-heading"><?php the_title(); ?></h2>

			<div class="box-content">
				<?php the_content(); ?>
			</div>

			<?php wp_reset_postdata();

		endfor; ?>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer();
