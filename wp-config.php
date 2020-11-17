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
define( 'DB_NAME', 'starboard_asia' );

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
define( 'AUTH_KEY',         ' _iO*zu/ 8Cn7F4I-jW1(sP=o&[C4JBvFc31=@4JWzc,(F)8B,/qhdr[:d1_tL,f' );
define( 'SECURE_AUTH_KEY',  'GyieCF/7@Ot(2e:]}w`}=T.@hIq<+lT<vtvW(#&s7vvgW%jg.&}3QWE13-QZ2kR ' );
define( 'LOGGED_IN_KEY',    'dHZ+d2$7e[0s}?}|AnjWq-8s+6dT@#PA=dQvg()jRLA~mwwdGQEq=$=U5Iw(KARo' );
define( 'NONCE_KEY',        '}n8&Ek`Vg?T4vVc&QAGAaYqO.1`e|f|JIwk)H Hy8An)v.k6YJ=ybtM-QCu+-i!?' );
define( 'AUTH_SALT',        'URB9((tv-JT.f*Vp99dG2=BkW!{Mu^CmRYy,RX1S_d*TwG z,D,vrlM8*La O(ZA' );
define( 'SECURE_AUTH_SALT', 'cY:=Kuh7)Rnn}}It0(>Bf=02^EllS#^S_A[CgEh)q/EG}=:sHD+{wn(%NO=5iR%,' );
define( 'LOGGED_IN_SALT',   '2<`dYO*qlJL@sBf;m&HJ,7Rg|!H3|kv,i-_Y0q[xr9LoRuOaUicY:IHeyhdM!Dhx' );
define( 'NONCE_SALT',       '&grmfy#;_#^W_vpJ_`Qkp!$>XIwMXviW6&HNX Datx/RX vXR(*f*-_,Ubj5!,83' );

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
