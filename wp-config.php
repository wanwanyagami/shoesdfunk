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
define( 'DB_NAME', 'sample' );

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
define( 'AUTH_KEY',         ':y@#6~QzF$)]].BMCStDayb%<yzZ9B;nl<nE<BU ?,Wf}6Wc.{w&HXrQMD6euld^' );
define( 'SECURE_AUTH_KEY',  'Ecg?1(]h8}6*5a;[@&} PW4~2Wze L{abtHSLP r*X89Z_!S8W{h|0Tr1DBFcO2y' );
define( 'LOGGED_IN_KEY',    '(l);*-YRy.Z,tb;~y3wwe%7yE3nmJugq[]l/%`4fNa;*?<`<PwS+WHb>PlcW1k.:' );
define( 'NONCE_KEY',        'sqv_tb)nZXBH:bqf`jy-E~bVo??R*>1me%!@pvi6joA]GS7u|+g0w<pGE?q$mJKm' );
define( 'AUTH_SALT',        '_CsI^&AS$w_@1WmujE3ZLKuIKM/dV<ohdaq9Bg,P}fts2e@)UtSu~c4S)6!Ih[??' );
define( 'SECURE_AUTH_SALT', 'GRE;;73wYN>KvTQRcrsS~LKvJN%U(L]G,bzWCv>LQ-_/f_S@|OZ%/*.>0k]I:6O3' );
define( 'LOGGED_IN_SALT',   'ak~Y&$m^$i%.!-[T$F!7rz,={l~3}@?X4ol!)13qzI?3Qf1NVKy .T1z?WQZeg7x' );
define( 'NONCE_SALT',       'Ou3xti=&HyK,On+~]C4c{ys[$_1B4{F5NTQLZDCg1~sfYzab?n~OIA-PxC~&9Yai' );

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
