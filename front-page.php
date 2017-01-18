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

					<?php

					$blog_posts_page_id = get_the_ID();

					if ( $blog_posts_page_id === (int) get_option( 'page_for_posts' ) ) :

						$recent_posts = new WP_Query( array(
							'posts_per_page'      => 5,
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
							'no_found_rows'       => true,
						) );
					?>

						<?php if ( $recent_posts->have_posts() ) : ?>

							<ul class="archive">

								<?php while ( $recent_posts->have_posts() ) : ?>

									<?php $recent_posts->the_post(); ?>

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

							</ul>

							<div class="nav-to-archives">
								<a href="<?php the_permalink( $blog_posts_page_id ); ?>"><?php _e( 'Continue reading', 'myfirstwp' ); ?><img class="arrow" src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/arrow-right.png" srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/images/arrow-right@2x.png 2x" alt=""></a>
							</div>

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
