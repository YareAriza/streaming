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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'W0rdPress$2023' );

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
define( 'AUTH_KEY',         '06vk&ib0V($PXzYZ>*ms6v;.lRb8s,#&%B,yY_zeL)0!oMK!eAb!61Z<HDQG}C+V' );
define( 'SECURE_AUTH_KEY',  '@FJYRYHj63RHOTRm/ zky:vtKfHO(8SaA Zou5)cLuQ)hB{j)3=}Y6*CQxnsR-sU' );
define( 'LOGGED_IN_KEY',    'WT2($liO}>En!gs9&#,uVA.0]R_ IP@C/y>wi!()R3UBuImp={wdS2wf3~` 1s,g' );
define( 'NONCE_KEY',        '_L:CvTp< ET;[3EPTw>F~Y 1GM83Fs@TvS],yoXu?gDSE}0F=$U=pF>FGhp0Mzje' );
define( 'AUTH_SALT',        '~IN3s*bz)wG.fNyWrUHWCB!bu|L/OHOUX+gP,~0F[SkER!%o%bztci+/Z}{7=Z*/' );
define( 'SECURE_AUTH_SALT', '6ZHOD=4bK2Gz{:j#Mo0I,@YGFiRvE.[x-?3dK|M<!_TPG^<L-{2Z|s+~TSjH_RHX' );
define( 'LOGGED_IN_SALT',   'H/QHjf&9epk{6T3WC|cvtTu &bZCm3lbECq$|G:|%$@cJ~ScLm&i@Vga-6,:Hf<k' );
define( 'NONCE_SALT',       'u6Sf_2ENunuhu_E$);^uH>~0?UG,#>}CDJvW$-]Na8S_!%w nRa,.iHP.]I yY+y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
