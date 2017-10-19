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
define('DB_NAME', '{{ wp_db_name }}');

/** MySQL database username */
define('DB_USER', '{{ wp_db_user }}');

/** MySQL database password */
define('DB_PASSWORD', '{{ wp_db_password }}');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wp-config.php &QPY97-B~wsffpXML9;!WG-8#+>>Mszqn#7Y(@ZB;i|T)4#|wU~>dZ-#d)sNC');
define('SECURE_AUTH_KEY',  'gE+I<_!1P)M>|cRr NZ;]FHL5qhqznFoH$Kbt+VYM*.*oq?LM<B2i:[dSUi=1q]#');
define('LOGGED_IN_KEY',    'Ws8,_C!?0[2#IEw-Spo% 0}cx)pZ.EUfseE!F+84Ci}h@VD+Tp]xop._2Ptf;+U/');
define('NONCE_KEY',        'Cri8J7K)(~Ux3h$m29aM/X2yw(8~_pE>) Z9zO+ E~M9Tm),gB<k@@SK=8WUa{U1');
define('AUTH_SALT',        'X5G5@+g>UJRyx&g^*W3(Y1]4?{nm>Q ` J7!7CH19D&$bB^EqKUhSG`U|&J[Q7rj');
define('SECURE_AUTH_SALT', '(`{(wg%N/e%fkA|BC`8lwwa4x,A}V,O~kE*E[& xM#s?/O:5IRrI&W+`D^;/Kk+K');
define('LOGGED_IN_SALT',   '-h-}s_Bdeq]DnK]?0]9]pRr+1vh.!qb+GS|3(q8a2kiCuz(+Yl09lMXl5AKImwIi');
define('NONCE_SALT',       '[4w1}?Rqfr6h3-ZyA+Tgs,,-cwt%/em4iWd2NO-/-rnf%w3r;(`|Eu4$lI__u-S(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
define('WP_ALLOW_REPAIR', true);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

