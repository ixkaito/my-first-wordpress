<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="page-header<?php echo has_nav_menu( 'global' ) ? ' has-nav-menu' : ''; ?>">

		<div class="panel-site-title">
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
			<p class="site-subtitle"><?php bloginfo( 'description' ); ?></p>
		</div>

		<?php if ( has_nav_menu( 'global' ) ) : ?>

			<?php wp_nav_menu( array(
				'theme_location'  => 'global',
				'container'       => 'nav',
				'container_class' => 'global-nav',
				'menu_id'         => 'global-menu',
			) ); ?>

		<?php endif; ?>

	</header>
