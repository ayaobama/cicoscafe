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
define( 'DB_NAME', 'cicoscafes_db' );

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
define( 'AUTH_KEY',         'I %I4oAlCCA7CUjmUzkp8/>*W-=B_Yv4#^dOfH8th:OQd1 .f 93C3gSOQ5yXN,=' );
define( 'SECURE_AUTH_KEY',  'WzD &@$anLM(Y}bof!+q3K;oQY|P#,0naTh-L-7X#R*H[@<,,x0eIFqg1Hf[gu^7' );
define( 'LOGGED_IN_KEY',    'L (5]Vqi*#hi1(3YVP.?xq`Z{96x<l:iF` bpG9.q6 tI}4eZ@I=B`]4nP:1I,^q' );
define( 'NONCE_KEY',        '&O!jeB,n!}xF:x=0rcr~o[^oOwYg2B$ .$p=-{O@nEjSwqL%B>SYtXMSI6[f.([(' );
define( 'AUTH_SALT',        '%|EABKS #Lt]=?}4}:Zz^672hLwl5Rl8D 7N7E,qbCoUnd/Jt^1U@[R)XtsaRAgS' );
define( 'SECURE_AUTH_SALT', 'B(FO`ftroz/k(9/5DZ8$!` zn,mgQL/m0~9QSRE; mUZ%N?=iy6o].VHWK[!FKO/' );
define( 'LOGGED_IN_SALT',   '{,2uqql50`vk:YAjp{@+fF_tZg&8yH2*mo^F6pu1oJ*LU[din9GW-%1gH,^|=f0b' );
define( 'NONCE_SALT',       'b7,:6Y1EFcV9X1Tnye<4K$pM-3.vW/&RW+Vk=6Ww{KW83bZ6]2g+3WQ1&q|QOn?$' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
