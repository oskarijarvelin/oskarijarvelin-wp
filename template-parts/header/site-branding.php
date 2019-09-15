<div class="site-branding">

	<?php if ( has_custom_logo() ) : ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>
	<?php $blog_info = get_bloginfo( 'name' ); ?>
	<?php if ( ! empty( $blog_info ) ) : ?>
		<?php if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	$description = get_bloginfo( 'description', 'display' );
	if ( $description || is_customize_preview() ) :
		?>
			<p class="site-description">
				<?php echo $description; ?>
			</p>
	<?php endif; ?>
	<?php if ( has_nav_menu( 'paavalikko' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Päävalikko', 'starter2019' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'paavalikko',
					'menu_class'     => 'paavalikko',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
	<?php if ( has_nav_menu( 'ylavalikko' ) ) : ?>
		<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Ylävalikko', 'starter2019' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'ylavalikko',
					'menu_class'     => 'ylavalikko',
				)
			);
			?>
		</nav>
	<?php endif; ?>
</div>
