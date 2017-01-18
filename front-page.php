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

					<?php if ( get_the_ID() === (int) get_option( 'page_for_posts' ) ) :

						$recent_posts = new WP_Query( array(
							'post_status'   => 'publish',
							'no_found_rows' => true,
						) ); ?>

						<?php if ( $recent_posts->have_posts() ) : ?>

							<?php while ( $recent_posts->have_posts() ) :
								$recent_posts->the_post(); ?>

								<li class="item-archive<?php echo get_the_post_thumbnail() ? ' has-post-thumbnail' : ''; ?>">
									<div class="time-and-thumb-archive">
										<time class="pub-date" datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
										<?php if ( get_the_post_thumbnail() ) : ?>
											<p class="thumb thumb-archive">
												<?php the_post_thumbnail( 'myfirstwp-featured-image' ); ?>
											</p>
										<?php endif; ?>
									</div>
									<div class="data-archive">
										<p class="list-categories-archive"><?php the_category( ', ' ); ?></p>
										<h2 class="title-archive"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<p class="list-tags-archive"><?php the_tags(); ?></p>
									</div>
								</li>

							<?php endwhile; ?>

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

					<?php else : ?>
						<?php the_content(); ?>
					<?php endif; ?>
				</div>

				<?php wp_reset_postdata(); ?>

			<?php endif; ?>

		<?php endfor; ?>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer();
