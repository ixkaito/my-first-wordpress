<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="page-title">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="content-area content-area-profile">
		<div class="main-column">
			<div class="box-content radius-tl">
				<article>
					<div class="text-body">
						<?php the_content(); ?>
					</div>
				</article>
			</div>
		</div>
	</div>

<?php endwhile; ?>

<?php get_footer();
