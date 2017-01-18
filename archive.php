<?php get_header(); ?>

<div class="page-title">
	<h1><?php the_archive_title(); ?></h1>
</div>
<div class="content-area has-side-col">
	<div class="main-column">
		<div class="content-box">
			<h2 class="box-heading"><?php the_archive_title(); ?></h2>
			<div class="box-content">

				<?php if ( have_posts() ) : ?>

					<ul class="archive">

						<?php while ( have_posts() ) : ?>

							<?php the_post(); ?>

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

					</ul>

				<?php endif; ?>

			</div>
		</div>

		<?php the_posts_pagination( array(
			'mid_size' => 5,
			'prev_text' => '<img class="arrow" src="' . get_theme_file_uri( '/images/arrow-left.png' ) . '" srcset="' . get_theme_file_uri( '/images/arrow-left@2x.png' ) . ' 2x" alt="">',
			'next_text' => '<img class="arrow" src="' . get_theme_file_uri( '/images/arrow-right.png' ) . '" srcset="' . get_theme_file_uri( '/images/arrow-right@2x.png' ) . ' 2x" alt="">',
		) ); ?>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer();
