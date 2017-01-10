<?php get_header(); ?>

<?php if ( is_home() && ! is_front_page() ) : ?>
	<div class="page-title">
		<h1><?php single_post_title(); ?></h1>
	</div>
<?php else : ?>
	<div class="hero"></div>
<?php endif; ?>

<div class="content-area has-side-col">
	<div class="main-column">
		<div class="content-box">

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<h2 class="box-heading"><?php single_post_title(); ?></h2>
			<?php else : ?>
				<h2 class="box-heading"><?php _e( 'Posts', 'firstwp' ); ?></h2>
			<?php endif; ?>

			<div class="box-content">

				<?php if ( have_posts() ) : ?>

					<ul class="archive">

						<?php while ( have_posts() ) : the_post(); ?>

							<li class="item-archive">
								<div class="time-and-thumb-archive">
									<time class="pub-date" datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
									<p class="thumb thumb-archive"><img src="http://placehold.it/190x130"></p>
								</div>
								<div class="data-archive">
									<p class="list-categories-archive"><?php the_category( ', ' ); ?></p>
									<h2 class="title-archive"><?php the_title(); ?></h2>
									<p class="list-tags-archive"><?php the_tags(); ?></p>
								</div>
							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>
		</div>
		<div class="wp-pagenavi">
			<a href="#" class="previouspostslink" rel="prev "><img class="arrow" src="images/arrow-left.png" srcset="images/arrow-left@2x.png 2x" alt=""></a>
			<a class="page larger" href="#">1</a>
			<a class="page larger" href="#">2</a>
			<a class="page larger" href="#">3</a>
			<a class="page larger" href="#">4</a>
			<a class="page larger" href="#">5</a>
			<span class="extend">...</span>
			<a class="page larger" href="#">10</a>
			<a class="page larger" href="#">20</a>
			<a class="page larger" href="#">30</a>
			<a href="#" class="nextpostlink" rel="next "><img class="arrow" src="images/arrow-right.png" srcset="images/arrow-right@2x.png 2x" alt=""></a>
		</div>
	</div>

	<div class="side-column">
		<nav>
			<div class="side-list category-nav">
				<div class="sidebar-widget">
					<h2 class="box-heading box-heading-side-bar">カテゴリ一覧</h2>
					<div class="box-content">
						<ul>
							<li class="cat-item"><a href="#">カテゴリ1</a></li>
							<li class="cat-item"><a href="#">カテゴリ2</a></li>
							<li class="cat-item"><a href="#">カテゴリ3</a></li>
							<li class="cat-item"><a href="#">カテゴリ4</a></li>
							<li class="cat-item"><a href="#">カテゴリ5</a></li>
						</ul>
					</div>
				</div>
			<div class="side-list monthly-nav">
				<div class="sidebar-widget">
					<h2 class="box-heading box-heading-side-bar">月別アーカイブ</h2>
					<div class="box-content">
						<ul>
							<li><a href="#">2016年12月</a></li>
							<li><a href="#">2016年11月</a></li>
							<li><a href="#">2016年10月</a></li>
							<li><a href="#">2016年9月</a></li>
							<li><a href="#">2016年8月</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<aside>
			<div class="social-widgets">
				<div class="sidebar-widget">
					<h2 class="box-heading box-heading-side-bar">Facebook</h2>
					<div class="box-content">
						widget
					</div>
				</div>
				<div class="sidebar-widget">
					<h2 class="box-heading box-heading-side-bar">Twitter</h2>
					<div class="box-content">
						widget
					</div>
				</div>
			</div>
		</aside>
	</div>
</div>

<?php get_footer();
