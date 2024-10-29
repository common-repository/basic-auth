<?php 

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Class Basic_Auth_Settings_Hooks
 */
class Basic_Auth_Admin_Bar {

	/**
	 * @var Basic_Auth_Plugin
	 */
	private $plugin;

	/**
	 * Basic_Auth_Admin_Bar constructor.
	 *
	 * @param Basic_Auth_Plugin $plugin
	 */
 	public function __construct( Basic_Auth_Plugin $plugin ) {
 		$this->plugin = $plugin;
 	}

	/**
	 *
	 */
 	public function hooks() {
	    add_action( 'admin_bar_menu', array( $this, 'admin_bar_menu_action' ), 100 );
 	}

	/**
	 * @param WP_Admin_Bar $admin_bar
	 */
 	public function admin_bar_menu_action( $admin_bar ) {
 		if ( $this->plugin->authenticated_custom ) {
		    $admin_bar->add_menu( array(
			    'id'    => 'basic-auth',
			    'title' => __( 'BA: Custom', 'basic-auth' ),
		    ));
		    $admin_bar->add_menu( array(
			    'id'        => 'basic-auth-user',
			    'parent'    => 'basic-auth',
			    'title' => sprintf( __( 'Custom User: %s', 'basic-auth' ), $_SERVER['PHP_AUTH_USER'] ),
		    ));
	    }
	    else if ( $this->plugin->authenticated_wordpress_user ) {
		    $admin_bar->add_menu( array(
			    'id'    => 'basic-auth',
			    'title' => __( 'BA: WP User', 'basic-auth' ),
		    ));
		    $admin_bar->add_menu( array(
			    'id'        => 'basic-auth-user',
			    'parent'    => 'basic-auth',
			    'title' => sprintf( __( 'Wordpress User: %s', 'basic-auth' ), $_SERVER['PHP_AUTH_USER'] ),
		    ));
	    }
    }

}

