<?php
/**
 * Uninstall SEOPress
 *
 * @since 6.2
 *
 * @author Benjamin, inspired by Polylang
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) { // If uninstall not called from WordPress exit
	exit;
}

class SEOPRESS_Uninstall {

	/**
	 * Constructor: manages uninstall for multisite
	 *
	 * @since 6.2
	 */
	public function __construct() {
		global $wpdb;

		// Don't do anything except if the constant SEOPRESS_UNINSTALL is explicitely defined and true.
		if ( ! defined( 'SEOPRESS_UNINSTALL' ) || ! SEOPRESS_UNINSTALL ) {
			return;
		}

		// Check if it is a multisite uninstall - if so, run the uninstall function for each blog id
		if ( is_multisite() ) {
			foreach ( $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" ) as $blog_id ) {
				switch_to_blog( $blog_id );
				$this->uninstall();
			}
			restore_current_blog();
		}
		else {
			$this->uninstall();
		}
	}

	/**
	 * Delete all entries in the DB related to SEOPress Free AND PRO:
	 * Transients, post meta, options, custom tables
     *
	 * @since 6.2
	 */
	public function uninstall() {
		global $wpdb;

		do_action( 'seopress_uninstall' );

        // Delete post meta
        $wpdb->query( "DELETE FROM $wpdb->postmeta WHERE meta_key LIKE '_seopress_%'" );

        // Delete global settings
        $options = $wpdb->get_col( "SELECT option_name FROM $wpdb->options WHERE option_name LIKE 'seopress_%'" );
        array_map( 'delete_option', $options );

        // Delete widget options
        $options = $wpdb->get_col( "SELECT option_name FROM $wpdb->options WHERE option_name LIKE 'widget_seopress_%'" );
        array_map( 'delete_option', $options );

		// Delete transients
		delete_transient( '_seopress_sitemap_ids_video' );
		delete_transient( 'seopress_results_page_speed' );
		delete_transient( 'seopress_results_page_speed_desktop' );
		delete_transient( 'seopress_results_google_analytics' );
		delete_transient( 'seopress_results_matomo' );
		delete_transient( 'seopress_prevent_title_redirection_already_exist' );

        // Delete custom tables
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}seopress_significant_keywords");
	}
}

new SEOPRESS_Uninstall();