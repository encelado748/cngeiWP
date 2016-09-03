<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/logo.svg"><h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1></li>
		</ul>
	</div>
	<div class="top-bar-right show-for-large">
		<?php joints_top_nav(); ?>
	</div>
	<div class="top-bar-right float-right hide-for-large">
		<ul class="menu">
			<li><button class="responsive-menu-icon" type="button" data-toggle="off-canvas"></button></li>
			<!-- <li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li> -->
		</ul>
	</div>
</div>
<div class=header-button>
	<div class="description show-for-medium"><?php bloginfo('description'); ?></div>
	<?php joints_header_links(); ?>
</div>
