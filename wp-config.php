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
define( 'DB_NAME', 'sd_shopping' );

/** MySQL database username */
define( 'DB_USER', 'sd_shopper' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Tanner4051@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'ssh2');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`r<N}J^K%:<QY:NU<WFV,rSSIhDfGV]d,1=VrtpXf(4kw*tkBXtgRz*.tpN{@Nz.' );
define( 'SECURE_AUTH_KEY',  'p?kx6J|?vPi3bOq8D..edm7s;<M98J6uCC&kRrFkVTVIX@G}$wi[sTp_#WY:MWBk' );
define( 'LOGGED_IN_KEY',    'vF $j _E +.;.kxA:7!2}gtjP7fg<.4i);_H$KU :FteJD4xTgf7qio!mtg /n6!' );
define( 'NONCE_KEY',        'iCH^<RTX>j@t&1W;#`;=#.zJS`7~unkga|+1Vjs(uHNhTZ.w2a MzABoz]16M%Zu' );
define( 'AUTH_SALT',        '5(LzbYCR[-Uvd%f^6xpfl1!;whK<DQ;oXU$&k Zr>R)1!LwZ:Zo3YL[*lK5!7!V6' );
define( 'SECURE_AUTH_SALT', 'cn@j6gY<-[-WvUEK%L}aaJ<<._wSXX-][)MYi90divBaPua5.&W=J{-?:<+lbVl2' );
define( 'LOGGED_IN_SALT',   '.7fwOBFcUO6,BrZ?BBT%- ,ZWzS%OL2lnnKmh|#YB`n>1}Q3$;`3uQ}hxmVK+BMm' );
define( 'NONCE_SALT',       'PZ4eN`6f(Xcx)W7lBtTJ~ja;e(>UEdoxA_QF,[@%;AVJ^(&FCe^.llcVChGgR$,O' );

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

