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
define( 'DB_NAME', 'bhaidb' );

/** Database username */
define( 'DB_USER', 'bhai' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define('AUTH_KEY',         'qe]LVT?iI-y2cATS)8ed)}G 0A]-iMaUY|;Yb&>2E?H@&zLPb*DTm[?qXvBu56&g');
define('SECURE_AUTH_KEY',  'l80J0350YH;E8&jk70gH0nH6*UCaaRr;%W90!aV .~Osje}$j7mKhzaG$0C*-_KQ');
define('LOGGED_IN_KEY',    '9#MkZu* mLM?aZ~ 6i*VTum{PRmmj(+9|jtiXd0:k2!#?Fqs~C15G+S]G-gX-|wF');
define('NONCE_KEY',        'D~}qY-IAUD:xvfd7>T{MGUH&^G|P_31_4sbhvJ0>:ktV.._I]tBlZ^ix7YtYLS+j');
define('AUTH_SALT',        'NIKX^y0z~+O6t/XOt,JXT9@F?||TZtNi@y/)%=%H~ukjOSKn+Fr5~:C/;%=-lQ}M');
define('SECURE_AUTH_SALT', '`!w55J3!hs2!9|NnKdKUbu{{tn+/0+)GK{#WJ:?|4w3Dl[=b|GwA;2)C}01=7N3c');
define('LOGGED_IN_SALT',   '4ZPfyK$wELrJ|_(H6PQb4-hpWfv|bju<MO4;;A3{ygaNcuKTP/#j>AJ&9<79#,qA');
define('NONCE_SALT',       '-9#?3~yreFDp!rck.-AaeyE}Jg+n;fui3c>p5l2NNG5ha]$N<]V|C70Hw{G~?<,-');

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
