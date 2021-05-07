<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bitnami_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bn_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bc770e9274' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '47c89303bc7bb71676bec227018200c3307445c10a2ad08d0f31f260da9d97fc');
define('SECURE_AUTH_KEY', 'a8a7aa1f0f9cde714e816a7bbd3574f07a560814d616d78f7a0d802683d67300');
define('LOGGED_IN_KEY', 'b2f1a0e5d35a767ab8a4a014c6aba8b68a1aefc96947f43c9d60010862ef05e1');
define('NONCE_KEY', '74529ab5970ac560009ea80290b1d25a6d31bf9dec5a1a9000026b4c1a429035');
define('AUTH_SALT', '9fda1a5f6451423912d39a599610a957d183aa26b7ed14b6f645d7f01122c8bd');
define('SECURE_AUTH_SALT', '8497ab38736d70f4a8fa68338a888b96adbc2e4b64d8b9da3814de60e27f4c10');
define('LOGGED_IN_SALT', '751a41b7e09def46ad08506c99542ba37001c57fcf37140e123eaacfe2cdf422');
define('NONCE_SALT', 'e145575e396db3361f79bae3c90b81fe9f3e0043fd6688ae0158db69b8719e1f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors',0);
/* That's all, stop editing! Happy publishing. */

define('FS_METHOD', 'direct');

/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

if ( defined( 'WP_CLI' ) ) {
    $_SERVER['HTTP_HOST'] = 'localhost';
}

//define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
//define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_SITEURL', 'http://' . 'bdiverse.games'. '/');
define('WP_HOME', 'http://' .'bdiverse.games'. '/');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');


//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/

if ( !defined( 'WP_CLI' ) ) {
    // remove x-pingback HTTP header
    add_filter('wp_headers', function($headers) {
        unset($headers['X-Pingback']);
        return $headers;
    });
    // disable pingbacks
    add_filter( 'xmlrpc_methods', function( $methods ) {
            unset( $methods['pingback.ping'] );
            return $methods;
    });
    add_filter( 'auto_update_translation', '__return_false' );
}
