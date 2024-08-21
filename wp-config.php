<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', 'C:\xampp\htdocs\LAMINADERA\wp-content\plugins\tenweb-speed-optimizer/' );
# END WP Cache by 10Web
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LAMINADERA' );

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
define( 'AUTH_KEY',         'XeE5Z3T[;VbnU({3`O`TF}cZs/|hSjn_Gua*L]oxB5HVV`}J5f!4z!uR::T(PdZ=' );
define( 'SECURE_AUTH_KEY',  'CIli tvDO1-dpw3**&!^lYB,6<Y/r9<@,#?4C{^xu-E5-P+P>i?wj/o_U(kL?Zx3' );
define( 'LOGGED_IN_KEY',    '}uEU_&[(VT=DwrP28V1acoP-9uQFFc*Qa8-dpx.&bv+mJu(.i|VLlnn`pk.j^@X~' );
define( 'NONCE_KEY',        '( E7`MoSdK$li1eG,N!o6;OWUV^@aAWeL#4}qNp4(S)#~p?a7@vDD)N6QiG:aEeJ' );
define( 'AUTH_SALT',        '1nuliBD$HkG|z%38!(XR1WDG/(3]p.ZfIR?8pJS##fZ<rOG8V-La@yWd3~o/AUV@' );
define( 'SECURE_AUTH_SALT', 'p+[[pj92s+h g[&f75a%uKp8}8J|%8In7+DLw6fz?EZPl~%A)-O!DaWEx8#hQ(e7' );
define( 'LOGGED_IN_SALT',   '_/H(J#602/Qi2gAHGOfL@k(>?Ht>p7gzfvR^_q)C/<.sEl3*?c>Eg~[8!Zz&]o?F' );
define( 'NONCE_SALT',       'h[k%M{Jlo6HB`voz+rV)1X+<R81Qr;!cz&)F1?3oR2>y [RGh-!E~AgMZ`|D(&CJ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
