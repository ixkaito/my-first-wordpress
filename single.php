<?php get_header(); ?>

<div class="hero eyecatch">
	<img src="http://placehold.it/1200x630">
</div>
<div class="content-area has-side-col">
	<div class="main-column">
		<div class="box-generic">

			<?php while ( have_posts() ) : the_post(); ?>

				<h1 class="box-heading box-heading-article"><?php the_title(); ?></h1>
				<div class="box-content">
					<article class="entry">
						<?php the_content(); ?>
					</article>
					<div class="meta-data">
						<time class="meta meta-entry-date">2016.11.12</time>
						<p class="meta meta-author">著者名</p>
						<p class="meta meta-cat">カテゴリ名</p>
						<p class="meta meta-tag">タグ, タグ, タグ, タグ</p>
					</div>
					<div class="related-posts">
						<h2>関連する記事</h2>
						<ul class="archive">
							<li class="item-archive">
								<div class="time-and-thumb-archive">
									<time class="pub-date" datetime="2011-12-03">Sep 8, 2016</time>
									<p class="thumb thumb-archive"><a href="single.html"><img src="http://placehold.it/190x130"></a></p>
								</div>
								<div class="data-archive">
									<p class="list-categories-archive"><a href="archive.html">カテゴリ名</a></p>
									<h2 class="title-archive"><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></h2>
									<p class="list-tags-archive"><a href="archive.html">タグ</a>, <a href="archive.html">タグ</a>, <a href="archive.html">タグ</a>, <a href="archive.html">タグ</a></p>
								</div>
							</li>
							<li class="item-archive">
								<div class="time-and-thumb-archive">
									<time class="pub-date" datetime="2011-12-03">Sep 8, 2016</time>
									<p class="thumb thumb-archive"><a href="single.html"><img src="http://placehold.it/190x130"></a></p>
								</div>
								<div class="data-archive">
									<p class="list-categories-archive"><a href="archive.html">カテゴリ名</a></p>
									<h2 class="title-archive"><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></h2>
									<p class="list-tags-archive"><a href="archive.html">タグ</a>, <a href="archive.html">タグ</a>, <a href="archive.html">タグ</a>, <a href="archive.html">タグ</a></p>
								</div>
							</li>
						</ul>
					</div>
				</div>

			<?php endwhile; ?>

		</div>
		<div class="box-generic">
			<div class="box-content box-comment-display">
				<h2>コメントとトラックバック</h2>
				<ul class="comment-list">

					<li class="item-comment comment depth-1 parent">
						<div class="time-and-thumb-comment">
							<time class="pub-date" datetime="2011-12-03">Sep 8, 2016</time>
							<p class="thumb thumb-comment"><img src="http://placehold.it/130x130"></p>
						</div>
						<div class="data-comment">
							<div class="comment-author">WordPressコメントの投稿者</div>
							<div class="comment-body">
								<p>こんにちは、これはコメントです。</p>
							</div>
							<div class="reply"><a href="#">返信</a></div>
						</div>
						<ul class="children">
							<li class="item-comment comment depth-1 parent">
								<div class="time-and-thumb-comment">
									<time class="pub-date" datetime="2011-12-03">Sep 8, 2016</time>
									<p class="thumb thumb-comment"><img src="http://placehold.it/130x130"></p>
								</div>
								<div class="data-comment">
									<div class="comment-author">WordPressコメントの投稿者</div>
									<div class="comment-body">
										<p>こんにちは、これはコメントです。<br />
										コメントの承認、編集、削除を始めるにはダッシュボードの「コメント画面」にアクセスしてください。<br />
										コメントのアバターは「Gravatar」から取得されます。</p>
									</div>
									<div class="reply"><a href="#">返信</a></div>
								</div>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
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

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer();
