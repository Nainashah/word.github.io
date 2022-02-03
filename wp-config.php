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
define( 'DB_NAME', 'word3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Em6uV.!ow3Y|g&p;YGq*nn/Ol4E0gNClM35j|>4bcQ/nJUPH{ZQ~;c@5pd@d~#$e' );
define( 'SECURE_AUTH_KEY',  'Ps/<27z6a8C?rWZ]e0y]:_sIT[m%X&_GlVH;*o|f//6Y+CIzh#!riu21#MCXze,r' );
define( 'LOGGED_IN_KEY',    '2^4Mt:s5EJeZq;4L%^aV>!p(d07d?pd/1cjX-sd)ljk|5TLooU^jf>|.+(9iPM2A' );
define( 'NONCE_KEY',        'l!%9O ^NC3Y/X~=P,>p DT(gPVeQ4^bC&7NIVK2{E<lpu<1RH|tz(f Ae3? >v] ' );
define( 'AUTH_SALT',        'Y_PPaxEceu$)$/bIo*tT?brcmXVf$~z<)4UTEkn[oB%Ae2f-/)m?vH~LZV^f i@8' );
define( 'SECURE_AUTH_SALT', 'z%nDsl;) fh[fXhGc-fix{ddr<O:7Ay@x%IW)fcS)-=Pwv^[KTVf~t^#-/!klPrE' );
define( 'LOGGED_IN_SALT',   'h6AZ7g7_?8E]NEZ;: M:.oQ/B1!A[=Ys7bNbOZvi[-JI?8W)/3kq0~9GF}g36 >h' );
define( 'NONCE_SALT',       'Ua_HLDM9?v*1r@^>,q:@r W68})>&;Qgw6+P9urpYCoaPjv@zSZ)d[Q7yJi@9D3<' );

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
