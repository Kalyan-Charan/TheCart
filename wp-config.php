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
define( 'DB_NAME', 'TheCart' );

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
define( 'AUTH_KEY',         'Bu]-Xq&TD+g{P8t @o6</2<&uED,{me9 (f-~^eB<D-c:%H:3{nVl~5kX!,XJKZ]' );
define( 'SECURE_AUTH_KEY',  'tL2W(?/1S***H|HGpV&u;lXbcIfxR}Ke^N& QH3+v1p.dgb~15e6L$;ltRdPTC^P' );
define( 'LOGGED_IN_KEY',    'Lf<n1n4-6?%GR]/.Cz$ggUsBpyTQ:p=H-RID^Uz[yk7c$&Y3.T0(hNP:*bIHO26}' );
define( 'NONCE_KEY',        'gLKta$)rff=Ym`Iyh|yWrGJbT?Ah*Wub;p4p%DlC&c.$:V*ni6lO1LLWq8fOL|[:' );
define( 'AUTH_SALT',        '7e|We]SJHn!y370=d%imH<9&imu/MT+inJ*U{q1QGb-$mq$O aJLlV0/>m4A?B{6' );
define( 'SECURE_AUTH_SALT', 'wE|`qp5z/GK`wTScxBt3Wp((=JK4Yf!qpr?b7`O/9tf?c6^7v4{z$:d WSr7S~3T' );
define( 'LOGGED_IN_SALT',   '*95{(JH&)c.~D.:GyM>c|*<!ik.h6AdpG^0k:^>/:^?E#t^c&7cS0+lXaaIh,$&)' );
define( 'NONCE_SALT',       'vTM|&=cNcq_Q}(x^fGB&aTG ;q{T@S=xW.]nm e9hb2[R pom`{XSI7*0E,Nm*%~' );

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
