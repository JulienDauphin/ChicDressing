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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chicdressing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'l8j~[->ZsX3SM/d!]Ox[3wWt l:o%GvQ&=0UiK7 Sn^W0qaPrcP8IoYjFwFT-_s=' );
define( 'SECURE_AUTH_KEY',  'PxI~Qt8gLM8@SSuGqE<;@GA.)B7<7lB[;Jn@?P?+HXiKq)oBll+wstlZysM3eR,^' );
define( 'LOGGED_IN_KEY',    'SDpd!`dS[Xj7s2xQ/]h:`Y~$St5@m{uozci)j5sY]&NmmJ}9W!Di7ewh{`6K(7r(' );
define( 'NONCE_KEY',        'dtfU)YM|{QR(SC>AIwl8Lv|eafx|B4Cqp+U3RRp6C&MPqgvWUFOv<<4x,Eg:aWn{' );
define( 'AUTH_SALT',        '7Y)=(yr<m]C:}x5.t=B.8~/>z^1csAp{592,O>O?Y}`V-<s>#*R<&,`TdH22mjx7' );
define( 'SECURE_AUTH_SALT', '/__3fF^,CMGT8a!QiP-R6>2[tVB:KJ8hIs%q:~6d Hg=}o3$@0=rR3F>C5$YoHoX' );
define( 'LOGGED_IN_SALT',   '*(Wr<1{ky/@pw=A!u{*CT|}GS$Fqs)w3pj[/G4_.}R`NE$W^o+Yz RSjAco#9BJU' );
define( 'NONCE_SALT',       '_X}tsx[+;HLuu?dQE~F?|=b{ULXBiUjfj!tv$]D{BNOY_E$WQ(mcR;|dr6SzH.Tr' );

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
