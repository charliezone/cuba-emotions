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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cuba_emotions' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Nekyn3nh4-}Uo7.raZCA{jT1;|+LY}z3O?4!;,35k2Q]Z#aqV#xN&|#.3CQ>E[^&' );
define( 'SECURE_AUTH_KEY',  'GaENZe*V` (=ZQv^WeZn[=opn{hh:ZwzM-R4339FdtSrA?ng]-RzuH4?-IWLnK@%' );
define( 'LOGGED_IN_KEY',    'Zg,5P?-+t3Ufb9#rGH0eesBUd*,wL5-+zo4g#&NY)htme[-V98#%smr8~HWQ-+S?' );
define( 'NONCE_KEY',        'b!Dgc6^BbLRt1)zIAX#)9K@$#CPKq}nU#$#Q,Y<2E/`Z|5ia:80p9k^ca8q$~2bS' );
define( 'AUTH_SALT',        'g5MKFPahB)(V`Yi6&H7p(G:aIgSv{U}9w>}VNiA~8:}SowzjJ!VuA41]Ay2<dob8' );
define( 'SECURE_AUTH_SALT', 'RjiLpQg/:`qsOcm{>#5n}LF?]@)^O(^GG8^`]s!yJskZR]=rOvdd8r)ZS,7ptl(>' );
define( 'LOGGED_IN_SALT',   'V;*PZaz[49h,9$H=ZND<lO/$|b|0tS/+i[ p]43p!p+f$w~R(-A`e+ X4$ET &]c' );
define( 'NONCE_SALT',       '3C@4|M|o^HLav:k9%gHlwILB0TgcQenzUEs MU-K*QYX2m{S{;?/y|mx1b|K9=#d' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
