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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task13' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '7X5ME87->u OJlw]WKML:FB|$0<L2!a?_bHd7D.5;S?QFd:heREi`&:4`B_46rfQ' );
define( 'SECURE_AUTH_KEY',  'wd:co?D|@I)w@SiH|}|,FLwGCCqV|5/>8C{%_O62qy_p>Q]NcSZdxw.,T~46B90D' );
define( 'LOGGED_IN_KEY',    '~%>^o:r6k7u[#v`fYLc/^;S5f08 /O3zNm|@_IcCAkkK>kl/>ObcRs$z|VuC@wG8' );
define( 'NONCE_KEY',        'Sk,,-,ilgQ,ff3LFqF88J9:N[K-7URx#BW*!Jv<XK0lc8P|;V 7Ug2fVJ/ pzpk2' );
define( 'AUTH_SALT',        'uoYEn^;n7@!Ryh .[!tx*2G%96s. D3DOx(JRm482Y />N0 C(t@Gsnc]Wez PJj' );
define( 'SECURE_AUTH_SALT', '+3BZqj5Awp09l]!O({,g:RKJ1*oJ^Qfppb3DTRJ8IC/Z<e;Y-5g_p:u;d;k:9v7S' );
define( 'LOGGED_IN_SALT',   'De=?,KX#Nh,2cpXm}wYAWDZzs79fOhTp:&2mPoMyoQx_3-f*c.nhYA5>tl,<R2Hz' );
define( 'NONCE_SALT',       'pO1<}8wILY{ig>f<[v`TD cyvffq=ndQ6(k`?X0nqyrnN[yq<.o+.7:1cW^(g]+w' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
