<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'dbwebsite' );

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
define( 'AUTH_KEY',         ',KE^~_6!$k+v3$H#]0h4d::WQH[dMRV7M H1HLpBB`)5P:Dy@/Ng0pK~C{t/RU*[' );
define( 'SECURE_AUTH_KEY',  '8x8%&k $JiFOK&Y|,mp+%XE({@kZPXMwY|1G!QP)-$>>^d^}@v:4cD7N6DiF#I@c' );
define( 'LOGGED_IN_KEY',    'oLuy,Z0lG#cBTW;.mo NSD9EE@XnOx[=gJP(idysP_Uj,-.(EB,^?W0~1PWP@NlJ' );
define( 'NONCE_KEY',        'V7<oOd1}H 3G*y%l-Oe3~>jaKI!wv0SK1svQFV_{x`xT1VvM#XJn{6dK[RL-g<2X' );
define( 'AUTH_SALT',        '7>p`J#(*za> 4QTEL<|b)|;$Bri$hK[L?!,HB~A?XBF6 b;7v576{7cOj!Ak,D28' );
define( 'SECURE_AUTH_SALT', 'mLI@)tyUg[)~wr%V<+0jW+ryU{f[s.T#fAmpRgnk7O-KS>a&F[pYGBsqu.Ksh`m4' );
define( 'LOGGED_IN_SALT',   'iV^UC4f+$X@JQD&E7!|(Mu~$FV,uoS<Wa!G5jmeax1%y:3[U2Viy.M~oMOF *;h;' );
define( 'NONCE_SALT',       'V,TBmOFpM9pmdaBnR,}|b,C4Up~T6sRwfAbTT-0MQ.;8W-Z+f^I9y|oUK%^g36%n' );

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
