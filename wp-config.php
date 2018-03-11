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
define('DB_NAME', 'fluent');

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
define('AUTH_KEY',         'xr~zPWFU4G]y,BcR/$iSZqBb YY/S<IDi+jB[U=bkGz}xVo[uPbvQN 1`80:6_n)');
define('SECURE_AUTH_KEY',  '[d_(_)m4C%(=fi]Ec7TTF$,Js}t)EC>ocg;9ea~5ba^[1v`JR<=LI^4YJ]HXPn4p');
define('LOGGED_IN_KEY',    'EZ62:]j3o09V$fwJ-y1]c^tWz+B<!=]3m@;Nd^(Z]3P?~H[1nSdatl85wK9ll{N!');
define('NONCE_KEY',        '8Q34r[|aE0VTXt0,Ev?&*4_F&x(b[M!e1Ej?4h=6HN;@vd7;Wo.|tD4(_fkuy+>v');
define('AUTH_SALT',        'X;OHb9h(E?x(iAK3hvN9b~Q=2f>J&8$CN>d8&jH2ZlQFUDRo@$Y|P.[ J10Um6D(');
define('SECURE_AUTH_SALT', 'DbU?^eg[93l^1*$Bv<,Jdnpl(N1ff5@w(&61U#zR^As`u0QiL%zBf(hdi@zjXr=@');
define('LOGGED_IN_SALT',   'f2;(kmMlvhy:6yfvdaa;uxZC%qq5eT:cFmS5>U5Ef.7r3leAJ6BuY+~e#D~/||,C');
define('NONCE_SALT',       '@LNf8ai?[2R/|cd=j9:^:}Kr.{>l&u1XDrg57Eq[pl3f N(c^2XV-7ut.YoPrhdf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_db';

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
