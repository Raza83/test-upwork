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
define( 'DB_NAME', 'easycoupons' );

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
define( 'AUTH_KEY',         'mSpvPlwLRPb_AhQ ryCbXYhDjoxh:|b415]yKVUb|v#S@HUv8LEy>WC7Ws7jF?qF' );
define( 'SECURE_AUTH_KEY',  '{vL*,S]Ne+R9riwmsMjmD_i3oF97;J<VopAB)oR0qzVW7xofeU,e^l)H{Bt@!uA[' );
define( 'LOGGED_IN_KEY',    '&&ts^<br2;RG)R1nmY%pLlTs(/7+^9P|-{:*msG=U0S*ANtJo}iOJ<`*=W`89_1&' );
define( 'NONCE_KEY',        'eNP[Y#nBL}{nm;o_e^yNPcRxf4K!<B-9!Vr<n)0R, A_$+YZ/%%ZAKo36fQSmX*z' );
define( 'AUTH_SALT',        ']G;i/O>{Y?w3T#X/^JJ@q(ZZIH:9tRl3lh#?qjx0qyenPfS+w{m*>L2zx3A602af' );
define( 'SECURE_AUTH_SALT', 'X5&;b.)^P)TS(?rOx6&3iPq!Yt>X3+3.%Q*UH3Y=q8h+41ko:z;~YB0=<|Yfi#[4' );
define( 'LOGGED_IN_SALT',   'Le[P/Di)I_b1I!@u-}OrJaXIv/ah%-x3hB5$K^(1KU$Oi24I^NN+F(Wr=s9VMkZM' );
define( 'NONCE_SALT',       'd^3*n_$=r2z^+#W[~#vC|8=Km8JIVcuobu L%Xt X,PO%RqT8r3_&u^*neO6zcT}' );

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
