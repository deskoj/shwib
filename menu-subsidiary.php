<?php
/**
 * Subsidiary Menu Template
 *
 * Displays the Subsidiary Menu if it has active menu items.
 *
 */

if ( has_nav_menu( 'subsidiary' ) ) : ?>
	<?php do_atomic( 'before_menu_subsidiary' ); // prototype_before_menu_primary ?>
	
		<?php do_atomic( 'open_menu_subsidiary' ); // prototype_open_menu_primary ?>

		<?php wp_nav_menu( array( 'theme_location' => 'subsidiary', 'container' => false, 'menu_class' => 'nav', 'menu_id' => 'menu-subsidiary-items', 'fallback_cb' => '' ) ); ?>

		<?php do_atomic( 'close_menu_subsidiary' ); // prototype_close_menu_primary ?>
    
    <?php do_atomic( 'after_menu_subsidiary' ); // prototype_after_menu_primary ?>
<?php endif; ?>