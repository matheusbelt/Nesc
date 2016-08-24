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
define('DB_NAME', 'nesc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'X2#,E8x3XyANEi*b)#SHg=C,U2=9cDt*k@RNG~L6c<Q_Hggfj,iPRBEi1jc47WbZ');
define('SECURE_AUTH_KEY',  '&7cCBd{pa<H.i,}Zc^A)8n?_1[; NL7,%*IwkA,%jlb $XFq/B+~4dWcUNc;|b}#');
define('LOGGED_IN_KEY',    '8!Exf@rUEnj3pl`, h{Q}sG%ky0=,jh<|Ou-7IXB.!H=L4+4D|95x=FV+Sj{<J(=');
define('NONCE_KEY',        'lYA)Ro@y3ebw!r!Rxxr,fm),eg_oc)<[Gh9%ZI9[cv{H>Kqm7L/oQfd.!u5rXR;t');
define('AUTH_SALT',        'o L[8CP#XkAgXh14yJST71!zo3f`?8h,wb27Qy,MDGsbAjt+Gj=LxQ{cQ[lFubWi');
define('SECURE_AUTH_SALT', '<.}?&tG3QOC5JMit.0M{>K7D.J_>)~Ou*?G)QpW<,K/,:h=w=gm7DVl_PovhRQe/');
define('LOGGED_IN_SALT',   '`Krx#5ZONYp&+iC;5t8#%6M=F/EjQsOmKzLG,Y<~>d)7}x2Aw}iT*vg.e_cR2Pt%');
define('NONCE_SALT',       '6TK)/~5!Z@t2ZbvY0{,YzyyWqLb7)au6EE>M/#mp,LpM+ag15]p7G7mqAd(roAY`');

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

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
