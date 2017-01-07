<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="page-header">

		<div class="panel-site-title">
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
			<p class="site-subtitle"><?php bloginfo( 'description' ); ?></p>
		</div>

		<div class="header-area">

			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<nav class="global-nav">
					<ul>
						<li class="item-global-nav"><a href="portfolio.html">ポートフォリオ<span class="item-global-nav-en">Photographs</span></a></li>
						<li class="item-global-nav"><a href="profile.html">プロフィール<span class="item-global-nav-en">Profile</span></a></li>
						<li class="item-global-nav"><a href="home.html">ブログ<span class="item-global-nav-en">Blog</span></a></li>
						<li class="item-global-nav"><a href="contact.html">お問い合わせ<span class="item-global-nav-en">Contact</span></a></li>
					</ul>
				</nav>
			<?php endif; ?>

		</div>

	</header>
