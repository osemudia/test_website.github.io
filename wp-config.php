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
define( 'DB_NAME', 'test_website' );

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
define( 'AUTH_KEY',         'rOm;C_WPvC#eIJP6t%?>< 3GD6?iL9&*d+;oX=#}~`[l;><:{550tcMx4y0#xJT+' );
define( 'SECURE_AUTH_KEY',  '!#pS7P0Cyu~}TB<&>BuM}SU5p]&/jsZ&~[Br@|Q:r#C(N)c4=-RnlYPVDz#1AtBm' );
define( 'LOGGED_IN_KEY',    '_x,kb)3oJQw@gzfjSS1jv(k(8wP(a0zI@3Wl*|xY.n@U$*eUX8rF3WrQoOfSFe3s' );
define( 'NONCE_KEY',        '84NN5lyUrocT{u,sD]ev~2,:C|$34>`3jiy49K&tKU|t{+bERidWsKvUgx OV|f1' );
define( 'AUTH_SALT',        'I}vykWE/qz9U$#Bh-nPR(kN0uj=PN_%jbyCG!wmW|D!0_OrkL$HGhtXFcrL(DryQ' );
define( 'SECURE_AUTH_SALT', '%bcJJIgBoJh=y3PRU}ftd8wg&49:??``pDx,Zb7ttqu=3!SsNI[~3;i:{d=oNvey' );
define( 'LOGGED_IN_SALT',   '_i|`;q}<reT``#u37d*op{z%SCfq0gBmxZOupu+W4s;YEVAdaGkd8So,bWz*}R&$' );
define( 'NONCE_SALT',       ')V>v)v~}s.`V3Fz-#t65;7W@Ehv5+_eFtiwCLStjyPwl8Y!P~R{0V*,@dns42fuy' );

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
