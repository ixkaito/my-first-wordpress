<?php get_header(); ?>

<div class="hero">
</div>
<div class="content-area has-side-col">
	<div class="main-column">

		<?php for ( $i = 1; $i <= 5; $i++ ) : ?>

			<?php echo $i; ?>

		<?php endfor; ?>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer();
