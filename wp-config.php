<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Y{X^Fm~Iwb[>p;C||@z(+C_Efp-Wgr#{xYsY=wDw-T7h=|Uq:*/m(s.)CE$+= *t' );
define( 'SECURE_AUTH_KEY',   ':8h=R 34.**{=J^Un3bJ242#2vSV(%{7[7 dB%c#k~tXYief$.z`N*oH?K^iK`yn' );
define( 'LOGGED_IN_KEY',     'IkzVfF.~W}nXt^Et3UvND<n>X3KB#e:hYF;Sh%nS(pS}[H,mIFrNCyQ?tDK$VQVZ' );
define( 'NONCE_KEY',         'etTi-pfY=9ywZgZDnf{W/$(/$g+kr10!26ou_+h`ZLsn%e*,;)#DgBY-zwg%qtWK' );
define( 'AUTH_SALT',         '$rO~?0vchf^T6s+K:MiP]aVpUSF}#D3rcj`;7+Y52HdQDWZ<7kjSx7<SL}WZrl+c' );
define( 'SECURE_AUTH_SALT',  'xlmFw@t$w4[m[vb?~g}AkkSt*;P9:u^>]>_%U4b`z=hlib5DJzWU1g~g]r{AkJ$;' );
define( 'LOGGED_IN_SALT',    ' HetM rk&e2k{lTWt%y/HsR3r+F:WbC[t]5>Zt:!UZX%tR%:tFfPKut<XaYK|F;!' );
define( 'NONCE_SALT',        '[DcY{jfxTl9-a4=y]D,q41}o6L[mp#JSzNoy7(723b$xk(i$GcD^8^S[`IDaPgoB' );
define( 'WP_CACHE_KEY_SALT', 'r}s9-,a!q7ad)s<dO}K,}%zggD8?R[0U^VpFg%L&;@40^e:0K!I9I^yM~CBynTIw' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
