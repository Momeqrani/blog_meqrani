<?php
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'miqrani.com' );

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
define( 'AUTH_KEY',         '+ZErD8UqPZ<qOT|z92Yo4z&`G@+qmyQ@u2LJalG/6j@(G[FCJ.}9qpCn.?DA!DwW' );
define( 'SECURE_AUTH_KEY',  'Qci(Y-%:Q.ob)|{`5O@r]xI|Vgvc^M1HOx5qy:*[u%-I}Q.|LO+#j.;fmWm<@HZN' );
define( 'LOGGED_IN_KEY',    'g52VqhHsUA p;gelW^JaG>uSsb*%s!YmX!x.9h8p{h$84xzI+&2&a=K8yYz^0d(|' );
define( 'NONCE_KEY',        '&mBqukihhpQuaRMOyKp!AoP<[1Yg]Kvg*y>)!tZi^bH+vMYiXMZ![-NKGLIBfs+a' );
define( 'AUTH_SALT',        'Gt;62o{1 zJez>vKm RY(RN-5uAG>Qu2;>)9EEUWbh*Xb)uM#Z%WvpYYI<<N>Tio' );
define( 'SECURE_AUTH_SALT', '+4. 7:34L;lU5#r0Zv`^x~dF%l[<II^0ZJO0&Md;>kb6sX4p6adC|Qo}k5Z}@|{$' );
define( 'LOGGED_IN_SALT',   '_tN$g6n6U!*LE)1<+iu*.ckbj4nZ^adcN6MtXUqzS&F1+Bppi~Xc$c$,Iq3h}dv=' );
define( 'NONCE_SALT',       'ZDy&1/$to9W_Ezkt]XJP?d#:^p!R%+7 W+!)Vfa1V3oUY8iJ.KH]Hp$|Qp o=>Il' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
