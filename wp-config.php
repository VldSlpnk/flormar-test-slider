<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flormartestslider_slipenkyi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.0' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8Md LD8e0R_[^04[C!$XJiH+X{y4p)x1?h8v#Z:,1NEYL0fr|*prM9&iU3wp:ba]' );
define( 'SECURE_AUTH_KEY',  'i!f.w*mc=/I~Rq<d${[`W?(+^GRd+k0/<5c,dDR{cE]St~9$oCZW`AY??8vkYHS!' );
define( 'LOGGED_IN_KEY',    ')B:Ox FC@&Uf1R**atmpbb?p`+BYC)sB!sVR#LgWMjR-B_<U8{j6(Zpji&jFgNlB' );
define( 'NONCE_KEY',        'Az!C1miXnb;j+qpo=Yd:ySVf-PUG6;97.j=8}n{s8|:cPBG3gx>2:>cOwwQ8+HLX' );
define( 'AUTH_SALT',        '>idxUO@W%L7(Y|k,$BB*!> ,u<rP.0Tdv`PoiS@B.>?vG_%tc6Gj)z/WY]`m3e$(' );
define( 'SECURE_AUTH_SALT', ';<j<A9Q9,H^IFn|g0tCB6@]9E^OE[/1sM 2]X@87?|}:{iKsfV(=2~gH@,P-C6/g' );
define( 'LOGGED_IN_SALT',   '/2A}70Y )z$[i5ZzAKGYYJtzyM3O,6+rOOU6-2<[9:}@@TQKw+i oMA:{H)EWwFo' );
define( 'NONCE_SALT',       'zRN<i2<004X.$@{5sv!?V_yURGMOUO?JrjSx*!*$ ~2I1_Y~`O<7$#g,svDr9>gH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('ALLOW_UNFILTERED_UPLOADS', true);
