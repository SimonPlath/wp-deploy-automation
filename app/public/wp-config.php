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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
 
 if (file_exists(dirname(__FILE__) . '/local.php')) {
	 //local database settings
	 
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
 } else {
	 
	//live database settings 
	define( 'DB_NAME', 'id8785243_wp_dfa133d478b7b2a3aab48a164f1251ce' );
	define( 'DB_USER', 'id8785243_wp_dfa133d478b7b2a3aab48a164f1251ce' );
	define( 'DB_PASSWORD', 'mytestsite' );
	define( 'DB_HOST', 'localhost' );
 }




/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XW)wc_P QP&9>-Zs+;?]#G@gW-LX)`09^P`]Z*}|0R-K+!T+6hAS+| VyE}<#hHA');
define('SECURE_AUTH_KEY',  ')qS!$`nMaMe4&[mzP-xaH_i4R845r$*4)}lj-O5L<R.2pkB@k`w5~`bNgD5 .x3=');
define('LOGGED_IN_KEY',    '^tHscl?]46Kh0y/?  o@/cX8v>WWQ5^NTEti?o;wwJ8Q[z#wCN@v/[0#M]LLffkY');
define('NONCE_KEY',        'f95,1J+{|_>!BQqT+xgW(A++eP7&+C5RgX%Pb+?-h$4O^O}BC|`M|z77~i;li!!/');
define('AUTH_SALT',        '&AE)7o$I|o^7E|0sp9>OBA/{BGB&5J`k95t|N=5LXa_tb)aK-m(qld?[LP8ulF8@');
define('SECURE_AUTH_SALT', 'pwS!DWm1;#Pu;!Z?h6(|Cx{V+ZV^av>l-c@|PL_TT&JFCr*j3P;q/X_ h{8<O@dZ');
define('LOGGED_IN_SALT',   'a{E*Cl4.JVaToC+vCD=~|ouSk$5LB[|;WqsS|`?-IFP8eSr$}cO mbVH,j,!{%~^');
define('NONCE_SALT',       'j0XCFb^t3q>VACXD/k-R^:-g+K5?fGtS0/g6ag)l .+>-y oZ-V s?U_AH|:wl`V');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


 define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST'] );

/* That's all, stop editing! Happy blogging. */

define( 'WP_MEMORY_LIMIT', '256M' );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
