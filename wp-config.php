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
define( 'DB_NAME', 'wp_envlintertest' );

/** MySQL database username */
define( 'DB_USER', 'wp_envlintertest' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_envlintertest' );

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
define('AUTH_KEY',         '7gPl6PLt-x?clsgyJLHL~j~h{v(Ooi1]§%zJBw)}^c0fQFe{yVd7Hns(,EuSH!§E');
define('SECURE_AUTH_KEY',  'S09 &h54^0;1S9fFAq!<I@tPdd1@jg(T@irZsPGmA4+f~TU@jH§9o_VU>a@Cc]?c');
define('LOGGED_IN_KEY',    'NI$[`TJVb6w6Fzn`5rw0e1XuThu^)E$/!>?H^VB2XD@;Z0BJjbBz h]l)V@a^@pD');
define('NONCE_KEY',        '-]4[h§_|;U-YG+;S[~!J(fV7WQ2m)`VZ)7[6T3<g6q?U_L5Cvc;eA[9pqS<;%.Ek');
define('AUTH_SALT',        '1,-:OrW4k)uArpn)}|kAw9Kgo//2A8e3t8Ht$@oc@dF%S,9G}!ZHsAKGY4myFZ@[');
define('SECURE_AUTH_SALT', '=>u]awHbR1F~A;Di+LD?V~YrGfU]$&YSakQ7~&G:J)aI]>LD0e0?zpbjTk[hh~<V');
define('LOGGED_IN_SALT',   '4/YLAof)+>gSB+E.~%79`§R0{)9G B.]gIhKGW=i=8E{QubTZcdQJLgXo%2BK.X=');
define('NONCE_SALT',       'yC4()6Wc1mm+D$/QA`RA@CW$.esms(d4YE?][h.2rqN_4JhI[y?hsHa}8onK;M%x');

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
