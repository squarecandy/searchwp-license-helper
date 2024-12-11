<?php
/**
 * Square Candy SearchWP License Helper
 *
 * @package         SquareCandy\SearchWPLicenseHelper
 * @since           0.1.0
 * @author          Square Candy
 * @license         GNU-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:     Square Candy SearchWP License Helper
 * Plugin URI:      https://github.com/squarecandy/searchwp-license-helper
 * Description:     Use the SearchWP license without installing on every site manually.
 * Version:         0.1.0
 * Author:          Peter Wise, Square Candy Design
 * Author URI:      https://squarecandy.com
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Programmatically define SearchWP license key.
// see https://searchwp.com/documentation/hooks/searchwp-license-key/
if ( defined( 'SEARCHWP_LICENSE_KEY' ) ) :
	add_filter(
		'searchwp\license\key',
		function( $key ) {
			return SEARCHWP_LICENSE_KEY;
		}
	);
endif;
