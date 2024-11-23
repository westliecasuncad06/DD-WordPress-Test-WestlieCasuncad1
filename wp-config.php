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
define( 'DB_NAME', 'DD-WordPress-Test-WestlieCasuncad1' );

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
define( 'AUTH_KEY',         'NO`,7tipzgtqc- TNnia2^(v{x=2$K5= IKMpa[Ky3czl^0d;)FZ%6CeJ`9nWRG{' );
define( 'SECURE_AUTH_KEY',  'yl!h)]%I1Xt,;W(GwWdU>Rrr-5h9dfs!F&&pJyA fafAVet(!/8|@ZRnn79rd+AD' );
define( 'LOGGED_IN_KEY',    '[b=C{To/~L^?-*&zJahMgOe9z>.In#49CBX`x{2gdp|YHj%b,{bf^`wWuY8Uhg!$' );
define( 'NONCE_KEY',        'SH1rfk72`V&nUz&r$bxsMDqTnu1#.{Iimga`}8`5fr$7HO2#qZS)LD,](V<k`!?T' );
define( 'AUTH_SALT',        '7J*@Q=+z:W*p}/n)l8_>(rxI=&U2?^&lEiEKw<O&r8Uiu!,*.|MMGzv,_7k[Z_4O' );
define( 'SECURE_AUTH_SALT', 'C(r7z?wsvB>x@tW)E=D&LC(`c*slgNp8|^^yPNhV]tgcFU|0<RW^mIfU1)J(GywJ' );
define( 'LOGGED_IN_SALT',   'HnLh]7q>.iAuXpM,3z_>dqin9r[ltA4E3:@C(q*drzaU`,Ih~p10S^|FgdeY.y()' );
define( 'NONCE_SALT',       'dE?Pf.+#HEx?M:a mEg^NR,xAc=n4J5#,0#%QGSgJ#9&HsY$$VJX.YK.|nZj!)92' );

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
