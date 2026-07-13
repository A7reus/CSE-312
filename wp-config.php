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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '@LJ10pJb->[I+/8Pcq[99tsu)mvY`xJQ*~&FifnWK)G>iRo^cBW7Ta9i{v^=Z^AK' );
define( 'SECURE_AUTH_KEY',  '0jGN=d.43(J~p!ZPCb4Rtqku!Lp(_MGj}J)_?+DnD7%/Pq#vrUslVUIzs4wlib@_' );
define( 'LOGGED_IN_KEY',    '] ZaAV`b]?nnIG@#I{,oFj8$Y0!>nVo9{@wj!?]=$o~n 8YK6Se 9~Jmi}7d|{oL' );
define( 'NONCE_KEY',        'n`>7UY7on]c5?2cvvc_`IYO)|3u+,y6>?>#7~R74 ;-)MDV-(np)vhhh>QVT|VHR' );
define( 'AUTH_SALT',        '.U60g`y374!?Lg8qDDM.1W}(]W&JG:E0&Yk /B&6%rlP{tU9lJdh8!y_;+Sr|8Lu' );
define( 'SECURE_AUTH_SALT', '^OQZusw%Rcne1=|6jIGLh#ED TSTp$>KP^R[.+7Qgt|^tySgKNp|W2Egd^MH;}6w' );
define( 'LOGGED_IN_SALT',   '*5H,>avO/0L):Oy!y%&g!MA.QelXZ-u)R}Iem.E3D@Qy=jXU+d;~M52PhmY#wtz,' );
define( 'NONCE_SALT',       'I>.NY.whUXhAw%rnog m0|`.ZI8WQ$q;nL_8}dj9(9wI66Ga?+SKuz6r>2A?#~Z:' );

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


@ini_set( 'upload_max_filesize', '512M' );
@ini_set( 'post_max_size', '512M' );
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
/* That's all, stop editing! Happy publishing. */
define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

