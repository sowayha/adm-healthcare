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
define( 'DB_NAME', "adm" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define('AUTH_KEY', '1%h56Cn]Zo/8(2LJM!*H-@3~a29u~EcKg&UMre#B3o:l#X4BHp#1@j0yhNZ3|3/9');
define('SECURE_AUTH_KEY', '8tu2w~CJ-;kj55Bs03-T1_+3YP@2[M59Hh8218vZz#a5S4VjYt5m8D*%9sB2F9e5');
define('LOGGED_IN_KEY', '|Bz9_Augx&H1T0IutD3hLwL*Sqm[4_F5Y8k7vP4K1Q_Zh6++*o6q94Sy3i/2fP#7');
define('NONCE_KEY', '-ZYu8+lZo9%D0kAnNF9%Y0-c9p@*7#M2%-po+E5u0-7*8Q14wq7[qiIRiwQ792uS');
define('AUTH_SALT', '6J-;UhAHwp@v7;F5&3IS)U7@:Hu4yZp4I(9&QAc8w:s5Rr]Wv(_:;D93]R]WnqB_');
define('SECURE_AUTH_SALT', 'qE8Afjo;&%8N22qD1r5Q2a98]L/6W0;vltGFRIQuq5ukY7-f7~@_p2939lj~rF6E');
define('LOGGED_IN_SALT', '47Uq*B#_*5e7t_@:rN9]8dza*%52t9MRQhZM%cVj:;QK#8[a4~W876|EiG*4hk8)');
define('NONCE_SALT', 'GnuE~t2p@:;O0s5A!53C5s]i](d7J25hjx20YsX[*Pxs7Sr]-/s:Z(q0|8:t*mc3');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'O7lOZMfkv_';


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
