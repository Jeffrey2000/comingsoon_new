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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'barelyhu_WPNFA' );

/** MySQL database username */
define( 'DB_USER', 'barelyhu_WPNFA' );

/** MySQL database password */
define( 'DB_PASSWORD', 'uY5oxN1XCfupbX0M5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'YS1.R4!_iE-S$>nRfT?c@JkJEx-Zq~*VhmueibV:JfTn+O1RNS0AGa4Vj~.oC!Wl' );
define( 'SECURE_AUTH_KEY',   '_$#ffkY%/d/?EOdPj-s:[rt~uE>0:&HY#K)qmzQ]N_uJMPSDAsiqi#K$G`RO;`H|' );
define( 'LOGGED_IN_KEY',     'Z]qgeOUAo+8UC-3w0V,}U^wxTy4UO9qV^[B,5pKLQhh7e5IAY+2>5bbxoVEJ #,9' );
define( 'NONCE_KEY',         'Y^$z^}ie]g]XLA~>=+u?$Nj*Bu~>h_lnxs.@L:Mb&c.rY/U*5{.;p?G!F4I_}C)2' );
define( 'AUTH_SALT',         'd,bqFjc3;b_fOpdkuV`I/~(}Yh=f,Xgul{r~u6ZMD:QtBehXk<iPj4qkWe=O;t`:' );
define( 'SECURE_AUTH_SALT',  'AzUL3GRBrN9D`,c<.>9S)mA8[/khCtL1di8!rkId>5,Sv*&%#PMIv=W8O%Sd=kl8' );
define( 'LOGGED_IN_SALT',    '!0@jm8[J.dbS]:M/fi-;(Apsqsu`Q0eS,)8U%WM`n%ks+1OA1]pq8g_gpI|B-WZ,' );
define( 'NONCE_SALT',        '{vp9^;GC1h+pW,TV=F?s4%|D`pp8cqc_s-n085C<oS}.Ax60LzXi*trB#%h?f7|-' );
define( 'WP_CACHE_KEY_SALT', 'A.`V>eW6sTP[4>Q~mB)G{ g_3k=vaE@Dg4-4F=XDV+vr9m*?rLL~N]iq@;p(M)}k' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'staging__NFA_';




/* That's all, stop editing! Happy blogging. */
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
